import React, { useState, useEffect } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import './CourseClass.css';
import './CourseClassResponsive.css';

export default function CourseClass({ courses }) {
   const navigate = useNavigate();
   const { courseId, classId } = useParams();
   const selectedCourse = courses.find(course => course.id === parseInt(courseId));

   if (!selectedCourse) {
      return <div>Curso no encontrado</div>;
   }

   const initialIndex = selectedCourse.classes.findIndex(cls => cls.id === parseInt(classId));
   const [currentIndex, setCurrentIndex] = useState(initialIndex);
   const [videoKey, setVideoKey] = useState(0);

   const scrollToTop = () => {
      window.scrollTo({
         top: 0,
         behavior: 'smooth'
      });
      if (isOpen === true) {
         setIsOpen(!isOpen);
      }
   };

   useEffect(() => {
      navigate(`/CourseClass/${courseId}/${selectedCourse.classes[currentIndex].id}`);
   }, [currentIndex, courseId, navigate, selectedCourse.classes]);

   const handleChangeClass = (index) => {
      setCurrentIndex(index);
      setVideoKey(prevKey => prevKey + 1);
      scrollToTop()
   };

   const handlePrevious = () => {
      setCurrentIndex(prevIndex => prevIndex > 0 ? prevIndex - 1 : prevIndex);
      setVideoKey(prevKey => prevKey + 1);
      navigate(`/CourseClass/${courseId}/${selectedCourse.classes[currentIndex - 1].id}`);
   };

   const handleNext = () => {
      setCurrentIndex(prevIndex => prevIndex < selectedCourse.classes.length - 1 ? prevIndex + 1 : prevIndex);
      setVideoKey(prevKey => prevKey + 1);
      navigate(`/CourseClass/${courseId}/${selectedCourse.classes[currentIndex + 1].id}`);
   };

   return (
      <div className="courseClass-main-container">
         <div className="class-list">
            <h2>Clases</h2>
            <ul>
               {selectedCourse.classes.map((cls, index) => (
                  <li key={cls.id} className={index === currentIndex ? 'active' : ''}>
                     <button
                        onClick={() => handleChangeClass(index)}
                        className={index === currentIndex ? 'selected-class-button' : 'class-button'}
                     >
                        <i id='play-icon' class="fa-solid fa-play"></i> <p className='title-class'><span className='title-bold'>Clase {cls.id}: </span><span>{cls.title}</span></p>
                     </button>
                  </li>
               ))}
            </ul>
         </div>
         <div className="courseClass-content">
            <h1>{selectedCourse.classes[currentIndex].title}</h1>
            <div className="courseClass-video-container">
               <video key={videoKey} onContextMenu={(e) => e.preventDefault()} controls controlsList="nodownload">
                  <source src={selectedCourse.classes[currentIndex].video} type="video/mp4" />
               </video>
            </div>

            <div className='buttons-class-container'>
               <button className='previous-class-button' onClick={handlePrevious}>Anterior</button>
               <button className='next-class-button' onClick={handleNext}>Siguiente</button>
            </div>
         </div>
      </div>
   );
}

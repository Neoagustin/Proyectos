import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import ClassItem from '../ClassItem/ClassItem';
import './CourseDetailResponsive.css'
import './CourseDetail.css'

export default function CourseDetail({ courses }) {
   const { id } = useParams();
   const [course, setCourse] = useState(null);

   useEffect(() => {
      // Busca el curso por ID
      const selectedCourse = courses.find(crse => crse.id === parseInt(id));
      setCourse(selectedCourse);

   }, [id, courses]);

   if (!course) {
      return <div>Curso no encontrado</div>;
   }

   return (
      <div className='courseDetail-directory'>
         <div className='courseDetail-banner-section'>
            <img src={course.img} alt={course.title} />
            <h1>{course.title}</h1>
         </div>
         <div className='courseDetail-container'>
            <section className='courseDetail-description-section'>
               <h2>Descripción</h2>
               <p>{course.description}</p>
            </section>
            <section className='courseDetail-introductoryVideo-section'>
               <h2>Video introductorio</h2>
               <video src={course.introductoryVideo} onContextMenu={(e) => e.preventDefault()} controls controlsList="nodownload"></video>
            </section>
            <section className='courseDetail-classes-section'>
               <div className='courseDetail-classes-container'>
                  <div className='courseDetail-classes-title'>
                     <h3>Clases</h3>
                  </div>
                  {course.classes.map(cls => (
                     <ClassItem
                        courseId={course.id}
                        classTitle={cls.title}
                        classId={cls.id}
                        key={cls.id}
                     />
                  ))}
               </div>
            </section>
         </div>
      </div>
   );
}

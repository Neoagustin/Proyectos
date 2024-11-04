import React from 'react';
import { Link } from 'react-router-dom';

export default function ClassItem({ courseId, classId, numClass, classTitle }) {

   const scrollToTop = () => {
      window.scrollTo({
         top: 0,
         behavior: "smooth"
      });
   };

   return (
      <Link to={`/CourseClass/${courseId}/${classId}`} className='class-container' onClick={scrollToTop}>
         <p className='title-class'><span className='title-bold'>Clase {classId}: </span><span>{classTitle}</span></p>
         <p className='start-title'>Comienza</p>
      </Link>
   );
}

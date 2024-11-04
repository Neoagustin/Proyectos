import React from 'react';
import CourseCard from './Components/CardCourse/CardCourse';
import './CoursesPage.css';
import './CoursesPageResponsive.css';

export default function CoursesPage({ courses }) {
   return (
      <div className='courses-directory-container'>
         <div className='courses-main-container'>
            <div className='search-course-container'>
               <input type="text" placeholder="Buscar cursos" />
            </div>
            <h2>Cursos</h2>
            <div className="course-list">
               {courses.map(course => (
                  <CourseCard key={course.id} course={course} />
               ))}
            </div>
         </div>
      </div>
   );
}

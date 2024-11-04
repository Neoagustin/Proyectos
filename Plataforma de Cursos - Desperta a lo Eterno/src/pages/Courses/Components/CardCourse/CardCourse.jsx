import React from 'react'
import { Link } from 'react-router-dom';

export default function CardCourse({ course }) {
   const { id, title, img, date, authorName, authorImg } = course;

   return (
      <Link to={`/curso/${id}`} className="course-link">
         <div className="course-card">
            <img className='course-card-img' src={img} alt={title} title={title} />
            <div className='courseCard-text-container'>
               <h3>{title}</h3>
               <p id='date-card-course'>{date}</p>
               <div className='author-container'>
                  <img src={authorImg} alt={authorName} title={authorName} />
                  <p>{authorName}</p>
               </div>
            </div>
         </div>
      </Link>
   );
}

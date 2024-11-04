import React from 'react';
import TestimonyVideo from './Components/Testimony-video/Testimony-video';
import './Testimonials.css';
import './TestimonialsResponsive.css';

export default function Testimonials() {
   const videoUrls = [
      'https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Videos%20Testimonio%2FTestimonio%20Principal%2FTestimonio.mp4?alt=media&token=5825cea8-9847-4cd1-8ac4-f50c245843d2',
      'https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Banner%20Video%2Fbanner-video-new.mp4?alt=media&token=be1ff45d-0112-4e79-add6-6f909305d330',
      'https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Banner%20Video%2Fbanner-video-new.mp4?alt=media&token=be1ff45d-0112-4e79-add6-6f909305d330',
      'https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Banner%20Video%2Fbanner-video-new.mp4?alt=media&token=be1ff45d-0112-4e79-add6-6f909305d330',
      'https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Banner%20Video%2Fbanner-video-new.mp4?alt=media&token=be1ff45d-0112-4e79-add6-6f909305d330',
      'https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Banner%20Video%2Fbanner-video-new.mp4?alt=media&token=be1ff45d-0112-4e79-add6-6f909305d330',
      'https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Banner%20Video%2Fbanner-video-new.mp4?alt=media&token=be1ff45d-0112-4e79-add6-6f909305d330'
   ];

   // Video principal
   const mainVideo = videoUrls.shift();

   return (
      <div className='testimonials'>
         <div className='title-testimonials-container'>
            <h2>TESTIMONIOS</h2>
         </div>
         <div className='testimonials-main-container'>
            <div className='main-testimony-container'>
               <p>
                  " Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo iste
                  dignissimos qui quidem veritatis? Corrupti provident similique quidem
                  unde corporis dolor, enim nam a ipsum dolores sit. Voluptatem, quod sequi? "
               </p>
               <div className='main-video-testimony-container'>
                  <div className='main-video-testimony'>
                     <video controls controlsList="nodownload">
                        <source src={mainVideo} type="video/mp4" />
                     </video>
                  </div>
               </div>
            </div>

            <hr id='hr-testimonials' />

            <h2 className='testimonials-title'>Otros testimonios</h2>
            <div className='testimonials-container'>
               {videoUrls.map((url, index) => (
                  <TestimonyVideo key={index} src={url} />
               ))}
            </div>
         </div>
      </div>
   );
}

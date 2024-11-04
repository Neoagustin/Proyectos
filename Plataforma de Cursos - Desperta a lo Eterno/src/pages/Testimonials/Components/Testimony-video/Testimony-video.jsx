import React from 'react';

export default function TestimonyVideo({ src }) {

   return (
      <div className='video-testimony-container'>
         <video controls controlsList="nodownload">
            <source src={src} type="video/mp4" />
         </video>
      </div>
   );
}

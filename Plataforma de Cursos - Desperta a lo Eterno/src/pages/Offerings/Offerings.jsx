import React from 'react';
import offeringImage from '../../assets/img/Ofrendas/ofrendas.jpeg';
import offeringImageMP from '../../assets/img/Ofrendas/ofrendas-MP.jpg'
import offeringImagePP from '../../assets/img/Ofrendas/ofrendas-PP.jpg'
import QR_MercadoPago from '../../assets/img/Ofrendas/QR-MP.jpeg'
import QR_Paypal from '../../assets/img/Ofrendas/QR-PayPal.jpeg'
import WesternUnionImg from '../../assets/img/Ofrendas/ofrendas-WesternUnion.png'
import './Offerings.css';

export default function Offerings() {
   return (
      <div className='offerings-main-container'>
         <div className='offerings-content'>
            <div className="offerings-text">
               <h1>Ofrendas</h1>
               <p>Buenas! Dios te bendiga, queremos contarte que podés ser parte de este ministerio y del avance del Reino de los Cielos mediante tus ofrendas.</p>
               <p>Las ofrendas están destinadas a sostener el ministerio financieramente, tanto para el crecimiento y desarrollo del mismo, como también para los viajes misioneros que se realicen.</p>
               <div className="image-container">
                  <img src={offeringImage} alt="Ofrendas" className="offerings-image" />
               </div>
               <div className='verse-offering'>
                  <p>2 Samuel 24:24
                     24 —Te lo agradezco —dijo David—, pero yo no puedo ofrecerle a Dios algo que no me haya costado nada. Así que yo te pagaré todo lo que me des.</p>
               </div>

               {/* SECCION DE MERCADO PAGO */}
               <p>Podés ofrendar a través de Mercado Pago. acá te dejamos el link:</p>
               <section className='offerings-section'>
                  <div className='offerings-image-MP-container'>
                     <img src={offeringImageMP} alt="Mercado Pago" className="offerings-image-MP" />
                  </div>
                  <a href="https://link.mercadopago.com.ar/ministerioprofetico" target="_blank" rel="noopener noreferrer">link.mercadopago.com.ar/ministerioprofetico</a>
                  <img src={QR_MercadoPago} alt="" className='offerings-image-MP' />
                  <p>CBU:</p>
                  <p id='CBU'>0000007900203802802494</p>
               </section>

               {/* SECCION DE PAYPAL */}
               <p>Si estás en el extranjero, podés enviar tu ofrenda a través de PayPal, en este enlace:</p>
               <section className='offerings-section'>
                  <div className='offerings-image-MP-container'>
                     <img src={offeringImagePP} alt="Mercado Pago" className="offerings-image-MP" />
                  </div>
                  <a href="https://www.paypal.me/Despertaraloeterno" target="_blank" rel="noopener noreferrer">paypal.me/Despertaraloeterno</a>
                  <img src={QR_Paypal} alt="" className='offerings-qrPaypal-img' />
               </section>

               <p>Tambien podés enviar tu ofrenda a través de Western Union, en este enlace:</p>
               <section id='wu-section' className='offerings-section'>
                  <div className='offerings-image-MP-container'>
                     <img src={WesternUnionImg} alt="Mercado Pago" className="offerings-image-MP" />
                  </div>
                  <p><span> Nombre: </span> Sebastián Ezequiel Ancona</p>
                  <p><span> Mail: </span> desperta.a.lo.eterno@gmail.com</p>
                  <p><span> DNI: </span> 38028024</p>
               </section>
            </div>
         </div>
      </div>
   );
}

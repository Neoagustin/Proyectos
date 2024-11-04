import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import AOS from 'aos';
import 'aos/dist/aos.css';
import visionImg from '../../../../assets/img/ia-vision.jpeg';
import valuesImg from '../../../../assets/img/ia-valores.jpeg';
import valuesImgMobile from '../../../../assets/img/ia-valores-mobile.jpg';
import './HomeSections.css';
import './HomeSectionsResponsive.css';

export default function HistorySection() {
   useEffect(() => {
      AOS.init({
         duration: 600,
         easing: 'ease-in-out',
         once: true,
      });
   }, []);

   const [isOpen, setIsOpen] = useState(false);

   const scrollToTop = () => {
      window.scrollTo({
         top: 0,
         behavior: 'smooth'
      });
      if (isOpen === true) {
         setIsOpen(!isOpen);
      }
   };

   const [showFullHistory, setShowFullHistory] = useState(false);

   const historyText = `Todo comienza en marzo de 2017, me encontraba orando en el cuarto de madrugada, y empiezo a sentir mucha electricidad en mi brazo izquierdo, era una electricidad con fuerza que no paraba, y escucho la voz del Espíritu Santo diciéndome: con esta mano vas a sanar enfermos, dar vista a ciegos, sordos van a oír, paralíticos andar y demonios salir fuera. Esto se repitió algunas noches. Un día orando con un hermano, sin contarle nada de esto a nadie, él toma mi brazo izquierdo, lo levanta y mientras mi brazo se llena de electricidad, me dice Dios dice que con esta mano vas a sanar enfermos, liberar endemoniados, dar vista a ciegos, Dios te da un llamado misionero.

   Pasado los años comencé a ver parte del cumplimiento de estas cosas en el ministerio de evangelismo.

   Comenzando la pandemia en 2020, entre en un tiempo de soledad con Dios (desierto), donde estaba solo Él y yo. En esa temporada Él comenzó a hablarme sobre un llamado Misionero y Profético muy fuerte, y sobre ir a Estados Unidos. Dios lo confirmo además nuevamente por medio de otras personas que no sabían nada.

   Comenzando a orar desde 2020 hasta 2022 con un amigo, cosas sobrenaturales ocurrían en su casa, y la gloria de Dios se manifestaba por horas, Dios le da la visión a mi amigo Guido Dalé de construir una casa de Oración, la que hoy se llama Habitat, de la cual hoy (2024) formo parte del ministerio.

   Paralelamente a esto, en pandemia, Dios me da una visión muy fuerte donde veo a Jesús volviendo con millares de ángeles y un reloj que marcaba las 12 de la noche (es decir la medianoche) y escucho como pocas veces en mi vida la voz tan fuerte y clara de Dios diciéndome DESPERTÁ A MI NOVIA, DESPERTÁ A MI NOVIA, DESPERTÁ A MI NOVIA, tres veces seguidas.

   Comencé a predicar no solo a los que me rodeaban, sino por redes sociales, haciéndose viral este mensaje del regreso de Jesús.

   Iniciado el año 2024 en medio de un ayuno de 2 días, Dios me habla con Hageo, donde dice ustedes se han engordado mientras mi casa está en ruinas. Ahí El Espíritu Santo con mucho amor me confronta y nace este ministerio para equipar y despertar a la Iglesia a los asuntos eternos.`;

   const toggleHistory = () => {
      setShowFullHistory(!showFullHistory);
   };

   const valuesList = [
      'Creemos en Jesucristo como Hijo de Dios y como Dios mismo.',
      'Creemos que Dios es Uno, Padre, Hijo y Espíritu Santo.',
      'Creemos en la Vida Eterna y resurrección de los muertos.',
      'Creemos en que Jesús vuelve pronto a Reinar.',
      'Creemos en El Cielo y en el infierno.',
      'Creemos que la Iglesia es una.',
      'Creemos que la salvación es por gracia, 100% mérito de Cristo Jesús y no de hombres.',
      'Creemos que la Biblia es inspirada por Dios y es Palabra de Dios.',
      'Buscamos el amor a Dios y a las personas sobre todas las cosas.',
      'Predicar el Evangelio a toda criatura.',
      'Vivir una vida sencilla amando a la gente, haciendo y deseando el bien a los demás, con un estilo de vida profundo de devoción a Dios.',
      'No negociamos la única verdad frente a tanto engaño; Jesucristo es el Único Dios verdadero.'
   ];

   const [showFullValues, setShowFullValues] = useState(false);

   const toggleValues = () => {
      setShowFullValues(!showFullValues);
   };

   return (
      <div id='home-sections-container' className='home-sections-container'>

         {/*Secciones del Home */}
         <section id='history' className='history-section section-home'>
            <div id='history-main-container' className='main-section-container'>
               <div className='history-text-container'>
                  <h2>HISTORIA</h2>
                  <p>
                     {showFullHistory ? historyText : `${historyText.slice(0, 600)}...`}
                  </p>
                  <div className='button-container'>
                     <button className='toggleHistory-btn' onClick={toggleHistory}>
                        {showFullHistory ? 'Ver menos' : 'Leer más'}
                     </button>
                  </div>
               </div>

               <div className='section-video-container'>
                  <h3 id='history-title'>¿Vas a adorar en medio del desierto?</h3>
                  <video controls controlsList="nodownload">
                     <source src="https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Videos%20Home%2FVideo%20Historia.mp4?alt=media&token=9fbade6f-b0b0-4d4e-9fef-5a51bb3995ee" type="video/mp4" />
                  </video>
               </div>
            </div>
         </section>
         <section id='section-legend' className='section-legend section-home' data-aos="fade-right" data-aos-offset="200">
            <p id='leyend'>" Pero hay alguien que viene después de mí, y que es más poderoso que yo. Él los bautizará con el Espíritu Santo y con fuego. ¡Yo ni siquiera merezco ser su esclavo! "</p>
            <p id='verse'>Mateo 3:11</p>
         </section>

         <section id='mission' className='section-mission section-home' data-aos="fade-right" data-aos-offset="200">
            <div className='main-section-container'>
               <div className='section-video-container'>
                  <video controls controlsList="nodownload">
                     <source src="https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Videos%20Home%2FVideo-MIsion.mp4?alt=media&token=49d55c51-63d1-46b6-86f2-c2463e6124c5" type="video/mp4" />
                  </video>
               </div>

               <div className='mission-text-container'>
                  <h2>MISIÓN</h2>
                  <ul>
                     <li>Entrenar a la Iglesia en madurez y humildad, para derribar la paredes de divisiones y prejuicios dentro del Cuerpo de Cristo.</li>
                     <li>Despertar a lo Eterno y Celestial</li>
                     <li>Avivar el Fuego de Dios en los corazones</li>
                     <li>Avivar el celo y el amor por Jesucristo y su Reino</li>
                     <li>Amar el Regreso de Jesus</li>
                     <li>Renovar la mente en una reforma sana, profetica y biblica a la mente de Cristo</li>
                     <li>LLevar a la Iglesia a un estilo de vida de oracion y intimidad con el Padre en el Lugar Secreto</li>
                     <li>Despertar a la Iglesia por medio de un avivamiento</li>
                  </ul>
               </div>
            </div>
         </section>

         <section id='vision' className='section-vision section-home' data-aos="fade-right" data-aos-offset="200">
            <div className='main-section-container'>
               <div className='vision-text-container'>
                  <h2>VISIÓN</h2>
                  <p>
                     Un avivamiento mundial, un despertar fuerte a las cosas eternas en la Iglesia.
                     Un derramamiento del Espíritu Santo cómo está profetizado en Joel 2.
                     El Cielo invadiendo la Tierra en todo lugar donde haya cristianos y lo sobrenatural invadiendo todo lugar para salvación de multitudes.
                     La Iglesia despierta amando a la segunda venida de Jesús.
                  </p>
               </div>
               <div className='vision-img-container'>
                  <img src={visionImg} />
               </div>
            </div>
         </section>

         <section id='values' className='section-values section-home'>
            <div className='main-section-container'>
               <div className='values-text-container'>
                  <h2>VALORES</h2>
                  <ul>
                     {valuesList.map((value, index) => (
                        <li key={index} style={{ display: showFullValues || index < 3 ? 'block' : 'none' }}>{value}</li>
                     ))}
                  </ul>
                  <div className='seeMore-btn-container'>
                     <button id='seeMore-btn-values' className='toggleHistory-btn' onClick={toggleValues}>
                        {showFullValues ? 'Ver menos' : 'Leer más'}
                     </button>
                  </div>
               </div>
               <div className='values-img-container'>
                  <img id='img-values' src={valuesImg} />
                  <img id='img-values-mobile' className='mobile' src={valuesImgMobile} alt="" />
               </div>
            </div>
         </section>

         <section id='testimony' className='section-values section-home' data-aos="fade-right" data-aos-offset="200">
            <div className='main-section-container'>
               <div className='testimony-text-container'>
                  <h2>TESTIMONIOS</h2>
                  <h3 id='testimony-title'>Experiencia con el paraiso</h3>
                  <video controls controlsList="nodownload">
                     <source src="https://firebasestorage.googleapis.com/v0/b/desperta-a-lo-eterno.appspot.com/o/Videos%20Home%2FTestimonio-Home.mp4?alt=media&token=bc330e1d-0b03-47e8-a925-0fc14133d5ae" type="video/mp4" />
                  </video>
                  <Link to="/Testimonios" onClick={scrollToTop}>Ver todos los testimonios</Link>
               </div>
            </div>
         </section>

         <div className='invitations-Container'>
            <p>INGRESÁ A NUESTROS CURSOS AHORA</p>
            <Link to="/Cursos" id='btn-cursos' onClick={scrollToTop}>Cursos</Link>
         </div>

         <div className='invitations-Container'>
            <p>PODÉS OFRENDAR</p>
            <Link to="/Ofrendas" id='btn-ofrendar' onClick={scrollToTop}>Ofrendar</Link>
         </div>
      </div>
   );
}

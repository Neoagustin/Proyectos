import React, { useState } from 'react';
import { Link, NavLink, Outlet } from 'react-router-dom';
import './Header.css';
import './HeaderResponsive.css';
import logo from '../../assets/img/logo.png';
import TikTok_icon from '../../assets/icons/TikTok.png'
import instagram_icon from '../../assets/icons/instagram.png'
import email_icon from '../../assets/icons/email.png'
import whatsapp_icon from '../../assets/icons/whatsapp.png'

export default function Header() {
   const [isOpen, setIsOpen] = useState(false);

   const toggleMenu = () => {
      setIsOpen(!isOpen);
   };

   const scrollToTop = () => {
      window.scrollTo({
         top: 0,
         behavior: 'smooth'
      });
      if (isOpen === true) {
         setIsOpen(!isOpen);
      }
   };

   const scrollToBottom = () => {
      const body = document.body;
      const html = document.documentElement;
      const height = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
   
      window.scrollTo({
         top: height,
         behavior: 'smooth'
      });
      
      if (isOpen === true) {
         setIsOpen(!isOpen);
      }
   };
   

   const handleScrollToSection = (sectionId) => {
      const historySection = document.getElementById(`${sectionId}`);
      const yOffset = -50;
      const y = historySection.getBoundingClientRect().top + window.pageYOffset + yOffset;
      window.scrollTo({ top: y, behavior: 'smooth' });

      setIsOpen(!isOpen);
   };

   return (
      <header>
         <div>
            <Link to="/" onClick={scrollToTop}><img onClick={scrollToTop} src={logo} alt="Logo" title='Claro de Inspiracion Logo' /></Link>
         </div>

         <nav className={`nav-header ${isOpen ? 'open' : ''}`}>
            <div className="menu-container">
               <ul>
                  <li><Link to="/" onClick={scrollToTop}>Inicio</Link></li>
                  <li><NavLink to="/" onClick={() => handleScrollToSection("history")}>Historia</NavLink></li>
                  <li><NavLink to="/" onClick={() => handleScrollToSection("mission")}>Misión</NavLink></li>
                  <li><NavLink to="/" onClick={() => handleScrollToSection("vision")}>Visión</NavLink></li>
                  <li><NavLink to="/" onClick={() => handleScrollToSection("values")}>Valores</NavLink></li>
                  <li><NavLink to="/" onClick={() => handleScrollToSection("testimony")}>Testimonios</NavLink></li>
                  <li><NavLink to="/" onClick={scrollToBottom}>Contacto</NavLink></li>
                  <div className='btn-container'>
                     <Link to="/Cursos" id='btn-cursos-header' className='btn-cursos-header btn-header' onClick={scrollToTop}><i class="fa-solid fa-book-bible"></i> Cursos</Link>
                     <Link to="/Tienda" id='btn-tienda-header' className='btn-cursos-header btn-header' onClick={scrollToTop}><i class="fa-solid fa-cart-shopping"></i> Tienda</Link>
                     <Link to="/Ofrendas" id='btn-ofrendas-header' className='btn-ofrendas-header btn-header' onClick={scrollToTop}>Ofrendas</Link>
                  </div>
                  <div className='networks-header-container' target='_blank'>
                     <a href="https://www.tiktok.com/@sebastianancona?_t=8jsylBLPDKH&_r=1">
                        <img id='tiktok-icon' src={TikTok_icon} />
                     </a>
                     <a href="https://www.instagram.com/desperta.a.lo.eterno/" target='_blank'>
                        <img id='instagram-icon' src={instagram_icon} />
                     </a>
                     <a href="https://www.instagram.com/sebastianancona?igsh=d3Q5MTV1anI3Mmpm" target='_blank'>
                        <img id='email-icon' src={email_icon} />
                     </a>
                     <a href="https://wa.me/5491136758853" target='_blank'>
                        <img id='whatsapp-icon' src={whatsapp_icon} />
                     </a>
                  </div>
                  <Outlet />
               </ul>
            </div>
         </nav>

         <div className={`menu-toggle ${isOpen ? 'open' : ''}`} onClick={toggleMenu}>
            <span></span>
            <span></span>
            <span></span>
         </div>
      </header>
   );
}

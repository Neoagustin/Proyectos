import { Link } from 'react-router-dom';
import { useState, useEffect } from 'react';
import './FloatingButton.css';

function FloatingButton() {
  const [showButton, setShowButton] = useState(false);

  useEffect(() => {
    function handleScroll() {
      const scrollPosition = window.scrollY;
      // Puedes ajustar esta posición según tu diseño y preferencias
      const triggerPosition = 250; // por ejemplo, se activará cuando el scroll haya avanzado 200px
      setShowButton(scrollPosition > triggerPosition);
    }

    window.addEventListener('scroll', handleScroll);

    return () => {
      window.removeEventListener('scroll', handleScroll);
    };
  }, []);

  return (
    <div className={`floating-button ${showButton ? 'active' : ''}`}>
      <Link to="/Cursos">Cursos</Link>
    </div>
  );
}

export default FloatingButton;

import React from 'react';
import { Routes, Route, useLocation } from 'react-router-dom';
import Header from './components/Header/Header';
import Home from './pages/Home/Home';
import Offerings from './pages/Offerings/Offerings';
import Courses from './pages/Courses/CoursesPage';
import CourseDetail from './pages/Courses/Components/CourseDetail/CourseDetail';
import Testimonials from './pages/Testimonials/Testimonials';
import Footer from './components/Footer/Footer';
import CoursesData from './pages/Courses/Components/CoursesData';
import CourseClass from './pages/Courses/Components/CourseClass/CourseClass';
import Store from './pages/Store/Store';

export default function App() {
  // Obtener la ubicación actual
  const location = useLocation();

  // Verificar si estamos en la ruta de CourseClass
  const isCourseClassRoute = location.pathname.startsWith('/CourseClass');

  return (
    <>
      <Header />

      <Routes>
        <Route path='/' element={<Home />} />
        <Route path='/Ofrendas' element={<Offerings />} />
        <Route path='/Cursos' element={<Courses courses={CoursesData} />} />
        <Route path='/Testimonios' element={<Testimonials />} />
        <Route path='/curso/:id' element={<CourseDetail courses={CoursesData} />} />
        <Route path='/CourseClass/:courseId/:classId' element={<CourseClass courses={CoursesData} />} />
        <Route path='/Tienda' element={<Store />} />
      </Routes>

      {/* Mostrar el Footer solo si no estamos en la ruta de CourseClass */}
      {!isCourseClassRoute && <Footer />}
    </>
  );
}

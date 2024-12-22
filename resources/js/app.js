import './bootstrap';

import Alpine from 'alpinejs';

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 1000, // Durasi animasi (dalam ms)
    once: true,     // Animasi hanya terjadi sekali
});

window.Alpine = Alpine;

Alpine.start();


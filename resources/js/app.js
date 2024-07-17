import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded and parsed');
    
    // Navbar fixed
    window.onscroll = function() {
      console.log('Scroll event detected');
      const header = document.querySelector('header');
      const fixedNav = header.offsetTop;
  
      if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
        console.log('Added navbar-fixed class');
      } else {
        header.classList.remove('navbar-fixed');
        console.log('Removed navbar-fixed class');
      }
    };
  
    // Hamburger menu toggle
    const hamburger = document.querySelector('#hamburger');
    const navMenu = document.querySelector('#nav-menu');
  
    if (hamburger) {
      console.log('Hamburger button found');
      hamburger.addEventListener('click', function() {
        console.log('Hamburger clicked');
        hamburger.classList.toggle('hamburger-active');
        navMenu.classList.toggle('hidden');
      });
    } else {
      console.log('Hamburger button not found');
    }
  });

// Carousel Testimoni
// document.addEventListener('DOMContentLoaded', () => {
//   const items = document.querySelectorAll('[data-carousel-item]');
//   let currentIndex = 0;

//   function showNextItem() {
//       items[currentIndex].classList.add('hidden');
//       currentIndex = (currentIndex + 1) % items.length;
//       items[currentIndex].classList.remove('hidden');
//   }

//   setInterval(showNextItem, 1000); // Change item every 3 seconds
// });


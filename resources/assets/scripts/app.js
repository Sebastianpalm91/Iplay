'use strict';
// HAMBURGER
const hamburger = document.querySelector('.hamburger');
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle("is-active");
});

$('.hamburger').click(function(e){
  e.preventDefault();
  $('.mobile-sub-menu').toggle("slide");
  $(this).toggleClass('open');
});

// HERO CAROUSEL
const section = document.querySelector('.hero-image-sub-carousel');
const elements = [...document.querySelectorAll('img')];

elements.forEach(element => element.addEventListener('click', event => {
  const position = parseInt(element.dataset.position);

  if (position === 1) {
    elements.forEach(child => {
      var parseDataset = parseInt(child.dataset.position);
      if (parseDataset === 1) { child.dataset.position = 2; }
      else if (parseDataset  === 2) { child.dataset.position = 3; }
      else if (parseDataset  === 3) { child.dataset.position = 1; }
    });
  }

  if (position === 3) {
    elements.forEach(child => {
      var parseDataset = parseInt(child.dataset.position);
      if (parseDataset  === 3) { child.dataset.position = 2; }
      else if (parseDataset  === 2) { child.dataset.position = 1; }
      else if (parseDataset === 1) { child.dataset.position = 3; }
    });
  }
}));

const nav = document.querySelector('.fixed-position');
const cont = document.querySelector('body');
cont.addEventListener('scroll', () => {
  let scroll = cont.scrollTop;
  console.log(scroll);
  if (scroll >= 50) {
    nav.classList.add('menu-container');
  } else if (scroll < 50 ){
    nav.classList.remove('menu-container');
  }
});

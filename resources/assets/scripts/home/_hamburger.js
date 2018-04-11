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

// const menu91 = document.getElementById('menu-item-90');
// menu91.addEventListener('click', () => {
//   const menu94 = document.getElementById('menu-item-94');
//   const menu97 = document.getElementById('menu-item-97');
//   menu94.classList.style = 'display';
//   menu97.classList.style = 'display';
// })

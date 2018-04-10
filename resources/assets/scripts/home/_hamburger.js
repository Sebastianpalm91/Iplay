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

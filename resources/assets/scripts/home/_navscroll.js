const nav = document.querySelector('.fixed-position');
const navcolor = document.querySelector('.navigation-bar ul li a');
const cont = document.querySelector('body');
cont.addEventListener('scroll', () => {
  let scroll = cont.scrollTop;
  if (scroll >= 50) {
    nav.classList.add('menu-container');
    navcolor.classList.add('nav-color-scroll');
  } else if (scroll < 50 ){
    nav.classList.remove('menu-container');
    navcolor.classList.remove('nav-color-scroll')

  }
});

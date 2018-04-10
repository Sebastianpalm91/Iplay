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

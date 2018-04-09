

const HamburgerMenu = document.querySelector('.hamburger');
  HamburgerMenu.addEventListener('click', () => {
    HamburgerMenu.classList.toggle("is-active");
  });

//
// const FrontPageCarousel = document.querySelector('.hero-image-sub-carousel')
// const FrontPageImages = document.querySelector('.hero-image-sub-carousel');
//   FrontPageImages.addEventListener('click', () => {
//     const element = document.querySelector('img');
//       FrontPageImages.appendChild(element);
// });

const section = document.querySelector('.hero-image-sub-carousel');
const elements = [...document.querySelectorAll('img')];

elements.forEach(element => element.addEventListener('click', event => {
  const position = parseInt(element.dataset.position);

  if (position === 1) {
    elements.forEach(child => {
      if (parseInt(child.dataset.position) === 1) { child.dataset.position = 2; }
      else if (parseInt(child.dataset.position) === 2) { child.dataset.position = 3; }
      else if (parseInt(child.dataset.position) === 3) { child.dataset.position = 1; }
    });
  }

  if (position === 3) {
    elements.forEach(child => {
      if (parseInt(child.dataset.position) === 3) { child.dataset.position = 2; }
      else if (parseInt(child.dataset.position) === 2) { child.dataset.position = 1; }
      else if (parseInt(child.dataset.position) === 1) { child.dataset.position = 3; }
    });
  }
}));

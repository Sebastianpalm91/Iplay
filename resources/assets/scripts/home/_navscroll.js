const nav = document.querySelector('.fixed-position');
// const blackarrow = document.querySelector('.black')
const twitter = document.querySelector('.twitter');
const instagram = document.querySelector('.instagram');
const facebook = document.querySelector('.facebook');
const youtube = document.querySelector('.youtube');
const cont = document.querySelector('body');

const filter = document.querySelector('form');
cont.addEventListener('scroll', () => {
  let scroll = cont.scrollTop;
  if (scroll >= 50) {

    // MENU COLOR CHANGE
    nav.classList.add('menu-container');
    // CHECK IF PATH IS PLAYERS
    if (window.location.pathname == '/players/') {
      const nav = document.querySelector('.fixed-position');
      nav.classList.add('menu-container');
    }
    // NAVIGATION MENU BLACK
    const icon = document.querySelectorAll('.navigation-bar ul li a');
    icon.forEach((e) => {
      e.classList.add('nav-color-scroll');
    })
    const li = document.querySelectorAll('.navigation-bar ul li ul li a');
    li.forEach((e) => {
      e.classList.add('sub-menu-scroll')
    })
    // ICONS WHITE
    twitter.classList.remove('twitter');
    instagram.classList.remove('instagram');
    facebook.classList.remove('facebook');
    youtube.classList.remove('youtube');
    // ICONS BLACK
    twitter.classList.add('twitter-black');
    instagram.classList.add('instagram-black');
    facebook.classList.add('facebook-black');
    youtube.classList.add('youtube-black');
  } else if (scroll < 50 ){

    // CHECK IF PATH IS PLAYERS
    if (window.location.pathname == '/players/') {
      const nav = document.querySelector('.fixed-position');
      nav.classList.add('menu-container');
    } else {
      nav.classList.remove('menu-container');
    }
    // NAVIGATION MENU WHITE
    const icon = document.querySelectorAll('.navigation-bar ul li a');
    icon.forEach((e) => {
      e.classList.remove('nav-color-scroll');
    })
    // ICONS WHITE
    twitter.classList.add('twitter');
    instagram.classList.add('instagram');
    facebook.classList.add('facebook');
    youtube.classList.add('youtube');
    // ICONS BLACK
    twitter.classList.remove('twitter-black');
    instagram.classList.remove('instagram-black');
    facebook.classList.remove('facebook-black');
    youtube.classList.remove('youtube-black');
  }
});

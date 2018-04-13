const nav = document.querySelector('.fixed-position');

const hamburger = document.querySelector('.hamburger-inner');


// const icon = document.querySelector('.icon-container');
// icon.childNodes.forEach( function(item){
//   console.log(item.classList.contains('twitter'));
// });

const icon = document.querySelector('.navigation-bar ul li ');
icon.childNodes.forEach( function(item){
  console.log(item);
  // item.classList.add("nav-color-scroll");
});
// const navcolor = document.querySelectorAll('.navigation-bar ul li a')
// const navcolor1 = document.querySelector('.navigation-bar ul li ')
// const navcolor2 = document.querySelector('.navigation-bar ul li a')
// const menu147 = document.querySelector('menu-item-147')
// const menu93 = document.querySelector('.menu-item-93');
// const menu89 = document.querySelector('.menu-item-89')
// console.log(menu147);;
// menu147.style.color = "black";
const twitter = document.querySelector('.twitter');
const instagram = document.querySelector('.instagram');
const facebook = document.querySelector('.facebook');
const youtube = document.querySelector('.youtube');
const cont = document.querySelector('body');
cont.addEventListener('scroll', () => {
  let scroll = cont.scrollTop;
  if (scroll >= 50) {
    nav.classList.add('menu-container');
    // menu147.classList.add('nav-color-scroll');

    hamburger.classList.add('hamburger-color-scroll');
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
    // navcolor.classList.remove('nav-color-scroll');
    hamburger.classList.remove('hamburger-color-scroll');
    // ICONS WHITE
    twitter.classList.add('twitter');
    instagram.classList.add('instagram');
    facebook.classList.add('facebook');
    youtube.classList.add('youtube');
    nav.classList.remove('menu-container');
    // ICONS BLACK
    twitter.classList.remove('twitter-black');
    instagram.classList.remove('instagram-black');
    facebook.classList.remove('facebook-black');
    youtube.classList.remove('youtube-black');

  }
});

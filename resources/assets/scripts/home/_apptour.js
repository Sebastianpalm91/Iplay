// //Apptour JS
// const section = document.querySelectorAll('.app-image');
// const listItems = document.querySelectorAll('.list-item');
// const imageItems = [...document.querySelectorAll('.tour-icon')];
// const imageText = [...document.querySelectorAll('.text-wrapper h3, .text-wrapper p')];
//
// listItems.forEach(item => {
//  item.addEventListener('click', e => {
//    section.forEach(x => x.classList.remove('active'));
//    const key = item.dataset.key;
//    const activeItems = document.querySelectorAll(`.app-image[data-key="${key}"]`)
//    activeItems.forEach(item => item.classList.add('active'))
//  })
// })
'use strict';

const listItems = document.querySelectorAll('.list-item');
const biographies = document.querySelectorAll('.app-image');

listItems.forEach((item, index) => {
  item.addEventListener('click', event => {
    const key = item.dataset.key;
    window.history.pushState(`${key}`, null, `?key=${key}`);
    updateContent(key);
  });
});

const updateContent = key => {

  for (const bio of biographies) {
      bio.classList.remove('app-image--active')
    if (bio.dataset.key == key) {
      bio.classList.add('app-image--active')
    }
  }
  for (const item of listItems) {
      item.classList.remove('app-image--active')
    if (item.dataset.key == key) {
      item.classList.add('app-image--active')
    }
  }
}

window.addEventListener('popstate', event => {
  updateContent(event.state)
  console.log(event.state);
});

'use strict';
// APPTOUR CONTENT CHANGE
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
});

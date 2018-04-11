//Apptour JS
const section = document.querySelectorAll('.app-image');
const listItems = document.querySelectorAll('.list-item');
const imageItems = [...document.querySelectorAll('.tour-icon')];
const imageText = [...document.querySelectorAll('.text-wrapper h3, .text-wrapper p')];

listItems.forEach(item => {
 item.addEventListener('click', e => {
   section.forEach(x => x.classList.remove('active'));
   const key = item.dataset.key;
   const activeItems = document.querySelectorAll(`.app-image[data-key="${key}"]`)
   activeItems.forEach(item => item.classList.add('active'))
 })
})

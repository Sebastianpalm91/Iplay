//Apptour JS
 const section = document.querySelector('.wrapper');
 const imageItems = [...document.querySelectorAll('.tour-icon')];
 const imageText = [...document.querySelectorAll('.text-wrapper')];

 function toggleInfo(info) {
  // Loop through all items
  imageItems.forEach(picture => imageItems.classList.remove('tour-icon--active'));
  imageText.forEach(text => imageText.classList.remove('text-wrapper--active'));

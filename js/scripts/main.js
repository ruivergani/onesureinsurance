
// Hover Buttons
const btnOutline = document.getElementById('btn-outline');
const refreshImage = document.getElementById('refresh');
btnOutline.addEventListener('mouseover', () => {
        refreshImage.setAttribute('src', '../../assets/icons/icon-refresh-red.svg');
});
btnOutline.addEventListener('mouseleave', () => {
    refreshImage.setAttribute('src', '../../assets/icons/icon-refresh-btn.svg');
});


// Configure the modal
const btnOpenModal = document.querySelector('.js-open-modal'); 
const btnCloseModal = document.querySelector('.js-close');

btnOpenModal.addEventListener('click', (Event) => {
  Event.preventDefault();
  let html = document.documentElement;
   // add the class to the html (not to the specific element)
   html.classList.add('show-modal'); // selecting 
})

btnCloseModal.addEventListener('click', (Event) => {
  Event.preventDefault();
  let html = document.documentElement;
   // add the class to the html (not to the specific element)
   html.classList.remove('show-modal'); // selecting 
})
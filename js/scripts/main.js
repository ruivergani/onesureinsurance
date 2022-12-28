
// Hover Buttons
const btnOutline = document.getElementById('btn-outline');
const refreshImage = document.getElementById('refresh');
btnOutline.addEventListener('mouseover', () => {
        refreshImage.setAttribute('src', '../../assets/icons/icon-refresh-red.svg');
});
btnOutline.addEventListener('mouseleave', () => {
    refreshImage.setAttribute('src', '../../assets/icons/icon-refresh-btn.svg');
});

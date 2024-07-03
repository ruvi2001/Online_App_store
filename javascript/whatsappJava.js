// Get the description element
const descriptionElement = document.querySelector('.app-description');

// Toggle the visibility of the description when clicked
descriptionElement.addEventListener('click', function() {
  descriptionElement.classList.toggle('show-details');
});

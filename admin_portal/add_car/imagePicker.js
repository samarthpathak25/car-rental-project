// script.js
const imagePicker = document.getElementById('imagePicker');
const imagePreview = document.getElementById('imagePreview');

imagePicker.addEventListener('change', (event) => {
  const file = event.target.files[0];
  if (file) {
    imagePreview.src = URL.createObjectURL(file); // Set the image source
    imagePreview.style.display = 'block'; // Make the image visible
  } else {
    imagePreview.style.display = 'none'; // Hide the image if no file is selected
  }
});

document.addEventListener('DOMContentLoaded', function () {
    const preloader = document.getElementById('preloader');  // Preloader element
    const mainWrapper = document.getElementById('main-wrapper');  // Main content element

    // Display the main content
    mainWrapper.style.display = 'block';

    // Add the fade-out class to the preloader for a smooth transition
    preloader.classList.add('fade-out');

    // Wait for the fade-out transition to complete before removing the preloader
    setTimeout(function () {
        preloader.remove();  // Completely remove the preloader from the DOM
    }, 1000);  // Delay matches the 1s fade-out duration
});

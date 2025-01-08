// JavaScript for handling dropdown menu
document.addEventListener('DOMContentLoaded', function() {
    const userButton = document.getElementById('userButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    userButton.addEventListener('click', function() {
        // Toggle the dropdown menu visibility
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', function(event) {
        if (!event.target.matches('#userButton') && !event.target.matches('.dropdown-menu a')) {
            dropdownMenu.style.display = 'none';
        }
    });
});

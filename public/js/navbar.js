// Get the dropdown elements
const dropdown = document.getElementById('dropdown');
const drop_btn = document.getElementById('drop-btn');

// Function to toggle the dropdown
function toggleDropdown() {
    dropdown.classList.toggle('hidden');
}

// Event listener to toggle the dropdown on click
drop_btn.addEventListener('click', toggleDropdown);

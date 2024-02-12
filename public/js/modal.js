document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('modal-toggle').addEventListener('click', function() {
        document.getElementById('modal').classList.toggle('hidden');
    });

    // // Close the modal when clicking on the overlay or pressing escape key
    // document.getElementById('modal-overlay').addEventListener('click', function() {
    //     document.getElementById('modal').classList.add('hidden');
    // });
});

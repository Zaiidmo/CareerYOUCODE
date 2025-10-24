document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('modal-toggle').addEventListener('click', function() {
        document.getElementById('modal').classList.toggle('hidden');
    });

    var editButtons = document.querySelectorAll('.edit-btn');
    editButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var id = button.getAttribute('data-role-id');
            var modal = document.getElementById('modification-modal-' + id);
            modal.classList.toggle('hidden');
        });
    });
});

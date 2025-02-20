document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("userModal");
    const newUserBtn = document.getElementById("newUserBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");

    // Abrir el modal
    newUserBtn.onclick = function() {
        modal.style.display = "block";
    }

    // Cerrar el modal
    closeModalBtn.onclick = function() {
        modal.style.display = "none";
    }

    // Cerrar el modal si se hace clic fuera del modal
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }

});

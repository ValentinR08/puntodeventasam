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

    // Evitar el envío por defecto del formulario
    const userForm = document.getElementById("userForm");
    userForm.onsubmit = function(event) {
        event.preventDefault();

        const name = document.getElementById("name").value;
        const gender = document.getElementById("gender").value;
        const email = document.getElementById("email").value;

        console.log("Usuario agregado:", { name, gender, email });

        // Aquí puedes agregar la lógica para guardar el nuevo usuario (por ejemplo, enviar al servidor)

        modal.style.display = "none"; // Cerrar el modal después de enviar
    }
});

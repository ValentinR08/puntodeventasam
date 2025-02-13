document.addEventListener("DOMContentLoaded", function() {
    const editModal = document.getElementById("editUserModal");
    const closeEditBtn = document.getElementById("closeEditModalBtn");
    const editButtons = document.querySelectorAll(".edit-btn");

    editButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Obtener la fila del usuario seleccionado
            const row = this.closest("tr");
            const userId = row.cells[0].innerText;
            const userName = row.cells[1].innerText.split(" ")[0];
            const userApellido = row.cells[1].innerText.split(" ").slice(1).join(" ");
            const userGender = row.cells[2].innerText;
            const userEmail = row.cells[3].innerText;

            // Llenar el formulario con los datos del usuario
            document.getElementById("editUserId").value = userId;
            document.getElementById("editName").value = userName;
            document.getElementById("editApellido").value = userApellido;
            document.getElementById("editGender").value = userGender;
            document.getElementById("editEmail").value = userEmail;

            // Mostrar el modal
            editModal.style.display = "flex";
        });
    });

    // Cerrar modal al hacer clic en la "X"
    closeEditBtn.addEventListener("click", function() {
        editModal.style.display = "none";
    });

    // Cerrar modal al hacer clic fuera del contenido
    window.addEventListener("click", function(event) {
        if (event.target === editModal) {
            editModal.style.display = "none";
        }
    });
});

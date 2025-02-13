document.addEventListener("DOMContentLoaded", function() {
    const deleteModal = document.getElementById("deleteUserModal");
    const closeDeleteBtn = document.getElementById("closeDeleteModalBtn");
    const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
    const cancelDeleteBtn = document.getElementById("cancelDeleteBtn");
    
    let userIdToDelete = null;  // Variable para almacenar el ID del usuario a eliminar
    
    // Muestra el modal de confirmación de eliminación
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function() {
            // Obtener el ID del usuario desde la fila correspondiente
            const row = this.closest("tr");
            userIdToDelete = row.cells[0].innerText; // Suponiendo que el ID está en la primera celda
            
            // Mostrar el modal de confirmación
            deleteModal.style.display = "flex";
        });
    });

    // Cerrar el modal de eliminación cuando se hace clic en la "X"
    closeDeleteBtn.addEventListener("click", function() {
        deleteModal.style.display = "none";
    });

    // Cerrar el modal de eliminación si se hace clic en "Cancelar"
    cancelDeleteBtn.addEventListener("click", function() {
        deleteModal.style.display = "none";
    });

    // Eliminar el usuario si se confirma
    confirmDeleteBtn.addEventListener("click", function() {
        // Aquí puedes hacer la llamada AJAX para eliminar el usuario de la base de datos
        if (userIdToDelete !== null) {
            deleteUser(userIdToDelete);
        }
        deleteModal.style.display = "none"; // Cerrar modal después de eliminar
    });

    // Función para eliminar el usuario (simulación de llamada AJAX)
    function deleteUser(userId) {
        // Aquí puedes hacer la llamada a tu controlador o API para eliminar el usuario
        console.log(`Eliminando usuario con ID: ${userId}`);
        
        // Eliminar la fila de la tabla (esto es solo para la interfaz de usuario)
        const rowToDelete = document.querySelector(`tr td:first-child:contains(${userId})`).closest("tr");
        if (rowToDelete) {
            rowToDelete.remove();
        }
    }

    // Cerrar modal si se hace clic fuera del contenido del modal
    window.addEventListener("click", function(event) {
        if (event.target === deleteModal) {
            deleteModal.style.display = "none";
        }
    });
});

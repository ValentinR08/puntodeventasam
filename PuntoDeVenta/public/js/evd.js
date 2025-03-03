document.addEventListener("DOMContentLoaded", function() {
    // Editar usuario
    const editModal = document.getElementById("editUserModal");
    const closeEditBtn = document.getElementById("closeEditModalBtn");
    const editButtons = document.querySelectorAll(".edit-btn");

    document.querySelectorAll(".edit-btn").forEach(button => {
        button.addEventListener("click", function() {
            const row = this.closest("tr");
            if (row) {
                const userId = row.cells[0].textContent;
                const userName = row.cells[1].textContent.split(" ");
                const userGender = row.cells[2].textContent;
                const userEmail = row.cells[3].textContent;
    
                document.getElementById("editUserId").value = userId;
                document.getElementById("editName").value = userName[0];
                document.getElementById("editApellido").value = userName[1];
                document.getElementById("editGender").value = userGender;
                document.getElementById("editEmail").value = userEmail;
    
                document.getElementById("editUserForm").action = `/usuarios/${userId}`;
    
                editModal.style.display = "block";
            }
        });
    });

    closeEditBtn.addEventListener("click", () => editModal.style.display = "none");
    window.addEventListener("click", event => { if (event.target === editModal) editModal.style.display = "none"; });

    // Eliminar usuario
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function() {
            const userIdToDelete = this.getAttribute("data-id"); 
            document.getElementById("deleteUserForm").action = `/usuarios/${userIdToDelete}`;
            deleteModal.style.display = "block"; 
        });
    });
    
    document.getElementById("deleteUserForm").addEventListener("submit", async function (e) {
        e.preventDefault();
    
        try {
            const response = await fetch(this.action, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
            });
    
            if (response.ok) {
                alert("Usuario eliminado correctamente");
                location.reload(); // Recargar la página después de eliminar
            } else {
                const errorData = await response.json(); // Obtener detalles del error
                alert(`Error al eliminar el usuario: ${errorData.message}`);
            }
        } catch (error) {
            alert("Error en la solicitud: " + error.message);
        }
    
        deleteModal.style.display = "none";
    });

    // Ver usuario
    const viewButtons = document.querySelectorAll(".view-btn");
    const viewModal = document.getElementById("viewUserModal");
    const closeViewModalBtn = document.getElementById("closeViewModalBtn");

    viewButtons.forEach(button => {
        button.addEventListener("click", function() {
            const row = this.closest("tr");
            if (row) {
                document.getElementById("viewUserId").textContent = row.cells[0].textContent;
                document.getElementById("viewUserName").textContent = row.cells[1].textContent;
                document.getElementById("viewUserGender").textContent = row.cells[2].textContent;
                document.getElementById("viewUserEmail").textContent = row.cells[3].textContent;
                viewModal.style.display = "block";
            }
        });
    });

    closeViewModalBtn.addEventListener("click", () => viewModal.style.display = "none");
    window.addEventListener("click", event => { if (event.target === viewModal) viewModal.style.display = "none"; });
});

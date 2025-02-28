document.addEventListener("DOMContentLoaded", function() {
    // Editar usuario
    const editModal = document.getElementById("editUserModal");
    const closeEditBtn = document.getElementById("closeEditModalBtn");
    const editButtons = document.querySelectorAll(".edit-btn");

    document.getElementById("editUserForm").addEventListener("submit", async function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        try {
            const response = await fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'X-HTTP-Method-Override': 'PUT' // Para simular el método PUT
                },
                body: formData
            });
            if (response.ok) {
                alert("Usuario actualizado correctamente");
                location.reload(); // Recargar la página para ver los cambios
            } else {
                alert("Error al actualizar el usuario");
            }
        } catch (error) {
            alert("Error en la solicitud");
        }
    });

    closeEditBtn.addEventListener("click", () => editModal.style.display = "none");
    window.addEventListener("click", event => { if (event.target === editModal) editModal.style.display = "none"; });

    // Eliminar usuario
    const deleteModal = document.getElementById("deleteUserModal");
    const closeDeleteBtn = document.getElementById("closeDeleteModalBtn");
    const confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
    let userIdToDelete = null;

    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function() {
            const row = document.querySelector(`tr:has(button[data-id='${userIdToDelete}'])`);
            if (row) {
                row.remove();
            }
        });
    });

    closeDeleteBtn.addEventListener("click", () => deleteModal.style.display = "none");

    confirmDeleteBtn.addEventListener("click", async function() {
        if (userIdToDelete !== null) {
            try {
                // Usar la variable correcta
                const response = await fetch(`/usuarios/${userIdToDelete}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                if (response.ok) {
                    document.querySelector(`tr[data-id='${userIdToDelete}']`).remove();
                    alert("Usuario eliminado correctamente");
                } else {
                    alert("Error al eliminar usuario");
                }
            } catch (error) {
                alert("Error en la solicitud");
            }
        }
        deleteModal.style.display = "none";
    });

    window.addEventListener("click", event => { if (event.target === deleteModal) deleteModal.style.display = "none"; });

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

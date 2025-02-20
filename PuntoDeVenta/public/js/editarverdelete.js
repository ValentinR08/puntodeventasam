document.addEventListener("DOMContentLoaded", function() {
    // Editar usuario
    const editModal = document.getElementById("editUserModal");
    const closeEditBtn = document.getElementById("closeEditModalBtn");
    const editButtons = document.querySelectorAll(".edit-btn");

    editButtons.forEach(button => {
        button.addEventListener("click", function() {
            const row = this.closest("tr");
            const userId = row.cells[0].innerText;
            const userName = row.cells[1].innerText.split(" ")[0];
            const userApellido = row.cells[1].innerText.split(" ").slice(1).join(" ");
            const userGender = row.cells[2].innerText;
            const userEmail = row.cells[3].innerText;

            document.getElementById("editUserId").value = userId;
            document.getElementById("editName").value = userName;
            document.getElementById("editApellido").value = userApellido;
            document.getElementById("editGender").value = userGender;
            document.getElementById("editEmail").value = userEmail;

            editModal.style.display = "flex";
        });
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
            const row = this.closest("tr");
            userIdToDelete = row.cells[0].innerText;
            deleteModal.style.display = "flex";
        });
    });

    closeDeleteBtn.addEventListener("click", () => deleteModal.style.display = "none");

    confirmDeleteBtn.addEventListener("click", async function() {
        if (userIdToDelete !== null) {
            try {
                const response = await fetch(`/usuarios/${userIdToDelete}`, {
                    method: 'DELETE',
                    headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
                });
                if (response.ok) {
                    document.querySelector(`tr td:first-child:contains('${userIdToDelete}')`).closest("tr").remove();
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
            document.getElementById("viewUserId").textContent = row.cells[0].textContent;
            document.getElementById("viewUserName").textContent = row.cells[1].textContent;
            document.getElementById("viewUserGender").textContent = row.cells[2].textContent;
            document.getElementById("viewUserEmail").textContent = row.cells[3].textContent;
            viewModal.style.display = "block";
        });
    });

    closeViewModalBtn.addEventListener("click", () => viewModal.style.display = "none");
    window.addEventListener("click", event => { if (event.target === viewModal) viewModal.style.display = "none"; });
});

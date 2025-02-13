
document.addEventListener("DOMContentLoaded", function () {
    const viewButtons = document.querySelectorAll(".view-btn");
    const viewModal = document.getElementById("viewUserModal");
    const closeViewModalBtn = document.getElementById("closeViewModalBtn");

    viewButtons.forEach(button => {
        button.addEventListener("click", function () {
            const row = this.closest("tr");
            document.getElementById("viewUserId").textContent = row.cells[0].textContent;
            document.getElementById("viewUserName").textContent = row.cells[1].textContent;
            document.getElementById("viewUserGender").textContent = row.cells[2].textContent;
            document.getElementById("viewUserEmail").textContent = row.cells[3].textContent;

            viewModal.style.display = "block";
        });
    });

    closeViewModalBtn.addEventListener("click", function () {
        viewModal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target === viewModal) {
            viewModal.style.display = "none";
        }
    });
});

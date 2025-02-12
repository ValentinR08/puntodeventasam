<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('crud-form');
        const tableBody = document.querySelector('#crud-table tbody');
        const btnAgregar = document.getElementById('btn-agregar');
        const btnActualizar = document.getElementById('btn-actualizar');
        let editIndex = null;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;

            if (editIndex === null) {
                // Agregar nuevo registro
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${nombre}</td>
                    <td>${email}</td>
                    <td>
                        <button class="editar bg-blue-500 text-white px-2 py-1 rounded-md">Editar</button>
                        <button class="eliminar bg-red-500 text-white px-2 py-1 rounded-md">Eliminar</button>
                    </td>
                `;
                tableBody.appendChild(newRow);
            } else {
                // Actualizar registro existente
                const row = tableBody.children[editIndex];
                row.children[0].textContent = nombre;
                row.children[1].textContent = email;
                btnAgregar.style.display = 'inline';
                btnActualizar.style.display = 'none';
                editIndex = null;
            }

            form.reset();
        });

        tableBody.addEventListener('click', function (e) {
            if (e.target.classList.contains('editar')) {
                const row = e.target.closest('tr');
                const cells = row.children;
                document.getElementById('nombre').value = cells[0].textContent;
                document.getElementById('email').value = cells[1].textContent;
                btnAgregar.style.display = 'none';
                btnActualizar.style.display = 'inline';
                editIndex = Array.from(tableBody.children).indexOf(row);
            }

            if (e.target.classList.contains('eliminar')) {
                const row = e.target.closest('tr');
                row.remove();
            }
        });
    });
</script>

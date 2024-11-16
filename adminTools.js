document.addEventListener('DOMContentLoaded', function() {
    fetchUsers();
});

function fetchUsers() {
    fetch('fetchUserData.php')
        .then(response => response.json())
        .then(data => {
            const userTableBody = document.getElementById('userTableBody');
            userTableBody.innerHTML = '';
            data.forEach(user => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${user.id_number}</td>
                    <td>${user.password}</td>
                    <td>${user.last_name}</td>
                    <td>${user.first_name}</td>
                    <td>${user.middle_name}</td>
                    <td>${user.sex}</td>
                    <td>${user.course}</td>
                    <td>${user.year_level}</td>
                    <td>${user.vehicle_type}</td>
                    <td>${user.vehicle_make}</td>
                    <td>${user.vehicle_model}</td>
                    <td>${user.vehicle_year}</td>
                    <td>${user.vehicle_color}</td>
                    <td>${user.plate_number}</td>
                    <td>${user.house_no}</td>
                    <td>${user.street}</td>
                    <td>${user.province}</td>
                    <td>${user.municipality}</td>
                    <td>${user.barangay}</td>
                    <td>${user.purok}</td>
                    <td>
                        <button onclick="deleteUser(${user.id})">Delete</button>
                        <button onclick="editUser(${user.id})">Edit</button>
                    </td>
                `;
                userTableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error fetching users:', error));
}

function deleteUser(userId) {
    if (confirm('Are you sure you want to delete this user?')) {
        fetch(`adminTools.php?action=deleteUser&id=${userId}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('User deleted successfully!');
                    fetchUsers();
                } else {
                    alert('Error deleting user.');
                }
            })
            .catch(error => console.error('Error deleting user:', error));
    }
}

function editUser(userId) {
    // Implement edit functionality here
    alert('Edit functionality is not yet implemented.');
}

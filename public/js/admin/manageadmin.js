// Script untuk menampilkan dropdown menu
document.getElementById("userButton").addEventListener("click", function () {
    const dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.style.display =
        dropdownMenu.style.display === "block" ? "none" : "block";
});

// Menutup dropdown menu jika mengklik di luar area dropdown
window.addEventListener("click", function (event) {
    const dropdownMenu = document.getElementById("dropdownMenu");
    if (
        !event.target.matches("#userButton") &&
        !event.target.matches("#dropdownMenu a")
    ) {
        dropdownMenu.style.display = "none";
    }
});

document.getElementById("userButton").addEventListener("click", function () {
    document.getElementById("dropdownMenu").classList.toggle("show");
});

// Untuk menutup dropdown jika di luar elemen diklik
window.onclick = function (event) {
    if (!event.target.matches("#userButton")) {
        var dropdowns = document.getElementsByClassName("dropdown-menu");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};

// Fungsi untuk mengisi form edit admin dengan data dari tombol Edit
function editAdmin(id, username) {
    // Menampilkan form edit
    document.getElementById("editAdminForm").style.display = "block";

    // Mengisi form edit dengan data
    document.getElementById("editUsername").value = username;

    // Mengisi ID admin pada hidden input
    document.getElementById("editAdminId").value = id;

    // Menambahkan ID admin yang akan diupdate ke dalam form action
    document.getElementById("editForm").action = "/admin/" + id;
}

function showEditForm(id, username) {
    document.getElementById('editAdminForm').style.display = 'block';
    document.getElementById('editAdminId').value = id;
    document.getElementById('editUsername').value = username;
    var formAction = "{{ route('admin.update', '__ID__') }}";
    formAction = formAction.replace('__ID__', id);
    document.getElementById('editForm').action = formAction;
}
// Filter Bus by Status
document.getElementById("filterStatus").addEventListener("change", function () {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll("#busList tr");

    rows.forEach(row => {
        const status = row.querySelector(".status").textContent.toLowerCase();
        if (filter === "" || status === filter) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});

// Highlight on Edit
function editBus(button) {
    const row = button.parentElement.parentElement;
    row.classList.add("highlight");

    setTimeout(() => {
        row.classList.remove("highlight");
    }, 1000);

    alert("Edit functionality coming soon!");
}

// Confirm Delete
function confirmDelete(button) {
    const row = button.parentElement.parentElement;
    const busName = row.cells[1].textContent;

    if (confirm(`Are you sure you want to delete ${busName}?`)) {
        row.remove();
    }
}

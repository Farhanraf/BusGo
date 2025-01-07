document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll(".sidebar ul li a");
    const userButton = document.getElementById("userButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    // Tampilkan atau sembunyikan dropdown menu saat tombol diklik
    userButton.addEventListener("click", function () {
        dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
    });

    document.addEventListener("click", function (e) {
        if (!userButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.style.display = "none";
        }
    });

    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const targetSection = document.querySelector(link.getAttribute("href"));
            if (targetSection) {
                document.querySelectorAll("section").forEach(section => section.style.display = "none");
                targetSection.style.display = "block";
            }
        });
    });

    // Show only the dashboard section initially
    document.querySelectorAll("section").forEach(section => section.style.display = "none");
    document.querySelector("#dashboard").style.display = "block";
});

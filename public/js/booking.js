"use strict";

/**
 * Navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const navLinks = document.querySelectorAll("[data-nav-link]");

document.body.style.overflow = "auto";

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

const navToggleEvent = function (elem) {
    for (let i = 0; i < elem.length; i++) {
        elem[i].addEventListener("click", function () {
            navbar.classList.toggle("active");
            overlay.classList.toggle("active");
        });
    }
};

navToggleEvent(navElemArr);
navToggleEvent(navLinks);

/**
 * Header sticky & go to top
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
    if (window.scrollY >= 200) {
        header.classList.add("active");
        goTopBtn.classList.add("active");
    } else {
        header.classList.remove("active");
        goTopBtn.classList.remove("active");
    }
});

/**
 * Menghitung total harga
 */
document.getElementById("nomor_kursi")?.addEventListener("input", function () {
    var kursi = this.value;
    var harga = parseFloat(document.getElementById("harga_jadwal").value); // Added missing semicolon
    if (isNaN(harga) || kursi <= 0) {
        document.getElementById("total_harga").value = "Rp 0";
    } else {
        var totalHarga = kursi * harga;
        document.getElementById("total_harga").value =
            "Rp " + totalHarga.toLocaleString();
    }
});

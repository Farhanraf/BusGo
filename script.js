const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})


// Data status bus
const busData = [
    { nomor: 'B001', status: 'Aktif' },
    { nomor: 'B002', status: 'Tidak Aktif' },
    { nomor: 'B003', status: 'Aktif' },
    { nomor: 'B004', status: 'Tidak Aktif' }
];

// Fungsi untuk menampilkan status bus di tabel
function showBusStatus() {
    const tableBody = document.getElementById("bus-status-table");
    tableBody.innerHTML = ''; // Menghapus isi tabel sebelumnya

    busData.forEach(bus => {
        const row = document.createElement("tr");
        
        // Menambahkan kelas berdasarkan status
        row.className = bus.status === 'Aktif' ? 'active' : 'inactive';
        
        // Menambahkan nomor bus
        const nomorCell = document.createElement("td");
        nomorCell.textContent = bus.nomor;
        
        // Menambahkan status bus
        const statusCell = document.createElement("td");
        statusCell.textContent = bus.status;
        
        // Menambahkan data ke dalam baris
        row.appendChild(nomorCell);
        row.appendChild(statusCell);
        
        // Menambahkan baris ke dalam tabel
        tableBody.appendChild(row);
    });
}

// Jalankan saat statusbus.html dimuat
if (document.getElementById("bus-status-table")) {
    showBusStatus();
}

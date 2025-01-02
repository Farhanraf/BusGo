// Script for CEK TRAVEL section functionality
document.addEventListener('DOMContentLoaded', () => {
    const travelForm = document.querySelector('.travel-form');
    const resultsContainer = document.querySelector('.results-container .partners-list');

    // Example data (Replace with real backend API call)
    const mockData = [
        {
            name: 'Mitra A',
            logo: 'mitra-a-logo.png',
            seats: 20,
            price: 200000,
            date: '2024-01-15',
        },
        {
            name: 'Mitra B',
            logo: 'mitra-b-logo.png',
            seats: 15,
            price: 250000,
            date: '2024-01-16',
        },
        {
            name: 'Mitra C',
            logo: 'mitra-c-logo.png',
            seats: 10,
            price: 180000,
            date: '2024-01-17',
        },
    ];

    // Handle form submission
    travelForm.addEventListener('submit', (event) => {
        event.preventDefault();

        // Clear previous results
        resultsContainer.innerHTML = '';

        // Get form data
        const asal = document.querySelector('#asal-kota').value;
        const tujuan = document.querySelector('#tujuan-kota').value;
        const tanggal = document.querySelector('#tanggal-travel').value;

        // Filter and display results (mock implementation)
        mockData.forEach((mitra) => {
            if (mitra.date === tanggal) {
                const partnerCard = document.createElement('div');
                partnerCard.classList.add('partner-card');

                partnerCard.innerHTML = `
                    <img src="${mitra.logo}" alt="Logo ${mitra.name}" class="partner-logo">
                    <p class="partner-name">${mitra.name}</p>
                    <p class="seats">Jumlah Kursi Tersedia: ${mitra.seats}</p>
                    <p class="price">Harga: Rp ${mitra.price.toLocaleString('id-ID')}</p>
                    <p class="travel-date">Tanggal: ${new Date(mitra.date).toLocaleDateString('id-ID', {
                    weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
                })}</p>
                `;

                resultsContainer.appendChild(partnerCard);
            }
        });

        // If no results
        if (!resultsContainer.hasChildNodes()) {
            resultsContainer.innerHTML = '<p class="no-results">Tidak ada mitra tersedia untuk perjalanan ini.</p>';
        }
    });
});

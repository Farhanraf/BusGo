document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('paymentForm');
    const jumlahKursiInput = document.getElementById('jumlah_kursi');
    const hargaTotalInput = document.getElementById('harga_total');
    const statusMessage = document.getElementById('statusMessage');
    const printButton = document.getElementById('printButton');
    const nota = document.getElementById('nota');

    const notaIdPemesanan = document.getElementById('nota_id_pemesanan');
    const notaJumlahKursi = document.getElementById('nota_jumlah_kursi');
    const notaTanggalPembayaran = document.getElementById('nota_tanggal_pembayaran');
    const notaHargaTotal = document.getElementById('nota_harga_total');

    const HARGA_PER_KURSI = 50000; // Harga per kursi (IDR)

    // Hitung total harga berdasarkan jumlah kursi
    jumlahKursiInput.addEventListener('input', () => {
        const jumlahKursi = parseInt(jumlahKursiInput.value, 10) || 0;
        hargaTotalInput.value = jumlahKursi * HARGA_PER_KURSI;
    });

    // Handle form submission
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const idPemesanan = document.getElementById('id_pemesanan').value;
        const jumlahKursi = jumlahKursiInput.value;
        const tanggalPembayaran = document.getElementById('tanggal_pembayaran').value;
        const hargaTotal = hargaTotalInput.value;

        if (idPemesanan && jumlahKursi > 0 && tanggalPembayaran) {
            // Update nota
            notaIdPemesanan.textContent = idPemesanan;
            notaJumlahKursi.textContent = jumlahKursi;
            notaTanggalPembayaran.textContent = new Date(tanggalPembayaran).toLocaleString();
            notaHargaTotal.textContent = hargaTotal;

            // Tampilkan pesan sukses dan tombol Print
            statusMessage.textContent = `Pembayaran berhasil! Total: IDR ${hargaTotal}`;
            statusMessage.style.color = 'green';
            nota.style.display = 'block';
            printButton.style.display = 'block';
        } else {
            statusMessage.textContent = 'Isi semua data dengan benar.';
            statusMessage.style.color = 'red';
            nota.style.display = 'none';
            printButton.style.display = 'none';
        }
    });

    // Handle Print Nota
    printButton.addEventListener('click', () => {
        const printContent = nota.innerHTML;
        const originalContent = document.body.innerHTML;

        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
        window.location.reload(); // Reload halaman setelah mencetak
    });
});

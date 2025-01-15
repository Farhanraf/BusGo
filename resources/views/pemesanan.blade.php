<!-- resources/views/user/pemesanan.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Saya</title>
</head>
<body>
    <div class="container">
        <h2>Daftar Pemesanan Saya</h2>

        @if($pemesanans->isEmpty())
            <p>Anda belum melakukan pemesanan.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID Pemesanan</th>
                        <th>Jadwal</th>
                        <th>Nomor Kursi</th>
                        <th>Status Pemesanan</th>
                        <th>Status Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemesanans as $pemesanan)
                        <tr>
                            <td>{{ $pemesanan->id_pesan }}</td>
                            <td>{{ $pemesanan->jadwal->tanggal }} - {{ $pemesanan->jadwal->waktu }}</td>
                            <td>{{ $pemesanan->nomor_kursi }}</td>
                            <td>{{ $pemesanan->status_pemesanan }}</td>
                            <td>{{ $pemesanan->status_pembayaran }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>

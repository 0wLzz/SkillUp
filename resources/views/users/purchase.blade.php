<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Langganan Saya</title>
</head>
<body>
    <h1>Langganan Kursus Saya</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama Course</th>
                <th>Status</th>
                <th>Bukti Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
            <tr>
                <td>{{ $purchase->course->title ?? '-' }}</td>
                <td>{{ $purchase->is_verified ? 'Terverifikasi' : 'Belum' }}</td>
                <td>
                    @if($purchase->payment_proof)
                        <a href="{{ asset('storage/' . $purchase->payment_proof) }}" target="_blank">Lihat</a>
                    @else
                        Belum upload
                    @endif
                </td>
                <td>
                    @if(!$purchase->payment_proof)
                    <form action="{{ route('student.uploadPayment', $purchase->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="payment_proof" required>
                        <button type="submit">Upload</button>
                    </form>
                    @else
                        -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

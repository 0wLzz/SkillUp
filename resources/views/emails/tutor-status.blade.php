<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Status Pendaftaran Tutor</title>
</head>
<body>
    <h2>Halo {{ $name }},</h2>

    @if($status === 'approved')
        <p>Selamat! Pendaftaran Anda sebagai tutor telah <strong>DITERIMA</strong>.</p>
        <p>Berikut adalah informasi login Anda:</p>
        <ul>
            <li><strong>Email:</strong> (sama dengan saat registrasi)</li>
            <li><strong>Password:</strong> {{ $password }}</li>
        </ul>
        <p>Silakan login untuk melengkapi profil dan mulai mengajar.</p>
    @elseif($status === 'rejected')
        <p>Maaf, pendaftaran Anda sebagai tutor <strong>TIDAK DITERIMA</strong>.</p>
        <p>Anda bisa mencoba lagi di lain kesempatan. Terima kasih atas minat Anda!</p>
    @endif

    <p>Salam hangat, <br><strong>Tim SkillUp</strong></p>
</body>
</html>

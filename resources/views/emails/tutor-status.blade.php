<!DOCTYPE html>
<html>

<head>
    <title>Status Pendaftaran Tutor</title>
    <style type="text/css">
        /* Base Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333333;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .email-header {
            background-color: #4a6fa5;
            color: white;
            padding: 25px 30px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 600;
        }

        .email-body {
            padding: 30px;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 15px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .status-badge.rejected {
            background-color: #f8d7da;
            color: #721c24;
        }

        .message-box {
            background-color: #f8f9fa;
            border-left: 4px solid #4a6fa5;
            padding: 15px;
            margin: 20px 0;
            font-size: 15px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 13px;
            color: #6c757d;
            border-top: 1px solid #e9ecef;
        }

        .contact-info {
            margin-top: 25px;
            font-size: 14px;
        }

        .signature {
            margin-top: 30px;
            font-style: italic;
        }

        .congratulations {
            color: #155724;
            font-weight: 600;
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Status Pendaftaran Tutor</h1>
        </div>

        <div class="email-body">
            <p>Halo <strong>{{ $name }}</strong>,</p>

            <div class="status-badge {{ $status == 'Rejected' ? 'rejected' : '' }}">
                Status: {{ ucfirst($status) }}
            </div>

            <p>Terima kasih telah meluangkan waktu untuk mengikuti proses seleksi tutor di {{ $company_name }}.</p>

            @if ($status == 'Rejected')
                <div class="message-box">
                    <p>
                        Ini bukan akhir dari perjalanan Anda. Kami sangat mendorong Anda untuk terus mengembangkan
                        keterampilan mengajar dan pengetahuan Anda. Siapa tahu di kesempatan berikutnya, Anda bisa
                        menjadi bagian dari tim kami.
                    </p>
                </div>

                <div class="contact-info">
                    Jika Anda memiliki pertanyaan tentang keputusan ini, jangan ragu untuk menghubungi kami di:<br>
                    <a href="mailto:{{ $contact_email }}">{{ $contact_email }}</a>
                </div>
            @else
                <p>
                    Selamat! Kami dengan senang hati menginformasikan bahwa Anda telah diterima sebagai bagian
                    dari tim tutor kami.</p>
                <p>
                    Prestasi dan kualifikasi yang Anda tunjukkan selama proses seleksi sangat mengesankan kami. Kami
                    yakin Anda akan memberikan kontribusi yang berharga bagi tim kami dan memberikan pengalaman
                    belajar yang luar biasa bagi siswa. Berikut merupakan akun yang bisa kalian gunakan untuk menmbuat
                    materi :
                </p>

                <div class="message-box">
                    <p class="font-bold">
                        Email : {{ $email }} <br>
                        Password : {{ $password }} <br>
                    </p>
                </div>

                <p>Tim HR kami akan segera menghubungi Anda untuk proses onboarding dan informasi lebih lanjut mengenai
                    langkah selanjutnya.</p>
            @endif

            <div class="signature">
                <p>Salam hormat,</p>
                <p><strong>Tim Rekrutmen Tutor</strong><br>
                    {{ $company_name }}</p>
            </div>
        </div>

        <div class="footer">
            © {{ date('Y') }} {{ $company_name }}. All rights reserved.
        </div>
    </div>
</body>

</html>

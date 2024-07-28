<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Akun Anda</title>
</head>
<body>
    <h1>Terima kasih telah mendaftar!</h1>
    <p>Untuk menyelesaikan proses registrasi, silakan klik tautan di bawah ini untuk memverifikasi akun Anda:</p>
    <a href="{{ url('/verify/' . $token) }}">Verifikasi Akun Anda</a>
    <p>Jika Anda tidak mendaftar di aplikasi kami, silakan abaikan email ini.</p>
</body>
</html>

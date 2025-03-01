<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg,rgb(71, 179, 193) 25%, transparent 25%) -50px 0,
                        linear-gradient(45deg,rgb(6, 249, 99) 25%, transparent 25%);
            background-size: 100px 100px;
            background-color:rgb(244, 237, 18);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background: rgba(15, 227, 213, 0.9); /* Semi transparan */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 400px;
        }
        .profile-img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: url('https://cdn-icons-png.flaticon.com/512/149/149071.png') no-repeat center;
            background-size: cover;
            margin: 0 auto 20px;
            border: 6px solid #00bcd4;
        }
        .profile-info {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background:rgb(9, 247, 9);
            border-radius: 8px;
            font-weight: bold;
            color:rgb(6, 18, 10);
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="profile-img"></div>
        <div class="profile-info">Nama: {{ $nama }}</div>
        <div class="profile-info">Kelas: {{ $kelas }}</div>
        <div class="profile-info">NPM: {{ $npm }}</div>
    </div>

</body>
</html>
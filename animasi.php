<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animasi Teks dengan Efek Love dan Glow</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .container {
            position: relative;
            font-size: 50px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 5px;
            z-index: 10;
        }

        .text {
            display: inline-block;
            opacity: 1;
            animation: fadeInText 3s ease-in-out infinite;
            color: #ff66cc;
            text-shadow: 2px 2px 5px rgba(255, 105, 180, 0.6);
        }

        @keyframes fadeInText {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }
            50% {
                opacity: 1;
                transform: translateY(0);
            }
            100% {
                opacity: 0;
                transform: translateY(10px);
            }
        }

        /* Animasi jatuh untuk love dengan efek glow dan pembesaran */
        .heart {
            position: absolute;
            top: -50px;
            font-size: 40px; /* Memperbesar ukuran hati */
            color: #ff66cc;
            text-shadow: 0 0 10px #ff66cc, 0 0 20px #ff66cc, 0 0 30px #ff66cc, 0 0 40px #ff66cc;
            animation: fall 5s infinite ease-in-out;
            opacity: 0;
            transform: rotate(45deg);
        }

        /* Efek salju love yang turun */
        @keyframes fall {
            0% {
                top: -50px;
                opacity: 1;
                transform: rotate(45deg) scale(0.8);
            }
            100% {
                top: 100vh;
                opacity: 0;
                transform: rotate(45deg) scale(1.2);
            }
        }

        /* Membuat love muncul di berbagai posisi secara acak */
        .heart:nth-child(1) {
            left: 10%;
            animation-duration: 5s;
            animation-delay: 0s;
        }

        .heart:nth-child(2) {
            left: 20%;
            animation-duration: 6s;
            animation-delay: 1s;
        }

        .heart:nth-child(3) {
            left: 30%;
            animation-duration: 7s;
            animation-delay: 2s;
        }

        .heart:nth-child(4) {
            left: 40%;
            animation-duration: 5s;
            animation-delay: 3s;
        }

        .heart:nth-child(5) {
            left: 50%;
            animation-duration: 6s;
            animation-delay: 4s;
        }

        .heart:nth-child(6) {
            left: 60%;
            animation-duration: 7s;
            animation-delay: 5s;
        }

        .heart:nth-child(7) {
            left: 70%;
            animation-duration: 8s;
            animation-delay: 6s;
        }

        .heart:nth-child(8) {
            left: 80%;
            animation-duration: 9s;
            animation-delay: 7s;
        }

        .heart:nth-child(9) {
            left: 90%;
            animation-duration: 10s;
            animation-delay: 8s;
        }

        /* Menambah lebih banyak love */
        .heart:nth-child(10) {
            left: 15%;
            animation-duration: 5s;
            animation-delay: 2s;
        }

        .heart:nth-child(11) {
            left: 25%;
            animation-duration: 6s;
            animation-delay: 3s;
        }

        .heart:nth-child(12) {
            left: 35%;
            animation-duration: 7s;
            animation-delay: 4s;
        }

        .heart:nth-child(13) {
            left: 45%;
            animation-duration: 5s;
            animation-delay: 5s;
        }

        .heart:nth-child(14) {
            left: 55%;
            animation-duration: 6s;
            animation-delay: 6s;
        }

        .heart:nth-child(15) {
            left: 65%;
            animation-duration: 7s;
            animation-delay: 7s;
        }

        .heart:nth-child(16) {
            left: 75%;
            animation-duration: 8s;
            animation-delay: 8s;
        }

        .heart:nth-child(17) {
            left: 85%;
            animation-duration: 9s;
            animation-delay: 9s;
        }

        .heart:nth-child(18) {
            left: 95%;
            animation-duration: 10s;
            animation-delay: 10s;
        }

        .heart:nth-child(19) {
            left: 50%;
            animation-duration: 11s;
            animation-delay: 11s;
        }

        .heart:nth-child(20) {
            left: 40%;
            animation-duration: 6s;
            animation-delay: 12s;
        }

    </style>
</head>
<body>
    <!-- Teks utama yang akan dianimasikan -->
    <div class="container">
        <div class="text">I LOVE YOU BUBUUBBBBBBB</div>
    </div>

    <!-- Elemen love (hati) yang akan jatuh -->
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
    <div class="heart">❤️</div>
</body>
</html>

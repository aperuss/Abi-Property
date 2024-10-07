<?php
    require 'function2.php';

    if(isset($_POST["register"])){
        if(registrasi($_POST)>0){
            echo "<script> alert('user berhasil ditambahkan'); </script>";
        } else{
            echo mysqli_error($conn);
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Silkscreen&display=swap" rel="stylesheet" />
    <link rel="icon" href="img/istana.png" type="image/png">
    </svg>
    <script>
        tailwind.config = {

            theme: {
                extend: {
                    spacing: {
                        144: "40rem",
                        100: "35rem",
                        98: "28rem",
                    },
                    colors: {
                        'hejo': '#0A6847',
                    },
                },
            },
        };
    </script>
    <style type="text/tailwindcss">
        body::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Registrasi</h2>
        <form action="" method="post">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Username">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Password">
            </div>
            <div class="mb-6">
                <label for="confirm-password" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password</label>
                <input type="password" id="confirm-password" name="confirm-password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Konfirmasi Password">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" name="register" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Daftar
                </button>
            </div>
            <div class="text-center mt-4">
            <a href="login.php" class="text-blue-500 hover:underline">Sudah mempunyai akun? Login sebagai admin disini</a>
        </div>
        </form>
    </div>
</body>
</html>
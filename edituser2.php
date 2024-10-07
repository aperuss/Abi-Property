<?php 
    session_start(); 
    if(!isset($_SESSION{"login"})){
        header("Location: login.php");
        exit;
    }
        require 'function2.php';
        $id = $_GET["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM web WHERE id = $id")); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit produk</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Silkscreen&display=swap" rel="stylesheet" />
    <link rel="icon" href="img/istana.png" type="image/png">
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
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Input Form Apartemen</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-2 pt-4">Masukan foto apartemen</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 1</label>
                        <input type="file" name="file1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 2</label>
                        <input type="file" name="file2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 3</label>
                        <input type="file" name="file3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="judul" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" placeholder="Masukan Nama Apartemen..." value="<?php echo $user['title']; ?>">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="textInput" name="des_apart" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2  h-64 input-top" placeholder="Masukan Deskripsi Apartemen"><?php echo $user['des_apartemen']; ?></textarea>
            </div>
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-2 pt-3">Masukan foto fasilitas apartemen</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 4</label>
                        <input type="file" name="file4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 5</label>
                        <input type="file" name="file5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 6</label>
                        <input type="file" name="file6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 7</label>
                        <input type="file" name="file7" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 8</label>
                        <input type="file" name="file8" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 9</label>
                        <input type="file" name="file9" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea type="text" name="desk_fas" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-4 h-64" placeholder="Masukan Deskripsi Fasilitas apartemen"><?php echo $user['des_fasilitas']; ?></textarea>
            </div>
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-2">Masukan tipe unit kamar</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 10</label>
                        <input type="file" name="file10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 11</label>
                        <input type="file" name="file11" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 12</label>
                        <input type="file" name="file12" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Nama tipe unit 1</label>
                <input type="text" name="title_tipe1" class="mt-1 block w-82 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" placeholder="masukan nama unit" value="<?php echo $user['title_tipe1']; ?>">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Deskripsi tipe unit 1</label>
                <input type="text" name="desk_tipe1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" placeholder="masukan deskripsi unit" value="<?php echo $user['desk_tipe1']; ?>">
            </div>
            <div class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 13</label>
                        <input type="file" name="file13" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 14</label>
                        <input type="file" name="file14" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 15</label>
                        <input type="file" name="file15" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Nama tipe unit 2</label>
                <input type="text" name="title_tipe2" class="mt-1 block w-82 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" placeholder="masukan nama unit" value="<?php echo $user['title_tipe2']; ?>">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Deskripsi tipe unit 2</label>
                <input type="text" name="desk_tipe2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" placeholder="masukan deskripsi unit" value="<?php echo $user['desk_tipe2']; ?>" 
            </div>
            <div class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 16</label>
                        <input type="file" name="file16" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 17</label>
                        <input type="file" name="file17" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Input Img 18</label>
                        <input type="file" name="file18" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Nama tipe unit 3</label>
                <input type="text" name="title_tipe3" class="mt-1 block w-82 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" placeholder="masukan nama unit" value="<?php echo $user['title_tipe3']; ?>">
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Deskripsi tipe unit 3</label>
                <input type="text" name="desk_tipe3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2" placeholder="masukan deskripsi unit" value="<?php echo $user['desk_tipe3']; ?>">
            </div>
            <div class="flex justify-end">
                <button type="submit" name="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" value="Edit">Edit</button>
            </div>
        </form>
    </div>
</body>
</html>

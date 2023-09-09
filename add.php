<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900">

    <div class="container mx-auto p-8 max-w-md">
        <a href="index.php" class="text-blue-600 dark:text-blue-500 hover:underline text-xl">Kembali</a>

        <form action="add.php" method="POST" name="addUser" class="mt-6">
            <div class="mb-4">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Nama</label>
                <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="Nama" required>
            </div>
            <div class="mb-4">
                <label for="npm" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">NPM</label>
                <input type="text" id="npm" name="npm" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="NPM" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Email</label>
                <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="Jurusan" required>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Gambar</label>
                <input type="text" id="gambar" name="gambar" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="Gambar" required>
            </div>
            <div class="mb-6">
                <button type="submit" name="Submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium text-sm rounded-lg py-2 px-4 focus:outline-none focus:ring focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700 dark:text-white dark:focus:ring-blue-500">Tambah</button>
            </div>
        </form>

        <!-- Handle permintaan POST dari form di atas -->
        <?php
            if(isset($_POST['Submit'])) {
                $nama = $_POST['nama'];
                $npm = $_POST['npm'];
                $email = $_POST['email'];
                $jurusan = $_POST['jurusan'];
                $gambar = $_POST['gambar'];

                // Memanggil koneksi menuju database
                include_once("connection.php");

                // Query untuk insert data ke database
                $result = mysqli_query($mysqli, 
                "INSERT INTO mahasiswa (nama,npm,email,jurusan,gambar) VALUES ('$nama','$npm','$email','$jurusan','$gambar')");

                echo "Berhasil menambah user. <a href='index.php' class='text-blue-600 dark:text-blue-500 hover:underline text-xl'>Lihat User</a>";
            }
        ?>
    </div>

</body>
</html>

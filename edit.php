<?php

include_once("connection.php");

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];

    // Query untuk update data
    $query = mysqli_query($mysqli,
    "UPDATE mahasiswa SET nama='$nama', npm='$npm', email='$email', jurusan='$jurusan', gambar='$gambar' WHERE id='$id' ");

    header('Location: index.php');
}

// Ambil data user
$id = $_GET['id'];

$query = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id='$id'");

while($user_data = mysqli_fetch_array($query)) {
    $nama = $user_data['nama'];
    $npm = $user_data['npm'];
    $email = $user_data['email'];
    $jurusan = $user_data['jurusan'];
    $gambar = $user_data['gambar'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900">

    <div class="container mx-auto p-8 max-w-md">
        <a href="index.php" class="text-blue-600 dark:text-blue-500 hover:underline text-xl">Kembali</a>

        <form action="edit.php" method="POST" name="editUser" class="mt-6">
            <div class="mb-4">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Nama</label>
                <input type="text" id="nama" name="nama" value="<?= $nama ?>" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="Nama">
            </div>
            <div class="mb-4">
                <label for="npm" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">NPM</label>
                <input type="text" id="npm" name="npm" value="<?= $npm ?>" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="NPM">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Email</label>
                <input type="text" id="email" name="email" value="<?= $email ?>" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="Email">
            </div>
            <div class="mb-4">
                <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" value="<?= $jurusan ?>" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="Jurusan">
            </div>
            <div class="mb-4">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-400">Gambar</label>
                <input type="text" id="gambar" name="gambar" value="<?= $gambar ?>" class="bg-gray-50 border border-gray-300 text-gray-800 placeholder-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4 dark:bg-gray-700 dark:border-gray-500 dark:text-gray-300" placeholder="Gambar">
            </div>
            <div class="mb-6">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-600 text-white font-medium text-sm rounded-lg py-2 px-4 focus:outline-none focus:ring focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700 dark:text-white dark:focus:ring-blue-500">Update</button>
            </div>
        </form>
    </div>

</body>
</html>

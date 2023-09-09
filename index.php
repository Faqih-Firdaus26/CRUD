<?php

// Memanggil koneksi menuju database
include_once("connection.php");

// Memanggil data dari database
$result = mysqli_query($mysqli, 'SELECT * FROM mahasiswa');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900">

<div class="container mx-auto p-8">
    <a href="add.php" class="text-blue-600 dark:text-blue-500 hover:underline text-xl">Tambah User</a>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NPM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jurusan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gambar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data = mysqli_fetch_array($result)) :
                ?>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $user_data['nama']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $user_data['npm']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $user_data['email']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $user_data['jurusan']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <img src="img/<?php echo $user_data['gambar']; ?>" width="50" height="50" alt="">
                    </td>
                    <td class="px-6 py-4">
                        <a href="edit.php?id=<?php echo $user_data['id']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                        <a href="delete.php?id=<?php echo $user_data['id']; ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

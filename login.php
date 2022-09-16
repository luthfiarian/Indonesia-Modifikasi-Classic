<?php include 'admin/database/important.php'; include 'admin/database/session_true.php' ?>
<!-- Login Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - IMC</title>
    <link rel="shortcut icon" href="dist/img/favicon.ico" type="image/x-icon">

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="dist/output.css">
</head>
<body>
    <content class="pt-3.5">
        <section class="pt-36 pb-32">
            <div class="container">
                <div class="w-full px-4">
                    <form action="admin/database/auth.php" class="mx-auto bg-slate-500 border-slate-400 rounded-xl shadow-2xl xs:w-full sm:w-full md:w-1/3 lg:w-1/3 max-h-full" method="post">
                        <img class="mx-auto block w-20 py-5" src="https://cdn-icons-png.flaticon.com/512/1057/1057692.png" alt="Logo Login">
                        <label class="block text-lg mb-3 text-center text-white font-semibold" for="username">Nama Pengguna</label>
                        <input type="text" class="block p-2 transition duration-500 mx-auto w-3/5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 text-base focus:ring-blue-500 ease-in-out focus:border-blue-500 dark:bg-gray-700 placeholder:text-center text-center dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="username" placeholder="Nama Pengguna">
                        <label class="block text-lg mb-3 text-center text-white font-semibold" for="password">Kata Sandi</label>
                        <input type="password" class="block p-2 transition duration-500 mx-auto w-3/5 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 text-base focus:ring-blue-500 ease-in-out focus:border-blue-500 dark:bg-gray-700 placeholder:text-center text-center dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" placeholder="******">
                        <input type="submit" name="login" value="Masuk" class="block mx-auto text-base font-semibold text-white bg-primary mt-4 mb-50 py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                        <div class="pb-8"></div>
                </div>
            </div>
        </section>
    </content>
</body>
</html>
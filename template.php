<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenBooks - <?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="index.php" class="font-extrabold my-auto text-transparent text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">OpenBooks</a>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="index.php" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Accueil</a>
                        <a href="books.php" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Livres</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
        <h1 class="mt-3 py-4 mx-auto max-w-md font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 sm:text-lg md:mt-5 md:text-3xl md:max-w-3xl"><?= $title ?></h1> 
        <?= $content ?>
    </main>

</body>
</html>
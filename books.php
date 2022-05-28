<?php 
require_once("models/Book.php");
$bookOne = new Book(1, "La Peste", "Albert Camus", 300, "https://images.unsplash.com/photo-1543002588-bfa74002ed7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80");
$bookTwo = new Book(2, "La P", "Albert Ca", 300, "https://images.unsplash.com/photo-1543002588-bfa74002ed7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80");
$bookThree = new Book(3, "La este", "Albert Cmus", 300, "https://images.unsplash.com/photo-1543002588-bfa74002ed7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80");
$bookFour = new Book(4, "La Pes", "Albert Camus", 300, "https://images.unsplash.com/photo-1543002588-bfa74002ed7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80");


require_once("managers/BooksManager.php");

$booksManager = new BooksManager();
$booksManager->addBook($bookOne);
$booksManager->addBook($bookTwo);
$booksManager->addBook($bookThree);
$booksManager->addBook($bookFour);

ob_start(); 
?>

        <button type="button" class="inline-flex items-center p-2 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-sm">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <span class="font-semibold">Ajouter un livre</span>
        </button>
        <!-- Table -->
        <div class="flex flex-col mt-8">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom du livre</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auteur</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pages</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Editer</span>
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        $books = $booksManager->getBooks();
                        for($i=0; $i < count($books); $i++) :
                         ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <img class="inline-block h-14 w-14 rounded-md" src="<?= $books[$i]->getImagePath() ?>" alt="<?= $books[$i]->getTitle() ?>">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-500"><?= $books[$i]->getTitle() ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-500"><?= $books[$i]->getAuthor() ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-500"><?= $books[$i]->getNbPages() ?></td>
                            <td class="px-6 py-8 flex space-x-4 items-center text-sm font-medium">
                                <a href="#" class="text-yellow-600 hover:text-yellow-900">Editer</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Supprimer</a>
                            </td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
<?php 
$content = ob_get_clean();
$title = "Vos livres disponibles";

require('template.php');
?>
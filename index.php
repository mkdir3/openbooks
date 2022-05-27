<?php ob_start() ?>    
      <!-- Hero -->
      <div class="text-center">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          <span class="block xl:inline">Des livres pour</span>
          <span class="block text-indigo-600 xl:inline">toute la famille 🙌</span>
        </h1>
        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">Cette application est codée en vanilla Php & Javascript car il n'y a rien de mieux que savoir coder un site sans framework!</p>
        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
          <div class="rounded-md shadow">
            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Se connecter </a>
          </div>
          <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10"> S'inscrire </a>
          </div>
        </div>
      </div>
      <!-- Table -->
      <div class="flex flex-col mt-20">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auteur</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ville</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Editer</span>
                    </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">La peste</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Albert Camus</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jParis</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Editer</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">La peste</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Albert Camus</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jParis</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Editer</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">La peste</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Albert Camus</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jParis</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Editer</a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
      </div>
<?php 
$content = ob_get_clean();
$title = "Bienvenue chez OpenBooks";

require('template.php');
?>


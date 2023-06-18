<x-app-layout>
    <x-kwd.panel>

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Категории</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Категории формируют меню сайта </p>
        <a href="{{ route('site.categories.create') }}"
            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
           Добавить
        </a>

        @livewire('dashboard.site.category.index')



    </x-kwd.panel>
</x-app-layout>

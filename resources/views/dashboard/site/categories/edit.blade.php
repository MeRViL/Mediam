<x-app-layout>
    <x-kwd.panel>

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Категории</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Категории формируют меню сайта </p>

        @livewire('dashboard.site.category.form', ['category' => $category])




    </x-kwd.panel>
</x-app-layout>

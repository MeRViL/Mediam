<table {{ $attributes->merge(['class' => 'w-full mt-4 text-sm text-left text-gray-700 dark:text-light']) }} >
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        {{$thead}}
    </thead>
    <tbody>
        {{$tbody}}
    </tbody>
</table>
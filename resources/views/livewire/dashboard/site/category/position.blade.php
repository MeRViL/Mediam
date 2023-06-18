
<tr wire:key="{{$category->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">


    <th class="py-4 w-8 px-6">
        <input type="text" wire:change="changePosition()" wire:model="category.position" placeholder=" "
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
    </th>
    <th class="py-4 px-6">
        {{ $category->name }}
    </th>
    <td class="py-4 px-6">
        {{ $category->slug }}
    </td>
    <td class="py-4 px-6">
        {{ $category->description }}
    </td>
    <td class="py-4 px-6">
        <a href="{{ route('site.categories.edit', $category->id) }}"
            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Изменить</a>
    </td>
</tr>

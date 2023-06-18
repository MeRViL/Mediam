<form wire:submit.prevent="submit">

    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 mb-6 w-full group">
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" wire:change="changeName()" wire:model="category.name" placeholder=" "
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <label for=""
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Наименование
                    </label>
                    @error('category.name')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" wire:model="category.slug" placeholder=" "
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <label for=""
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        slug
                    </label>
                    @error('category.slug')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </div>

        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="public" class="inline-flex relative items-center mb-4 cursor-pointer">
                <input wire:model="category.public" type="checkbox" value="" id="public" class="sr-only peer">
                <div
                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Опубликовано</span>
            </label>
        </div>

        <div class="relative z-0 mb-6 w-full group">

            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">

                    <select wire:model="category.parent_id"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option 
                            value=" ">Нет родительской категории</option>
                        @foreach ($categories as $item)
                            <option {{ $category->category_id, $item->id ? 'selected' : '' }}
                                value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <label for="countries"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Выберите
                        родительскую категорию</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" wire:model="category.url" placeholder=" "
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <label for=""
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            URL
                        </label>
                        @error('category.url')
                            <span class="error">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
            </div>
        </div>
        
        <div class="relative z-0 mb-6 w-full group">
            <label for="default-toggle" class="inline-flex relative items-center mb-4 cursor-pointer">
                <input type="checkbox" wire:model="category.in_menu" id="default-toggle" class="sr-only peer">
                <div
                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">В меню</span>
            </label>
        </div>
        <div class="relative z-0 mb-6 w-full group">

            @if ($smal_image)
                <div class="flex justify-center items-center h-20 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
                    <img class="max-h-20" src="{{ $smal_image->temporaryUrl() }}">
                </div>
            @elseif($category->smal_image)
                <div class="flex justify-center items-center  h-20 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
                    <img class="max-h-20" src="{{ asset($category->smal_image->url) }}">
                </div>
            @else
                <div class="flex justify-center items-center h-20 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
                    <svg class="w-12 h-12 text-gray-200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        fill="currentColor" viewBox="0 0 640 512">
                        <path
                            d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006 486.1 .0006 456.1L0 456.1z" />
                    </svg>
                </div>
            @endif
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="smal_image">маленькая картинка</label>
            <input
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="smal_image" id="smal_image" wire:model="smal_image" type="file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="smal_image"></div>
            @error('smal_image')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative z-0 mb-6 w-full group">
            @if ($big_image)
                <div class="flex justify-center items-center h-20 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
                    <img class="max-h-20" src="{{ $big_image->temporaryUrl() }}">
                </div>
            @elseif($category->big_image)
                <div class="flex justify-center items-center  h-20 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
                    <img class="max-h-20" src="{{ asset($category->big_image->url) }}">
                </div>
            @else
                <div class="flex justify-center items-center h-20 bg-gray-300 rounded sm:w-96 dark:bg-gray-700">
                    <svg class="w-12 h-12 text-gray-200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        fill="currentColor" viewBox="0 0 640 512">
                        <path
                            d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006 486.1 .0006 456.1L0 456.1z" />
                    </svg>
                </div>
            @endif
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                for="big_image">Большая картинка</label>
            <input
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="big_image" id="big_image" wire:model="big_image" type="file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="big_image"></div>
            @error('category.big_image')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="description"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Описание</label>
            <textarea wire:model="category.description" name="description" rows="4"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "></textarea>
        </div>

        <div class="relative z-0 mb-6 w-full group">
            <label for="key-words"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ключевые
                слова</label>
            <textarea wire:model="category.key_words" name="key-words" rows="4"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "></textarea>
        </div>
    </div>



    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

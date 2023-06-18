<x-app-layout>
    <x-kwd.panel>

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Платежи</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
        <div class="flex mt-10 ">
            <aside class="w-64 text-gray-900 bg-gray-100 dark:bg-dark dark:text-light" aria-label="Sidebar">
                <div class="overflow-y-auto py-4 px-3  rounded ">
                    <ul class="space-y-2">  
                        <li>
                            <div class="relative z-0 mb-6 w-full group">
                                <label for="base-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-light">Base
                                    input</label>
                                <input list="courses" name="course" id="course"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-darker dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <datalist id="courses"
                                    class="w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-darker">
                                    <option value="Java"> </option>
                                    <option value="C++"></option>
                                    <option value="Python"></option>
                                    <option value="DSA"></option>

                                </datalist>
                            </div>
                        </li>
                        <li>
                            <label for="base-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-light">
                                Статусы
                            </label>
                            <fieldset>
                                <legend class="sr-only">Checkbox variants</legend>

                                <div class="flex items-center mb-4">
                                    <input checked="" id="checkbox-1" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-darker dark:border-gray-600">
                                    <label for="checkbox-1"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-light">
                                        Подготовлен
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="checkbox-2" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-darker dark:border-gray-600">
                                    <label for="checkbox-2"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-light">Отправлен</label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="checkbox-3" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-darker dark:border-gray-600">
                                    <label for="checkbox-3"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-light">Подписан</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="checkbox-3" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-darker dark:border-gray-600">
                                    <label for="checkbox-3"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-light">Отменен</label>
                                </div>




                                
                            </fieldset>

                        </li>

                        <li>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">

                                Начало периода
                            </label>
                            <div class="relative">

                                <input type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-darker dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                        </li>
                        <li>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">

                                Конец периода
                            </label>
                            <div class="relative">

                                <input type="date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-darker dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date">
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </x-kwd.panel>
    @section('css')
        <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
    @endsection
</x-app-layout>

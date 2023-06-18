@php
$ld = Carbon\Carbon::now()
    ->subMonth(2)
    ->endOfMonth()->day;
$sd = Carbon\Carbon::now()
    ->subMonth(2)
    ->startOfMonth()->dayOfWeek;
$tr = intdiv($ld, 7);
if ($ld != 28) {
    $tr++;
}
$d = 1;

$start = Carbon\Carbon::now()
    ->subMonth()
    ->startOfMonth()
    ->subDay($sd - 1);
//dd($satrt);
@endphp
<x-app-layout>
    <x-kwd.panel>

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Календарь </h5>

        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Auth()->user()->name }}</p>
        <div class="flex mt-10 ">
            <aside class="w-64" aria-label="Sidebar">
                <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
                    <ul class="space-y-2">
                        <li>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                
                                Выберите сотрудника
                            </label>
                            
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>France</option>
                                <option>Germany</option>
                            </select>
                        </li>
                        <li>
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                
                                Выберите проект
                            </label>
                            
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>France</option>
                                <option>Germany</option>
                            </select>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                               <span class="ml-3">Добавить задачу</span>
                            </a>
                         </li>
                    </ul>
                </div>
            </aside>

            <div class="w-full px-4 ">
                <div class="wrapper  rounded shadow w-full ">
                    <div class="header flex justify-between border-b p-2">
                        <span class="text-lg font-bold">
                            {{ $start->year }} {{ $start->locale('ru')->monthName }}
                        </span>
                        <div class="buttons">
                            <button class="p-1">
                                <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16"
                                    class="bi bi-arrow-left-circle" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z" />
                                </svg>
                            </button>
                            <button class="p-1">
                                <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16"
                                    class="bi bi-arrow-right-circle" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                                    <span class="xl:block lg:block md:block sm:block hidden">Sunday</span>
                                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sun</span>
                                </th>
                                <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                                    <span class="xl:block lg:block md:block sm:block hidden">Monday</span>
                                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mon</span>
                                </th>
                                <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                                    <span class="xl:block lg:block md:block sm:block hidden">Tuesday</span>
                                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Tue</span>
                                </th>
                                <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                                    <span class="xl:block lg:block md:block sm:block hidden">Wednesday</span>
                                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Wed</span>
                                </th>
                                <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                                    <span class="xl:block lg:block md:block sm:block hidden">Thursday</span>
                                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Thu</span>
                                </th>
                                <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                                    <span class="xl:block lg:block md:block sm:block hidden">Friday</span>
                                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Fri</span>
                                </th>
                                <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                                    <span class="xl:block lg:block md:block sm:block hidden">Saturday</span>
                                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sat</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= $tr; $i++)
                                <tr class="text-center h-20">
                                    @for ($ii = 1; $ii <= 7; $ii++)
                                        <td
                                            class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer dark:hover:ring-offset-dark dark:border-gray-700 duration-500 ease hover:bg-gray-300 ">
                                            <div
                                                class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                                <div class="top h-5 w-full">
                                                    <span class="text-gray-500 ">{{ $start->day }}</span>
                                                </div>
                                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                                    <div
                                                    class="event bg-white dark:bg-darker  rounded p-1 text-sm mb-1">
                                                        <span class="event-name">
                                                            Meeting
                                                        </span>


                                                        <span class="time">
                                                            12:00~14:00
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="event bg-white dark:bg-darker   rounded p-1 text-sm mb-1 ">
                                                        <span class="event-name">
                                                            Meeting
                                                        </span>
                                                        <span class="time">
                                                            18:00~20:00
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="event bg-white dark:bg-darker   rounded p-1 text-sm mb-1 ">
                                                        <span class="event-name">
                                                            Добавить
                                                        </span>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        @php
                                            $start = $start->addDay(1);
                                        @endphp
                                    @endfor
                                </tr>
                            @endfor



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-kwd.panel>
</x-app-layout>

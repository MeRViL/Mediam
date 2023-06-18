<div>
    <!-- Dashboards links -->
    <div x-data="{ {{ request()->routeIs('admin.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Панель администратора </span>
            <span class="ml-auto" aria-hidden="true">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="{{ route('admin.user.index') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('admin.user.*') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Пользователи
            </a>
            <a href="{{ route('admin.role.index') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('admin.role.*') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Роли
            </a>

        </div>
    </div>

    <div x-data="{ {{ request()->routeIs('my.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Панель управления </span>
            <span class="ml-auto" aria-hidden="true">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="{{ route('my.entity') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('my.entity') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Моя организация
            </a>
            <a href="{{ route('my.profile') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('my.profile') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Мой профиль
            </a>
            <a href="{{ route('my.settings') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('my.settings') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Настройки
            </a>
        </div>
    </div>

    <!-- Components links -->
    <div x-data="{ {{ request()->routeIs('project.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Проекты </span>
            <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="{{ route('project.projects.index') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('project.projects.*') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Проекты и задачи
            </a>
            <a href="{{ route('project.calendar') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('project.calendar') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Календарь
            </a>

        </div>
    </div>
    <div x-data="{ {{ request()->routeIs('finance.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Финансы </span>
            <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="{{ route('finance.payments.index') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('finance.payments.*') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Платежи
            </a>
            <a href="{{ route('finance.revise') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('finance.revise') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Акт сверки
            </a>

        </div>
    </div>

    <!-- Pages links -->
    <div x-data="{ {{ request()->routeIs('documents.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Документы </span>
            <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Pages">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="../pages/blank.html" role="menuitem"
                class="block p-2 text-sm text-gray-700 dark:text-light transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                Входящие документы
            </a>
            <a href="../pages/404.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 dark:text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Исходящие документы
            </a>
            <a href="../pages/500.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 dark:text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Внутренние документы
            </a>

        </div>
    </div>

    <!-- Authentication links -->
    <div x-data="{ {{ request()->routeIs('catalog.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Каталог </span>
            <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="../auth/register.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Товары
            </a>
            <a href="../auth/login.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Услуги
            </a>

        </div>
    </div>

    <!-- Layouts links -->
    <div x-data="{ {{ request()->routeIs('personnel.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Кадры </span>
            <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Layouts">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="../layouts/two-columns-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Сотрудники
            </a>
            <a href="../layouts/mini-plus-one-columns-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Структура и штатная численность
            </a>
            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Графики работы
            </a>
            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Зарплата
            </a>
            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Должностные (рабочие) инструкции
            </a>
            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Положение о структурном подразделении
            </a>
            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Правила внутреннего трудового распорядка
            </a>
        </div>
    </div>
    <div x-data="{ {{ request()->routeIs('handbook.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Справочники </span>
            <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Layouts">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="../layouts/two-columns-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Банки
            </a>
            <a href="../layouts/mini-plus-one-columns-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Юридические лица
            </a>
            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Физические лица
            </a>
            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Страны
            </a>
            <a href="../layouts/mini-column-sidebar.html" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Единицы измерения
            </a>
        </div>
    </div>
    <div x-data="{ {{ request()->routeIs('site.*') ? 'isActive: true, open: true' : 'isActive: false, open: false' }} }">
        <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
        <a href="#" @click="$event.preventDefault(); open = !open"
            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
            :class="{ 'bg-primary-100 dark:bg-primary': isActive || open }" role="button" aria-haspopup="true"
            :aria-expanded="(open || isActive) ? 'true' : 'false'">
            <span aria-hidden="true">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>
            </span>
            <span class="ml-2 text-sm"> Сайт </span>
            <span aria-hidden="true" class="ml-auto">
                <!-- active class 'rotate-180' -->
                <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Layouts">
            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
            <a href="{{ route('site.settings.show') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('site.settings.*') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Настройки
            </a>
            <a href="{{ route('site.sliders.index') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('site.sliders.*') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Слайдеры
            </a>
            <a href="{{ route('site.categories.index') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('site.categories.*') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Категории
            </a>
            <a href="{{ route('site.posts.index') }}" role="menuitem"
                class="block p-2 text-sm {{ request()->routeIs('site.posts.*') ? 'text-gray-700 dark:text-light' : 'text-gray-400 dark:text-gray-400' }} transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                Страницы
            </a>
            <a href="#" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Сообщения
            </a>
            <a href="#" role="menuitem"
                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                Коментарии
            </a>
        </div>
    </div>
</div>

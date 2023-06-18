<div>
    <button @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })" type="button"
        aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'"
        class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
        <span class="sr-only">User menu</span>
        <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="Ahmed Kamel" />
    </button>
    <div x-show="open" x-transition:enter="transition-all transform ease-out"
        x-transition:enter-start="translate-y-1/2 opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition-all transform ease-in" x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false"
        class="absolute right-0 w-48 py-1 origin-top-right bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark"
        role="menu" aria-orientation="vertical" aria-label="User menu">
        <a href="{{ route('profile.show') }}" role="menuitem"
            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
            Профиль {{ Auth::user()->name }}
        </a>
        <a href="#" role="menuitem"
            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
            Settings
        </a>
        {{-- <a href="#" role="menuitem"
            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
            Logout
        </a> --}}
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                     @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </x-jet-dropdown-link>
        </form>
    </div>
</div>

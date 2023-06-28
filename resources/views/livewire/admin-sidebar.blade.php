<div class="relative w-1/5 max-w-md border-r border-gray-900">
    <!-- Panel content -->
    <div class="h-full flex flex-col bg-indigo-700 shadow-xl overflow-y-auto">
        <!-- Panel header -->
        <header class="px-1 sm:px-2 bg-indigo-900 py-3">
            <div class="flex items-start justify-between">
                <h2 class="text-lg font-medium text-gray-100" id="side-bar-title">
                    Menu
                </h2>
            </div>
        </header>

        <!-- Panel body -->
        <article class="relative flex-1">
            <div class="absolute inset-0">
                <div class="h-full border-gray-900" aria-hidden="true">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-dropdown-link href="{{ route('logout') }}" class="block py-2 text-gray-100 hover:bg-gray-800 hover:text-gray-100"
                                 @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </article>

        <!-- Panel footer -->
        <footer class="flex-shrink-0 py-1">
            <div class="flex justify-start px-2 text-gray-500">&copy; {{ date('Y') }} All rights reserved.</div>
        </footer>
    </div>
</div>

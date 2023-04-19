<div class="flex justify-between items-center space-x-4 w-full p-4">
    <nav class="py-3 rounded-md w-full">
        <ol class="list-reset flex">
            <li>
                <a href="/{{ $href }}" class="text-blue-600 hover:text-blue-700 flex space-x-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <span>{{ $title }}</span>
                </a>
            </li>
            <li><span class="text-gray-500 mx-2">/</span></li>
            <li class="text-gray-500">{{ $slot }}</b></li>
        </ol>
    </nav>
</div>

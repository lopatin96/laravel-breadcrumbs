<div class="flex justify-between items-center w-full p-4">
    <nav class="py-3 rounded-md w-full">
        <ol class="flex space-x-2">
            @foreach($breadcrumbs as $breadcrumb)
                @isset($breadcrumb['route'])
                    <li>
                        <a href="/{{ $breadcrumb['route'] }}" class="text-link flex space-x-1 items-center">
                            @if($loop->first)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                                </svg>
                            @endif
                            <span>{!! $breadcrumb['title'] !!}</span>
                        </a>
                    </li>
                @else
                    <li class="text-gray-500">{!! $breadcrumb['title'] !!}</li>
                @endisset

                @if(! $loop->last)
                    <li class="text-gray-500">/</li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>

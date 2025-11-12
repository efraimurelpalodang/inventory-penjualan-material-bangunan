@props(['href' => '#', 'icon', 'label', 'hasDropdown' => false, 'isActive' => false])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => '
        flex items-center justify-between
        px-4 py-2 text-sm
        transition-colors duration-200
        hover:bg-gray-100
        rounded-md
        group
        ' . ($isActive ? 'font-semibold text-blue-600 bg-gray-50' : 'text-gray-600')
    ]) }}
>
    <div class="flex items-center">
        <span class="mr-3">
            @if(isset($icon))
                {{ $icon }}
            @else
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            @endif
        </span>
        <span>{{ $label }}</span>
    </div>

    @if ($hasDropdown)
        <svg class="w-4 h-4 ml-2 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    @endif
</a>
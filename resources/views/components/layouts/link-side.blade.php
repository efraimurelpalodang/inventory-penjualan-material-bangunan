<a href="{{ Route::has($href) ? route($href) : url($href) }}"
    {{ $attributes->merge([
        'class' =>
            '
            flex items-center justify-between
            px-4 py-2 text-sm
            transition-colors duration-200
            rounded-md
            group
            ' . ($isActive ? 'text-white bg-blue-500 rounded-md hover:bg-blue-600' : 'text-gray-600 hover:bg-gray-100'),
    ]) }}>
    <div class="flex items-center">
        <span class="mr-3">
            {{ $icon ?? '' }}
        </span>
        <span>{{ $label }}</span>
    </div>

    @if ($hasDropdown)
        <svg class="w-4 h-4 ml-2 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    @endif
</a>

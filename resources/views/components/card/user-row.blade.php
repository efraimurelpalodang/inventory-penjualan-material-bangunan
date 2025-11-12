@props(['avatar', 'name', 'email', 'status'])

<div
    class="flex items-center justify-between py-2 px-3 rounded-md hover:bg-gray-50 transition-colors duration-200">
    <div class="flex items-center">
        <img class="w-8 h-8 rounded-full object-cover" src="{{ $avatar }}" alt="{{ $name }}">
        <div class="ml-3">
            <p class="text-sm font-medium text-gray-800">{{ $name }}</p>
            <p class="text-xs text-gray-500">{{ $email }}</p>
        </div>
    </div>
    <span @class([
        'text-xs font-semibold px-2 py-1 rounded-full',
        'bg-green-200 text-green-600' => $status === 'Enabled',
        'bg-gray-100 text-gray-600' => $status !== 'Enabled',
    ])>
        {{ $status }}
    </span>
</div>

@props([
    'name',
    'email',
    'status' => 'Enabled', 
    'avatarUrl' => 'https://i.pravatar.cc/150?img=1' 
])

@php
    // Tentukan warna badge berdasarkan status
    $statusColor = ($status === 'Enabled')
        ? 'bg-green-100 text-green-800'
        : 'bg-gray-100 text-gray-600';
@endphp

<div class="flex items-center space-x-3 py-2">
    <div class="shrink-0">
        <img class="w-10 h-10 rounded-full object-cover" src="{{ $avatarUrl }}" alt="Avatar of {{ $name }}">
    </div>

    <div class="flex-1 min-w-0">
        <p class="text-sm font-semibold text-gray-900 truncate">
            {{ $name }}
        </p>
        <p class="text-xs text-gray-500 truncate">
            {{ $email }}
        </p>
    </div>

    <div class="shrink-0">
        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium {{ $statusColor }}">
            {{ $status }}
        </span>
    </div>
</div>
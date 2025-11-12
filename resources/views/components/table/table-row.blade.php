{{-- x-admin-table-row.blade.php --}}

@props(['user'])

<tr>
    <td class="px-6 py-3 whitespace-nowrap">
        <div class="flex items-center">
            {{-- Avatar --}}
            <img class="h-8 w-8 rounded-full object-cover"
                src="{{ $user['avatar_url'] ?? 'https://via.placeholder.com/150' }}" alt="{{ $user['name'] }} avatar">
            <div class="ml-3">
                <p class="font-medium text-gray-900">{{ $user['name'] }}</p>
            </div>
        </div>
    </td>
    <td class="px-6 py-3 whitespace-nowrap hidden sm:table-cell text-gray-500">
        {{ $user['email'] }}
    </td>
    <td class="px-6 py-3 whitespace-nowrap text-gray-900">
        {{ $user['role'] }}
    </td>
    <td class="px-6 py-3 whitespace-nowrap hidden md:table-cell text-gray-500">
        {{ $user['access'] }}
    </td>
    <td class="px-6 py-3 whitespace-nowrap">
        {{-- Logic Status Badge --}}
        @php
            $status = $user['status'];
            $color = $status === 'Enabled' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-600';
        @endphp

        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $color }}">
            {{ $status }}
        </span>
    </td>
    <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
        <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
            {{-- Menu Icon (Three Dots) --}}
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                </path>
            </svg>
        </button>
    </td>
</tr>

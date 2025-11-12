@props([
    'nama' => 'Administrators',
    'breadcrumbs' => [
        ['name' => 'Settings', 'url' => '#'],
        ['name' => 'Admin Panel', 'url' => '#'],
        ['name' => 'Administrators', 'url' => null, 'current' => true],
    ],
])

<div class="pl-6 py-2 bg-white border-b border-gray-200 fixed left-64 right-0 top-0">
    <div class="flex items-center justify-between">
        <div class="flex flex-col">
            {{-- Judul (menggunakan $title prop) --}}
            <h1 class="text-xl font-bold text-gray-800">Selamat Datang, {{ $nama }}</h1>

            {{-- Breadcrumbs (melakukan looping pada $breadcrumbs prop) --}}
            <div class="text-sm text-gray-500 mt-1">
                @foreach ($breadcrumbs as $index => $item)
                    @if (isset($item['current']) && $item['current'])
                        {{-- Item aktif (tanpa link) --}}
                        <span class="font-medium text-gray-700">{{ $item['name'] }}</span>
                    @else
                        {{-- Item dengan link --}}
                        <a href="{{ $item['url'] }}" class="hover:text-gray-700">{{ $item['name'] }}</a>
                    @endif

                    {{-- Separator (jika bukan item terakhir) --}}
                    @unless ($loop->last)
                        <span class="mx-1 text-gray-400">›</span>
                    @endunless
                @endforeach
            </div>
        </div>
    </div>
</div>

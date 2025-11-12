<div class="flex flex-col w-64 bg-white h-screen fixed">

    <div class="p-4 flex items-center justify-between h-16 border-gray-300 mx-4 border-b">
        <div class="flex items-center">
            <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center">
                <span class="font-bold text-white text-lg">V</span>
            </div>
            <div class="ml-3">
                <p class="text-lg font-semibold text-gray-800">VANTUS</p>
                <p class="text-xs text-gray-500">ERP Solution</p>
            </div>
        </div>
    </div>

    <div class="flex-1 overflow-y-auto p-4 flex flex-col justify-between">

        <div>
            <p class="uppercase text-xs font-semibold text-gray-500 tracking-wider mb-2">MAIN</p>

            <div class="space-y-1">
                @foreach ($menuItems as $item)
                    <x-layouts.link-side :label="$item['label']" :href="$item['href']">
                        <x-slot name="icon">{!! $item['icon'] !!}</x-slot>
                    </x-layouts.link-side>
                @endforeach
            </div>
        </div>

        <div class="mt-8">
            <hr class="border-t border-gray-200 mb-4">

            <p class="uppercase text-xs font-semibold text-gray-500 tracking-wider mb-2">MASTER DATA</p>

            <div class="space-y-1">
                <x-layouts.link-side label="Sales">
                    <x-slot name="icon">
                        <x-asets.svg-person-geer></x-asets.svg-person-geer>
                    </x-slot>
                </x-layouts.link-side>
                <x-layouts.link-side label="Inventory">
                    <x-slot name="icon">
                        <x-asets.svg-person-geer></x-asets.svg-person-geer>
                    </x-slot>
                </x-layouts.link-side>
                <x-layouts.link-side label="Admin Gudang">
                    <x-slot name="icon">
                        <x-asets.svg-person-geer></x-asets.svg-person-geer>
                    </x-slot>
                </x-layouts.link-side>
            </div>
        </div>

        <div class="mt-8 p-3 border-t">
            <a href="#" class="flex items-center justify-between group">
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full object-cover"
                        src="https://ui-avatars.com/api/?name=Emma+Johnson&background=1d4ed8&color=fff"
                        alt="Emma Johnson">
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-800">Emma Johnson</p>
                        <p class="text-xs text-blue-500">design@opondoo.com</p>
                    </div>
                </div>
                <svg class="w-4 h-4 ml-2 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

    </div>
</div>

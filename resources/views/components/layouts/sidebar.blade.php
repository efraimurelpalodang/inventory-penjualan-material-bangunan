<div class="flex flex-col w-64 bg-white h-screen shadow-lg fixed">

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
                    <x-layouts.link-side label="{{ $item['label'] }}" :has-dropdown="$item['hasDropdown']">
                        <x-slot name="icon">{!! $item['icon'] !!}</x-slot>
                    </x-layouts.link-side>
                @endforeach
            </div>
        </div>

        <div class="mt-8">
            <hr class="border-t border-gray-200 mb-4">

            <p class="uppercase text-xs font-semibold text-gray-500 tracking-wider mb-2">OTHERS</p>

            <div class="space-y-1">
                <a href="#"
                    class="flex items-center px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Settings</span>
                </a>

                <x-layouts.link-side label="Support">
                    <x-slot name="icon">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.752 11.168l-3.197 3.197m0 0v1.082a.5.5 0 00.866.413l1.83-1.054m-1.83 1.054L9.805 13.5m4.947 1.135a.5.5 0 00.5.5H18a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2h3.586a.5.5 0 00.354-.146z">
                            </path>
                        </svg>
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

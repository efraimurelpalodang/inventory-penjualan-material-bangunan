<div class="flex flex-col w-64 bg-white dark:bg-gray-900 border-r dark:border-gray-700 h-screen shadow-lg">

    <div class="p-4 flex items-center justify-between h-16 border-b dark:border-gray-700">
        <div class="flex items-center">
            <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center">
                <span class="font-bold text-white text-lg">V</span>
            </div>
            <div class="ml-3">
                <p class="text-lg font-semibold text-gray-800 dark:text-white">VANTUS</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">ERP Solution</p>
            </div>
        </div>
        <button
            class="w-6 h-6 rounded-full border dark:border-gray-600 text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-800 flex items-center justify-center">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <div class="flex-1 overflow-y-auto p-4 flex flex-col justify-between">

        <div>
            <p class="uppercase text-xs font-semibold text-gray-500 dark:text-gray-400 tracking-wider mb-2">MAIN</p>

            <div class="space-y-1">
                <x-layouts.link-side label="Dashboard" :is-active="true">
                    <x-slot name="icon">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354l-4.243 4.243a1 1 0 00-.293.707v7.586a1 1 0 001 1h8a1 1 0 001-1v-7.586a1 1 0 00-.293-.707L12 4.354zM12 4v4m-4 8h8">
                            </path>
                        </svg>
                    </x-slot>
                </x-layouts.link-side>

                <x-layouts.link-side label="Accounting" :has-dropdown="true">
                    <x-slot name="icon">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z">
                            </path>
                        </svg>
                    </x-slot>
                </x-layouts.link-side>

                @php
                    $menuItems = [
                        [
                            'label' => 'Purchasing',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>',
                            'hasDropdown' => true,
                        ],
                        [
                            'label' => 'Sales',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-2.485 0-4 .99-4 2.22V15a2 2 0 002 2h4a2 2 0 002-2v-4.78c0-1.23-1.515-2.22-4-2.22zM12 8V4m0 4h4m-4 0H8"></path></svg>',
                            'hasDropdown' => true,
                        ],
                        [
                            'label' => 'POS',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>',
                            'hasDropdown' => false,
                        ],
                        [
                            'label' => 'Inventory',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m-8-4v10l8 4m-8-4l8-4m8 4v10l-8 4m8-4l-8-4M12 18v-4"></path></svg>',
                            'hasDropdown' => true,
                        ],
                        [
                            'label' => 'Manufacturing',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>',
                            'hasDropdown' => false,
                        ],
                        [
                            'label' => 'Logistics',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17H5a2 2 0 01-2-2V5a2 2 0 012-2h8a2 2 0 012 2v2m-6 4l4 4m0 0l-4 4m4-4H5"></path></svg>',
                            'hasDropdown' => true,
                        ],
                        [
                            'label' => 'Human Resources',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm0 13a4 4 0 01-8 0h8z"></path></svg>',
                            'hasDropdown' => true,
                        ],
                        [
                            'label' => 'Contacts',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 19h2a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2h2M7 19h10v-2H7m10-4H7m4-4h2"></path></svg>',
                            'hasDropdown' => false,
                        ],
                        [
                            'label' => 'Reporting',
                            'icon' =>
                                '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 4h8a2 2 0 002-2v-6a2 2 0 00-2-2h-2a2 2 0 00-2 2v6a2 2 0 002 2z"></path></svg>',
                            'hasDropdown' => true,
                        ],
                    ];
                @endphp

                @foreach ($menuItems as $item)
                    <x-layouts.link-side label="{{ $item['label'] }}" :has-dropdown="$item['hasDropdown']">
                        <x-slot name="icon">{!! $item['icon'] !!}</x-slot>
                    </x-layouts.link-side>
                @endforeach
            </div>
        </div>

        <div class="mt-8">
            <hr class="border-t border-gray-200 dark:border-gray-700 my-4">

            <p class="uppercase text-xs font-semibold text-gray-500 dark:text-gray-400 tracking-wider mb-2">OTHERS</p>

            <div class="space-y-1">
                <a href="#"
                    class="flex items-center px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600 transition-colors duration-200">
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

        <div class="mt-8 p-3 border-t dark:border-gray-700">
            <a href="#" class="flex items-center justify-between group">
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full object-cover"
                        src="https://ui-avatars.com/api/?name=Emma+Johnson&background=1d4ed8&color=fff"
                        alt="Emma Johnson">
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-gray-800 dark:text-white">Emma Johnson</p>
                        <p class="text-xs text-blue-500 dark:text-blue-400">design@opondoo.com</p>
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

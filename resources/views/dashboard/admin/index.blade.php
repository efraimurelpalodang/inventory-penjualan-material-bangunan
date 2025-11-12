@extends('layout.app')
@section('title', 'Dashboard')
@section('content')
    <x-layouts.header nama="Administrator" :breadcrumbs="[
        ['name' => 'Home', 'url' => url('/dashboard')],
        ['name' => 'Dashboard', 'url' => null, 'current' => true],
    ]" />
    <div class="p-4 bg-gray-100 min-h-screen grid grid-cols-1 gap-3 mt-16">

        <div class="p-6 bg-white rounded-xl border border-gray-100">

            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-700 flex gap-2 items-center mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                        Administrators
                    </h2>
                    <p class="text-sm text-gray-500">Access is based on role: Super Admin, Manager, or Accountant. Each role
                        unlocks specific menus and features.</p>
                </div>
                <button
                    class="flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-lg hover:bg-blue-600 transition duration-150 hover:cursor-pointer">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add Member
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="w-full p-4 rounded-lg border border-gray-100 flex flex-col justify-between">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-900">Sales</h3>
                        <button
                            class="text-sm font-semibold text-gray-500 hover:cursor-pointer transition duration-150 ease-in-out border px-3 py-1 rounded-sm border-gray-300">See
                            All</button>
                    </div>
                    <div class="grow space-y-2 mb-4">
                        <x-card.role-card name="Lila Thompson" email="lila.thompson@gmail.com" status="Enabled"
                            avatarUrl="https://i.pravatar.cc/150?img=2" />
                        <x-card.role-card name="Mia Johnson" email="mia.johnson.work@gmail.com" status="Enabled"
                            avatarUrl="https://i.pravatar.cc/150?img=3" />
                        <x-card.role-card name="Olivia Brown" email="olivia.brown.mail@gmail.com" status="Disabled"
                            avatarUrl="https://i.pravatar.cc/150?img=4" />
                    </div>

                    <div class="mt-auto pt-3 border-t border-gray-200 text-center">
                        <button
                            class="w-full inline-flex items-center justify-center text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-lg transition duration-150 ease-in-out hover:cursor-pointer">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Manage
                        </button>
                    </div>
                </div>
                <div class="w-full p-4 rounded-lg border border-gray-100 flex flex-col justify-between">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-900">Admin Gudang</h3>
                        <button
                            class="text-sm font-semibold text-gray-500 hover:cursor-pointer transition duration-150 ease-in-out border px-3 py-1 rounded-sm border-gray-300">See
                            All</button>
                    </div>
                    <div class="grow space-y-2 mb-4">
                        <x-card.role-card name="Lila Thompson" email="lila.thompson@gmail.com" status="Enabled"
                            avatarUrl="https://i.pravatar.cc/150?img=2" />
                        <x-card.role-card name="Mia Johnson" email="mia.johnson.work@gmail.com" status="Enabled"
                            avatarUrl="https://i.pravatar.cc/150?img=3" />
                        <x-card.role-card name="Olivia Brown" email="olivia.brown.mail@gmail.com" status="Disabled"
                            avatarUrl="https://i.pravatar.cc/150?img=4" />
                    </div>

                    <div class="mt-auto pt-3 border-t border-gray-200 text-center">
                        <button
                            class="w-full inline-flex items-center justify-center text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-lg transition duration-150 ease-in-out hover:cursor-pointer">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Manage
                        </button>
                    </div>
                </div>
                <div class="w-full p-4 rounded-lg border border-gray-100 flex flex-col justify-between">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-900">Inventory</h3>
                        <button
                            class="text-sm font-semibold text-gray-500 hover:cursor-pointer transition duration-150 ease-in-out border px-3 py-1 rounded-sm border-gray-300">See
                            All</button>
                    </div>
                    <div class="grow space-y-2 mb-4">
                        <x-card.role-card name="Lila Thompson" email="lila.thompson@gmail.com" status="Enabled"
                            avatarUrl="https://i.pravatar.cc/150?img=2" />
                        <x-card.role-card name="Mia Johnson" email="mia.johnson.work@gmail.com" status="Enabled"
                            avatarUrl="https://i.pravatar.cc/150?img=3" />
                        <x-card.role-card name="Olivia Brown" email="olivia.brown.mail@gmail.com" status="Disabled"
                            avatarUrl="https://i.pravatar.cc/150?img=4" />
                    </div>

                    <div class="mt-auto pt-3 border-t border-gray-200 text-center">
                        <button
                            class="w-full inline-flex items-center justify-center text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-lg transition duration-150 ease-in-out hover:cursor-pointer">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Manage
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <x-table.main-table></x-table.main-table>
    </div>
@endsection

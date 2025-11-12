<div class="overflow-x-auto bg-white rounded-lg border border-gray-200 p-3">

    {{-- Header dan Search --}}
    <div class="p-4 flex items-center justify-between border-b">
        <h3 class="text-lg font-semibold text-gray-700">Administrator Accounts</h3>
        <div class="flex items-center space-x-2">
            <input type="text" placeholder="Search..."
                class="p-2 border border-gray-300 rounded-lg text-sm focus:ring-indigo-200 focus:border-indigo-200 w-32 md:w-80">
        </div>
    </div>

    {{-- Tab Filter (Untuk Looping Kategori) --}}
    <div class="px-4 pt-2 flex space-x-4 text-sm font-medium border-b border-gray-100">
        <span class="py-2 border-b-2 border-indigo-500 text-indigo-600 cursor-pointer">All (19)</span>
        <span class="py-2 text-gray-500 hover:text-gray-700 cursor-pointer">Super Admin (3)</span>
        <span class="py-2 text-gray-500 hover:text-gray-700 cursor-pointer">Manager (4)</span>
        <span class="py-2 text-gray-500 hover:text-gray-700 cursor-pointer">Accountant (3)</span>
    </div>

    <table class="min-w-full divide-y divide-gray-200 text-sm">
        {{-- Table Head (Statis) --}}
        <thead class="bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-500 tracking-wider w-1/4">
                    Account
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left font-semibold text-gray-500 tracking-wider hidden sm:table-cell w-1/4">
                    Email Address
                </th>
                <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-500 tracking-wider w-1/6">
                    Role
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left font-semibold text-gray-500 tracking-wider hidden md:table-cell w-1/6">
                    Access
                </th>
                <th scope="col" class="px-6 py-3 text-left font-semibold text-gray-500 tracking-wider w-1/6">
                    Status
                </th>
                <th scope="col" class="relative px-6 py-3 w-4">
                    <span class="sr-only">Menu</span>
                </th>
            </tr>
        </thead>
        @php
            // Contoh data dummy untuk simulasi
            $users = [
                [
                    'name' => 'Mira Yilmaz',
                    'email' => 'mira.y@labs.io',
                    'role' => 'Super Admin',
                    'access' => 'Read-Only',
                    'status' => 'Enabled',
                    'avatar_url' => '...',
                ],
                [
                    'name' => 'Liu Zhang',
                    'email' => 'liu.z@trans.com',
                    'role' => 'Accountant',
                    'access' => 'Full Access',
                    'status' => 'Disabled',
                    'avatar_url' => '...',
                ],
                // ... data lainnya dari controller
            ];
        @endphp
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
                <x-table.table-row :user="$user" />
            @endforeach
        </tbody>
    </table>

    {{-- Footer dan Pagination --}}
    {{-- <div class="p-4 flex items-center justify-between text-sm text-gray-600 border-t">
        <p>Showing 1 to 6 of 19 results</p>
        <div class="flex space-x-1">
            <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">Previous</button>
            <button class="px-3 py-1 border rounded-lg bg-indigo-500 text-white hover:bg-indigo-600">1</button>
            <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">2</button>
            <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">Next</button>
        </div>
    </div> --}}
</div>

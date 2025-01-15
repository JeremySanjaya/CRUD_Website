<x-admin.admin-layout>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <a href="{{route('admin.departments.create')}}"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition ease-in-out duration-300">
                <i class="fas fa-plus mr-2"></i> Add Department
            </a>
        </div>

        <!-- Tabel Data Siswa -->
        <div class="overflow-hidden rounded-lg shadow-lg border border-gray-200 bg-white">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-50">
                    <tr class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Description</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($departments as $department)
                        <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $department->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $department->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $department->desc }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.admin-layout>

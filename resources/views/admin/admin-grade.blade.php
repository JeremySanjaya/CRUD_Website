<x-admin.admin-layout>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <a href="{{route('admin.grades.create')}}"
                class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition ease-in-out duration-300">
                <i class="fas fa-plus mr-2"></i> Add Grade
            </a>
        </div>

        <!-- Tabel Data Siswa -->
        <div class="overflow-hidden rounded-lg shadow-lg border border-gray-200 bg-white">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-50">
                    <tr class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Grade</th>
                        <th class="px-6 py-3">Department</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($grades as $grade)
                        <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $grade->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $grade->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $grade->department->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.admin-layout>

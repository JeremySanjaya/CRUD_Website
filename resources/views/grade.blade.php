<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('student.create') }}"
                class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition ease-in-out duration-300">
                <i class="fas fa-plus mr-2"></i> Add Grade
            </a>
        </div>

        <!-- Tabel Data Siswa -->
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Grade</th>
                        <th class="py-3 px-6 text-left">Department</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($grades as $grade)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $loop->iteration }}</td>
                            <td class="py-3 px-6">{{ $grade->name }}</td>
                            <td class="py-3 px-6">{{ $grade->department->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('student.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition ease-in-out duration-300">
                <i class="fas fa-plus mr-2"></i> Add Student
            </a>
        </div>

        <!-- Tabel Data Siswa -->
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Kelas</th>
                        <th class="py-3 px-6 text-left">Department</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Address</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($students as $student)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $loop->iteration }}</td>
                            <td class="py-3 px-6">{{ $student->name }}</td>
                            <td class="py-3 px-6">{{ $student->grade->name }}</td>
                            <td class="py-3 px-6">{{ $student->department->name }}</td>
                            <td class="py-3 px-6">{{ $student->email }}</td>
                            <td class="py-3 px-6">{{ $student->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>

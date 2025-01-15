<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <a href="#"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition ease-in-out duration-300">
                <i class="fas fa-plus mr-2"></i> Add Department
            </a>
        </div>

        <!-- Tabel Data Siswa -->
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full bg-white border border-black">
                <thead class="bg-gray-800 text-white">
                    <tr class="border border-black">
                        <th class="py-4 px-6 text-left border border-black">No</th> <!-- Increased padding here -->
                        <th class="py-4 px-6 text-left border border-black">Nama</th> <!-- Increased padding here -->
                        <th class="py-4 px-6 text-left border border-black">Description</th> <!-- Increased padding here -->
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($departments as $department)
                        <tr class="border-b hover:bg-gray-100 border border-black">
                            <td class="py-4 px-6 border border-black">{{ $loop->iteration }}</td>
                            <td class="py-4 px-6 border border-black">{{ $department->name }}</td>
                            <td class="py-4 px-6 border border-black">{{ $department->desc }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>

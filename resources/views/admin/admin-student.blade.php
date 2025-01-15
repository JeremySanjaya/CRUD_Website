<x-admin.admin-layout>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <a href="{{route('admin.students.create')}}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition ease-in-out duration-300">
                <i class="fas fa-plus mr-2"></i> Add Student
            </a>
        </div>

        <!-- Tabel Data Siswa -->
        <div class="overflow-hidden rounded-lg shadow-lg border border-gray-200 bg-white">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-50">
                    <tr class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">Grade</th>
                        <th class="px-6 py-3">Department</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Address</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($students as $student)
                        <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $student->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $student->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $student->grade->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $student->department->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $student->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $student->address }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <div class="flex items-center justify-center space-x-2">
                                    <!-- Eye Icon for viewing details -->
                                    <svg class="w-6 h-6 text-gray-500 hover:text-gray-600 cursor-pointer"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24"
                                        onclick="showStudentDetails({{ $student->id }})">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>

                                    <!-- Ikon Edit -->
                                    <a href="{{ route('admin.students.edit', $student->id) }}">
                                        <svg class="w-6 h-6 text-gray-500 hover:text-gray-600 cursor-pointer"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </a>
                                    <!-- Ikon Hapus -->
                                    <a href="javascript:void(0)" onclick="showDeleteModal({{ $student->id }})">
                                        <svg class="w-6 h-6 text-gray-500 hover:text-gray-600 cursor-pointer"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Detail Siswa -->
    <div id="studentModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl transform transition-all duration-300 scale-95 opacity-0"
            id="modalContent">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Student Details</h2>
                <button id="closeModal" class="text-gray-700 text-2xl font-bold">&times;</button>
            </div>

            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <div class="w-1/2">
                        <p class="text-gray-600 text-sm">Name</p>
                        <p id="studentName" class="text-gray-800 font-medium text-lg"></p>
                    </div>
                    <div class="w-1/2">
                        <p class="text-gray-600 text-sm">ID</p>
                        <p id="studentId" class="text-gray-800 font-medium text-lg"></p>
                    </div>
                </div>

                <div class="flex justify-between items-center">
                    <div class="w-1/2">
                        <p class="text-gray-600 text-sm">Grade</p>
                        <p id="studentGrade" class="text-gray-800 font-medium text-lg"></p>
                    </div>
                    <div class="w-1/2">
                        <p class="text-gray-600 text-sm">Department</p>
                        <p id="studentDepartment" class="text-gray-800 font-medium text-lg"></p>
                    </div>
                </div>

                <div class="flex justify-between items-center">
                    <div class="w-1/2">
                        <p class="text-gray-600 text-sm">Email</p>
                        <p id="studentEmail" class="text-gray-800 font-medium text-lg"></p>
                    </div>
                    <div class="w-1/2">
                        <p class="text-gray-600 text-sm">Address</p>
                        <p id="studentAddress" class="text-gray-800 font-medium text-lg"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div id="deleteModal"
        class="hidden fixed inset-0 bg-gray-500 bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Are you sure you want to delete this student?</h2>
            <div class="flex justify-between">
                <button id="cancelDelete" class="bg-gray-300 px-4 py-2 rounded">Cancel</button>
                <!-- Form penghapusan data, akan diubah URL action-nya dengan JavaScript -->
                <form id="deleteForm" action="" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">Delete</button>
                </form>
            </div>
        </div>
    </div>

</x-admin.admin-layout>

<!-- JavaScript -->
<script>
    let studentIdToDelete = null;

    // Fungsi untuk membuka modal dan menampilkan detail siswa
    function showStudentDetails(studentId) {
        const student = @json($students);
        const studentData = student.find(s => s.id === studentId);

        if (studentData) {
            document.getElementById('studentName').innerText = studentData.name;
            document.getElementById('studentId').innerText = studentData.id;
            document.getElementById('studentGrade').innerText = studentData.grade.name;
            document.getElementById('studentDepartment').innerText = studentData.department.name;
            document.getElementById('studentEmail').innerText = studentData.email;
            document.getElementById('studentAddress').innerText = studentData.address;

            const modal = document.getElementById('studentModal');
            modal.classList.remove('hidden');
            modal.querySelector('#modalContent').classList.remove('scale-95', 'opacity-0');
            modal.querySelector('#modalContent').classList.add('scale-100', 'opacity-100');
        }
    }

    // Fungsi untuk menampilkan modal dan mengubah action form penghapusan
    function showDeleteModal(studentId) {
        const modal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');

        // Mengatur form action ke URL penghapusan siswa
        deleteForm.action = '/admin/students/' + studentId;

        // Menampilkan modal
        modal.classList.remove('hidden');
    }

    // Menutup modal saat tombol cancel diklik
    document.getElementById('cancelDelete').addEventListener('click', function() {
        document.getElementById('deleteModal').classList.add('hidden');
    });


    // Menutup modal detail siswa
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('studentModal').classList.add('hidden');
    });

    // Menutup modal konfirmasi hapus
    document.getElementById('cancelDeleteButton').addEventListener('click', function() {
        document.getElementById('deleteModal').classList.add('hidden');
    });
</script>

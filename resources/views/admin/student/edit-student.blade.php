<x-admin.admin-layout>
    <section class="bg-white">
        <div class="py-8 px-6 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-6 text-2xl font-semibold text-gray-900">Edit Student Profile</h2>
            <form action="{{ route('admin.students.update', $student->id) }}" method="post" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Name Input -->
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}"
                        class="bg-white text-gray-900 rounded-lg focus:ring-2 focus:ring-blue-500 p-3 w-full border border-gray-300"
                        placeholder="Enter student's full name" required>
                </div>

                <!-- Grade/Class Input -->
                <div>
                    <label for="grade_id" class="block mb-2 text-sm font-medium text-gray-900">Grade/Class</label>
                    <select id="grade_id" name="grade_id" class="bg-white text-gray-900 rounded-lg focus:ring-2 focus:ring-blue-500 p-3 w-full border border-gray-300">
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}" {{ $student->grade_id == $grade->id ? 'selected' : '' }}>
                                {{ $grade->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Department Input -->
                <div>
                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900">Department</label>
                    <select id="department" name="department_id" class="bg-white text-gray-900 rounded-lg focus:ring-2 focus:ring-blue-500 p-3 w-full border border-gray-300">
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}" {{ $student->department_id == $department->id ? 'selected' : '' }}>
                                {{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="text" name="email" id="email" value="{{ old('email', $student->email) }}"
                        class="bg-white text-gray-900 rounded-lg focus:ring-2 focus:ring-blue-500 p-3 w-full border border-gray-300"
                        placeholder="Enter your email" required>
                </div>

                <!-- Address Input -->
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                    <textarea id="address" name="address" rows="8" class="bg-white text-gray-900 rounded-lg focus:ring-2 focus:ring-blue-500 p-3 w-full border border-gray-300"
                        placeholder="Enter your address here">{{ old('address', $student->address) }}</textarea>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between items-center mt-4">
                    <a href="{{ route('admin.students.index') }}" class="text-sm text-gray-600 hover:text-gray-800 focus:outline-none">
                        <i class="fas fa-arrow-left mr-2"></i> Back
                    </a>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white py-3 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-admin.admin-layout>

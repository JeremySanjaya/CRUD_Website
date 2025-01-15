<x-admin.admin-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-6 mx-auto max-w-3xl lg:py-16">
            <h2 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">Add Student</h2>
            <form action="{{ route('admin.students.store') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                            placeholder="Enter student name" required>
                        @error('name')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Grade Field -->
                    <div>
                        <label for="grade_id" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Grade/Class</label>
                        <select id="grade_id" name="grade_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
                            <option value="">Select Grade</option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}"
                                    {{ old('grade_id') == $grade->id ? 'selected' : '' }}>
                                    {{ $grade->name }}</option>
                            @endforeach
                        </select>
                        @error('grade_id')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Department Field -->
                    <div>
                        <label for="department" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Department</label>
                        <select id="department" name="department_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
                            <option value="">Select Department</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}"
                                    {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                    {{ $department->name }}</option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                            placeholder="Enter student's email" required>
                        @error('email')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Address Field -->
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Address</label>
                        <textarea id="address" name="address" rows="6"
                            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                            placeholder="Enter student's address">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-between items-center mt-8">
                    <!-- Back Button -->
                    <a href="{{ route('admin.students.index') }}"
                        class="text-sm text-gray-600 hover:text-gray-800 focus:outline-none">
                        <i class="fas fa-arrow-left mr-2"></i> Go Back
                    </a>
                    <!-- Submit Button -->
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Add Student
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-admin.admin-layout>

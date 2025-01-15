<x-admin.admin-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-6 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">Add Grade</h2>
            <form action="{{ route('admin.grades.store') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grade Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-indigo-500 focus:border-indigo-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                            placeholder="Enter grade name" required>
                        @error('name')
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

                <div class="flex justify-between items-center mt-8">
                    <!-- Back Button -->
                    <a href="{{ route('admin.grades.index') }}"
                        class="text-sm text-gray-600 hover:text-gray-800 focus:outline-none">
                        <i class="fas fa-arrow-left mr-2"></i> Back
                    </a>
                    <!-- Submit Button -->
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Add Grade
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-admin.admin-layout>

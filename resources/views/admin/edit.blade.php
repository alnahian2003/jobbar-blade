<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Job:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- Job Title --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="title">
                                Job Title
                            </label>
                            <input
                                class='mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600'
                                id="title" name="title" type="text"
                                placeholder="e.g. Senior Back-End Engineer (PHP & Laravel)"
                                value="{{ old('title', $job->title) }}">
                            @error('title')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Job Role --}}
                        <div class="mt-8">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="role">
                                Job Role
                            </label>
                            <input
                                class='mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600'
                                id="role" type="text" name="role" placeholder="Senior Laravel Developer"
                                value="{{ old('role', $job->role) }}">
                            @error('role')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Employment Type --}}
                        <div class="mt-8">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                                for="employment_type">
                                Employment Type
                            </label>
                            <select
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
                                id="employment_type" name="employment_type">
                                <option disabled>Select a type of employment</option>
                                @foreach (App\Enums\EmploymentType::cases() as $type)
                                    <option value="{{ $type->value }}" @selected(old('employment_type', $job->employment_type->value) === $type->value)>
                                        {{ $type->getLabel() }}</option>
                                @endforeach
                            </select>
                            @error('employment_type')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Company Name --}}
                        <div class="mt-8">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                                for="company_name">
                                Company Name
                            </label>
                            <input
                                class='mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600'
                                id="company_name" name="company_name" type="text"
                                value="{{ old('company_name', $job->company_name) }}"
                                placeholder="Pennsylvania Paper and Supply Company">
                            @error('company_name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Apply URL --}}
                        <div class="mt-8">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="apply_url">
                                URL to Description/Application
                            </label>
                            <input
                                class='mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600'
                                id="apply_url" type="url" name="apply_url"
                                value="{{ old('apply_url', $job->apply_url) }}"
                                placeholder="https://yourcompany.com/careers">
                            @error('apply_url')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mt-8">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="description">
                                Description
                            </label>
                            <textarea
                                class='mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600'
                                id="description" name="description" rows="3" name="description" placeholder="e.g. Senior Laravel Developer">{{ old('description', $job->description) }}</textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Salary --}}
                        <div class="mt-8">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="salary">
                                Salary
                            </label>
                            <input
                                class='mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600'
                                id="salary" name="salary" type="text" value="{{ old('salary', $job->salary) }}"
                                placeholder="e.g, $120,000 - $145,000 or maybe €80,000 - €102,000">
                            @error('salary')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Company Logo --}}
                        <div class="mt-8">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300"
                                for="company_logo">
                                URL of the Company Logo
                            </label>
                            <input
                                class='mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600'
                                id="company_logo" name="company_logo" type="url"
                                value="{{ old('company_logo', $job->company_logo) }}"
                                placeholder="https://yourwebsite.com/images/company-logo.png">
                            @error('company_logo')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        {{-- Create Job Button --}}
                        <div class="mt-8">
                            <button
                                class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900 dark:bg-gray-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-gray-800 dark:active:bg-gray-300"
                                type="submit">
                                Edit Job
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

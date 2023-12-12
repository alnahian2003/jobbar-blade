<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Job: {{ $job->title }}
        </h2>

        {{-- Job Overview --}}
        <div class="mt-2">
            {{-- Company Name --}}
            <span
                class="me-2 whitespace-nowrap rounded bg-gray-100 px-2.5 py-0.5 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">{{ $job->company_name }}</span>

            {{-- Job Role --}}
            <span
                class="me-2 whitespace-nowrap rounded bg-blue-100 px-2.5 py-0.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">{{ $job->role }}</span>

            {{-- Employment Type --}}
            <span
                class="me-2 rounded bg-indigo-100 px-2.5 py-0.5 text-sm font-medium text-indigo-800 dark:bg-indigo-900 dark:text-indigo-300">{{ $job->employment_type->getLabel() }}</span>


            {{-- Salary --}}
            <span
                class="me-2 whitespace-nowrap rounded bg-green-100 px-2.5 py-0.5 text-sm font-medium text-green-800 dark:bg-green-900 dark:text-green-300">{{ $job->salary }}</span>

            {{-- Job Creation Time --}}
            <span
                class="my-2 inline-flex items-center rounded border border-blue-400 bg-blue-100 px-2.5 py-0.5 text-sm font-medium text-blue-800 dark:bg-gray-700 dark:text-blue-400">
                <svg class="me-1.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                </svg>
                {{ $job->created_at->diffForHumans() }}
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{-- Action Links --}}
            <div class="inline-flex mb-12 overflow-hidden rounded-md shadow-sm">
                <a class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-indigo-700 focus:z-10 focus:text-indigo-700 focus:ring-0 focus:ring-indigo-700 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white dark:focus:text-white dark:focus:ring-indigo-500"
                    target="_blank" href="{{ route('frontend.job_details', $job->id) }}">
                    View
                </a>

                <a class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-r border-gray-200 hover:bg-gray-100 hover:text-indigo-700 focus:z-10 focus:text-indigo-700 focus:ring-0 focus:ring-indigo-700 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white dark:focus:text-white dark:focus:ring-indigo-500"
                    target="_blank" href="{{ $job->apply_url }}">
                    Apply Website
                </a>

                <a class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-indigo-700 focus:z-10 focus:text-indigo-700 focus:ring-0 focus:ring-indigo-700 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:hover:text-white dark:focus:text-white dark:focus:ring-indigo-500"
                    href="{{ route('admin.jobs.edit', $job->id) }}">
                    Edit
                </a>
                <form onclick="return confirm('Do you really want to delete this job?')"
                    action="{{ route('admin.jobs.destroy', $job->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button
                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-red-200 hover:text-red-700 focus:z-10 focus:text-red-900 focus:ring-0 focus:ring-red-700 dark:border-gray-600 dark:bg-gray-700 dark:text-red-400 dark:hover:bg-red-600 dark:hover:text-white dark:focus:text-white dark:focus:ring-red-500"
                        type="submit">
                        Delete
                        </a>
                </form>

            </div>

            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <article>
                        <h2 class="pb-5 text-xl font-semibold leading-6 text-gray-800 dark:text-gray-50">
                            Description
                        </h2>
                        <p class="leading-8 text-gray-600 dark:text-gray-300">{{ $job->description }}</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

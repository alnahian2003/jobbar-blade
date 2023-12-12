@extends('layouts.frontend')

@section('main_content')
    <!-- Hero Section -->
    <section class="bg-gray-900" id="hero">
        <div class="relative isolate pt-14">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="
        clip-path: polygon(
          74.1% 44.1%,
          100% 61.6%,
          97.5% 26.9%,
          85.5% 0.1%,
          80.7% 2%,
          72.5% 32.5%,
          60.2% 62.4%,
          52.4% 68.1%,
          47.5% 58.3%,
          45.2% 34.5%,
          27.5% 76.7%,
          0.1% 64.9%,
          17.9% 100%,
          27.6% 76.8%,
          76.1% 97.7%,
          74.1% 44.1%
        );
      ">
                </div>
            </div>
            <div class="py-24 sm:py-32 lg:pb-40">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                            <span class="font-extrabold text-indigo-300">Jobbar</span> the
                            ultimate job seeker's toolkit
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-300">
                            Seeking your dream job or the perfect candidate? Explore our
                            vast network of opportunities across industries.
                        </p>

                        <form class="mt-10" action="" method="GET">
                            <div class="relative w-full">
                                <svg class="absolute left-4 top-5 hidden text-white sm:block md:left-8 md:top-7"
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.85587 1.61739C5.19014 0.725854 6.75882 0.25 8.36354 0.25H8.36358C10.5154 0.250137 12.579 1.105 14.1006 2.62655C15.6221 4.14811 16.477 6.21174 16.4771 8.36355V8.36359C16.4771 9.96831 16.0013 11.537 15.1097 12.8713C14.9533 13.1054 14.7852 13.3305 14.6065 13.5459L19.5303 18.4697C19.8232 18.7626 19.8232 19.2374 19.5303 19.5303C19.2374 19.8232 18.7625 19.8232 18.4696 19.5303L13.5458 14.6065C12.9234 15.1232 12.2239 15.5467 11.4685 15.8596C9.98591 16.4737 8.35454 16.6344 6.78065 16.3213C5.20677 16.0082 3.76107 15.2355 2.62636 14.1008C1.49165 12.9661 0.718908 11.5204 0.405843 9.94648C0.0927783 8.37259 0.253454 6.74122 0.867553 5.25866C1.48165 3.77609 2.52159 2.50892 3.85587 1.61739ZM8.36349 1.75C7.05546 1.75001 5.77681 2.13789 4.68922 2.86459C3.60162 3.5913 2.75394 4.6242 2.25337 5.83268C1.75281 7.04116 1.62183 8.37093 1.87702 9.65384C2.13221 10.9368 2.76209 12.1152 3.68702 13.0401C4.61195 13.965 5.79038 14.5949 7.07329 14.8501C8.3562 15.1053 9.68597 14.9743 10.8945 14.4738C12.1029 13.9732 13.1358 13.1255 13.8625 12.0379C14.5892 10.9503 14.9771 9.67167 14.9771 8.36364M8.36354 1.75C10.1175 1.75012 11.7997 2.44695 13.0399 3.68721C14.2802 4.92748 14.977 6.6096 14.9771 8.36359"
                                        fill="currentColor"></path>
                                </svg>
                                <input
                                    class="h-[60px] w-full rounded-xl bg-white/5 pl-4 pr-28 text-white outline-none ring-1 ring-inset ring-white/10 sm:pl-12 md:h-[72px] md:pl-20"
                                    type="search" name="search" value="{{ request('search', '') }}"
                                    placeholder="e.g. FullStack Laravel & VueJS Developer" />

                                <button
                                    class="absolute right-1.5 top-1.5 rounded-lg bg-indigo-500 px-5 py-3 text-base font-medium text-white transition hover:bg-indigo-500/60 md:right-3 md:top-3"
                                    type="submit">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-50rem)]">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="
        clip-path: polygon(
          74.1% 44.1%,
          100% 61.6%,
          97.5% 26.9%,
          85.5% 0.1%,
          80.7% 2%,
          72.5% 32.5%,
          60.2% 62.4%,
          52.4% 68.1%,
          47.5% 58.3%,
          45.2% 34.5%,
          27.5% 76.7%,
          0.1% 64.9%,
          17.9% 100%,
          27.6% 76.8%,
          76.1% 97.7%,
          74.1% 44.1%
        );
      ">
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <main class="mb-20">
        <div class="container mx-auto my-10 max-w-6xl px-5 md:px-2 xl:my-8">
            <div class="grid grid-cols-12 lg:gap-12">
                <div class="col-span-12" id="find-job">
                    <!-- Section Header -->
                    <div class="flex items-center justify-between">
                        <h3 class="text-2xl font-semibold text-gray-300">Latest Jobs</h3>
                        <p class="text-base text-white/60">{{ number_format($jobs->count()) }}
                            {{ str('Result')->plural($jobs->count()) }} Found</p>
                    </div>
                    <!-- /Section Header -->
                    <!-- Job Listings -->
                    <div>
                        @forelse ($jobs as $job)
                            <!-- Job Card -->
                            <div
                                class="group mt-8 flex flex-col gap-6 rounded-xl bg-white/5 p-6 text-white outline-none ring-1 ring-inset ring-white/10 transition hover:bg-gray-600/30 hover:duration-500">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-col items-start gap-6 md:flex-row md:items-center">
                                        <img class="h-16 w-16 rounded-xl bg-gray-700 p-2" alt="{{ $job->company_name }}"
                                            loading="lazy" style="color: transparent" src="{{ $job->company_logo }}" />
                                        <div>
                                            <p class="text-sm font-medium text-indigo-400">
                                                {{ $job->company_name }}
                                            </p>
                                            <h6
                                                class="mt-1 text-lg font-semibold text-white transition group-hover:opacity-90 group-hover:duration-300">
                                                <a href="{{ route('frontend.job_details', $job->id) }}"> {{ $job->title }}
                                                </a>
                                            </h6>
                                            <div class="mt-3 flex items-center gap-2">
                                                <p class="w-fit rounded-md bg-gray-300/30 px-2 py-1 text-xs text-white/70">
                                                    {{ $job->employment_type->getLabel() }}
                                                </p>
                                                <p class="w-fit rounded-md bg-gray-300/30 px-2 py-1 text-xs text-white/70">
                                                    {{ $job->salary }}
                                                </p>
                                                <p class="w-fit rounded-md bg-gray-300/30 px-2 py-1 text-xs text-white/70">
                                                    {{ $job->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="hidden items-center gap-1.5 rounded-lg bg-gray-300/30 px-4 py-2.5 text-indigo-300 transition group-hover:bg-indigo-500 group-hover:text-white group-hover:duration-500 md:flex"
                                        href="{{ route('frontend.job_details', $job->id) }}">
                                        View Job
                                        <span>
                                            <svg width="18" height="18" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.6">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.86409 2.59846C7.12037 2.34218 7.53588 2.34218 7.79216 2.59846L11.7297 6.53596C11.9859 6.79224 11.9859 7.20776 11.7297 7.46404L7.79216 11.4015C7.53588 11.6578 7.12037 11.6578 6.86409 11.4015C6.6078 11.1453 6.6078 10.7297 6.86409 10.4735L9.6813 7.65625H2.73438C2.37194 7.65625 2.07812 7.36244 2.07812 7C2.07812 6.63756 2.37194 6.34375 2.73438 6.34375H9.6813L6.86409 3.52654C6.6078 3.27026 6.6078 2.85474 6.86409 2.59846Z"
                                                        fill="currentColor"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <p class="mt-5 text-base text-white/60">
                                    {{ str($job->description)->limit(200) }}
                                </p>
                            </div>
                            <!-- /Job Card -->
                        @empty
                            <h4 class="my-4 text-center text-xl font-semibold text-white/80">
                                No jobs posted yet. Come back later! 👋
                            </h4>
                        @endforelse
                    </div>
                    <!-- /Job Listings -->
                </div>
            </div>
        </div>
    </main>
@endsection

@php
    $heroStyle = '002';
    $greeting = 'Hello, I\'m';
    $profileImage =
        'https://media.licdn.com/dms/image/v2/D4D03AQHhiq40to-7Bg/profile-displayphoto-shrink_400_400/B4DZU9WG7mHIAg-/0/1740490961078?e=1749686400&v=beta&t=TDPql35HB0KXETCRZ6DxF3yVI7rJlVIHKam4dDta-fA';
    $profileName = 'Janus Helkjær';
    $profileTitle = 'Full Stack Developer & Tech Savy Marketing Specialist';
@endphp
<div>

    @if ($heroStyle == '001')
        <div>
            <div>
                <img class="h-32 w-full object-cover lg:h-48" src="{{ asset('images/banner-001.png') }}" alt="">
            </div>
            <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                    <div class="flex">
                        <img class="size-24 rounded-full ring-4 ring-white sm:size-32" src="{{ $profileImage }}"
                            alt="">
                    </div>
                    <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                        <div class="mt-6 min-w-0 flex-1 sm:hidden md:block">
                            <h1 class="truncate text-2xl font-bold text-gray-900">{{ $profileName }}</h1>
                        </div>
                        <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-x-4 sm:space-y-0">
                            <button type="button"
                                class="inline-flex justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                <svg class="-ml-0.5 mr-1.5 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true" data-slot="icon">
                                    <path
                                        d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                                    <path
                                        d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                                </svg>
                                <span>Message</span>
                            </button>
                            <button type="button"
                                class="inline-flex justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                <svg class="-ml-0.5 mr-1.5 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd"
                                        d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Call</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-6 hidden min-w-0 flex-1 sm:block md:hidden">
                    <h1 class="truncate text-2xl font-bold text-gray-900">{{ $profileName }}</h1>
                </div>
            </div>
        </div>
    @endif

    @if ($heroStyle == '002')
        <div class="md:flex md:items-center md:justify-between md:space-x-5">
            <div class="flex items-start space-x-5">
                <div class="shrink-0">
                    <div class="relative">
                        <img class="size-16 rounded-full" src="{{ $profileImage }}" alt="">
                        <span class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></span>
                    </div>
                </div>
                <!--
      Use vertical padding to simulate center alignment when both lines of text are one line,
      but preserve the same layout if the text wraps without making the image jump around.
    -->
                <div class="pt-1.5">
                    <h1 class="text-2xl font-bold text-gray-900">{{ $profileName }}</h1>
                    <p class="text-sm font-medium text-gray-500">{{ $profileTitle }}</p>
                </div>
            </div>

        </div>
    @endif

    @if ($heroStyle == '003')
        <div class="overflow-hidden rounded-lg bg-white shadow">
            <h2 class="sr-only" id="profile-overview-title">Profile Overview</h2>
            <div class="bg-white p-6">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-5">
                        <div class="shrink-0">
                            <img class="mx-auto size-20 rounded-full" src="{{ $profileImage }}" alt="">
                        </div>
                        <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                            <p class="text-sm font-medium text-gray-600">{{ $greeting }}</p>
                            <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{ $profileName }}</p>
                            <p class="text-sm font-medium text-gray-600">{{ $profileTitle }}</p>
                        </div>
                    </div>
                    <div class="mt-5 flex justify-center sm:mt-0">
                        {{-- <a href="#"
                            class="flex items-center justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">View
                            profile</a> --}}
                    </div>
                </div>
            </div>
            <div
                class="grid grid-cols-1 divide-y divide-gray-200 border-t border-gray-200 bg-gray-50 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
                <div class="px-6 py-5 text-center text-sm font-medium">
                    <span class="text-gray-900">15+</span>
                    <span
                        class="text-gray-600">{{ $current_locale == 'da' ? 'års erfaring' : 'years experience' }}</span>
                </div>
                <div class="px-6 py-5 text-center text-sm font-medium">
                    <span class="text-gray-900">4</span>
                    <span class="text-gray-600">Sick days left</span>
                </div>
                <div class="px-6 py-5 text-center text-sm font-medium">
                    <span class="text-gray-900">2</span>
                    <span class="text-gray-600">Personal days left</span>
                </div>
            </div>
        </div>
    @endif
</div>

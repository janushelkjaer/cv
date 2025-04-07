<x-layouts.app :title="__('CV')">
    <div class="max-w-7xl mx-auto">
        {{-- <livewire:hero /> --}}

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">

            <div class="cols-span-1 space-y-3">
                <div>
                    <flux:card class="space-y-3">
                        @php
                            $profileImage =
                                'https://media.licdn.com/dms/image/v2/D4D03AQHhiq40to-7Bg/profile-displayphoto-shrink_400_400/B4DZU9WG7mHIAg-/0/1740490961078?e=1749686400&v=beta&t=TDPql35HB0KXETCRZ6DxF3yVI7rJlVIHKam4dDta-fA';
                            $profileName = 'Janus Helkjær';
                            $profileTitle = 'Full Stack Developer & Tech Savy Marketing Specialist';
                        @endphp
                        <div class="flex items-center justify-center">
                            <img class="size-24 rounded-full ring-4 ring-white sm:size-32" src="{{ $profileImage }}"
                                alt="">
                        </div>
                        <div class="text-center">
                            <flux:heading size="lg">{{ $profileName }}</flux:heading>
                            <flux:text class="text-sm text-gray-500">{{ $profileTitle }}</flux:text>
                        </div>
                    </flux:card>
                </div>
                <div>
                    <livewire:languages />

                </div>
                <div>
                    <livewire:socials />
                </div>
            </div>

            <div class="col-span-2 bg-zinc-50 rounded">
                <div class="p-6">
                    <flux:card>
                        <flux:heading size="lg">About Me</flux:heading>
                        <flux:text class="mt-3">
                            I am a full stack develoflux:texter with a passion for creating beautiful and functional web
                            applications. I have experience in both front-end and back-end development, and I am always
                            looking to learn new technologies and improve my skills.
                        </flux:text>
                    </flux:card>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>

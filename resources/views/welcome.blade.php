<x-layouts.app :title="__('CV')">
    <div class="">
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
                            <flux:text class="text-sm">{{ $profileTitle }}</flux:text>
                        </div>
                    </flux:card>
                </div>
                <div>
                    <livewire:basic-info />

                </div>
                <div>
                    <livewire:languages />

                </div>
                <div>
                    <livewire:socials />
                </div>
            </div>

            <div class="col-span-2 bg-zinc-50 dark:bg-zinc-700 rounded-lg border dark:border-zinc-600">
                <div class="p-6">
                    <flux:card>
                        <div class="flex gap-4 items-center">
                            <div class="bg-zinc-100 p-2 rounded-full">
                                <flux:icon name="circle-user-round" class="text-2xl text-gray-500" />
                            </div>
                            <div class="flex-1">
                                <flux:heading>{{ app()->getLocale() == 'da' ? 'Om mig' : 'About me' }}</flux:heading>
                                <flux:separator class="mt-1" />
                            </div>
                        </div>
                        <flux:text class="mt-3">
                            I am a full stack developer with a passion for creating beautiful and functional web
                            applications. I have experience in both front-end and back-end development, and I am always
                            looking to learn new technologies and improve my skills.
                        </flux:text>
                    </flux:card>
                </div>
                <div class="p-6">
                    <livewire:work-experience />
                </div>
                <div class="p-6">
                    <livewire:skills />
                </div>
                <div class="p-6">
                    <livewire:education />
                </div>

                <div class="p-6">
                    <livewire:platform-expertise />
                </div>

                <div class="p-6">
                    <livewire:certifications />
                </div>

                <div class="p-6">
                    <flux:card>
                        <div class="flex gap-4 mb-3 items-center">
                            <div class="bg-zinc-100 p-2 rounded-full">
                                <flux:icon name="hand-helping" class="text-2xl text-gray-500" />
                            </div>
                            <div class="flex-1">
                                <flux:heading>
                                    {{ app()->getLocale() == 'da' ? 'Frivilligt Arbejde' : 'Volenteer Work' }}
                                </flux:heading>
                                <flux:separator class="mt-1" />
                            </div>
                        </div>
                        <flux:text class="mt-3">
                            I am a full stack develoflux:texter with a passion for creating beautiful and functional web
                            applications. I have experience in both front-end and back-end development, and I am always
                            looking to learn new technologies and improve my skills.

                            <ul class="list-disc list-inside mt-3 pl-3">
                                <li>HubSpot</li>
                                <li>ActiveCampaign</li>
                            </ul>
                        </flux:text>
                    </flux:card>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>

<div>
    <flux:card>
        <div class="flex gap-4 mb-3 items-center">
            <div class="bg-zinc-100 p-2 rounded-full">
                <flux:icon name="briefcase-business" class="text-2xl text-gray-500" />
            </div>
            <div class="flex-1">
                <flux:heading>{{ app()->getLocale() == 'da' ? 'Erfaring' : 'Experience' }}
                </flux:heading>
                <flux:separator class="mt-1" />
            </div>
        </div>
        <div class="space-y-6 relative">
            @foreach ($workExperiences as $key => $workExperience)
                <div class="py-3 relative pl-12">
                    <span class="absolute left-0 -ml-px h-full w-0.5" aria-hidden="true">
                        <div
                            class="absolute  left-0 top-0 flex w-6 justify-center {{ $key == count($workExperiences) - 1 ? 'bottom-6' : '-bottom-6' }}">
                            <div class="w-px bg-gray-200"></div>
                        </div>
                        <div class="relative flex size-6 flex-none items-center justify-center">
                            <div class="size-1.5 rounded-full bg-gray-100 ring-1 ring-gray-300"></div>
                        </div>
                    </span>
                    <flux:text class="text-xs">{{ $workExperience[$currentLanguage]['start_date'] }} -
                        {{ $workExperience[$currentLanguage]['end_date'] }}</flux:text>
                    <flux:heading>{{ $workExperience[$currentLanguage]['position'] }}
                    </flux:heading>
                    <flux:text class="mt-1">
                        {{ $workExperience[$currentLanguage]['company'] }}
                    </flux:text>
                    <flux:text class="mt-3">
                        {!! nl2br($workExperience[$currentLanguage]['description']) !!}
                    </flux:text>
                </div>
            @endforeach
        </div>
    </flux:card>
</div>

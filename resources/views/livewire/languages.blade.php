<div>

    <flux:card>
        <div class="space-y-3 mb-3">
            <flux:heading>{{ app()->getLocale() == 'da' ? 'Sprog' : 'Languages' }}</flux:heading>
            <flux:separator variant="subtle" />
        </div>
        <div class="space-y-6">
            @foreach ($languages as $locale => $language)
                <div class="flex items-center gap-4">
                    <flux:avatar circle size="sm" src="{{ $language['flag'] }}" />
                    <div>
                        <flux:heading>{{ $language['name'] }}</flux:heading>
                        <flux:text class="text-xs">{{ $language['description'] }}</flux:text>
                    </div>
                </div>
            @endforeach
        </div>
    </flux:card>
</div>

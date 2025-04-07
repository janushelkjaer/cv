<div>
    <flux:card>
        <div class="space-y-3 mb-3">
            <flux:heading>{{ app()->getLocale() == 'da' ? 'Kontaktinfo' : 'Contact Info' }}</flux:heading>
            <flux:separator variant="subtle" />
        </div>
        <div class="space-y-6">
            <div class="flex items-center gap-4">
                <flux:icon name="map-pin" class="size-6" />
                <div>
                    <flux:heading>Aarhus C</flux:heading>
                    {{-- <flux:text class="text-xs">sds</flux:text> --}}
                </div>
            </div>
            <div class="flex items-center gap-4">
                <flux:icon name="envelope" class="size-6" />
                <div>
                    <flux:heading>janus.helkjaer@gmail.com</flux:heading>
                    {{-- <flux:text class="text-xs">sds</flux:text> --}}
                </div>
            </div>
            <div class="flex items-center gap-4">
                <flux:icon name="phone" class="size-6" />
                <div>
                    <flux:heading>+45 23 71 49 02</flux:heading>
                    {{-- <flux:text class="text-xs">sds</flux:text> --}}
                </div>
            </div>
        </div>
    </flux:card>
</div>

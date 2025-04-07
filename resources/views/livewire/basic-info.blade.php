<div>
    <flux:card>
        <div class="space-y-3 mb-3">
            <flux:heading>{{ app()->getLocale() == 'da' ? 'Kontaktinfo' : 'Contact Info' }}</flux:heading>
            <flux:separator variant="subtle" />
        </div>
        <div class="space-y-3">
            <div class="flex items-center gap-4">
                <flux:icon name="map-pin" class="size-4" />
                <div>
                    <flux:text class="print:text-xs">Aarhus C</flux:text>
                    {{-- <flux:text class="text-xs">sds</flux:text> --}}
                </div>
            </div>
            <div class="flex items-center gap-4">
                <flux:icon name="envelope" class="size-4" />
                <div>
                    <flux:text class="print:text-xs">janus.helkjaer@gmail.com</flux:text>
                    {{-- <flux:text class="text-xs">sds</flux:text> --}}
                </div>
            </div>
            <div class="flex items-center gap-4">
                <flux:icon name="phone" class="size-4" />
                <div>
                    <flux:text class="print:text-xs">+45 23 71 49 02</flux:text>
                    {{-- <flux:text class="text-xs">sds</flux:text> --}}
                </div>
            </div>
        </div>
    </flux:card>
</div>

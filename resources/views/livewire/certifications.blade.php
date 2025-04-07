<div>
    <flux:card>
        <div class="flex gap-4 mb-3 items-center">
            <div class="bg-zinc-100 p-2 rounded-full">
                <flux:icon name="shield-check" class="text-2xl text-gray-500" />
            </div>
            <div class="flex-1">
                <flux:heading>
                    {{ app()->getLocale() == 'da' ? 'Certificeringer' : 'Certifications' }}
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

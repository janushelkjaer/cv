<div>
    <flux:card>
        <div class="flex gap-4 mb-3 items-center">
            <div class="bg-zinc-100 p-2 rounded-full">
                <flux:icon name="folder-code" class="text-2xl text-gray-500" />
            </div>
            <div class="flex-1">
                <flux:heading>
                    {{ app()->getLocale() == 'da' ? 'Platform Expertise' : 'Platform Expertice' }}
                </flux:heading>
                <flux:separator class="mt-1" />
            </div>
        </div>
        <flux:text class="mt-3">
            I am a full stack develoflux:texter with a passion for creating beautiful and functional web
            applications. I have experience in both front-end and back-end development, and I am always
            looking to learn new technologies and improve my skills.
        </flux:text>

        <div class="py-6 space-y-6">
            <div class="space-y-1">
                <flux:heading>Marketing Automation & Email Marketing</flux:heading>
                <div class="pl-1 space-y-1">
                    <flux:text>HubSpot</flux:text>
                    <flux:text>ActiveCampaign</flux:text>
                    <flux:text>Mailchimp</flux:text>
                </div>
            </div>
            <div class="space-y-1">
                <flux:heading>CMS (Web Content Systems)</flux:heading>
                <div class="pl-1 space-y-1">
                    <flux:text>Wordpress</flux:text>
                    <flux:text>Umbraco</flux:text>
                </div>
            </div>
        </div>

    </flux:card>
</div>

<div>
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 text-sm">
        @foreach ($available_locales as $locale_name => $available_locale)
            @if ($available_locale === $current_locale)
                <span class="ml-2 mr-2 text-gray-700 dark:text-gray-200">{{ $locale_name }}</span>
            @else
                <a class="ml-1 underline ml-2 mr-2" href="/{{ $available_locale }}">
                    <span>{{ $locale_name }}</span>
                </a>
            @endif
        @endforeach
    </div>
</div>

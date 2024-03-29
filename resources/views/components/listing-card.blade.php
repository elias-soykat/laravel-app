@props(['listing'])

<x-card class="p-16">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="images/no-image.png" alt="" />
        <div>
            {{-- <?php echo $listing ?> --}}
            <h3 class="text-2xl underline">
                <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing['company'] }}</div>
            <x-listing-tags :tagsCSV="$listing['tags']" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing['location'] }}
            </div>
        </div>
    </div>
</x-card>

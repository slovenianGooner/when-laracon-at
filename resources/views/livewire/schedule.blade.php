<div class="mx-auto w-full max-w-screen-xl px-6 py-12 md:py-20">
    <div>
        <h1 class="uppercase font-display text-[110px] leading-[69px] lg:text-[180px] lg:leading-[112px]">
            Laracon Schedule
        </h1>
        <div class="mt-4">
            <div class="relative" x-data="{ open: false }" x-cloak>
                <button class="border-white border px-6 py-2 rounded-lg w-64 text-left"
                        x-on:click="open = !open">{{ $timezone }}</button>
                <div class="lg:w-96 border rounded-lg mt-2 absolute z-[10] bg-red-600 h-64 overflow-y-auto"
                     x-show="open">
                    @foreach($timezones as $selectTimezone)
                        <button class="block px-6 py-2 hover:bg-red-600/50 w-full text-left"
                                x-on:click="open = false"
                                wire:click="selectTimezone('{{ $selectTimezone }}')">{{ $selectTimezone }}</button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 grid divide-x divide-white border border-white text-xl md:grid-cols-2">
        @foreach($talks as $day)
            <div class="p-6 md:px-10 md:pb-14 md:pt-10">
                <h3 class="font-display text-[44px] font-bold">Day {{ $day->first()->day }}</h3>
                <ul class="mt-4 space-y-1.5">
                    @foreach($day as $talk)
                        <li class="flex items-start gap-1 text-lg md:text-xl md:leading-8">
                            <img src="https://laracon.us/images/icons/list-marker.svg"
                                 class="mt-1 h-6 w-6 shrink-0">
                            <span>{{ $talk->formatted_time }} - {{ $talk->title }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>

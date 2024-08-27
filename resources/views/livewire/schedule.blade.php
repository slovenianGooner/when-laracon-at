<div class="mx-auto w-full max-w-screen-xl px-6 py-12 md:py-20">
    <div>
        <h1 class="uppercase font-display text-[110px] leading-[69px] lg:text-[180px] lg:leading-[112px]">
            Laracon Schedule
        </h1>
        <div class="mt-4">
            <select name="timezone" wire:model.live="timezone" class="border-white rounded-md px-4 py-2 bg-transparent focus:outline-none focus:ring-0 focus:border-white appearance-none bg-none">
                @foreach($timezones as $selectTimezone)
                    <option value="{{ $selectTimezone }}">{{ $selectTimezone }}</option>
                @endforeach
            </select>
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

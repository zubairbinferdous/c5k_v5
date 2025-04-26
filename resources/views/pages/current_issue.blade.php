@extends('./layouts.master')
@section('userContent')
    @include('pages.page_header_nav')

    <div class="max-w-7xl mx-auto px-4 py-5">
    <h4 class="text-3xl font-semibold text-center mb-5">Volumes</h4>

    <!-- Tabs Start -->
    @php
        $groupedVolumes = $volume_list->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->created_at)->year;
        });

        $years = range(2024, 2028); // Define the years for tabs
    @endphp

    <div id="yearTabContent">
        @foreach ($years as $year)
            <div
                class="@if ($loop->first) block @else hidden @endif"
                id="content-{{ $year }}"
                role="tabpanel"
                aria-labelledby="tab-{{ $year }}">

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                    @if (isset($groupedVolumes[$year]))
                        @foreach ($groupedVolumes[$year] as $volume)
                            <a href="#" class="block border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                                <img src="{{ asset('public/backend/issue.jpg') }}" alt="Volume Image" class="w-full h-60 object-cover">
                                <div class="p-4">
                                    <p class="text-base font-medium text-gray-800">
                                        {{ Str::limit($volume->volume_name, 30) }} Issue 2
                                    </p>
                                    {{-- <p class="text-sm text-gray-500">Issue Date: 21 August, 2024</p> --}}
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p class="text-gray-500 col-span-full">No volumes available for {{ $year }}.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
@extends('./layouts.master')
@section('userContent')
@include('pages.page_header_nav')
  <div class="containers mx-auto px-4 py-6">
    <h4 class="text-2xl font-semibold mb-4">Volumes and Issues</h4>

    <!-- Volumes and Issues Section -->
    <section id="volumes-issues" class="mt-4">
        @php
            $groupedVolumes = $volume_list->groupBy(function ($item) {
                return \Carbon\Carbon::parse($item->created_at)->year;
            });

            $years = range(2024, 2028);
        @endphp

        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md pb-6">
            <h2 class="text-2xl font-bold py-5 text-center border-b">All Issues</h2>

            <!-- Year Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mt-4">
                <button onclick="showYearData(2025)"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    2025
                </button>
                <button onclick="showYearData(2024)"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    2024
                </button>
                <!-- Add more year buttons if needed -->
            </div>

            <!-- Data Display -->
            <div class="mt-6 px-4" id="yearData">
                <div id="yearTabContent">
                    @foreach ($years as $year)
                        <div class="tab-pane @if ($loop->first) block @else hidden @endif" id="content-{{ $year }}">
                            @if (isset($groupedVolumes[$year]))
                                @foreach ($groupedVolumes[$year] as $volume)
                                    <div class="flex flex-wrap gap-6 mt-6 justify-center">
                                        <!-- Volume 1 Issue 1 -->
                                        <a href="{{ route('current.issue.list', ['id' => $journal->id, 'volumeId' => $volume->id]) }}"
                                            class="flex flex-col items-center">
                                            <img src="{{ asset('public/backend/' . $volume->image_path) }}"
                                                alt="Volume Image" class="w-[180px] h-60 object-cover rounded shadow">
                                            <span class="mt-3 text-sm font-medium text-gray-800">Volume 1 Issue 1</span>
                                        </a>

                                        <!-- Volume 1 Issue 2 -->
                                        <a href="#"
                                            class="flex flex-col items-center">
                                            <img src="{{ asset('public/backend/issue.jpg') }}"
                                                alt="Volume Image" class="w-[180px] h-60 object-cover rounded shadow">
                                            <span class="mt-3 text-sm font-medium text-gray-800">Volume 1 Issue 2</span>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-center text-gray-500 mt-4">No volumes available for {{ $year }}.</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
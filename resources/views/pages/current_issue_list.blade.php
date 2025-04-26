@extends('./layouts.master')
@section('userContent')
    @include('pages.page_header_nav')
    <div class="containers mx-auto py-10 px-4">
        @if ($volume_list_issue->isNotEmpty())
            @foreach ($volume_list_issue as $issue)
                {{-- @dd($issue->paper) --}}
                <div class="bg-white border border-gray-200 rounded-lg hover:bg-gray-100 transition mb-6">
                    <div class="p-6">
                        <!-- Header -->
                        <div class="flex items-start mb-4">
                            <h1 class="text-2xl font-bold leading-snug relative font-serif">
                                <a href="{{ route('single.issue', [
                                    'id' => $journal->id,
                                    'volumeId' => $issue->id,
                                    'issueId' => $issue->issu_no,
                                    'article' => $issue->paper,
                                ]) }}"
                                    class="text-black no-underline border-b-2 border-transparent hover:border-black transition-all duration-300 inline-block pb-1">
                                    {{ $issue->articles_title }}
                                </a>
                            </h1>
                        </div>

                        <!-- Authors -->
                        <div class="text-gray-600 text-sm font-serif mb-4">
                            Author Name: {{ $issue->author }}
                        </div>

                        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-end gap-4">
                            <!-- Publication Info -->
                            <div>
                                <p class="text-blue-600 font-medium"><strong>Article ID:</strong> {{ $issue->paper }}</p>
                                <p class="text-sm text-gray-700">
                                    The article was first published Online on
                                    <span>{{ \Carbon\Carbon::parse($issue->online)->format('d F, Y') }}</span>
                                </p>
                                <div class="italic text-gray-600 font-serif mt-2">
                                    <strong>{{ $journal->title }}</strong>
                                </div>
                                <a href="#" class="text-blue-700 text-sm font-serif hover:underline">
                                    https://doi.org/10.103/xxx
                                </a>
                            </div>

                            <!-- Download Buttons -->
                            <div class="flex flex-col sm:flex-row gap-3">
                                @if (!empty($issue->pdf_file))
                                    <a href="{{ route('download_pdf', ['file' => $issue->pdf_file]) }}"
                                        class="min-w-[120px] px-4 py-2 text-center bg-yellow-300 text-black text-base font-serif hover:brightness-110 rounded"
                                        target="_blank">
                                        Download PDF
                                    </a>
                                @endif
                                <a href="{{ route('article.issue', ['id' => $journal->id, 'volumeId' => $issue->id, 'issueId' => $issue->issu_no]) }}"
                                    target="_blank"
                                    class="min-w-[120px] px-4 py-2 text-center bg-sky-600 text-white text-base font-serif hover:bg-sky-700 rounded">
                                    Article HTML
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center text-gray-500">No issues found for this volume.</p>
        @endif
    </div>

@endsection

@extends('./layouts.master')

@push('add-css')
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Merriweather', "Times New Roman", Georgia, Garamond, serif;
        }
    </style>
@endpush

@section('userContent')
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row gap-6">

            <!-- Sidebar -->
            <div class="md:w-1/4 bg-white p-4 rounded-lg h-screen overflow-y-scroll">
                <h2 class="text-center text-xl font-bold mb-4 font-serif">Journals</h2>
                <ul class="space-y-2">
                    @foreach ($articles as $journalTitle => $journalArticles)
                        <li>
                            <a href="#"
                                class="block px-3 py-2 rounded-md transition duration-300 journal-link font-[Georgia] {{ $loop->first ? 'bg-gray-800 text-white' : 'text-blue-600' }}"
                                data-journal="{{ $journalTitle }}">
                                {{ $journalTitle }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Content Area -->
            <div class="md:w-3/4">
                <h1 class="text-center text-2xl font-bold mb-6 font-serif">All Articles</h1>
                <div class="space-y-8">
                    @foreach ($articles as $journalTitle => $journalArticles)
                        <div class="journal-section {{ !$loop->first ? 'hidden' : '' }}" data-journal="{{ $journalTitle }}">
                            <div class="mb-4 p-4 border rounded bg-white shadow-sm">
                                <h4 class="text-[32px] leading-[40px] mb-3 font-serif">{{ $journalTitle }}</h4>
                                @foreach ($journalArticles as $issue)
                                    <div
                                        class="issue-container bg-white border border-gray-200 rounded-md p-4 mb-4 hover:bg-gray-100 transition">
                                        <h5 class="text-lg font-semibold mb-1">
                                            <a href="{{ route('single.issue', ['id' => $issue->journal_idd, 'volumeId' => $issue->volume_id, 'issueId' => $issue->id]) }}"
                                                class="text-[#18181B] text-[24px] font-medium hover:underline font-serif">
                                                {{ $issue->article_title }}
                                            </a>
                                        </h5>
                                        <p class="mb-1"><strong>Author Name:</strong> {{ $issue->author_name }}</p>
                                        <p class="text-blue-600 mb-1"><strong>Article ID:</strong> {{ $issue->paper_id }}
                                        </p>
                                        <p class="mb-1">First published Online:
                                            <span>{{ \Carbon\Carbon::parse($issue->online_first)->format('d F, Y') }}</span>
                                        </p>
                                        <p class="text-blue-600 mb-3">{{ $issue->doi }}</p>
                                        <div class="flex gap-4 justify-end">
                                            @if (!empty($issue->file_path))
                                                <a href="{{ route('download_pdf', ['file' => $issue->file_path]) }}"
                                                    class="px-4 py-2 rounded bg-yellow-300 text-black text-sm font-semibold hover:bg-yellow-400 transition">
                                                    Download PDF
                                                </a>
                                            @endif
                                            <a href="{{ route('article.issue', ['id' => $issue->journal_idd, 'volumeId' => $issue->volume_id, 'issueId' => $issue->id]) }}"
                                                target="_blank"
                                                class="px-4 py-2 rounded bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition">
                                                Article HTML
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection



@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const journalLinks = document.querySelectorAll('.journal-link');
            const journalSections = document.querySelectorAll('.journal-section');

            journalLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const selectedJournal = this.getAttribute('data-journal');

                    // Highlight active journal link
                    journalLinks.forEach(l => l.classList.remove('bg-gray-800', 'text-white'));
                    this.classList.add('bg-gray-800', 'text-white');

                    // Toggle journal sections
                    journalSections.forEach(section => {
                        section.classList.toggle('hidden', section.getAttribute(
                            'data-journal') !== selectedJournal);
                    });
                });
            });
        });
    </script>
@endpush

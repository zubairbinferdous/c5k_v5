@extends('./layouts.master')
@section('userContent')
    @include('pages.page_header_nav')

    {{-- @dd($journal)  --}}
    <section class="">
        <div class="containers">
            <div class="journal_sub_info">
                <h3>About the journal</h3>
                <p>{!! str_limit(strip_tags($journal->aim_scope), 400, ' ...') !!}</p>
                <button class="view_scope_btn" onclick="my_modal_3.showModal()">View full aims & scope</button>
            </div>
        </div>
    </section>


    <section class="about_desc">
        <div class="containers">
            <div class="mt-3" style="border-bottom: 1px solid #E4E4E4;">
                <h1 class="pl-3" style="font-family: 'Georgia', serif; font-size: 24px; color: black; font-weight: 600;">
                    Journal Insights</h1>
            </div>

            <div class="row_content">
                <div class="md:w-3/12 lg:w-3/12 sm:w-6/12">
                    <h5 class="mt-4"
                        style="font-family: 'Georgia', serif; font-size: 18px; color: black; font-weight: 600;">Aims & Scope
                    </h5>
                </div>

                <div class="md:w-9/12 lg:w-9/12 sm:w-6/12">
                    <p class="mt-4 mb-3"
                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; text-align: justify; font-size: 16px; color: black;">
                        {!! str_limit(strip_tags($journal->aim_scope), 200, ' ...') !!}
                    </p>
                    <button style="font-family: 'Georgia', serif; color: blue;" onclick="my_modal_3.showModal()">View full
                        aims & scope</button>
                </div>
            </div>

            <div class="row_content">
                <div class="md:w-3/12 lg:w-3/12 sm:w-6/12">
                    <h5 class="mt-4"
                        style="font-family: 'Georgia', serif; font-size: 18px; color: black; font-weight: 600;">ISSN</h5>
                </div>

                <div class="md:w-9/12 lg:w-9/12 sm:w-6/12">
                    <p class="mt-4 mb-3"
                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; text-align: justify; font-size: 16px; color: black;">
                        <span>Online ISSN: {{ $journal->issn_online }}</span> , <span class="pl-2">Print ISSN:
                            {{ $journal->issn_print }}</span>
                    </p>
                </div>
            </div>

            <div class="row_content">
                <div class="md:w-3/12 lg:w-3/12 sm:w-6/12">
                    <h5 class="mt-4"
                        style="font-family: 'Georgia', serif; font-size: 18px; color: black; font-weight: 600;">Subject
                        Areas</h5>
                </div>

                <div class="md:w-9/12 lg:w-9/12 sm:w-6/12">
                    <p class="mt-4 mb-3"
                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; text-align: justify; font-size: 16px; color: black;">
                        {!! strip_tags($journal->subject_area) !!}
                    </p>
                </div>
            </div>

            <div class="row_content">
                <div class="md:w-3/12 lg:w-3/12 sm:w-6/12">
                    <h5 class="mt-4"
                        style="font-family: 'Georgia', serif; font-size: 18px; color: black; font-weight: 600;">Article
                        publishing charge</h5>
                </div>

                <div class="md:w-9/12 lg:w-9/12 sm:w-6/12">
                    <h4 class="mt-4" style="font-family: 'Georgia', serif; font-size: 24px; color: black;">
                        <i><b>$500</b></i>
                    </h4>
                    <h6 class="mb-2"
                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size: 16px; color: black;">
                        Article publishing charge for open access</h6>
                    <p class="mt-4 mb-3"
                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; text-align: justify; font-size: 16px; color: black;">
                        {!! strip_tags($journal->article_charge) !!}
                    </p>
                </div>
            </div>

            <div class="row_content">
                <div class="md:w-3/12 lg:w-3/12 sm:w-6/12">
                    <h5 class="mt-4"
                        style="font-family: 'Georgia', serif; font-size: 18px; color: black; font-weight: 600;">Publishing
                        timeline</h5>
                </div>

                <div class="md:w-9/12 lg:w-9/12 sm:w-6/12">
                    <div class="container_timeline">
                        <div class="col border-end">
                            <h4 class="mt-4" style="font-family: 'Georgia', serif; font-size: 24px; color: black;"><i><b>4
                                        days</b></i></h4>
                            <h6
                                style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size: 16px; color: black;">
                                Time to first decision</h6>
                        </div>

                        <div class="col border-end">
                            <h4 class="mt-4" style="font-family: 'Georgia', serif; font-size: 24px; color: black;">
                                <i><b>21 days</b></i>
                            </h4>
                            <h6
                                style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size: 16px; color: black;">
                                Review time</h6>
                        </div>

                        <div class="col border-end">
                            <h4 class="mt-4" style="font-family: 'Georgia', serif; font-size: 24px; color: black;">
                                <i><b>15 days</b></i>
                            </h4>
                            <h6
                                style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size: 16px; color: black;">
                                Revision time</h6>
                        </div>

                        <div class="col border-end">
                            <h4 class="mt-4" style="font-family: 'Georgia', serif; font-size: 24px; color: black;">
                                <i><b>40 days</b></i>
                            </h4>
                            <h6
                                style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size: 16px; color: black;">
                                Submission to Acceptance</h6>
                        </div>

                        <div class="col">
                            <h4 class="mt-4" style="font-family: 'Georgia', serif; font-size: 24px; color: black;"><i><b>7
                                        days</b></i></h4>
                            <h6
                                style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size: 16px; color: black;">
                                Acceptance to publication</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row_content">
                <div class="md:w-3/12 lg:w-3/12 sm:w-6/12">
                    <h5 class="mt-4"
                        style="font-family: 'Georgia', serif; font-size: 18px; color: black; font-weight: 600;">Abstracting
                        and indexing</h5>
                </div>

                <div class="md:w-9/12 lg:w-9/12 sm:w-6/12">
                    <p class="mt-4 mb-3"
                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; text-align: justify; font-size: 16px; color: black;">
                    <ul class="mt-3"
                        style="font-family: 'Merriweather', 'Times New Roman', Georgia, Garamond, serif; font-size: 16px; color: black; padding-left: 20px;">
                        <li style="list-style: disc;">Google Scholar</li>
                        <li style="list-style: disc;">Directory of Open Access Journals (DOAJ)</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal View --}}
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box w-8/12 max-w-5xl modal_typo">

            {{-- Action Cross Btn --}}
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <h3 class="">{{ $journal->title }}</h3>
            <h2>Aim and Scope</h2>
            <div class="journal_modal_desc">
                {!! $journal->aim_scope !!}
            </div>

            {{-- Action Close Btn --}}
            <div class="modal-action">
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn">Close</button>
                </form>
            </div>

        </div>

        {{-- Outside Close Modal --}}
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
@endsection

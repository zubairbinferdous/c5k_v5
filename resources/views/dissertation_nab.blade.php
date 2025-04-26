<section class="mt-1 bg-[#222E3E]">
    <div class="container mx-auto px-1">
        <div class="flex justify-center items-center">
            <h3 class="text-white text-center py-2 text-lg md:text-2xl font-semibold"> C5K Thesis Publishing</h3>
        </div>
    </div>
</section>

<section class="bg-[#EAEDED]">
    <div class="container mx-auto ">
        <nav class="flex flex-col md:flex-row md:justify-between items-center py-4">
            <button class="block md:hidden text-gray-600 focus:outline-none" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span>☰</span>
            </button>

            <div class="w-full md:flex md:items-center md:w-auto hidden md:block" id="navbarSupportedContent">
                <ul class="flex flex-col md:flex-row w-full items-center gap-4 ">
                    <li>
                        <a href="{{ url('dissertation-thesis') }}"
                            class="mx-2 text-gray-700 hover:text-blue-600 transition">
                            Thesis
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dissertation.publish') }}"
                            class="mx-2 text-gray-700 hover:text-blue-600 transition">
                            How To Publish
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dissertation.promote') }}"
                            class="mx-2 text-gray-700 hover:text-blue-600 transition">
                            Promote
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dissertation.faq') }}"
                            class="mx-2 text-gray-700 hover:text-blue-600 transition">
                            FAQ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

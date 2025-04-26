<section class="mt-1 bg-[#222E3E]">
    <div class="container mx-auto px-1">
        <div class="flex justify-center items-center">
            <h3 class="text-white text-center py-2 text-lg md:text-2xl font-semibold">C5K Book Publishing</h3>
        </div>
    </div>
</section>

<section class="bg-[#EAEDED]">
    <div class="container mx-auto">
        <nav class="flex flex-wrap items-center justify-between px-4 py-3">
            <button class="block lg:hidden text-gray-700 focus:outline-none" @click="open = !open">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="w-full lg:flex lg:items-center lg:w-auto hidden lg:block" id="navbarSupportedContent">
                <ul class="flex flex-col lg:flex-row w-full py-2 lg:py-0">
                    <li class="mx-2 my-1 lg:my-0">
                        <a href="{{ url('books') }}" class="text-gray-800 hover:text-blue-600 transition">Books</a>
                    </li>
                    <li class="mx-2 my-1 lg:my-0">
                        <a href="{{ route('book.publish') }}" class="text-gray-800 hover:text-blue-600 transition">How
                            To Publish</a>
                    </li>
                    <li class="mx-2 my-1 lg:my-0">
                        <a href="{{ route('book.promote') }}"
                            class="text-gray-800 hover:text-blue-600 transition">Promote</a>
                    </li>
                    <li class="mx-2 my-1 lg:my-0">
                        <a href="{{ route('book.faq') }}" class="text-gray-800 hover:text-blue-600 transition">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

@extends('./layouts.master')
@section('userContent')

@include('pages.page_header_nav')
<section class="py-4">
  <div class="containers mx-auto px-4">
    <h1 class="text-2xl font-bold mb-2">Enhance Your Article's English with a 25% Discount!</h1>
    <h6 class="text-base mb-1">
      This November, take advantage of a 15% discount on our Standard Language Editing Service. 
      Articles that undergo professional language editing are more likely to be accepted by peer-reviewed journals.
    </h6>
    <h6 class="text-base">
      Use code <span class="text-yellow-500 font-semibold">C5K25</span> to get 25% off Language Editing Standard.
    </h6>
  </div>
</section>

<section class=" bg-cover bg-center min-h-[200px]" style="background-image: url('/public/front/images/language.jpg');">
</section>

<div class="containers mx-auto px-4 -mt-24">
  <div class="bg-white shadow-lg rounded-lg p-6">
    <h2 class="text-xl font-semibold mb-2">
      C5K Language Services: Improve your article’s English to improve your chances of being published
    </h2>
    <h6 class="text-base mb-3">
      This month, get a 25% discount on our standard service. Use code 
      <span class="text-yellow-500 font-semibold">C5K25</span> for 25% off.
    </h6>
    <p class="text-gray-700">
      Getting your manuscript accepted in any journal is challenging. The quality of your writing is important 
      to accurately convey your research. Our Editors have extensive background and expertise in research and 
      editing and will help you increase your chances of being published.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
      <!-- Basic Plan -->
      <div class="bg-gray-100 rounded-lg p-6 shadow">
        <div class="text-lg font-bold mb-2">Basic Plan</div>
        <div class="text-2xl font-semibold mb-4">$19.99/month</div>
        <ul class="mb-4 space-y-1 text-gray-700">
          <li>Feature 1</li>
          <li>Feature 2</li>
          <li>Feature 3</li>
        </ul>
        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Purchase</button>
      </div>

      <!-- Standard Plan -->
      <div class="bg-gray-100 rounded-lg p-6 shadow">
        <div class="text-lg font-bold mb-2">Standard Plan</div>
        <div class="text-2xl font-semibold mb-4">$49.99/month</div>
        <ul class="mb-4 space-y-1 text-gray-700">
          <li>Feature 1</li>
          <li>Feature 2</li>
          <li>Feature 3</li>
          <li>Feature 4</li>
        </ul>
        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Purchase</button>
      </div>

      <!-- Premium Plan -->
      <div class="bg-gray-100 rounded-lg p-6 shadow">
        <div class="text-lg font-bold mb-2">Premium Plan</div>
        <div class="text-2xl font-semibold mb-4">$99.99/month</div>
        <ul class="mb-4 space-y-1 text-gray-700">
          <li>Feature 1</li>
          <li>Feature 2</li>
          <li>Feature 3</li>
          <li>Feature 4</li>
          <li>Feature 5</li>
        </ul>
        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Purchase</button>
      </div>
    </div>
  </div>
</div>

@endsection

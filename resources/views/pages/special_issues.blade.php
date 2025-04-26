

@extends('./layouts.master')
@section('userContent')

<style>
    #volumes-issues{
    
}
#volumes-issues h2{
    font-size: 2rem;
}
#volumes-issues .volume{
    /* font-size: 2rem; */
}
#volumes-issues .volume h3 span{
    font-size: 2rem;
}

.issues-list{
    padding-left: 50px;
}
.issues-list li {
    padding: 24px 0px;
    list-style: disc;
}
.issues-list li a span{
    color: #007bff;
}


</style>

  @include('pages.page_header_nav')

   <section>
        <div class="containers">

        <!-- Volumes and Issues Section -->
            <div id="volumes-issues">
                <h2 class="mt-3">Current Issues</h2>
                <!-- Volume 25 for 2024 -->
                <div class="volume">
                    <h3><span>Volume 25 </span><span class="float-right">(January - November 2024)</span></h3><hr style="border-bottom:1px solid #000;">
                    
                    <ul class="issues-list">
                        <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 7</span></a> - November 2024</li><hr>
                        <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 6</span></a> - September 2024</li><hr>
                        <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 5</span></a> - July 2024</li><hr>
                        <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 4</span></a> - June 2024</li><hr>
                        <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 3</span></a> - April 2024</li><hr>
                        <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 2</span></a> - February 2024</li><hr>
                        <li><a href="#"><span style="border-bottom:1px solid #3C9CD7;">Issue 1</span></a> - January 2024</li><hr>
                    </ul>
                </div>
            </div>

        </div>
   </section>
@endsection
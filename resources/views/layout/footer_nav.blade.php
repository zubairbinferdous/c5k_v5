<!-- Info Section -->
<section class="info_section">
    <div class="overlay"></div>
    <div class="container py-5">
        <div class="row">
            <!-- 1st Column: About C5K -->
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h6 class="text-white">About C5K</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Learn more about C5K</a></li>
                    <li><a href="{{route('mission.vission')}}" class="text-white">Mission & Vision</a></li>
                                      

                </ul>
            </div>
            <!-- 2nd Column: Location -->
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h6 class="text-white">Location</h6>
                <ul class="list-unstyled">
                    <li><p href="#" class="text-white">761 STATE HIGHWAY 100 <br> Port Isabel,TX 78578 USA</p></li>
                      <li class="mt-2"><a href="{{route('contact.support')}}" class="text-white">Contact & Support</a></li>
                </ul>
            </div>
            <!-- 3rd Column: Get Involved -->
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h6 class="text-white">Get Involved</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Conference</a></li>
                    <li><a href="#" class="text-white">Societies</a></li>
                    <li><a href="#" class="text-white">Technical career</a></li>
                    <li><a href="#" class="text-white">Scholarship</a></li>
                </ul>
            </div>
            <!-- 4th Column: Resources -->
            <div class="col-md-3 col-lg-3 col-sm-6">
                <h6 class="text-white">Resources</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Author guideline</a></li>
                    <li><a href="#" class="text-white">Paper format download</a></li>
                    <li><a href="#" class="text-white">Submit Article</a></li>
                    <li><a href="#" class="text-white">Book publishing</a></li>
                    <li><a href="#" class="text-white">Thesis/Dissertation</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<style>
    .info_section {
    background-color: #04509e; /* Fallback if the image doesn't load */
    position: relative;
    color: white;
    margin-top:10px;
}

.info_section .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #04509e; /* Dark overlay for contrast */
    z-index: 1;
}

.info_section .container {
    position: relative;
    z-index: 2; /* Brings the content above the overlay */
}

.info_section h6 {
    font-weight: bold;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.info_section a {
    text-decoration: none;
    transition: color 0.3s ease;
}

.info_section a:hover {
    color: #f8c200; /* Highlight color on hover */
}

</style>
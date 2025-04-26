<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C5K | Contact & Support</title>
    @include('layout.header')
    @section('css')
    <style>
       .contact-info{
               background-color: #04509e; /* Dark overlay for contrast */
               color:white;

       }
   
    </style>
</head>
<body>

<body>
<section class="container mt-5">
    <h1 class="text-center mb-4">Contact & Support</h1>
    <div class="row gy-4 my-4 py-4">
        <!-- Contact Form -->
        <div class="col-md-6">
            <h4>Send Us a Message</h4>
            <form  method="POST" class="shadow p-4 rounded">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>

        <!-- Contact Info and Map -->
        <div class="col-md-6">
            <!-- Contact Info -->
            <div class="contact-info shadow p-4 mb-4">
                <h4>Contact Information</h4>
                <p><strong>Email:</strong> support@c5k.com</p>
                <p><strong>Address:</strong> 761 STATE HIGHWAY 100 <br> Port Isabel,TX 78578 USA</p>
            </div>
            <!-- Google Map -->
            <div class="map-container shadow">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.948601583584!2d-122.0842494!3d37.4220656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba2a4f6b3945%3A0x75e64e30265b93e8!2sGoogleplex!5e0!3m2!1sen!2sus!4v1688537807925!5m2!1sen!2sus"
                    width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

</section>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')
<script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
</body>
</html>

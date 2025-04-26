<title>C5k | Publish</title>
@include('layout.header')
<style>

.publish-main {
    font-family: 'Inter', sans-serif;
}

/* =======================================  Banner  ============================================== */

.banner_sec {
    width: 100%;
    height: 600px;
    background-image: url('public/backend/banner_deser_publ.png');
    background-size: cover;
    background-position: center;
    display: flex; /* Flexbox for positioning */
    align-items: center; /* Vertically center content */
    justify-content: flex-start; /* Align content to the left */
}

.banner_content {
    margin-left: 50px; /* Add some spacing from the left */
    max-width: 600px;
        padding:100px 0;
}

.banner_content h1 {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 20px;
    color:#0b50a1;
}

.banner_content p {
    font-size: 18px;
    margin-bottom: 30px;
    line-height: 1.5;
}

.banner_content .btn {
    display: inline-block;
    padding: 12px 24px;
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    background-color: #007bff; /* Bootstrap primary color */
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.banner_content .btn:hover {
    background-color: #0056b3; /* Darker shade on hover */
}
.whypublish-section {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 2rem;
  padding: 3rem 1rem;
}

.whypublish-content {
    flex: 0 0 100%; /* Full width for text on large screens */
  }

@media (min-width: 992px) { /* Large screens */
  
  .whypublish-content {
  flex: 1;
  text-align: left;
}
}
.whypublish-section-main h1 {
  font-size: 3rem;
    color:#0b50a1;

}


.whypublish-content h2 {
  font-size: 2rem;
  color: #333;
  margin-bottom: 1rem;
    color:#0b50a1;

}

.whypublish-content p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.whypublish-content ul {
  margin-top: 1rem;
  padding-left: 1rem;
  list-style-type: disc;
  color: #555;
}

.whypublish-content ul li {
  margin-bottom: 0.5rem;
  font-size: 1rem;
}

.whypublish-image {
  flex: 1;
  display: flex;
  justify-content: center;
}

.whypublish-image img {
  width: 100%;
  height: 500px; /* Maintain aspect ratio */
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.step-main-section h1{
              color:#0b50a1;
              font-size:32px;
              font-weight:600;

}
.first-step h4{
              color:#0b50a1;
              font-size:22px;
              font-weight:600;

}


 .steper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 40px 0;
            max-width:350px;
        }

        .step {
            text-align: center;
            flex: 1;
            position: relative;
        }

        .circle {
            width: 60px;
            height: 60px;
            border: 2px solid #007bff;
            background-color: #fff;
            color: #007bff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: bold;
            margin: 0 auto;
        }
        
        
        .circle-active {
           width: 60px;
            height: 60px;
            border: 2px solid #007bff;
            background-color: red;
            color:white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: bold;
            margin: 0 auto;
        }

     

        .step p {
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }
        
         .benefit-public-section {
      color: white;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
      padding: 60px 20px;
    }
    .benefit-card {
      background: rgba(0, 0, 0, 0.6);
      border: none;
      color: white;
    }
    .cta-button {
      background-color: #ffc107;
      color: black;
      font-weight: bold;
    }
    .cta-button:hover {
      background-color: #e0a800;
      color: white;
    }

</style>

<body>
    @include('dissertation_nab')
    <div class="publish-main">
        <div class="banner_sec " style="background-image: url('public/backend/banner_deser_publ.png');">
            <div class="container">
                            <div class="banner_content ">
                <h1>C5K Academic Publishing</h1>
                
                <a href="#" class="btn">Publish</a>
            </div>

            </div>
        </div>
        
        
        <section class="desirtation-about py-5" style="background-image: url('public/backend/library.jpg'); background-size: cover; background-position: center;">
    <div class="container text-center text-white">
      
        <h4 class="my-4">How to Publish Your Thesis/Dissertation with C5K Journal</h4>
        <p class="mb-5">
           At C5K Journal Publishing House, we recognize the commitment and work required to finish a thesis or dissertation. A satisfying way to present your research to the international academic community is to turn your academic work into a published article. This comprehensive guide will assist you with the procedure
        </p>
       
    </div>

   <div class="py-3 slider">
    <div class="container" style="padding-right: 0px; padding-left: 0px;">
        <div id="thesispaper" class="carousel slide" data-ride="carousel" data-interval="2000">
            <!-- Carousel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <div class="card">
                                <img src="{{asset('public/backend/journal/20241030040119.png')}}" class="card-img-top" alt="Dissertation 1">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-none d-md-block">
                            <div class="card">
                                <img src="{{asset('public/backend/journal/20241030040248.png')}}" class="card-img-top" alt="Dissertation 2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-none d-lg-block">
                            <div class="card">
                                <img src="{{asset('public/backend/journal/20241031150714.png')}}" class="card-img-top" alt="Dissertation 3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                            <div class="card">
                                <img src="{{asset('public/backend/journal/20241030040248.png')}}" class="card-img-top" alt="Dissertation 4">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-none d-md-block">
                            <div class="card">
                                <img src="{{asset('public/backend/journal/20241031150714.png')}}" class="card-img-top" alt="Dissertation 5">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-none d-lg-block">
                            <div class="card">
                                <img src="{{asset('public/backend/journal/20241030040119.png')}}" class="card-img-top" alt="Dissertation 6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators mt-4">
                <li data-target="#thesispaper" data-slide-to="0" class="active"></li>
                <li data-target="#thesispaper" data-slide-to="1"></li>
            </ol>
        </div>
    </div>
</div>

</section>

<section class="container whypublish-section-main my-5 py-5">
        <div><h1 class="text-center pt-4 my-3">Why Publish Your Thesis/Dissertation with C5K?</h1></div>

<div class="whypublish-section">
    

  <div class="whypublish-content">
    <h2>Prestigious Platform:

.</h2>
    <p>
      C5K is known for releasing scholarly works with a significant impact.
    </p>
      <h2>Global Reach:

.</h2>
    <p>
        Disseminated to prestigious universities and accessible via premier digital libraries.
    </p>
      <h2>Professional Advice:

.</h2>
    <p>
 Throughout the publication process, knowledgeable editors and reviewers offer assistance.
    </p>
         <h2>Customized Formatting Assistance:

.</h2>
    <p>
 We guarantee that your thesis satisfies all scholarly and publishing prerequisites
    </p>
   
  </div>
   <div class="whypublish-image">
     <img src="{{asset('public/backend/library.jpg')}}"  alt="Dissertation 6">
  </div>
  </div>

  
</section>

<section class="container step-main-section">
    <div>
        <h1 class="text-center">4 Simple Steps to Publish Your Thesis/Dissertation</h1>
        
    </div>
    
       <div class="first-step">
               
   <div class="d-flex justify-content-center align-items-center ">
        <div class="steper ">
            <!-- Step 1 -->
            <div class="step mr-2">
                <div class="circle-active">Step-1</div>
            </div>

            <!-- Step 2 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-2</div>
            </div>

            <!-- Step 3 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-3</div>
            </div>

            <!-- Step 4 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-4</div>
            </div>
        </div>
   </div>
   
   <div class="text-center">
       <h4>
            Step 1: Prepare and Submit Your Manuscript
       </h4>
       <p>Make sure your manuscript satisfies the following criteria before submitting:
</p>
   </div>
   <div class="whypublish-section">
    
 <div class="whypublish-image">
     <img src="{{asset('public/backend/step1.jpg')}}"  alt="Dissertation 6">
  </div>
  <div class="whypublish-content">
       <h2>Formatting Compliance</h2>
    <p>
        Conform to the layout structure, font size, spacing, and citation style specified by C5K. This process is made easier with our submission instructions.
    </p>

    <h2>Title and Abstract</h2>
    <p>
        Write a clear, attention-grabbing title. Provide a well-written abstract that highlights the goals, methods, results, and conclusions of your study.
    </p>

    <h2>Comprehensive Inspection</h2>
    <p>
        Verify your work again for coherence, grammar, and spelling to improve its overall quality.
    </p>

    <h2>Submission Procedure</h2>
    <p>
        Upload your manuscript and supply the necessary information using the provided submission instructions.
    </p>
   
  </div>
  
  </div>

   
   
       </div>
         <div class="first-step">
               
   <div class="d-flex justify-content-center align-items-center ">
        <div class="steper ">
            <!-- Step 1 -->
            <div class="step mr-2">
                <div class="circle">Step-1</div>
            </div>

            <!-- Step 2 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle-active">Step-2</div>
            </div>

            <!-- Step 3 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-3</div>
            </div>

            <!-- Step 4 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-4</div>
            </div>
        </div>
   </div>
   
   <div class="text-center">
       <h4>
Step 2: Peer Review and Feedback
       </h4>
       <p>Once submitted, your manuscript undergoes a double-blind peer-review process:
          </p>
   </div>
   <div class="whypublish-section">
    

  <div class="whypublish-content">
   <h2>First Screening</h2>
    <p>
        Our editorial team evaluates your submission for originality, relevance, and academic rigor.
    </p>

    <h2>Expert Feedback</h2>
    <p>
        Experts review your work and offer helpful criticism to help you improve your manuscript.
    </p>

    <h2>Author Cooperation</h2>
    <p>
        Following acceptance, you will work with our editors to complete your dissertation or thesis for publication.
    </p>
   
  </div>
   <div class="whypublish-image">
     <img src="{{asset('public/backend/step2.jpg')}}"  alt="Dissertation 6">
  </div>
  
  </div>
       
       
       
       
       

  
  
  




   
   
 </div>
 
 
 <div class="first-step">
               
   <div class="d-flex justify-content-center align-items-center ">
        <div class="steper ">
            <!-- Step 1 -->
            <div class="step mr-2">
                <div class="circle">Step-1</div>
            </div>

            <!-- Step 2 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-2</div>
            </div>

            <!-- Step 3 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle-active">Step-3</div>
            </div>

            <!-- Step 4 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-4</div>
            </div>
        </div>
   </div>
   
   <div class="text-center">
       <h4>
           Step 3: Design and Quality Assurance
       </h4>
       <p>We make sure your work satisfies the most difficult academic requirements by:
          </p>
   </div>
   <div class="whypublish-section">
    
 <div class="whypublish-image">
     <img src="{{asset('public/backend/step3.jpg')}}"  alt="Dissertation 6">
  </div>
  <div class="whypublish-content">
          <h2>Editorial Review</h2>

    <p>
        Grammar, formatting, and structural errors are fixed by editors.
    </p>

    <h2>Visual Enhancements</h2>
    <p>
        Our team improves charts, graphs, and pictures for impact and clarity as appropriate.
    </p>

    <h2>Final Approval</h2>
    <p>
        Prior to publishing, a draft of the finished manuscript will be sent to you for approval.
    </p>
   
  </div>
  
  </div>

   
   
       </div>
       
       
<div class="first-step">
               
   <div class="d-flex justify-content-center align-items-center ">
        <div class="steper ">
            <!-- Step 1 -->
            <div class="step mr-2">
                <div class="circle">Step-1</div>
            </div>

            <!-- Step 2 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-2</div>
            </div>

            <!-- Step 3 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle">Step-3</div>
            </div>

            <!-- Step 4 -->
            <div class="step mr-2">
                <div class="line-left"></div>
                <div class="circle-active">Step-4</div>
            </div>
        </div>
   </div>
   
   <div class="text-center">
       <h4>
           Step 4: Publication and Global Distribution
       </h4>
       <p>Once approved, your thesis/dissertation is ready to reach the world:
    </p>
   </div>
   <div class="whypublish-section">
    
 
  <div class="whypublish-content">
 <h2>Digital and Print Availability</h2>
    <p>
        Both digital and print versions of your work are available.
    </p>

    <h2>Global Reach</h2>
    <p>
        Global accessibility is ensured by collaborating with top academic shops and libraries.
    </p>

    <h2>Royalty Agreement</h2>
    <p>
        For every sale or download of their work, authors get paid a competitive royalty.
    </p>
   
  </div>
  <div class="whypublish-image">
     <img src="{{asset('public/backend/step5.jpg')}}"  alt="Dissertation 6">
  </div>
  
  </div>

   
   
       </div>
 
 

    
</section>

<section  style="background: url('public/backend/footer.jpg') no-repeat center center/cover;">
    <div 
  class="benefit-public-section text-center container"
 >
  <div class="container">
    <h1 class="display-4 fw-bold">Benefits of Publishing with C5K</h1>
    <p class="lead">Share your research and make an impact in the academic world.</p>
    <div class="row mt-5 g-4">
      <div class="col-md-4">
        <div class="card benefit-card p-3">
          <h3>Academic Recognition</h3>
          <p>Boost your profile and establish yourself as an expert in your field.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card benefit-card p-3">
          <h3>Global Visibility</h3>
          <p>Share your findings with a broad audience worldwide.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card benefit-card p-3">
          <h3>Earning Potential</h3>
          <p>Earn royalties while making meaningful contributions to academia.</p>
        </div>
      </div>
    </div>
    
    <h2 class="mt-5">Common Reasons for Rejection</h2>
    <p class="lead">Avoid these pitfalls to ensure acceptance:</p>
    <ul class="text-start mx-auto d-inline-block">
      <li><strong>Plagiarism:</strong> Ensure your work is original and properly cited.</li>
      <li><strong>Incomplete Research:</strong> Submit a fully developed and well-structured thesis.</li>
      <li><strong>Poor Grammar/Formatting:</strong> Adhere to guidelines and proofread thoroughly.</li>
    </ul>

    <p class="mt-3">Ready to publish? Submit your manuscript today! Visit our <a href="#" class="text-warning fw-bold">FAQ page</a> or contact our editorial team for assistance.</p>
  </div>
  <div>    <button class="btn cta-button mt-4 px-4 py-2">Get Started Today</button>
</div>
</div>

</section>


    </div>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>
</html>

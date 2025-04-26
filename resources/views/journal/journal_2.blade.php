<title>{{ $journal->title ?? 'Default Title' }}</title>
@include('layout.header')
@section('css')
<style>

</style>
@endsection
<body>


<section class="py-3">
      <div class="container d-flex flex-column justify-content-center" style="height: auto; background-color:#146EB7;">
        <div class=" text-white p-4">
           <div class="row">
              <div class="col-md-2 col-lg-2 col-sm-6">
              <img src="{{ asset('front/images/papers/Journal-2.png') }}" class="img-fluid">
              </div>
              <div class="col-md-10 col-lg-10 col-sm-6 d-flex flex-column justify-content-center">
                <h4>Periodic Reviews on Artificial Intelligence in Health Informatics </h4>
                <h6>Open Access</h6>
             </div>
           </div>
        </div>        
      </div>
    <div class="container mb-0">
      <div class="row">
        <div class="col-md-5 col-lg-5 col-sm-6 justify-content-center" style="border:1px solid #000;">
          <ul class="nav-list navbar-nav-bottom mt-2">
          <li class="nav-item-bottom dropdown">
            <a href="#" class="nav-link-bottom dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
            </a>
            <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                <a class="dropdown-item" href="#">Our Mission</a>
                <a class="dropdown-item" href="#">Our Team</a>
                <a class="dropdown-item" href="#">History</a>
                <a class="dropdown-item" href="#">Contact Us</a>
            </div>
            
        </li>

            <li class="nav-item-bottom dropdown">
                <a href="#" class="nav-link-bottom dropdown-toggle">Articles & Issues</a>
            </li>
            
            <li class="nav-item-bottom dropdown">
                <a href="#" class="nav-link-bottom dropdown-toggle">Publish</a>
            </li>
          </ul>
      </div>
        <div class="col-md-3 col-lg-3 col-sm-6 d-flex justify-content-center align-items-center" style="border:1px solid #000;">
              <p class="mt-2"><i class="fa fa-search"></i>
              Search in this journal</p>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-6 d-flex justify-content-center align-items-center" style="border:1px solid #000;">
          <p class="mt-2">Submit your artical</p>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-6 d-flex justify-content-center align-items-center" style="border:1px solid #000;">
          <p class="mt-2">Guide for aurthors</p>
        </div>
      </div>
    </div>
    <div class="container pb-5" style="background-color: #E2F1FB;">
      <h1 class=" pt-3">About the journal</h1>
      <h6 class="mt-4 mb-3">The Periodic Reviews on Artificial Intelligence in Health Informatics is a comprehensive open-access journal that provides in-depth reviews and critical analyses of the latest advancements in artificial intelligence (AI) as applied to health informatics....               
                </h6>
                <a href="#" class="mb-5" data-toggle="modal" data-target="#aimsModal">View full aims & scope</a>
    </div>
  </section>
  <section class="mb-2">
    
  </section>
  <section>
    <div class="container">
      <div class="row mt-3 d-flex justify-content-between" style="border-bottom: 1px solid #E4E4E4;">
        <h1>Journal Insights</h1>
        <button type="button" class="btn feedback-btn" style="background-color: #05509F; color: white;padding: 5px 25px; margin: 10px;">
            <i class="fa fa-comment "></i> FEEDBACK
        </button>
      </div>
       <div class="row pb-3" style="border-bottom: 1px solid #E4E4E4;">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <h5 class="mt-4 pl-4">Aims & Scope</h5>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-6"><h6 class="mt-4 mb-3">The Periodic Reviews on Artificial Intelligence in Health Informatics is a comprehensive open-access journal that provides in-depth reviews and critical analyses of the latest advancements in artificial intelligence (AI) as applied to health informatics....               
        </h6>
          <a href="#" class="mb-5"  data-toggle="modal" data-target="#aimsModal">View full aims & scope</a></div>
      </div>
      <div class="row pb-3" style="border-bottom: 1px solid #E4E4E4;">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <h5 class="mt-4 pl-4">ISSN</h5>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-6"><h6 class="mt-4 mb-3">Online ISSN : XXX-YYY</h6></div>
      </div>

      <div class="row pb-3" style="border-bottom: 1px solid #E4E4E4;">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <h5 class="mt-4 pl-4">Subject Areas</h5>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-6"><h6 class="mt-4 mb-3">⦁	AI in Electronic Health Records (EHR) Systems
⦁	Predictive Analytics for Health Outcomes
⦁	Machine Learning in Medical Diagnostics
⦁	Natural Language Processing in Healthcare
⦁	AI for Personalized Medicine
⦁	Robotic Process Automation in Healthcare
⦁	Deep Learning for Medical Imaging
⦁	Decision Support Systems in Clinical Settings
⦁	AI in Population Health Management
⦁	Data Privacy and Security in AI Healthcare Applications
⦁	AI for Remote Monitoring and Telemedicine
⦁	Ethics and AI in Health Informatics
⦁	AI for Drug Discovery and Development
⦁	Wearable Devices and AI for Health Monitoring
⦁	Regulatory and Legal Frameworks for AI in Healthcare

</h6></div>
      </div>

      <div class="row pb-3" style="border-bottom: 1px solid #E4E4E4;">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <h5 class="mt-4 pl-4">Artical publishing charge</h5>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-6">
          <h4 class="mt-4 "><i><b>$500 dollar
          </b></i></h4>
          <h6 class="mb-2">Artical publishing charge for open access</h6>
          <h6 class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo....</h6>
        </div>
      </div>

      <div class="row pb-3" style="border-bottom: 1px solid #E4E4E4;">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <h5 class="mt-4 pl-4">Publishing timeline</h5>
        </div>
        <div class="d-flex justify-content-between align-items-center col-md-9 col-lg-9 col-sm-6">
          <span class="text-center" style="border-right: 2px solid #05509F; padding-right: 20px;">
            <h4 class="mt-4"><i><b>4 days</b></i></h4>
            <h6>Time to first decision</h6>
          </span>
          <span class="text-center" style="border-right: 2px solid #05509F; padding-right: 20px; ">
            <h4 class="mt-4"><i><b>21 days</b></i></h4>
            <h6>Review time</h6>
          </span>
          <span class="text-center" style="border-right: 2px solid #05509F; padding-right: 20px; ">
            <h4 class="mt-4"><i><b>15 days</b></i></h4>
            <h6>Revision time</h6>
          </span>
          
          <span class="text-center" style="border-right: 2px solid #05509F; padding-right: 20px;">
            <h4 class="mt-4"><i><b>40 days</b></i></h4>
            <h6>Submission to Acceptance</h6>
          </span>
          <span class="text-center" style="padding-left: 20px;">
            <h4 class="mt-4"><i><b>07 days</b></i></h4>
            <h6>Acceptance to publication</h6>
          </span>
        </div>        
      </div>

      <div class="row pb-3">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <h5 class="mt-4 pl-4">Abastracting and indexing</h5>
        </div>
        <div class="d-flex align-items-center col-md-9 col-lg-9 col-sm-6">
          <h6><ul class="mt-3"></ul>
            <li>Google Scholar
            </li>
          </ul></h6>
        </div>        
      </div>
    </div>    
  </section>
  <section>
    <div class="container" style="background-color: #E3F1FB;">
        <div class="row d-flex justify-content-between align-items-center">
          <h1 class="pl-5 mt-5">Articals</h1>
          <button type="button" class="btn feedback-btn mt-5" style="background-color: #05509F; color: white;padding: 5px 25px; margin: 10px;">
            <i class="fa fa-comment "></i> FEEDBACK
        </button>
        </div>


        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active text-dark" data-toggle="tab" href="#home"><b>Latest Published</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#menu1"><b>Article in press</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#menu2"><b>Most downloaded</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#menu3"><b>Most popular</b></a>
          </li>
        </ul>
        
        <div class="tab-content ml-2">
          <div id="home" class="tab-pane fade show active">
           <div class="row mt-5">
            <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
              <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <i class="fa fa-file-pdf-o" style="color: red;"></i> view PDF
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
              <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <i class="fa fa-file-pdf-o" style="color: red;"></i> view PDF
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
              <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <i class="fa fa-file-pdf-o" style="color: red;"></i> view PDF
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
              <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <i class="fa fa-file-pdf-o" style="color: red;"></i> view PDF
            </div>
           </div>
          </div>
          <div id="menu1" class="tab-pane fade">
            <div class="row mt-5">
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
             </div>
          </div>
          <div id="menu2" class="tab-pane fade">
            <div class="row mt-5">
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
             </div>
          </div>
          <div id="menu3" class="tab-pane fade">
            <div class="row mt-5">
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-md-3 col-lg-3 col-sm-6 p-3" style="background: linear-gradient(to right, white, #d5dfe6, #b4d4df);">
                <p style="opacity: .7;">Recharce artical <i class="fa fa-circle text-success"></i> open access</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
             </div>
          </div>
        </div>

        <div class="row mt-5 mb-5">
          <i class="fa fa-play-circle fa-3x ml-3 mb-5" style="color: #05509F;"></i> <h4 class="mt-2 ml-3 mb-5">View all Latest Published</h4>
        </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center">
        <h1 class="pl-5 mt-5">More from Macine Learning with Applications</h1>
        <button type="button" class="btn feedback-btn mt-5" style="background-color: #05509F; color: white;padding: 5px 25px; margin: 10px;">
          <i class="fa fa-comment "></i> FEEDBACK
        </button>
      </div>
      <div class="row">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active text-dark" data-toggle="tab" href="#home"><b>News</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#menu1"><b>Announcements</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#menu2"><b>Call for paper</b></a>
          </li>
        </ul>
      </div>
      <div class="tab-content ml-2 mt-4">
        <div id="home" class="tab-pane fade show active">
          <p>20November 2023</p>
          <h5>Guidelines for submitting proposals for journal Special Issues</h5>
        </div>
      </div>
      <div class="row mt-5 mb-5">
        <i class="fa fa-play-circle fa-3x ml-5 mb-5" style="color: #05509F;"></i> <h4 class="mt-2 ml-3 mb-5">View all News</h4>
      </div>
    </div>
  </section>
  <section>
    <div class="container" style="background-color: #E3F1FB;">
      <div class="row d-flex justify-content-between align-items-center">
        <h1 class="pl-5 mt-5">Call for Papers</h1>
        <button type="button" class="btn feedback-btn mt-5" style="background-color: #05509F; color: white;padding: 5px 25px; margin: 10px;">
          <i class="fa fa-comment "></i> FEEDBACK
      </button>
      </div>
      <div style="background-color: #fff;">
        <div class="m-3 mt-3">
          <h6 class="pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptas quuntur excepturi </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi assumenda mollitia voluptatem autem libero, obcaecati eius fugit dignissimos architecto nam deserunt iure amet minima adipisci commodi veritatis! Porro, accusantium voluptatem?</p>
        <p class="pb-4">Submission deadline <b>30 June 2024</b></p>
        </div>
      </div>
      <div class="row mt-5 mb-5">
        <i class="fa fa-play-circle fa-3x ml-5 mb-5" style="color: #05509F;"></i> <h4 class="mt-2 ml-3 mb-5">View all calls for papers forspecial issues</h4>
      </div>
    </div>
  </section>


    <!-- Modal -->
<div class="modal fade" id="aimsModal" tabindex="-1" role="dialog" aria-labelledby="aimsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aimsModalLabel">Periodic Reviews on Artificial Intelligence in Health Informatics
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- The content you want to show -->
        <!-- Aims and Scope Section -->
<div class="aims-scope-section">
<h2><b>Aim and Scope</b></h2>
    <p>
        The <i>Periodic Reviews on Artificial Intelligence in Health Informatics</i> is a comprehensive open-access journal that provides in-depth reviews and critical analyses of the latest advancements in artificial intelligence (AI) as applied to health informatics. The journal aims to serve as a trusted source for healthcare professionals, researchers, and technologists who seek to understand the role of AI in revolutionizing healthcare systems, patient care, and medical research.
    </p>
    <p>
        The journal focuses on synthesizing the latest trends, technologies, and innovations in AI that are transforming the health informatics landscape. By offering periodic reviews of current developments, the journal provides insights into how AI is being integrated into electronic health records, medical diagnostics, predictive analytics, and personalized medicine. Contributions that explore ethical considerations, regulatory challenges, and practical applications of AI in healthcare are particularly welcomed.
    </p>
    <h3>Types of Manuscripts</h3>
    <ul>
        <li><b>Review Articles:</b> Comprehensive and critical analyses of the current state of AI in health informatics, focusing on emerging trends, technologies, and applications.</li>
        <li><b>Technology Overviews:</b> Detailed explorations of cutting-edge AI technologies and their potential or actual impact on health informatics.</li>
        <li><b>Case Studies:</b> Practical examples of AI implementations in healthcare settings, providing insights into the challenges and successes of integrating AI in clinical workflows.</li>
        <li><b>Ethical and Regulatory Analyses:</b> Articles that address the ethical, legal, and regulatory considerations involved in deploying AI in healthcare environments.</li>
    </ul>
    <p>
        The journal’s mission is to contribute to the broader understanding of AI’s role in health informatics by offering valuable, up-to-date knowledge that informs both academia and the healthcare industry.
    </p>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>

</html>
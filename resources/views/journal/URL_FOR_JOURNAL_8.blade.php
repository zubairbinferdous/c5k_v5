<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Transactions on Banking, Finance, and Leadership Informatics</title>
@include('layout.css')
<style>
.aim-scope-section, .about-section {
    background-color: #f9f9f9;
    padding: 40px;
    margin: 20px 0;
    border-radius: 10px;
    font-family: 'Arial', sans-serif;
    color: #2c3e50;
    line-height: 1.6;
}

.aim-scope-section h2, .about-section h2 {
    color: #27ae60;
    font-size: 30px;
    margin-bottom: 20px;
    text-align: center;
}

.aim-scope-section p, .about-section p {
    font-size: 16px;
    margin-bottom: 20px;
    text-align: justify;
}

.aim-scope-section h3 {
    color: #2980b9;
    font-size: 24px;
    margin-bottom: 15px;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
}

.aim-scope-section ul {
    list-style-type: none;
    padding-left: 0;
    margin-bottom: 20px;
}

.aim-scope-section ul li {
    font-size: 16px;
    margin-bottom: 15px;
}

.aim-scope-section ul li b {
    color: #c0392b;
}

.aim-scope-section ul li ul {
    list-style-type: disc;
    padding-left: 20px;
}

.about-section i {
    color: #7f8c8d;
}

</style>
</head>
<body>
@include('layout.header')
@include('layout.nav')



<section class="py-3">
      <div class="container d-flex flex-column justify-content-center" style="height: auto; background-color:#056839;">
        <div class=" text-white p-4">
           <div class="row">
              <div class="col-md-2 col-lg-2 col-sm-6">
              <img src="{{ asset('public/front/images/papers/Journal-8.png') }}" class="img-fluid">
              </div>
              <div class="col-md-10 col-lg-10 col-sm-6 d-flex flex-column justify-content-center">
                <h4>Transactions on Banking, Finance, and Leadership Informatics 
                </h4>
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
                    Current Issue
                </a>
                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                    <a class="dropdown-item" href="#"> Current Issue</a>
                    <a class="dropdown-item" href="#">Article in Press</a>
                    <a class="dropdown-item" href="#">Special Issue</a>
                </div>
            </li>
            <li class="nav-item-bottom dropdown">
                <a href="#" class="nav-link-bottom dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Achieve
                </a>
                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                    <a class="dropdown-item" href="#">Published</a>
                    <a class="dropdown-item" href="#">All Articles</a>
                    <a class="dropdown-item" href="#">Best Paper Awards</a>
                </div>
            </li>
            <li class="nav-item-bottom dropdown">
                <a href="#" class="nav-link-bottom dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                </a>
                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                    <a class="dropdown-item" href="#">Journal Overview</a>
                    <a class="dropdown-item" href="{{route('journal_8')}}">Editorial Board</a>
                    <a class="dropdown-item" href="#">Call for Papers</a>
                    <a class="dropdown-item" href="#">Language Editing Service</a>
                </div>
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
      <h6 class="mt-4 mb-3">Transactions on Banking Finance, and Leadership Informatics” aims to bridge the domains of banking, finance, and leadership through innovative research that integrates advanced informatics. This journal seeks to publish high-quality theoretical and empirical studies that enhance our understanding of the...

      </h6>
      <a href="#" class="mb-5" data-toggle="modal" data-target="#aimsModal">View full aims & scope</a>
    </div>
  </section>
  <section class="mb-2">
    
  </section>
  <section>
    <div class="container">
      <div class="row mt-3 d-flex justify-content-between" style="border-bottom: 1px solid #E4E4E4;">
        <h1>Journal Overview</h1>
        <button type="button" class="btn feedback-btn" style="background-color: #05509F; color: white;padding: 5px 25px; margin: 10px;">
            <i class="fa fa-comment "></i> FEEDBACK
        </button>
      </div>
       <div class="row pb-3" style="border-bottom: 1px solid #E4E4E4;">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <h5 class="mt-4 pl-4">Aims & Scope</h5>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-6"><h6 class="mt-4 mb-3">Transactions on Banking Finance, and Leadership Informatics” aims to bridge the domains of banking, finance, and leadership through innovative research that integrates advanced informatics. This journal seeks to publish high-quality theoretical and empirical studies that enhance our understanding of the...</h6>
        <a href="#" class="mb-5" data-toggle="modal" data-target="#aimsModal">View full aims & scope</a></div>
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
        <div class="col-md-9 col-lg-9 col-sm-6"><h6 class="mt-4 mb-3">⦁	Banking Technology and Digital Banking
⦁	Financial Analytics and Data-Driven Decision Making
⦁	Fintech Innovation and Financial Services
⦁	Leadership in Financial Institutions
⦁	Risk Management and Compliance in Finance
⦁	Blockchain and Cryptocurrencies in Banking
⦁	Artificial Intelligence in Financial Markets
⦁	Corporate Governance and Leadership Informatics
⦁	Investment Strategies and Portfolio Management
⦁	Financial Regulations and Policy Informatics
⦁	Digital Payments and Transaction Systems
⦁	Sustainable Finance and Green Banking
⦁	Machine Learning for Credit Scoring and Risk Assessment
⦁	Leadership Development in Finance and Banking
⦁	Financial Inclusion and Technology


</h6></div>
      </div>

      <div class="row pb-3" style="border-bottom: 1px solid #E4E4E4;">
        <div class="col-md-3 col-lg-3 col-sm-6">
          <h5 class="mt-4 pl-4">Article publishing charge</h5>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-6">
          <h4 class="mt-4 "><i><b>$500
          </b></i></h4>
          <h6 class="mb-2">Article publishing charge for open access</h6>
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
          <h5 class="mt-4 pl-4">Abstracting and indexing</h5>
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
          <h1 class="pl-5 mt-5">Articles</h1>
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
        <h5 class="modal-title" id="aimsModalLabel">Transactions on Banking, Finance, and Leadership Informatics</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- The content you want to show -->
<!-- Aim and Scope Section -->
<div class="aim-scope-section">
    <h2><b>Aim and Scope</b></h2>
    <p>
        <i>Transactions on Banking Finance, and Leadership Informatics</i> aims to bridge the domains of banking, finance, and leadership through innovative research that integrates advanced informatics. This journal seeks to publish high-quality theoretical and empirical studies that enhance our understanding of the interplay between financial systems and leadership dynamics in both domestic and international contexts.
    </p>
    <h3>Key Areas of Interest</h3>
    <ul>
        <li><b>Banking Innovation:</b> Research on digital banking, fintech solutions, and their impacts on traditional banking practices.</li>
        <li><b>Financial Analytics:</b> Use of big data and analytics in asset management, risk assessment, and market predictions.</li>
        <li><b>Leadership in Finance:</b> Studies examining leadership styles, decision-making processes, and their effects on financial performance and organizational culture.</li>
        <li><b>Regulatory Compliance:</b> Insights into the evolving landscape of financial regulations and the role of leadership in ensuring compliance.</li>
        <li><b>Behavioral Finance and Leadership:</b> Exploration of psychological factors influencing financial decision-making and leadership behavior.</li>
        <li><b>Sustainable Finance:</b> Research on leadership roles in promoting sustainable financial practices and ethical investment strategies.</li>
        <li><b>Performance Metrics:</b> Development and evaluation of new metrics for assessing financial performance and leadership effectiveness in banking institutions.</li>
        <li><b>Crisis Management:</b> Studies focused on leadership responses to financial crises and their implications for banking and finance.</li>
    </ul>
    <p>
        The journal prioritizes interdisciplinary research that fosters collaboration between finance professionals, banking leaders, and informatics scholars. <i>Transactions on Banking Finance, and Leadership Informatics</i> aims to disseminate knowledge that not only advances academic understanding but also informs practice, policy, and decision-making within financial institutions and beyond. By promoting rigorous and impactful research, <i>Transactions on Banking Finance, and Leadership Informatics</i> also aims to enhance communication and collaboration among academics, practitioners, and policymakers in the dynamic fields of banking and finance.
    </p>
</div>

<!-- About Section -->
<div class="about-section">
    <h2><b>About</b></h2>
    <p>
        <i>Transactions on Banking Finance, and Leadership Informatics</i> aims to advance interdisciplinary research that integrates banking and finance with leadership principles and informatics, fostering innovation and informed decision-making in financial institutions and beyond.
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
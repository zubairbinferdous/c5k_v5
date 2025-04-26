<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C5K | Mission & Vision</title>
    @include('layout.header')
    @section('css')
    <style>
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .section-header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .section-header p {
            font-size: 1rem;
            color: #4a5568;
        }
        .mission-card {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }
        .mission-card h2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2d3748;
            margin-bottom: 1rem;
            position: relative;
        }
        .mission-card h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #4a90e2;
            margin: 0.5rem auto;
        }
        .mission-card p {
            font-size: 1rem;
            color: #4a5568;
            margin-top: 1rem;
            line-height: 1.6;
            text-align: justify;
        }
        .mission img{
            height:230px;
            width:100%;
        }
       
       
   
    </style>
</head>
<body>

<section class="container">
    <div>
        <h3 class="text-center py-5 mt-4">Mission & Vision</h3>
    </div>
    <div class="mission row d-flex justify-content-center align-items-center">
        <!-- Mission Card -->
        <div class="  col-md-6 col-12">
          <div class="mission-card mr-2">
               <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('public/backend/mission.jpeg')}}"/>
           </div>
            <h2 class="py-4">Our Mission</h2>
            <p>
               The objective of C5K Journal Publishing House is to support international research by offering a venue for the publication of excellent, peer-reviewed academic material that stimulates creativity and tackles pressing issues. Through interdisciplinary collaboration, we are committed to closing knowledge gaps and making sure that innovative concepts are seen by people all around the world. We aim to sustain excellence in all facets of what we do by adhering to the most rigorous requirements of editorial rigor, ethical publication, and academic credibility. Our dedication to inclusivity motivates us to embrace digital advancements and open-access models, guaranteeing that information is accessible to all. We hope to significantly advance society and promote sustainable development by turning scholarly research into beneficial insights.
            </p>
          </div>
        </div>

        <!-- Vision Card -->
        <div class="  col-md-6 col-12">
          <div class="mission-card mr-2">                       
  <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('public/backend/vision')}}"/>
           </div>
            <h2 class="py-4">Our Vision</h2>
            <p>
                Comparable to esteemed brands like Oxford University Press, Taylor & Francis, and Elsevier, our goal is to establish C5K Journal Publishing House as an internationally renowned leader in academic publishing. We hope to establish a cooperative ecosystem that connects scholars, organizations, and business executives worldwide to facilitate the free flow of ideas and multidisciplinary research. Through the utilization of state-of-the-art technology, our goal is to improve the publishing experience and guarantee that academic work leaves a lasting impression on society, industry, and academia. We strive to promote a wide range of viewpoints and elevate marginalized voices in research, with inclusivity and diversity at the core of our mission. We hope that our work will influence the way that knowledge is disseminated in the future and leave a lasting legacy in academic publishing
            </p>
            </div>
        </div>

        <!-- Core Values Card -->
        <div class=" col-md-6 col-12">
          <div class="mission-card mr-2">    
            <div class="d-flex justify-content-center align-items-center">
              <img src="{{asset('public/backend/core')}}"/>
           </div>
            <h2 class="py-4">Core Values</h2>
            <p>
                At C5K Journal Publishing House, we value integrity, inclusivity, innovation, and excellence. 
                We are committed to fostering collaboration and embracing diversity to drive meaningful progress.
            </p>
            </div>
        </div>
    </div>
</section>

@include('layout.footer_nav')
@include('layout.footer')
@include('layout.js')

</body>
</html>

@extends('layouts.app')

@section('content')


<section id="content">
        <div class="content-padding">
       
        <div class="gray-section">
            <!-- Black Transparent Blocks Section -->
            <p><h3>Professional tree trimming to enhance tree health and appearance.</h3></p><br><br>
            <div class="black-blocks-section">
             
                <!-- Individual Black Transparent Blocks with Text -->
                <div class="black-block">Trimming</div>
                <div class="black-block">Stump Grinding</div> 
                <div class="black-block">Removal</div>
                <div class="black-block">Tractor Work</div>
                <div class="black-block">Lot Clearing</div>
                <div class="black-block">Fire Wood</div>
                <div class="black-block">Bucket Truck</div>
                <div class="black-block">Hazardous Tree Removal</div>
                <div class="black-block">Experts</div>
            </div> 

            <!-- Individual Service Blocks -->
 <br>
   
</div>
 

            <!-- References Section -->
             
    </section>
<div class="gray-section">
    <w><h2>Expertise in hazardous tree removal using state-of-the-art equipment.</h2></w><br><br>
    
    <div style="position: center;">
        <p>
            <center>
            <button class="black-block1" onclick="window.location.href='tel:{{ $homepage_telephone_number }}'">Request a Quote</button>
            </center>
        </p>
        <br><br>

        <div class="references-box">
        <div class="slideshow">
            <!-- Dark green box for references -->
   
            <!-- Slides go here -->
            <div class="slide" style="background-image: url('http://paulheymanstreeservice.com/josh/images/gallery/site1/fa3.jpg')">
                <p>             <center><b><h55>References include:</h55></b> <br><br>Manatee County School Board<br>City of Bradenton<br>National Park Service of FL<br><br><div style="padding: 2px;"><a id="bbblink" class="ruhzbam" href="http://www.bbb.org/west-florida/business-reviews/tree-and-stump-removal/paul-heymans-tree-service-in-bradenton-fl-51001603#bbbseal" title="Paul Heyman's Tree Service, Inc., Tree and Stump Removal, Bradenton, FL" style="display: block;position: relative;overflow: hidden; width: 150px; height: 68px; margin: 0px; padding: 0px;"><img style="padding: 0px; border: none;" id="bbblinkimg" src="http://seal-westflorida.bbb.org/logo/ruhzbam/paul-heymans-tree-service-51001603.png" width="300" height="68" alt="Paul Heyman's Tree Service, Inc., Tree and Stump Removal, Bradenton, FL" /></a><script type="text/javascript">var bbbprotocol = ( ("https:" == document.location.protocol) ? "https://" : "http://" ); document.write(unescape("%3Cscript src='" + bbbprotocol + 'seal-westflorida.bbb.org' + unescape('%2Flogo%2Fpaul-heymans-tree-service-51001603.js') + "' type='text/javascript'%3E%3C/script%3E"));</script> </div><br></center>
                 </p>
            </div>
            <div class="slide" style="background-image: url('http://paulheymanstreeservice.com/josh/images/gallery/site1/fa2.jpg')">
                <p>             <center><b><h55>References include:</h55></b> <br><br>Manatee County School Board<br>City of Bradenton<br>National Park Service of FL<br><br><div style="padding: 2px;"><a id="bbblink" class="ruhzbam" href="http://www.bbb.org/west-florida/business-reviews/tree-and-stump-removal/paul-heymans-tree-service-in-bradenton-fl-51001603#bbbseal" title="Paul Heyman's Tree Service, Inc., Tree and Stump Removal, Bradenton, FL" style="display: block;position: relative;overflow: hidden; width: 150px; height: 68px; margin: 0px; padding: 0px;"><img style="padding: 0px; border: none;" id="bbblinkimg" src="http://seal-westflorida.bbb.org/logo/ruhzbam/paul-heymans-tree-service-51001603.png" width="300" height="68" alt="Paul Heyman's Tree Service, Inc., Tree and Stump Removal, Bradenton, FL" /></a><script type="text/javascript">var bbbprotocol = ( ("https:" == document.location.protocol) ? "https://" : "http://" ); document.write(unescape("%3Cscript src='" + bbbprotocol + 'seal-westflorida.bbb.org' + unescape('%2Flogo%2Fpaul-heymans-tree-service-51001603.js') + "' type='text/javascript'%3E%3C/script%3E"));</script> </div><br></center>
                 </p>
            </div>
            <div class="slide" style="background-image: url('http://paulheymanstreeservice.com/josh/images/gallery/site1/fa1.jpg')">
                <p>              <center><b><h55>References include:</h55></b> <br><br>Manatee County School Board<br>City of Bradenton<br>National Park Service of FL<br><br><div style="padding: 2px;"><a id="bbblink" class="ruhzbam" href="http://www.bbb.org/west-florida/business-reviews/tree-and-stump-removal/paul-heymans-tree-service-in-bradenton-fl-51001603#bbbseal" title="Paul Heyman's Tree Service, Inc., Tree and Stump Removal, Bradenton, FL" style="display: block;position: relative;overflow: hidden; width: 150px; height: 68px; margin: 0px; padding: 0px;"><img style="padding: 0px; border: none;" id="bbblinkimg" src="http://seal-westflorida.bbb.org/logo/ruhzbam/paul-heymans-tree-service-51001603.png" width="300" height="68" alt="Paul Heyman's Tree Service, Inc., Tree and Stump Removal, Bradenton, FL" /></a><script type="text/javascript">var bbbprotocol = ( ("https:" == document.location.protocol) ? "https://" : "http://" ); document.write(unescape("%3Cscript src='" + bbbprotocol + 'seal-westflorida.bbb.org' + unescape('%2Flogo%2Fpaul-heymans-tree-service-51001603.js') + "' type='text/javascript'%3E%3C/script%3E"));</script> </div><br></center>
                </p>
            </div>
        </div>

        </div>
<div class="gray-section" style="background-color: #001800; ">
{!! $content->homepage_text ?? '' !!}
        </div>
    </div>
</div>
  

 
    
    <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function previousSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    // Initial display
    showSlide(currentSlide);

    // Automatic slideshow, change the timing (in milliseconds) as needed
    setInterval(nextSlide, 5000);
</script>


 
@endsection

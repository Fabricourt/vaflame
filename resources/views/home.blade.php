@extends('layouts.app')

@section('content')
<!-- First Parallax Image with Logo Text -->
<div class="w3-display-container" style="margin-bottom:50px">
  <img src="/images/gospeltruck.jpg" class="bgimg-1" style="width:100%">
  <div class="w3-display-bottomleft w3-text-black w3-container w3-blue w3-hover-black w3-hide-small"
   style="bottom:10%;opacity:0.5;width:70%">
  <h2><b>4 Good Reasons<br>For Preaching with us</b></h2>
</div>
</div>


<!-- Grid -->
<div class="w3-row w3-container">
 <div class="w3-center w3-padding-64">
   <span class="w3-xlarge w3-bottombar w3-border-theme w3-padding-16">What We Offer</span>
 </div>
 <div class="w3-col l3 m6 w3-theme-l1 w3-container w3-padding-16">
   <h3>Design</h3>
   <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
 </div>

 <div class="w3-col l3 m6 w3-theme-d1 w3-container w3-padding-16">
   <h3>Branding</h3>
   <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
 </div>

 <div class="w3-col l3 m6 w3-theme-d3 w3-container w3-padding-16">
   <h3>Consultation</h3>
   <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
 </div>

 <div class="w3-col l3 m6 w3-theme-dark w3-container w3-padding-16">
   <h3>Promises</h3>
   <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
 </div>
</div>


  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="/images/blueblock.jpg" class="w3-round w3-image" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Mission</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      <p class="w3-large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>

  <hr>


@endsection

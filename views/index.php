<!DOCTYPE html>
<html lang="en">
<?php include("views/partials/head.php") ?>
<style>
    #app {
        min-height: 100vh !important;
        overflow: hidden;
    }
</style>

<body style="background-image:url('<?php assets("img/bg.jpg"); ?>') !important; background-repeat: no-repeat; background-position: center; background-size: cover;">

    <?php require('views/partials/nav.php'); ?> 

<img src="assets/img/logo.png" id="logo" alt="Logo" class="img img-fluid">

    <div id="app" class="">

<!-- main content start -->


<div class="row">
     <div class="col-sm-5"></div>
    <div class="col-sm-7">

      <div class="form-container">
     
   <form class="weddetailsForm" method="post" enctype="multipart/form-data" action="/task2/card" >

        <div class="row">
             <b href="#" class="headText text-center">|| लग्नसोहळ्याचे आग्रहाचे निमंत्रण ||</b>
        </div>

         <div class="row justify-content-between">

             <div class="col-5 mb-3 text-center">

                  <img id="groomImage" src="assets/img/groom.jpg" alt="Selected Image" 
                  onclick="openFileInput()" class="rounded-circle">

                  <input hidden type="file" id="fileInput1" accept="image/*" onchange="displayGroomImage(this)" name="groomImg">

                  <label for="fileInput1" class="mt-1 btn btn-sm btn-theme img-input">&#128247;</label>
        
              </div>
             
              <div class="col-5 mb-3 text-center">

                  <img id="brideImage" src="assets/img/bride.jpg" alt="Selected Image" 
                  onclick="openFileInput()" class="rounded-circle" >
                  
                  <input hidden type="file" id="fileInput2" accept="image/*" onchange="displayBrideImage(this)" name="brideImg">

                  <label for="fileInput2" class="mt-1 btn btn-sm btn-theme img-input"> &#128247; </label>
        
              </div>

        </div>


        <div class="row">
              
             <div class="col-sm-6 mb-3">

                  <label for="groomName" class="form-label">चि.</label>
                 <input type="text" class="form-control" id="groomName" name="groomName" value="अर्जुन" required>
        
              </div>

              <div class="col-sm-6 mb-3">

                <label for="brideName" class="form-label">चि. सौ. कां.</label>
                <input type="text" class="form-control" id="brideName" name="brideName" value="सायली" required>
        
              </div>


        </div>


        <div class="row">
              
             <div class="col-sm-6 mb-3">

                  <label for="groomDesc" class="form-label">वर परिचय</label>

                  <textarea class="form-control" id="groomDesc" rows="3" name="groomDesc" required>कै. हणमंत मुरलीधर दीक्षित यांचे नातू व श्री. संजय हणमंत दीक्षित यांचे जेष्ठ चिरंजीव मु. पो. कुरबावी ता. माळशिरस जि. सोलापूर </textarea>

        
              </div>

              <div class="col-sm-6 mb-3">

                <label for="brideDesc" class="form-label">वधू परिचय</label>
                <textarea class="form-control" id="brideDesc" rows="3" name="brideDesc" required>श्री. कांतीलाल दामोदर पंडित यांची पुतणी व कै. चंद्रकांत दामोदर पंडित यांची द्वितीय कन्या मु. पो. अजनाळे ता. सांगोला जि. सातारा </textarea>
        
              </div>


        </div>


          <div class="row">
              <div class="col-sm-6 mb-3">
                <label for="weddingDate" class="form-label">दिनांक,वेळ</label>
                <input type="datetime-local" class="form-control" id="weddingDate" name="weddingDate" required>
              </div>
              <div class="col-sm-6 mb-3">
                <label for="venue" class="form-label">विवाहस्थळ</label>
                <input type="text" class="form-control" id="venue" name="venue" value="साईराम मंगल कार्यालय, वाठार-वाई रोड, वाघोली ता. कोरेगाव जि. सातारा" required>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-12 mb-3">
                <label for="inviter" class="form-label">निमंत्रक</label>
                <input type="text" class="form-control" id="inviter" name="inviter" value="समस्त दीक्षित परिवार " required>
              </div>
          </div>

<input type="text" name="groomImgSrc" id="groomImgSrc" value="" hidden>
<input type="text" name="brideImgSrc" id="brideImgSrc" value="" hidden>

          <button type="submit" class="btn btn-sm btn-theme" name="submit">Generate</button>
        </form>
      </div>
    </div>
  </div>


<script type="text/javascript">


// set the src of images by default
document.getElementById('brideImgSrc').value=document.getElementById('brideImage').src;
document.getElementById('groomImgSrc').value=document.getElementById('groomImage').src;

function openFileInput() {
  document.getElementById('fileInput').click();
}

//display bride img
function displayBrideImage(input) {
  const file = input.files[0];

  if (file) {
    const reader = new FileReader();
    
    reader.onload = function (e) {
      document.getElementById('brideImage').src = e.target.result;
      document.getElementById('brideImgSrc').value=e.target.result;

    };

    reader.readAsDataURL(file);
  }
  
}

// display groom img
function displayGroomImage(input) {

  const file = input.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      document.getElementById('groomImage').src =e.target.result;
      document.getElementById('groomImgSrc').value= e.target.result;

    };

    reader.readAsDataURL(file);
  }

}


</script>

<!-- main content ends -->

        <!-- <?php include('views/partials/footer.php'); ?> -->
    
    </div>
</body>

</html>



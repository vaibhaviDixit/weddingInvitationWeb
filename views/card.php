<?php 

if (isset($_POST['submit'])) {
   
   $groomName=$_POST['groomName'];
   $brideName=$_POST['brideName'];
   $groomDesc=$_POST['groomDesc'];
   $brideDesc=$_POST['brideDesc'];
   $dt=date_parse_from_format("Y-m-d\TH:i:sP", $_POST['weddingDate']);

   $weddingDate=$dt['day']."/".$dt['month']."/".$dt['year']."  ".$dt['hour'].":".$dt['minute'];
   $venue=$_POST['venue'];
   $inviter=$_POST['inviter'];

   $groompic=$_POST['groomImgSrc'];
   $bridepic=$_POST['brideImgSrc'];

   echo "<script> document.getElementById('brideImage').src =". $bridepic ."</script>";
   echo "<script> document.getElementById('groomImage').src =". $groompic ."</script>";
}
else{
  echo "<script> window.location.href='/task2'; </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<?php include("views/partials/head.php") ?>


<style>
    #app {
        min-height: 100vh !important;
        overflow: hidden;
    }
</style>

<body style=" background-image:url('<?php assets("img/template.jpg"); ?>') !important; 
background-repeat: no-repeat; background-position: center; background-size: cover;">

    <div id="app" class="">

<!-- main content start -->

<!-- main content start -->


<div class="row justify-content-center mt-5">
    <div class="col-sm-12">

      <div class="form-container">
     
   <form class="weddetailsForm" method="post" enctype="multipart/form-data" >

        <div class="row mb-5">
             <b href="#" class="headText text-center">|| लग्नसोहळ्याचे आग्रहाचे निमंत्रण ||</b>
        </div>

         <div class="row justify-content-center">

             <div class="col-5 mb-3 text-center">

                  <img id="brideImage" src="<?php echo $groompic; ?>" alt="Selected Image" class="rounded-circle">
  

                  <div class="names">चि. <?php echo $groomName; ?></div>

                  <div class="mycard">
                  	<p>
                  		<?php echo $groomDesc; ?>
                  	</p>

                  </div>


        
              </div>
             
              <div class="col-5 mb-3 text-center">

                  <img id="groomImage" src="<?php echo $bridepic; ?>" alt="Selected Image" class="rounded-circle" >

                    <div class="names">चि. सौ. कां. <?php echo $brideName; ?></div>

                     <div class="mycard">
                  	<p>
                  		<?php echo $brideDesc; ?>
                  	</p>

                  </div>
        
              </div>

        </div>




          <div class="row justify-content-center">
              <div class="address text-center">
                <span class="mt-2 mb-3"> दि. <?php echo $weddingDate; ?> </span>
              	<p class="mt-2"><?php echo $venue; ?></p>
              </div>

              <p class="inviterText text-center"> <?php echo $inviter; ?> </p>
          </div>

        </form>
      </div>
    </div>
  </div>


<!-- main content ends -->

<script type="text/javascript">
 window.print(); //print card

 window.onafterprint = function() {
        history.go(-1);
    };
    
</script>
    
    </div>
</body>

</html>



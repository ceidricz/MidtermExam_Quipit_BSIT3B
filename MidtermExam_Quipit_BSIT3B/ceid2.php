<!DOCTYPE html>
<html>
<head>
  <title>Authentication Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel = "stylesheet"
      href = "index.css">

</head>
<?php include 'db.php' ?>
<body background="cvsuimus.jpg">

  <div class="login-page">
  <div class="form">
      <form  method= "post" class="login-form" action = "">
        <div class="modal-body">
          <?php 

                      $phpvar="300"; 
                      ?> 
                      <script>
                      function countDown(secs,elem) {
                      var element = document.getElementById(elem);
                      element.innerHTML = "Timer: "+secs+" seconds";
                      if(secs < 1) {
                      clearTimeout(timer);
                      element.innerHTML = '<h2>Ended</h2>';
                      element.innerHTML += '<a href="ceid.php">Reset</a>';
                      $("#btn-submit").attr("disabled", true);
                      }
                      secs--;
                      var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
                      }
                      </script>
                      <div id="status"style="font-size:20px;"></div>
                      <script>countDown(<?php echo $phpvar; ?>,"status");</script>
                    </div>

    <input type = "text" class = "text" name = "coded" value = "<?php 
      $rand = rand(100000,999999);
      echo $rand;
    
    ?>">
    <input type = "text" class = "text" name = "code" placeholder = "Enter Code">
    <br><br>
    <button type  = "submit" name = "submit">Enter</button>
   </form>
  </div>
    
</div>


</body>
</html>

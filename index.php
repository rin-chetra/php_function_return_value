<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
  <?php
      function checkLogin ($username , $pass){
        if ($username == "Chetra" && $pass == "06") {
          return true;
        }else{
                   return false;
      }
    }

      $comfm = checkLogin ("Chetra", "06");
      if ($comfm == true) {
        echo "Longin Successfully";
        }else{
        echo "Longin Failed";
      }
  ?>
	</body>
</html>

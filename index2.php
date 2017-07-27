<!DOCTYPE html>
<html>
	<head>
    <title>Wellcome to PHP</title>
	</head>
	<body>
    <h2>PHP Functin With Return Value</h2>
  <?php
      function checkLogin ($username , $pass){
        if ($username == "Chetra" && $pass == "06") {
            return array ($username , $pass);
        }else{
                   return null;
      }
    }

      $result_arr = checkLogin ("Chetra","06");
      echo "Username : ". $result_arr[0] ."<br/>";
      echo "Password : ". $result_arr [1]."<br/>";


  ?>
	</body>
</html>

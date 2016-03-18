
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title></title>
   <link rel="stylesheet" href="">
 </head>
 <body>
 <?php
      function Ptbacnhat($a,$b){
      echo "Phương trình bậc nhất: 5x +2 =0 <br>";
         if ($a == 0) {
        echo "Phương trình vô nghiệm";
      } else {
        $x = -$b/$a;
        echo "Phương trình có nghiệm: $x";
      }
      }
      $a=5;
      $b=2;
      Ptbacnhat($a,$b);
 ?>
 </body>
 </html>
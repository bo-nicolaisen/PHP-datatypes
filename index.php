 <!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Data test med data type</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="PATH">

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>
<h1>Data test med data type</h1>


<?php
$myData=["hej",1,9.4,[1,2,3]];

var_dump($myData);

echo "<br><br>";
foreach ($myData as $myVar) {

  $myType=gettype ( $myVar );

echo $myType;

if ($myType=="array") {
  echo "  - subarray data types: ";
  foreach ($myVar as $mySubVar) {

    $mySubType=gettype ( $mySubVar );
    echo $mySubType." ";
}

}
echo "<br>";
}

?>





 </body>

 </html>

<!DOCTYPE html>
<html>
<head>
    
    <title>PHP Training from Digisailor</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php  
$nm= $em="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $nm= $_POST["Name"];
     $em=$_POST["Email"];

}
?>

<div id="login-page">
	  	<div class="container">
      
	  	
		      <form action="" method="POST">
		        <h2 class="form-login-heading">SIGN IN</h2>
                  <p style="color:#F00; padding-top:20px;" align="center"></p>
		        <div class="login-wrap">
  
  <br>
		            <input type="text" name="Name" class="form-control" placeholder="Name" autofocus>
		            <br>
		            <input type="email" name="Email" class="form-control" placeholder="E-mail"><br >
		            
                    <button  class="btn btn-default"  type="submit">Login</button>
		         
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>


      <div class="container-fluid">
        
WELCOME <?php  

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $nm= $_POST["Name"];
     $em=$_POST["Email"];

     echo "<br> ".$nm;
     echo "<br> your mail id".$em." soon revert you";

}

// if(isset($_POST['Name']))
// {
//     echo "your name : ".$_POST["Name"];
//     echo "<br> your mail : ".$_POST["Email"];
// }
   

?>

<BR>

<h1>HEADING <span class="btn btn-success">Day <?= 
date('l') 
?></span></h1>
<p>
    <?php

    //
    //prt("globals",$GLOBALS);
    echo "<br> ";
    

echo "<br> ".Tot(5,2);

$Scre= array(1,2,3,"four","five",1.2,2.00,"20-feb-2022");
$Ag=array("Dhinesh"=>25,"kumar"=>35,"60"=>"sant");

echo "<br> ";
prt("as it is",$Scre);
echo "<br> ";

sort($Scre);
prt("sorted",$Scre);
echo "<br> ";

rsort($Scre);
prt("reverse sorted",$Scre);
echo "<br> ";

echo "<br> ";
prt("associated as it is",$Ag);
echo "<br> ";

asort($Ag);
prt("assoc age sorted",$Ag);
echo "<br> ";

ksort($Ag);
prt("assoc name sorted",$Ag);
echo "<br> ";

arsort($Ag);
prt("assoc age rev sorted",$Ag);
echo "<br> ";
krsort($Ag);
prt("assoc name rev sorted",$Ag);
echo "<br> ";


function Prt($Tit,$f)
{
    echo "<br>". $Tit;
    
    foreach ($f as $ct)
    {
       echo "<br>". $ct;
    }
   
 }




// foreach ($Ag as $Pers=> $Ages)
//  {
//     echo "<br>". $Pers." aged ". $Ages .":" . BoldOP($Ag[$Pers]);
// }

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$PubGloVar="public/global Variable";
//global $PubGloVar;
//echo $PubGloVar;
title3("print -$PubGloVar- from outside thte func");
echo "<br>";
define("cn","digis");
echo "<br>";

dGlVar();
echo "<br>";
//title3(cn);
echo "<br>";
function dGlVar()
{
    global $PubGloVar;
    echo $PubGloVar;
    echo "<br>";
    echo title3(cn);

}

function title3($MMG)
{
    echo $MMG;
}


echo "<br>";
echo "<br>";


var_dump($Scre);
echo br();
var_dump($Ag);
echo br()." test " . BoldOP($Ag["kumar"]);


dsf();

function DSF()
{
    echo br().br();
    $str="My 2nd PHP Training";
    echo br(). "as it is ". $str;  
    echo br(). "len / letter count ". strlen($str);
    echo br(). "words count ". str_word_count($str);  
    echo br(). "Reverse ". strrev($str);  
    echo br(). "position ". strpos($str,"M");  
    echo br(). "replace ". str_replace("y","x",$str);  
}

function Br()
{
    return "<br />";
}

echo "<br>";
echo "<br>";
  echo "Date ".date('d/M[m])/y[Y]) h:i:s D[l]');
     echo "<br>".date('l');
     $a=10;
     $b=20;
     echo "<br>Total a(". $a.")+b(".$b.")=". ($a+$b) . boldoP($a+$b);
     
     $MyNm="Dhinesh";
     echo "<br> Hello <i>".$MyNm."</i>" ;
     
     $ResTr=($a<$b);
     echo "<br> True = ". $a ."<".$b. var_export($ResTr,true);
     
     $ResFal=($a>$b);
     echo "<br> False = ". $a .">".$b. var_export($ResFal,true);
    $Td=new DateTime();
    echo "<br> <u> Date ".$Td->format('d/M[m])/y[Y]) h:i:s D[l]') . "</u>";
     
     function BoldOP($Mg)
        {
            return " <b>".$Mg."</b>";
        }
        function Tot ($c,$d,$e=66)
        {
            return $c+5+$e;
        } 
    ?>
    </p>
    </div>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>
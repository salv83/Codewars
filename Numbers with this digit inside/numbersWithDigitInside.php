<?php

function numbersWithDigitInside($x, $d) {
   $result=0;
   $sum=0;
   $product=1;
   for ($i = 1; $i <= $x; $i++) 
   {
       $array = str_split($i);
       $digitnumber=sizeof($array);
       $j=0;
       $found=0;
       while($j<$digitnumber)
       {
            if(($array[$j]==$d)&&($found==0))
            {
                $result++;
                $sum=$sum+$i;
                $product=$product*$i;
                $found=1;
            }            
            $j++;
       }
    }
    if($result==0)
    { 
        $sum=0;
        $product=0;         
    }
    $arrayresult = array($result, $sum, $product);
    return  $arrayresult;
}


print_r(numbersWithDigitInside(5, 6));
echo"<br>";
print_r(numbersWithDigitInside(7, 6));
echo"<br>";
print_r(numbersWithDigitInside(11, 1));
echo"<br>";
print_r(numbersWithDigitInside(44, 4));
?>
<?php
// ez bizony a buborékos rendezés
$tomb=array(11,5,4,8,7,9);
print_r($tomb);
echo "<br>";
$maxIndex=count($tomb)-1;

// & referencia, tömbben végzem el a cserét
function csere(&$tomb, $j)
{
    $b=$tomb[$j+1];
    $tomb[$j+1]=$tomb[$j];
    $tomb[$j]=$b;
}

for($i=$maxIndex;$i>=1;$i--)
{
    for($j=0; $j<=$i-1;$j++)
    {
        if($tomb[$j]>$tomb[$j+1])
        {
            csere($tomb, $j);
        }
    }
}

print_r($tomb);

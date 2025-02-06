<h1>Practica</h1>
<br>
<?php
foreach(range(1,1000) as $i)
    ($i%10==0)?print "$i<br>":print "$i, ";
echo "hola";
?>
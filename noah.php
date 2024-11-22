<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f']; 
$g=$_POST['g'];
$x=$_POST['gender'];
$l=$_POST['color'];
$n=$_POST['range'];
$bon=$_POST['box'];

$o = isset($_POST['o']) ? $_POST['o'] : '';
    $p = isset($_POST['p']) ? $_POST['p'] : '';
    $q = isset($_POST['q']) ? $_POST['q'] : '';
    $r = isset($_POST['r']) ? $_POST['r'] : '';
    $s = isset($_POST['s']) ? $_POST['s'] : '';
    $t = isset($_POST['t']) ? $_POST['t'] : '';
    $u = isset($_POST['u']) ? $_POST['u'] : '';


echo"
<h4 style='color:green;'>THE RESULT IS: </h4> <br>
<br>

<table style='border: 2px solid black; border-collapse: collapse;'>

<tr>
<th style='border: 1px solid black; border_callapse:collapse;'>name</th>
<th style='border: 1px solid black; border_callapse:collapse;'>DATE</th>
<th style='border: 1px solid black; border_callapse:collapse;'>room</th>
<th style='border: 1px solid black; border_callapse:collapse;'>time</th>
<th style='border: 1px solid black; border_callapse:collapse;'>file</th>
<th style='border: 1px solid black; border_callapse:collapse;'>comments</th>
<th style='border: 1px solid black; border_callapse:collapse;'>password</th>
<th style='border: 1px solid black; border_callapse:collapse;'>gender</th>
<th style='border: 1px solid black; border_callapse:collapse;'>day of working</th>
<th style='border: 1px solid black; border_callapse:collapse;'>color</th>
<th style='border: 1px solid black; border_callapse:collapse;'>range</th>
<th style='border: 1px solid black; border_callapse:collapse;'>number of boxes</th>





<tr>
<tr>
<td style='border: 1px solid black; border_callapse:collapse;'>$a</td>
<td style='border: 1px solid black; border_callapse:collapse;'>$b</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$c</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$d</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$e</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$f</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$g</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$x</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$o $p $q $r $s $t $u</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$l</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$n</td>
<td style='border: 1px solid black; border_collapse:collapse;'>$bon</td>


</tr>







</table>




";




}
?>
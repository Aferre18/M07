<p>OCTUBRE</p>
<table>
<tr>
<td>lu</td>
<td>ma</td>
<td>mi</td>
<td>ju</td>
<td>vi</td>
<td>sa</td>
<td>do</td>
<td></td>
<td></td>
<td></td>
</tr>



<?php
echo "<tr>";

/*$cuandoempieza=3;
/*strtotime
date N,*/

for ($n=1;$n!=101; $n++){
    echo "<td>$n</td>";
	if(($n%10)==0){
       echo " </tr><tr>";
	}
}
?>
</tr>
</table>

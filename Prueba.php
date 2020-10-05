<table>
<tr>
<td>lu</td>
<td>ma</td>
<td>mi</td>
<td>ju</td>
<td>vi</td>
<td>sa</td>
<td>do</td>
</tr>



<?php
echo "<tr>";

$cuandoempieza=3;


for ($n=1;$n!=31; $n++){
    echo "<td>$n</td>";
	if(($n%7)==0){
       echo " </tr><tr>";
	}
}
?>
</tr>
</table>
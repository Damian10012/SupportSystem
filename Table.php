<?php
echo
"
<div class='part1'></div>
<div class='tabulka'>
 

<table border ='1' >

    <td> ID </td>
    <td> Zaměstnanec </td>
    <td> Datum </td>
   
    <td> Problém </td>
    <td> Řešení</td>
    <td> Důležitost </td>
    <td> Stav</td>
   
</tr>
";
$conn = mysqli_connect("sql4.webzdarma.cz:3306", "helpdeskkval2958", "7IG5L*23)v0H3TE3U5^1", "helpdeskkval2958");
$sql = "SELECT ID,zamestnanec,datum,problem,reseni,dulezitost,stav FROM  wo";
$result =$conn ->query($sql);
$pocitadlo=0;
if($result->num_rows>0) {
    while (($row = $result->fetch_assoc())&&$pocitadlo<=9 )
    {
        echo "</br>";
        echo "<tr>";
        echo "<td>".$row['ID'] ."</td>";
        echo "<td>".$row['zamestnanec'],' '."</td>";
        echo "<td>".$row ['datum'],' '."</td>";
        echo "<td>".$row ['problem'],' '."</td>";
        echo "<td>".$row ['reseni'],' '."</td>";
        echo "<td>".$row ['dulezitost'],' '."</td>";
        echo "<td>".$row ['stav'],' '."</td>";
        

        echo "</tr>";
        
        $pocitadlo++;
    }
}
echo "</div>";
echo"</table>";
?>

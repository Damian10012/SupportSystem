
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <?php
            $conn = mysqli_connect("sql4.webzdarma.cz:3306", "suppsystemkv6540","ptRl6qp7%5*tk.@7,3Wb","suppsystemkv6540");
            $sql = "SELECT ID,zamestnanec,datum,problem,reseni,dulezitost,stav FROM  wo";
        ?>
</head>
<body>
    <div class="tabulka">
    <div class="part1"></div>'
    <div class="tabulka">
    <table border ="1" >
        <tr>
            <td> ID </td>
            <td> Zaměstnanec </td>
            <td> Datum </td>   
            <td> Problém </td>
            <td> Řešení</td>
            <td> Důležitost </td>
            <td> Stav</td>
        </tr>
        <?php
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
</body>
</html>
 

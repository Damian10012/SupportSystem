<?php

$username = $_POST['login'];
$password = $_POST['password'];
$conn = mysqli_connect("sql4.webzdarma.cz:3306", "suppsystemkv6540","ptRl6qp7%5*tk.@7,3Wb","suppsystemkv6540");
$sql = "SELECT Username, Password FROM login WHERE Username=$username AND Password=$password";
$result = mysqli_query($conn, $sql);
if($result->num_rows=1){
   header("Location: https://damian10012.github.io/SupportSystem/WO.html");
}
?>
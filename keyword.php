<?php
include "conn.php";
$bg=$_POST["bg"];
$dist=$_POST["distr"];
/*echo $bg;*/
$sql = "SELECT first_name, last_name,d_o_b,mobile_no FROM info_table WHERE bg_grp like '$bg' and district like '%".$dist."%' ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["first_name"]. " " . $row["last_name"]. " ".$row["d_o_b"]." ".$row["mobile_no"]."<br>";
    }
} else {
    echo "0 results";
}
?> 
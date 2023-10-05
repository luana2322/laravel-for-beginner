<?php

// Tạo ma trận A có 3 hàng, 5 cột
$A = array(array(1, 2, 3, 4, 5), array(6, 7, 8, 9, 10), array(11, 12, 13, 14, 15));

// Hiển thị ma trận A
echo "<table border='1'>";
for ($i = 0; $i < count($A); $i++) {
  echo "<tr>";
  for ($j = 0; $j < count($A[$i]); $j++) {
    echo "<td>" . $A[$i][$j] . "</td>";
  }
  echo "</tr>";
}
echo "</table>";

?>
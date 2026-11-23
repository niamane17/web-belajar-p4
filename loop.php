<?php
for ($i = 1; $i <= 10; $i++) {
  echo $i . " ";
}
$n = 5;
while ($n > 0) {
  echo "<br>$n";
  $n--;   // tanpa baris ini loop tak pernah berhenti
}
echo "<table border='1' cellpadding='6'>";
for ($r = 1; $r <= 5; $r++) {
  echo "<tr>";
  for ($c = 1; $c <= 5; $c++) echo "<td>" . ($r * $c) . "</td>";
  echo "</tr>";
}
echo "</table>";
$ukuran = 9;

echo "<table border='1' cellpadding='6'>";
for ($r = 1; $r <= $ukuran; $r++) {
  echo "<tr>";
  for ($c = 1; $c <= $ukuran; $c++) {
    echo "<td>" . ($r * $c) . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];
echo "<ul>";
foreach ($hari as $h) echo "<li>$h</li>";
echo "</ul>";

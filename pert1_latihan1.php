<?php
$A = 123; //Variable global
function Test() {
$A = "Test"; //Variable local
echo "Nilai A dalam fungsi = $A \n";
}
Test();
echo "Nilai A luar fungsi = $A \n";
?>

<?php
function calculateAreaRectangle($basis, $height) {
    $area = $basis * $height;
    return $area;
}

$result = calculateAreaRectangle(5, 10);
echo "The area of the rectangle is: " . $result;
?>



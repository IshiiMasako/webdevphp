<?php
$scores = []; 
$scores[0] = 81; //国語
$scores[1] = 79; //数学
$scores[2] = 78; //英語
$scores[3] = 74; //社会
$scores[4] = 80; //理科
if ($scores[2] >= 80){
    echo "たいへんよくできました";
} elseif ($scores[2]  >= 60){
echo "よくできました";
} else {
    echo "がんばりましょう";
}
?>
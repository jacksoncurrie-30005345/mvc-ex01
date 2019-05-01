<?php

echo '<h1>'.$data['title'].'</h1>';

echo `<br><br>`;

$output = "";

foreach($data['allPeople'] as $people) {
    $output .= '<h2>'.$people['FNAME'].' '.$people['LNAME'].'</h2>';
}

echo $output;

?>
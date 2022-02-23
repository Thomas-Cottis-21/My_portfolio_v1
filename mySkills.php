<?php

$mySkills = array("HTML", "CSS", "JavaScript", "PHP / MySQL");

$myHobbies = array("Welding", "Woodworking", "Designing and creating modern furniture", "Creating aestheticaly pleasing things", "Building computers", "Playing videogames", "Travelling");

function newList($array){
    foreach ($array as $listItem){
        echo "<ul>";
    
        echo $listItem;
    
        echo "</ul>";
    };
}

?>



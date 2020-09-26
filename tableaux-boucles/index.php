<?php
    $indianaMovies = [
        "Indiana Jones and the Kingdom of the Crystal Skull" => 2008,
        "Indiana Jones and the Last Crusade" => 1989,
        "Indiana Jones and the Temple of Doom" => 1984,
    ];
    asort($indianaMovies);

    echo "<ul>";
    foreach($indianaMovies as $title=>$releaseyear){
        echo  "<li>". $releaseyear. " - " . $title .". </li>";
    }
    echo "</ul>"
?>
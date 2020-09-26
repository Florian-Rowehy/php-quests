<?php
    $indianaMovies = [
        "Indiana Jones and the Kingdom of the Crystal Skull" => ["Harrison Ford", "Cate Blanchett", "Karen Allen"],
        "Indiana Jones and the Last Crusade" => ["Harrison Ford", "Sean Connery", "Denholm Elliott"],
        "Indiana Jones and the Temple of Doom" => ["Harrison Ford", "Kate Capshaw", "Jonathan Ke Quan"],
    ];

    echo "<ul>";
    foreach($indianaMovies as $title=>$actors){
        echo  "<li> Dans le film \"". $title . "\", les principaux acteurs sont : ". implode(", ", $actors) .". </li>";
    }
    echo "</ul>"
?>
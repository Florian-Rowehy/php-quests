<?php
$presentTime = new DateTime();
$destinationTime = DateTime::createFromFormat('Y-m-d H:i:s', '2020-12-25 07:00:00');

$timeDiff = $destinationTime->diff($presentTime);
$timeDiffStr = $timeDiff->format('years:%y months:%m days:%d hours:%H minutes:%i');
$timeDiffMin = floor(abs($presentTime->getTimestamp() - $destinationTime->getTimestamp()) / 60);
$nbLiters = ceil($timeDiffMin / 10**4);

function displayTime(DateTime $date, string $destinationName): string
{
    $formatedDate = $date->format('M d Y A h:i');
    $destinationName = strtoupper($destinationName);
    return <<<EOL
<h2> $destinationName TIME</h2>
<p>$formatedDate</p>
EOL;
}

echo displayTime($presentTime,"present");
echo displayTime($destinationTime, 'destination');
echo "<p> <strong>TIME DIFFERENCE</strong> $timeDiffStr </p>";
echo "<p> You will need $nbLiters litre.</p>";
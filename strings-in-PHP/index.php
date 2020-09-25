<?php 
$message1 = '0@sn9sirppa@#?ia\'jgtvryko1';
$message2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$message3 = 'aopi?sgnirts@#?sedhtg+p9l!';

function decodeMessage($codedMessage) : string {
    $chars = array('@', '#', '?');
    $keyMessage = mb_strlen($codedMessage)/2;
    $partialMessage = mb_substr($codedMessage, 5, $keyMessage);
    return  strrev( str_replace($chars, ' ', $partialMessage) );
}

echo decodeMessage($message1)," ", decodeMessage($message2), " ", decodeMessage($message3);

//j'ai appris toutes les ficelles des strings

?>
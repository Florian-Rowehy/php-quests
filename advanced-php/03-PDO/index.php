<?php
require_once("./connec.php");

$pdo = new PDO(DSN, USER, PWD);

if( $_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $lastname = "";
    if(isset($_POST["firstname"])) $firstname = clean_input($_POST["firstname"]);
    if(isset($_POST["lastname"])) $lastname = clean_input($_POST["lastname"]);

    $query = 'INSERT INTO friend (firstname, lastname) VALUE ( :firstname, :lastname )';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $statement->execute();
    $statement->rowCount();
    header('Location: index.php');
}


$query = "SELECT firstname, lastname FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();
?>

<ul>
    <?php foreach($friends as [$firstname, $lastname]): ?>
        <li> <?= $firstname." ".$lastname; ?> </li>
    <?php endforeach; ?>
</ul>

<form novalidate method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <button>Submit</button>
</form>


<?php
    function clean_input(String $name): ?String
    {
        if(strlen($name)>45 || $name==="") return null;
        $name = trim($name);
        $name = stripslashes($name);
        $name = htmlspecialchars($name);
        return $name;
    }
?>

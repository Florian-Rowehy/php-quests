<?php
require_once ("./public/_header.php");

function clean_input(string $input): string {
    $input = implode("", preg_split ("#[\\\]+#", $input));
    $input = trim($input);
    return htmlspecialchars( $input );
}

$errMessageName1 ="";
$errMessageSurname1="";
$errMessagePhoneNumber1="";
$errMessageEmail1 = $errMessageEmail2="";
$errMessageSubject1="";
$errMessageMessage1="";


if($_POST){
    $name = $_POST["user_name"];
    $surname = $_POST["user_surname"];
    $email = $_POST["user_email"];
    $phoneNumber = $_POST["user_phonenumber"];
    $subject = $_POST["user_message_subject"];
    $message = $_POST["user_message"];

    if(empty($name)) $errMessageName1 = "Please enter a name.";
    if(empty($surname)) $errMessageSurname1 = "Please enter a surname.";
    if(empty($email)) $errMessageEmail1 = "Please enter an email address.";
    if(filter_var($email, FILTER_VALIDATE_EMAIL) ) $errMessageEmail2 = "Please use a valid email address. (ex:xxxx@xxx.com)";

    if(empty($phoneNumber)) $errMessagePhoneNumber1 = "Please enter a phone number.";
    if(empty($subject)) $errMessageSubject1 = "Please choose a subject between the following subject.";
    if(empty($message)) $errMessageMessage1 = "Please enter a message.";


}
?>

<form  method="post">
    <p>
        <label  for="name">Name :</label>
        <input  type="text"  id="name"  name="user_name" required value="<?=empty($name)? "" : clean_input($name)?>">
        <span><?=$errMessageName1?></span>
    </p>
    <p>
        <label  for="surname">Surname :</label>
        <input  type="text"  id="surname"  name="user_surname" required value="<?=empty($surname)? "" : clean_input($surname)?>">
        <span><?=$errMessageSurname1?></span>
    </p>
    <p>
        <label  for="mail">Email Address :</label>
        <input  type="email"  id="mail"  name="user_email" required value="<?=empty($email)? "" : clean_input($email)?>">
        <span><?=$errMessageEmail1? $errMessageEmail1 : $errMessageEmail2?></span>
    </p>
    <p>
        <label  for="phonenumber">Phone Number :</label>
        <input  type="text" pattern="(+33|0)[0-9]{9}"  id="phonenumber"  name="user_phonenumber" required value="<?=empty($phoneNumber)? "" : clean_input($phoneNumber)?>">
        <span><?=$errMessagePhoneNumber1?></span>
    </p>
    <p>
        <label  for="subject">Subject :</label>
        <select  id="subject"  name="user_message_subject" required>
            <option value="Become the next president" selected >Become the next president</option>
            <option value="Meet the Spice Girls">Meet the Spice Girls</option>
            <option value="Start a panda therapy">Start a panda therapy</option>
        </select>
        <span><?=$errMessageSubject1?></span>
    </p>
    <p>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required ><?=empty($message)? "" : clean_input($message)?></textarea>
        <span><?=$errMessageMessage1?></span>
    </p>
    <p>
        <button type="submit">Send your message</button>
    </p>
</form>

<?php
require_once ("./public/_footer.php");
?>
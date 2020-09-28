<?php
require_once ("./public/_header.php");
?>

<form  action="./formular-recuperation.php"  method="post">
    <p>
        <label  for="name">Name :</label>
        <input  type="text"  id="name"  name="user_name">
    </p>
    <p>
        <label  for="surname">Surname :</label>
        <input  type="text"  id="surname"  name="user_surname">
    </p>
    <p>
        <label  for="mail">Email Address :</label>
        <input  type="email"  id="mail"  name="user_email">
    </p>
    <p>
        <label  for="phonenumber">Phone Number :</label>
        <input  type="text"  id="phonenumber"  name="user_phonenumber">
    </p>
    <p>
        <label  for="subject">Phone Number :</label>
        <select  id="subject"  name="user_message_subject">
            <option value="Become the next president" selected >Become the next president</option>
            <option value="Meet the Spice Girls">Meet the Spice Girls</option>
            <option value="Start a panda therapy">Start a panda therapy</option>
        </select>
    </p>
    <p>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </p>
    <p  class="button">
        <button  type="submit">Send your message</button>
    </p>
</form>

<?php
require_once ("./public/_footer.php");
?>
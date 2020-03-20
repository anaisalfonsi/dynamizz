<?php 
    include('layouts/header.php');

    if(isset($_POST)) {
        echo "HELLO";
    }

?>

    <div class="form" method="POST" action="contact.php">
        <h1>Contact us</h1>
        <input type="email" placeholder="Your Mail" name="email">
        <input type="Name" placeholder="Your Name" name ="name">
        <select class="statue">
            <option value="Choice">Take your choice fellow</option>
            <option value="Choice">--Comments--</option>
            <option value="Choice">--Artist 1--</option>
            <option value="Choice">--Artist 2--</option>
            <option value="Choice">--Artist 3--</option>
            <option value="Choice">--Artist 4--</option>
            <option value="Choice">--Artist 5--</option>
            <option value="Choice">--Artist 6--</option>
            <option value="Choice">--Artist 7--</option>
        </select>
        <select class="statue">
            <option value="Choice">--Want Picture--</option>
            <option value="Choice">--Post your Pictures--</option>
            <option value="Choice">--Services--</option>
            <option value="Choice">--Quotes--</option>
            <option value="Choice">--Comments--</option>
        </select>
        <textarea placeholder="Your message" name="message"></textarea>
        <div><button class="button" name ="submit">Click Me</button></div>
    </div>
    </form>
    <?php include('../layouts/footer.php'); ?>
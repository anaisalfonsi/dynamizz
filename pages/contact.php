<?php 
    include('../layouts/header.php');

    if(isset($_POST)){
        $errors = [];
        $message = $_POST['message'];
        $pickcontact = $_POST['pickcontact'];
        $pickrequest = $_POST['pickrequest'];
            if(empty($_POST['email'])){
                $errors ['email'] = "❗️The field email is required";
            }
            if(empty($_POST['name'])){
                $errors ['name'] = "❗️The field Name is required";
            }
            if(empty($_POST['message'])){
                $errors ['message'] = "❗️The field message is required";
            }
            if($_POST['pickcontact'] === 'NoChoice'){
                $errors ['pickcontact'] = "❗️Please choose a Contact";
            }
            if($_POST['pickrequest'] === 'NoChoice'){
                $errors ['pickrequest'] = "❗️Please choose a Request";
            }
    }

?>
    <h1>Contact us</h1>
        <div class="containerForm">
            <form class= "form" method="POST" action="contact.php">
                    <p class = "formerror">
                        <code>
                            <?php if(isset($errors['email'])) echo $errors['email']; ?> 
                        </code>
                    </p>
                <input type="email" placeholder="Your Mail" name="email" value=<?php if(isset($_POST['email'])) echo $_POST['email']; ?>>
                    <p class = "formerror">
                        <code>
                            <?php if(isset($errors ['name'])) echo $errors['name'] ?>
                        </code>
                    </p>
                <input type="Name" placeholder="Your Name" name ="name" value=<?php if(isset($_POST['name'])) echo $_POST['name']; ?>>
                    <p class = "formerror">
                        <code>
                            <?php 
                            if(isset($errors ['pickcontact'])) echo $errors['pickcontact'];
                            ?>
                        </code>
                    </p>
                <select class="statue" name ="pickcontact">
                    <option value="NoChoice" name="pickcontact">--Choose your Contact--</option>
                    <option value="Choice" name="pickcontact">--PixieWilder Team--</option>
                    <option value="Choice" name="pickcontact">--Artist 1--</option>
                    <option value="Choice" name="pickcontact">--Artist 2--</option>
                    <option value="Choice" name="pickcontact">--Artist 3--</option>
                    <option value="Choice" name="pickcontact">--Artist 4--</option>
                    <option value="Choice" name="pickcontact">--Artist 5--</option>
                    <option value="Choice" name="pickcontact">--Artist 6--</option>
                    <option value="Choice" name="pickcontact">--Artist 7--</option>
                </select>
                        <p class = "formerror">
                            <code>
                                <?php if(isset($errors ['pickrequest'])) echo $errors['pickrequest'] ?>
                            </code>
                        </p>
                    <select class="statue" name="pickrequest">
                        <option value="NoChoice">--Choose your request--</option>
                        <option value="Choice">--Apply as an Artist--</option>
                        <option value="Choice">--Contact an Artist for more info--</option>
                        <option value="Choice">--Quote Request--</option>
                        <option value="Choice">--Comments--</option>
                    </select>
                    <p class = "formerror">
                        <code>
                            <?php if(isset($errors ['message'])) echo $errors['message'] ?>
                        </code>
                    </p>
                <textarea placeholder="Your message" name="message" value="<?php if (isset($message)) { echo $message; } ?>"><?php if (isset($message)) { echo $message; } ?></textarea>
                    <div><button class="button" name ="submit">Click Me</button></div>
                    </div>
            </form>      
        </div>
<?php include('../layouts/footer.php'); ?>
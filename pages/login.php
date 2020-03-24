<?php 
    include('../layouts/header.php');

    ?>
                <div class="loginPage">
                    <div class="loginContainer">
                        <img class="imgLogin" src="https://media.giphy.com/media/FspRFfHVqHRfy/giphy.gif" alt="swag" class="successgif">
                        <div class="loginForm">
                        <h2 id="login">LOGIN</h2>
                            <form class= "login" method="POST" action="login.php">
                                <p class = "formerror">
                                    <code>
                                        <?php if(isset($errors['email'])) echo $errors['email']; ?> 
                                    </code>
                                </p>
                                <label class="loginLabel" for="exampleInputEmail1">ID</label>
                                <input class="loginInput" type="logId" placeholder="Enter your username or email address" name="logId" value=<?php if(isset($_POST['logId'])) echo $_POST['logId']; ?>>
                                    <p class = "formerror">
                                        <code>
                                            <?php if(isset($errors ['name'])) echo $errors['name'] ?>
                                        </code>
                                    </p>
                                <label class="loginLabel for="exampleInputPassword1">PASSWORD</label>
                                <input class="loginInput type="password" placeholder="Enter Password" name ="password" value=<?php if(isset($_POST['password'])) echo $_POST['password']; ?>>
                                
                                <div class="loginButt"><button class="loginbutton" name ="submit"> 🎀Sign In 🎀 </button></div>
                            </div>
                        </div>
                </div>
<?php include('../layouts/footer.php'); ?>
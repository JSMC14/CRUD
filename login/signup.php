<?php 
    require 'database.php';
        $message = '';
        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $sql="INSERT INTO users (email, password) VALUES (:email, :password)";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(':email',$_POST['email']);
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $stmt->bindParam(':password',$password);  
                if($stmt->execute()){
                    $message='Succesfull';
                    $_SESSION['message']= 'User Created Succesfully';
                    $_SESSION['message_type']='success';
                } else{
                    $message='Issue';
                    $_SESSION['message']= 'Issue in password';
                    $_SESSION['message_type']='danger';
                }
        }
?>
    <?php require '../includes/header.php' ?>
    <?php if(!empty($message)):?>
        <?php if (isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
        <?php session_unset(); } ?>
    <?php endif; ?>
    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>
    <form action="signup.php" method="post">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirm_password" placeholder="Confirm your password">
        <input type="submit" value="SignUp">
    </form>
<?php include("../includes/footer.php") ?>
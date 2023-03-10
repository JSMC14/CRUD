<?php 
    session_start();
    if (isset($_SESSION['user_id'])) {
        header('Location: index.php');
    }
    require 'database.php';
    if(!empty($_POST['email']) && !empty($_POST['password'] )) {
        $records=$conn->prepare('SELECT id,email,password FROM users WHERE email=:email');
        $records->bindParam(':email',$_POST['email']);
        $records->execute();
        $results=$records->fetch(PDO::FETCH_ASSOC);
        $message="";
        if(count($results)>0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['user_id'] = $results ['id'];
                $_SESSION['message']= 'Welcome '.$results['email'];
                $_SESSION['message_type']='primary';
            header('Location: index.php');
        } else {
            $message = 'Sorry';
        }
    }
?>
<?php require '../includes/header.php' ?>
    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>
    <?php if (!empty($message)):?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="Login">
    </form>
    <?php include("../includes/footer.php") ?>
<?php 
    session_start();
    require 'database.php';
        if(isset($_SESSION['user_id'])) {
            $records = $conn ->prepare('SELECT id, email, password from users WHERE ID = :id');
            $records->bindParam(':id', $_SESSION['user_id']);
            $records->execute();
            $results=$records->fetch(PDO::FETCH_ASSOC);
                $user=null;
            if(count($results)>0) {
                $user=$results;
            }
        }
?>
    <?php require '../includes/header.php' ?>
    <?php if(!empty($user)):?>
        <?php require '../crud/index.php'?>
    <?php else: ?>    
        <h1>Please Login or SignUp</h1>
        <a href="login.php">Login</a> or 
        <a href="signup.php">SignUp</a>
    <?php endif; ?>
<?php include("../includes/footer.php") ?>

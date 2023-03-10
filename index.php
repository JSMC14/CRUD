<?php 
    session_start();
    require 'login/database.php';
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
<?php 
    if (isset($_SESSION['user_id'])) {
        $_SESSION['message']= 'Welcome '.$results['email'];
        $_SESSION['message_type']='primary';
    } ?>
<?php 
    header('Location: login/index.php');
?>
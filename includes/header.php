<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasked</title>
    <link rel="icon" href="http://agendacreativa.com/wp-content/uploads/2020/09/school-planner-app-logo.png">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- FONT AWESOME 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Roboto:ital,wght@0,400;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
        <style>
            body {
                font-family: 'Comfortaa', cursive;
                text-align: center;
            }
        </style>
</head>
<body>
    <nav class="navbar navbar-dark" style="background-color: #1e81b0;">
        <div class="container">
            <a href="../index.php" class="navbar-brand"> <i class="fas fa-solid fa-bezier-curve"></i><b>&nbsp;&nbsp;&nbsp;J&nbsp;S&nbsp;M&nbsp;C</b></a>
            <?php if(!empty($user)):?>
            <a href="logout.php" class="navbar-item" align="right"> Logout &nbsp;<i class="fas fa-duotone fa-user-astronaut"></i></a>
            <?php  endif; ?>
        </div>
    </nav>
    <br>
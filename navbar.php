<?php
    // session_start();
    $name = $_SESSION['name'];

?>

<head>
    <link rel="stylesheet" href="css/navbar.css">
</head>

<div class="nav-container">
    <div id="user-name">
        <a href="logout.php" class="nav-item">Welcome <?php echo ucfirst($name); ?></a>
    </div>
    <div class="nav-items">
        <a href="" class="nav-item">Home</a>
        <a href="" class="nav-item">Products</a>
        <a href="" class="nav-item">Services</a>
        <a href="logout.php" class="nav-item">Logout</a>
    </div>
</div>
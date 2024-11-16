 <?php 
    session_start();
    if(!isset($_SESSION['email'])){
        unsset($_SESSION['email']);
    }
    header('location: index.php');
 ?>
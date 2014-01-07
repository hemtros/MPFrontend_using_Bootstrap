<!--authored by Hem sharma Acharya[hemtros@gmail.com] -->

<?php
session_start();
unset($_SESSION['username']);
session_destroy();
        header("location:index.php");
?>
<title>Dashboard</title>
<h1>Project Successfully</h1>
<form method="post">
    <button type="submit" name="logout" value="Logout" onclick="">Logout</button>
</form>

<?php
    include "enkripsi.php"
?>

<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: Login.php");
    exit;
}
?>




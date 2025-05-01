<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome, ".$_SESSION['user'];
} else {
    header('Location: login.html');
}
?>


<?php include 'header.inc'; ?>

<h2>Welcome</h2>
<p>Login successful! Welcome, <?php echo htmlspecialchars($_POST['username']); ?>.</p>

<?php include 'footer.inc'; ?>

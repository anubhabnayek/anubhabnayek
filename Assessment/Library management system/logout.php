<?php
//session_start(); 
unset($_SESSION['user']); // destroy session
echo"<script>
alert('customer logout success');
window.location='login';
</script>
";
?>


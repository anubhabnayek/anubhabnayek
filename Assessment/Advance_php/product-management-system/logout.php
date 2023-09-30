<?php
//session_start(); 
unset($_SESSION['email']);//create session
unset($_SESSION['role']); // destroy session
echo"<script>
alert('logout success');
window.location='login';
</script>
";
?>


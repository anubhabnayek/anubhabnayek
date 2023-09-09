<!DOCTYPE html>
<html>
<head>
<style>
 
</style>
</head>
<body>

<table>
  <tr>
    <td>state</td>
    <td>country</td>
  </tr>
  <tr>
    <td>West bengal</td>
    <td>India</td>
  </tr>
  <tr>
    <td>New york</td>
    <td>USA</td>
  </tr>
  <tr>
    <td>Victoria</td>
    <td>Australia</td>
  </tr>
  <!-- Add more <tr> elements as needed -->
</table>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
    $("tr:even").css("background-color","green");

    });
    $(document).ready(function(){
    $("tr:odd").css("background-color","blue")

    });

    
</script>

</body>
</html>

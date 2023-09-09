<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>Start animation</button>
    <div  style="background:#98bf21;height:100px;width:100px;position:absolute; color:red">Hello</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $("button").click(function(){
      $("div").animate({
        height:'toggle'
      });
      $("button").click(function(){
      $("div").animate({left:'500px'});
      })
       });


    </script>
</body>
</html>
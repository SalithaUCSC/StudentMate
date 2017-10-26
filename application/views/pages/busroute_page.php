<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bus routes</title>
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> -->
</head>
<body>
<form action="<?php echo  base_url();?>/index.php/busroutes/init" method="post">
    from:<input type="text" name="from">
    to:<input type="text" name="to">
    <input type="submit">
</form>
</body>
</html>

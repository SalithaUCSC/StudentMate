<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Route Suggestions</title>
  </head>
  <body>
    <div name="from"><?php echo $from;?></div>
    <div name="to"><?php echo $to;?></div>
    <?php if($flag==0){?>
      <li>
        <?php foreach($output as $row){
          echo $row;
        } ?>
      </li>
   <?php if($flag==1){?>
        <h1>test</h1>
      <?php foreach($output as $row){?>
        <li><?php echo $row['from'];?></li>
        <li><?php echo $row['intersection'];?></li>
        <li><?php echo $row['to'];?></li>

      <?php }?>
    <?php } ?>
    <h1>test</h1>

  </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bus routes</title>
    <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>


</head>
<body>

<form action="<?php echo  base_url();?>/index.php/busroutes/init" method="post">
    from:<input type="text" name="from">
    to:<input type="text" name="to">
    <input type="submit">
</form>

<script type="text/javascript">

       $(function() {

           $( "#hint" ).autocomplete({
               source: function( request, response ) {
                   $.ajax({
                       url: "<?php echo base_url()?>index.php/Busroutes/autocomplete/"+$.('hint').val(),
                       dataType: "jsonp",
                       data: {
                           q: request.term
                       },
                       success: function( data ) {
                           console.log('succes');
                           response( data );
                       }
                   });
               },
           });
       });
       </script>

</script>
</body>
</html>

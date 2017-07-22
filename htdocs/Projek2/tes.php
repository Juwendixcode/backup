<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
  function passVariable(){
        var x = '123';
 
        // get the current url and append variable
        var url = document.location.href + '?x=' + x;
 
        // to prevent looping
        var exists = document.location.href.indexOf('?x=');
        
        if(exists < 0){
              // redirect passing variable
              window.location = url;
        }
  }
</script>
</head>
<body>
	
  <?php echo $_REQUEST['x']; ?>
</body>	
</html>
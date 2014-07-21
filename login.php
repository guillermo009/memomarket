<!DOCTYPE html>

<html>
	<head>
		<?php
			include "_kiiwiiksys/include/header.php";
        ?>
	</head>  
<body>
	<?php
		include "_kiiwiiksys/include/nav.php";
	?>
    <br />
    <div class="row">
        <div class="small-8 small-centered columns">
          <label>Correo
            <input type="text" placeholder="E.g. memo@kiiwiik.com" />
          </label>
          <!--<small class="error">Invalid entry</small>-->
       
          <label>Contraseña
            <input type="password" placeholder="Contraseña" />
          </label>
          <!--<small class="error">Invalid entry</small>-->
        </div>
    </div>

	<div class="row">
    	<div class="small-8 small-centered columns">
        	<a href="#" class="button expand [radius round]">Entrar</a>
        </div>
    </div>

   	<?php
	include "_kiiwiiksys/include/footer.php";
	?>

<script type="text/javascript" src="recursos/js/jquery.js" ></script>
<script src="recursos/foundation/js/foundation.min.js"></script>
<script src="recursos/foundation/js/foundation/foundation.magellan.js"></script>
<script type="text/javascript">
 $(window).bind("load", function () {
	$(document).foundation({
		orbit: {
			animation:'slide',
			puse_on_hover:true,
			slide_number:false,
			slide_number_text:false,
		}
	});
});
</script> 
</body>

</html>
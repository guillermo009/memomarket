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
    
    <div class="row">
		<div class="small-12 column show-for-large-only" style="background-color:#CCC">
        	<ul class="example-orbit-content" data-orbit>
          		<li data-orbit-slide="headline-1">
           			<div>
                        <h2>Taller Pelayo</h2>
                        <h3>Si quieres que te chequen el aceite ve con nosotros!</h3>
                        <!--<a href="recursos/img/venta2.jpg" class="right">
                          <img style="height:20%; width:20%" src="recursos/img/venta1.jpg">
                        </a>-->
            		</div>
          		</li>
          		<li data-orbit-slide="headline-2">
            		<div>
                    	<h2>Choco Art</h2>
                    	<h3>eso que sientes demuestralo con chocolate</h3>
            		</div>
          		</li>
          		<li data-orbit-slide="headline-3">
            		<div>
              			<h2>Cortinas y Telas Poncho</h2>
              			<h3>Telas al largo y ancho deseado</h3>
            		</div>
          		</li>
        	</ul>
		</div>
	</div>
    <br />
    <div class="row" data-equalizer>
        <div class="medium-6 large-3 columns" data-equalizer-watch> 
        	<div class="panel" style="height:100%">
                <a class="th" href="recursos/img/venta2.jpg">
                  <img src="recursos/img/venta1.jpg">
                </a>
                <h5>Item Name ajshd</h5>
                <h6 class="subheader">$000.00</h6>
            </div>
        </div>
        <div class="medium-6 large-3 columns" data-equalizer-watch>
        	<div class="panel" style="height:100%">
                <a class="th" href="recursos/img/venta2.jpg">
                  <img src="recursos/img/venta2.jpg">
                </a>
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
            </div>
        </div>
        <div class="medium-6 large-3 columns" data-equalizer-watch>
             <div class="panel" style="height:100%">
                <a class="th" href="recursos/img/venta2.jpg">
                    <img src="recursos/img/venta3.jpg">
                </a>
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
             </div>
        </div>
        <div class="medium-6 large-3 columns" data-equalizer-watch>
        	<div class="panel" style="height:100%">
            	<a class="th" href="recursos/img/venta2.jpg">
              		<img src="recursos/img/venta3.jpg">
            	</a>
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
            </div>
        </div>
	</div>
    <br />
    <div class="row" data-equalizer>
        <div class="medium-6 large-3 columns" data-equalizer-watch> 
        	<div class="panel" style="height:100%">
                <a class="th" href="recursos/img/venta2.jpg">
                  <img src="recursos/img/venta2.jpg">
                </a>
                <h5>Item Name ajshd kak</h5>
                <h6 class="subheader">$000.00</h6>
            </div>
        </div>
        <div class="medium-6 large-3 columns" data-equalizer-watch>
        	<div class="panel" style="height:100%">
                <a class="th" href="recursos/img/venta2.jpg">
                  <img src="recursos/img/venta2.jpg">
                </a>
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
            </div>
        </div>
        <div class="medium-6 large-3 columns" data-equalizer-watch>
             <div class="panel" style="height:100%">
                <a class="th" href="recursos/img/venta2.jpg">
                    <img src="recursos/img/venta2.jpg">
                </a>
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
             </div>
        </div>
        <div class="medium-6 large-3 columns" data-equalizer-watch>
        	<div class="panel" style="height:100%">
            	<a class="th" href="recursos/img/venta2.jpg">
              		<img src="recursos/img/venta2.jpg">
            	</a>
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
            </div>
        </div>
	</div>
    <br />
    <div class="row" data-equalizer>
        <div class="medium-6 large-3 columns" data-equalizer-watch> 
        	<div class="panel" style="height:100%">
             <a class="th" href="recursos/img/venta2.jpg">
              <img src="recursos/img/venta2.jpg">
            </a>
           
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
            </div>
        </div>
        <div class="medium-6 large-9 columns" data-equalizer-watch>
            <div class="panel" style="height:100%">
                <h5>otras categorias</h5>
                computacion<br />
                carros
                
            </div>
        </div>
    </div>
    <br />
    <div class="row"
        <div class="large-12 columns">
        	<div class="panel">
        		<div class="row">
        			<div class="large-2 small-6 columns">
        				<img src="http://placehold.it/300x300&text=Site Owner">
        			</div>
        			<div class="large-10 small-6 columns">
        			<strong>Sponsor!!!<hr/></strong> Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis
        			</div>
        		</div>
            </div>
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
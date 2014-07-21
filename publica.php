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
    	<div class="small-9 small-centered columns">
        	lorem ipsum kjabsdkjansdlkjan sdkljnaslkjd asjkdo iasjkd añksdjlka jdpokaj dlkñja dñlkaj sñldkja sñldkja dkajs ñdlñaks
        	<hr />
        </div>
    </div>
    
    <div class="row">
        <div class="small-8 small-centered columns">
          <label>Titulo
            <input type="text" placeholder="E.g. Pantalla LG 40 pulgadas" />
          </label>
          <!--<small class="error">Invalid entry</small>-->
       
          <label>Descripcion (200 letras maximo)
            <textarea>
            </textarea>
          </label>
       	</div>   
        
          <!--<div class="row">
          	<div class="small-3 columns">
            	<span class="prefix">$</span>
            </div>
            <div class="small-9 columns">
            	<input type="text" placeholder="Costo">
            </div>
          </div>-->
        <div class="small-8 small-centered columns">
           <div class="row collapse">
               <div class="small-12 large-5 columns">
                    <div class="row collapse">
                        <label>Precio</label>
                        <div class="small-3 columns">
                            <span class="prefix">$</span>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" placeholder="Ponle precio!" />
                        </div>
                    </div>
                </div>
                <div class="small-12 large-6 columns">
                    <div class="row collapse">
                        <label>Estado del producto</label>
                        <div class="small-12 columns">
                            <select>
                              <option value="husker">Nuevo</option>
                              <option value="starbuck">Usado</option>
                            </select>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
        <div class="small-8 small-centered columns">
           <div class="row collapse">
               <div class="small-12 large-5 columns">
                    <div class="row collapse">
                        <label>Categoria</label>
                       	<div class="small-12 columns">
                            <select>
                              <option value="husker">Nuevo</option>
                              <option value="starbuck">Usado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="small-12 large-6 columns">
                    <div class="row collapse">
                        <label>Sub-Categoria</label>
                        <div class="small-12 columns">
                            <select>
                              <option value="husker">Nuevo</option>
                              <option value="starbuck">Usado</option>
                            </select>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
        <div class="small-8 small-centered columns">
          <hr/>
            <label>Imagenes</label>
            <a herf="#" class="button">Agregar+</a>
        </div>
        <div class="small-8 small-centered end columns">
        	<div class="row collapse">
               	<div class="small-12 large-3 panel columns">
                	<img src="recursos/img/venta3.jpg" height="200" width="220" >
                    <a href="#" class="button alert expand">Eliminar</a>
               	</div>
                <div class="small-12 large-3 panel end columns">
                	<img src="recursos/img/venta3.jpg" height="200" width="220" >
                    <a href="#" class="button alert expand">Eliminar</a>
               	</div>
                <div class="small-12 large-3 panel end columns">
                	<img src="recursos/img/venta3.jpg" height="200" width="220" >
                    <a href="#" class="button alert expand">Eliminar</a>
               	</div>
        	</div>
        </div>
	</div>
	
    
   	<br />
	<div class="row">
    	<div class="small-8 small-centered columns">
        	<a href="#" class="button expand [radius round]">Publicar</a>
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
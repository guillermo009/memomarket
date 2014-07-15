<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Proyecto memo market</title>
	<meta name="descripcion" content="Bazar Online de Automoviles" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link type="text/css" rel="stylesheet" href="recursos/css/normalize.css" />
	<link rel="stylesheet" href="recursos/foundation/css/foundation.css" />
	<script type="text/javascript" src="recursos/js/jquery.js" ></script>
    <script src="recursos/foundation/js/vendor/modernizr.js"></script>
</head>
<body>
	<header>
	</header>
	
	<section>
		<form>
		  <div class="row">
			<div class="large-12 columns">
			  <label>Input Label
				<input type="text" placeholder="large-12.columns" />
			  </label>
			</div>
		  </div>
		  <div class="row">
			<div class="large-4 columns">
			  <label class="error">Input Label
				<input type="text" class="error" placeholder="large-4.columns" />
			  </label>
			  <small class="error">Invalid entry</small>
			</div>
			<div class="large-4 columns">
			  <label>Input Label
				<input type="text" placeholder="large-4.columns" />
			  </label>
			</div>
			<div class="large-4 columns">
			  <div class="row collapse">
				<label>Input Label</label>
				<div class="small-9 columns">
				  <input type="text" placeholder="small-9.columns" />
				</div>
				<div class="small-3 columns">
				  <span class="postfix">.com</span>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="large-12 columns">
			  <label>Select Box
				<select>
				  <option value="husker">Husker</option>
				  <option value="starbuck">Starbuck</option>
				  <option value="hotdog">Hot Dog</option>
				  <option value="apollo">Apollo</option>
				</select>
			  </label>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
			  <label>Choose Your Favorite</label>
			  <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
			  <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
			</div>
			<div class="large-6 columns">
			  <label>Check these out</label>
			  <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
			  <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
			</div>
		  </div>
		  <div class="row">
			<div class="large-12 columns">
			  <label>Textarea Label
				<textarea placeholder="small-12.columns"></textarea>
			  </label>
			</div>
		  </div>
		</form>
		
		<form>
		  <div class="row">
			<div class="large-6 columns">
			  <label class="error">Error
				<input type="text" class="error" placeholder="guillermo" />
			  </label>
			  <small class="error">Invalid entry</small>
			</div>
			<div class="large-6 columns error">
			  <label>Another Error
				<input type="text" />
			  </label>
			  <small class="error">Invalid entry</small>
			</div>
		  </div>
		  <div class="large-12 columns">
			  <textarea class="error" placeholder="Message..."></textarea>
			  <small class="error">Invalid entry</small>
		  </div>
		</form>
		
	</section>
	
	<footer>
	</footer>
</body>
	
</html>
<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Articulos</h1>
			</div>

			<div class="articulo">
			<h1>¿Deseas sugerir algún producto que desees que sea vendido en nuestras tiendas?<br>

			</h1>
            <p>Completa los datos para realizar tu sugerencia</p><br>
<form>
  <label for="fname">Nombre</label><br>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Apellidos</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="tfno">Número de teléfono</label><br>
  <input type="text" id="tfno" name="tfno"><br><br>
  <label for="correo">Correo electrónico</label><br>
  <input type="text" id="correo" name="correo"><br><br>
  <label for="producto">Nombre del producto</label><br>
  <input type="text" id="producto" name="producto"><br><br>
  <label for="tipo">Tipo de producto</label><br>
  <input type="text" id="tipo" name="tipo"><br><br>
  <label for="marca">Marca</label><br>
  <input type="text" id="marca" name="marca"><br><br>
  <input type="submit" value="Enviar">
			</div>

			<?php include("sidebar.php"); ?>
		</div>
	</section>
<?php include("footer.php"); ?>
</body>
</html>
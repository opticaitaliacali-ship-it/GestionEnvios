<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Mercancía</title>

<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="contenedor">

    <div class="card-form">

        <h1>📦 Registrar Mercancía</h1>

        <form action="guardar.php" method="POST">

            <div class="grupo">
                <label>Código</label>
                <input type="text" name="codigo" required>
            </div>

            <div class="grupo">
                <label>Nombre</label>
                <input type="text" name="nombre" required>
            </div>

            <div class="grupo">
                <label>Proveedor</label>
                <input type="text" name="proveedor" required>
            </div>

            <div class="grupo">
                <label>Fecha</label>
                <input type="date" name="fecha" required>
            </div>

            <div class="grupo">
                <label>Cantidad</label>
                <input type="number" name="cantidad" required>
            </div>

            <div class="grupo">
                <label>Precio</label>
                <input type="number" step="0.01" name="precio" required>
            </div>

            <div class="grupo">
                <label>Observaciones</label>
                <textarea name="observaciones"></textarea>
            </div>

            <button type="submit">Guardar</button>

        </form>

        <a href="index.php" class="volver">Volver</a>

    </div>

</div>

</body>
</html>
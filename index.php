<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Mercancía</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* =======================
   RESET
======================= */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

/* =======================
   BACKGROUND ANIMADO
======================= */
body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(-45deg,#0f172a,#1e293b,#2563eb,#10b981);
    background-size:400% 400%;
    animation:gradientBG 12s ease infinite;
}

@keyframes gradientBG{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* =======================
   CONTENEDOR
======================= */
.container{
    width:100%;
    max-width:1100px;
    padding:20px;
}

/* =======================
   CARD PRINCIPAL
======================= */
.card{
    background:rgba(255,255,255,0.95);
    backdrop-filter:blur(10px);
    border-radius:25px;
    padding:50px;
    box-shadow:0 20px 60px rgba(0,0,0,0.3);
    animation:fadeIn 1s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(30px);}
    to{opacity:1; transform:translateY(0);}
}

/* =======================
   HEADER
======================= */
h1{
    text-align:center;
    font-size:2.5rem;
    color:#0f172a;
    margin-bottom:10px;
}

p{
    text-align:center;
    color:#64748b;
    margin-bottom:40px;
}

/* =======================
   GRID OPCIONES
======================= */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

/* =======================
   BOTONES CARD
======================= */
.card-btn{
    text-decoration:none;
    padding:30px;
    border-radius:20px;
    color:white;
    transition:0.4s;
    position:relative;
    overflow:hidden;
}

.card-btn:hover{
    transform:translateY(-10px) scale(1.02);
    box-shadow:0 15px 30px rgba(0,0,0,0.2);
}

/* efecto brillo */
.card-btn::before{
    content:'';
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:100%;
    background:rgba(255,255,255,0.2);
    transform:skewX(-20deg);
    transition:0.5s;
}

.card-btn:hover::before{
    left:120%;
}

/* colores */
.registro{
    background:linear-gradient(135deg,#3b82f6,#1d4ed8);
}

.consulta{
    background:linear-gradient(135deg,#10b981,#059669);
}

/* =======================
   FOOTER
======================= */
.footer{
    margin-top:40px;
    text-align:center;
    color:#94a3b8;
    font-size:14px;
}

</style>

</head>

<body>

<div class="container">

    <div class="card">

        <h1>📦 Sistema de Mercancía</h1>
        <p>Control moderno de registro de productos en la empresa</p>

        <div class="grid">

            <a href="registro.php" class="card-btn registro">
                <h2>➕ Registrar Mercancía</h2>
                <br>
                <p>Ingresar productos con código, proveedor, fecha, cantidad y precio.</p>
            </a>

            <a href="consultar.php" class="card-btn consulta">
                <h2>🔍 Consultar Registros</h2>
                <br>
                <p>Buscar mercancía por código, nombre o proveedor.</p>
            </a>

        </div>

        <div class="footer">
            © <?php echo date("Y"); ?> Sistema de Gestión de Mercancía
        </div>

    </div>

</div>

</body>
</html>
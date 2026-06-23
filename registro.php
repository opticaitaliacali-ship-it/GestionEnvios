<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar Mercancía</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* =========================
   BASE
========================= */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(-45deg,#0f172a,#1e293b,#2563eb,#10b981);
    background-size:400% 400%;
    animation:gradient 12s ease infinite;
}

/* fondo animado */
@keyframes gradient{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

/* =========================
   CARD
========================= */
.card{
    width:90%;
    max-width:700px;
    background:rgba(255,255,255,0.12);
    backdrop-filter:blur(15px);
    border-radius:25px;
    padding:40px;
    box-shadow:0 20px 60px rgba(0,0,0,0.4);
    animation:fadeIn 1s ease;
    color:white;
}

/* entrada */
@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* =========================
   TITULO
========================= */
h1{
    text-align:center;
    margin-bottom:25px;
    font-size:2rem;
}

/* =========================
   FORMULARIO
========================= */
form{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:15px;
}

.grupo{
    display:flex;
    flex-direction:column;
}

.grupo.full{
    grid-column:span 2;
}

label{
    font-size:14px;
    margin-bottom:5px;
    opacity:0.9;
}

/* inputs */
input, textarea{
    padding:12px;
    border:none;
    border-radius:12px;
    outline:none;
    transition:0.3s;
    font-size:14px;
}

/* hover input */
input:focus, textarea:focus{
    transform:scale(1.03);
    box-shadow:0 0 10px rgba(255,255,255,0.3);
}

/* textarea */
textarea{
    resize:none;
    min-height:90px;
}

/* =========================
   BOTÓN
========================= */
button{
    grid-column:span 2;
    padding:15px;
    border:none;
    border-radius:15px;
    background:linear-gradient(135deg,#3b82f6,#10b981);
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:0.4s;
    font-weight:600;
    position:relative;
    overflow:hidden;
}

/* hover botón */
button:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 20px rgba(0,0,0,0.3);
}

/* efecto brillo */
button::before{
    content:'';
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:100%;
    background:rgba(255,255,255,0.2);
    transform:skewX(-20deg);
}

button:hover::before{
    left:120%;
    transition:0.6s;
}

/* =========================
   LINK
========================= */
a{
    display:block;
    text-align:center;
    margin-top:20px;
    color:white;
    text-decoration:none;
    opacity:0.8;
}

a:hover{
    opacity:1;
}

/* =========================
   RESPONSIVE
========================= */
@media(max-width:600px){
    form{
        grid-template-columns:1fr;
    }

    button{
        grid-column:span 1;
    }

    .grupo.full{
        grid-column:span 1;
    }
}

</style>

</head>

<body>

<div class="card">

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

        <div class="grupo full">
            <label>Observaciones</label>
            <textarea name="observaciones"></textarea>
        </div>

        <button type="submit">💾 Guardar Mercancía</button>

    </form>

    <a href="index.php">← Volver al inicio</a>

</div>

</body>
</html>
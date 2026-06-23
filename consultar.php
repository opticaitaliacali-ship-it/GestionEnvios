<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Mercancía</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

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

    @keyframes gradient{
        0%{background-position:0% 50%;}
        50%{background-position:100% 50%;}
        100%{background-position:0% 50%;}
    }

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

    h1{
        text-align:center;
        margin-bottom:25px;
    }

    label{
        display:block;
        margin-bottom:8px;
    }

    input{
        width:100%;
        padding:14px;
        border:none;
        border-radius:12px;
        outline:none;
        margin-bottom:20px;
        transition:.3s;
    }

    input:focus{
        transform:scale(1.02);
    }

    button{
        width:100%;
        padding:15px;
        border:none;
        border-radius:15px;
        background:linear-gradient(135deg,#3b82f6,#10b981);
        color:white;
        font-size:16px;
        cursor:pointer;
        transition:.3s;
        font-weight:600;
    }

    button:hover{
        transform:translateY(-3px);
    }

    .volver{
        display:block;
        text-align:center;
        margin-top:20px;
        color:white;
        text-decoration:none;
    }

    </style>

</head>
<body>

<div class="card">

    <h1>🔍 Consultar Mercancía</h1>

    <form action="buscar.php" method="GET">

        <label>Buscar por código, producto o proveedor</label>

        <input
            type="text"
            name="buscar"
            placeholder="Ej: P001 o Monitor LG"
            required
        >

        <button type="submit">
            Buscar Mercancía
        </button>

    </form>

    <a href="index.php" class="volver">
        ← Volver al inicio
    </a>

</div>

</body>
</html>
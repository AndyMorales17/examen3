
<style>

/* Estilos para el botón de navegación */
.custom-toggler {
    border-color: #3498db;
}

.custom-toggler .navbar-toggler-icon {
    background-color: #3498db;
}

/* Estilos para los enlaces de navegación */
.navbar-nav .nav-item .nav-link {
    color: #333;
    font-weight: bold;
    text-transform: uppercase; /* Convertir a mayúsculas */
    font-family: 'Roboto', sans-serif; /* Fuente bonita (puedes cambiarla por la que desees) */
}

.navbar-nav .nav-item .nav-link:hover {
    color: #3498db;
}

/* Estilos para el botón de búsqueda */
.btn-outline-success {
    color: #28a745;
    border-color: #28a745;
}

.btn-outline-success:hover {
    background-color: #28a745;
    color: #fff;
}

body, html {
    height: 100%; /* Establecer altura al 100% */
}

.navbar-nav .nav-item .nav-link {
            color: #000000; /* Color blanco para destacar */
            text-transform: uppercase; /* Convertir a mayúsculas */
            font-family: 'Roboto', sans-serif; /* Fuente bonita */
            font-weight: bold; /* Negrita */
            transition: color 0.3s, transform 0.3s; /* Transición suave para efectos */
            padding: 0.5rem 1rem; /* Añadir padding para mejor apariencia */
            
        }

</style>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">




<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
       <!-- <a class="navbar-brand" href="<?//php echo URL;?>">Inicio</a>-->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="<?php echo URL;?>">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crud_clientes">Buzon de pratica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crud_pedidos">Alumnos</a>
                </li>
                
            </ul>
            
        </div>
    </div>
</nav>

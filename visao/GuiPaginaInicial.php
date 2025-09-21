<?php
include_once './Header.php';
include_once DIR_MODELO . 'UsuarioVO.class.php';

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<nav class="navbar navbar-expand-lg flex-column align-items-center">
    <h1 class="text-center mb-4">Selecione uma opção</h1>
    <div class="container d-flex justify-content-center">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-primary me-2" href="GuiCadastroUsuario.php">
                        <img src="../css/cadastro.png" alt="Ícone Cadastro" class="btn-icon">
                        Cadastro
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="GuiUsuarios.php">
                        <img src="../css/lista.png" alt="Ícone Listar" class="btn-icon">
                        Listar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
include_once 'Footer.php';
?>


<style>
    .navbar {
        padding: 1.5rem 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .text-center {
        text-align: center;
    }

    .btn-primary {
        background-color: #006b85;
        border-color: #006b85;
        color: #f0f0f0;
        font-weight: bold;
        padding: 0.75rem 1.5rem;
        border-radius: 0.25rem;
        transition: background-color 0.3s, border-color 0.3s;
        display: flex;
        align-items: center;
    }

    .btn-primary:hover {
        background-color: #005a70;
        border-color: #005a70;
        color: #ffffff;
    }

    .btn-primary:active {
        background-color: #00495a !important;
        border-color: #00495a !important;
    }

    .btn-icon {
        width: 20px;
        height: 20px;
        margin-right: 8px;
        filter: invert(100%);
    }
</style>
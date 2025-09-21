<?php
include_once './Header.php';
include_once DIR_MODELO . 'UsuarioVO.class.php';

?>


<div class="container">
    
    <form class="form-horizontal" id="cadUsuario" method="POST" action="../controle/ControleUsuario.php?op=salvar">
    
       
        <div class="formulario-campos">
            <label>Nome</label>
            <input type="text" name="nm_usuario" id="nm_usuario" required>
    
            <label>CPF</label>
            <input type="text" name="nr_cpf" id="nr_cpf" required>
        </div>
    
        <div class="formulario-campos">
            <label>Login</label>
            <input type="text" name="ds_login" id="ds_login" required>

            <label>Senha</label>
            <input type="password" name="pw_senha" id="pw_senha" required>
        </div>
    
        <div class="formulario-campos">
            <label>Email</label>
            <input type="text" name="ds_email" id="ds_email" required>

            <label>Perfil</label>
            <select name="id_perfil" id="id_perfil" >
                <option value="1">Administrador</option>
                <option value="2">Atendente</option>
                <option value="3">Desenvolvedor</option>
            </select>
        </div>
    
        <div class="formulario-campos">
            <label>Ativo ?</label>
            <input type="checkbox" name="ao_status" id="ao_status" value="1" >
        </div>
    
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a type="button" href="GuiPaginaInicial.php" class="btn btn-primary">Voltar</a>
        </div>
    </form>
</div>

<?php
include_once 'Footer.php';
?>


<style>
    .btn-primary {
        background-color: #006b85;
        border-color: #006b85;
        color: #f0f0f0;
        font-weight: bold;
        padding: 0.55rem 0.5rem;
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

    .formulario-campos{
        margin: 1em 30%;
    }
</style>
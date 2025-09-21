<?php
include_once './Header.php';
include_once DIR_MODELO . 'UsuarioVO.class.php';
include_once DIR_PERSISTENCIA . 'UsuarioDAO.class.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die('ID do usuário não fornecido para edição.');
}

$dao = new UsuarioDAO();

$usuario = $dao->buscarPorId($id);

?>

<div class="container">
    <form class="form-horizontal" id="editUsuario" method="POST" action="../controle/ControleUsuario.php?op=atualizar">
        <input type="hidden" name="id_usuario" value="<?= $usuario->getIdUsuario() ?>">

        <div class="formulario-campos">
            <label>Nome</label>
            <input type="text" name="nm_usuario" id="nm_usuario" value="<?= $usuario->getNmUsuario() ?>">

            <label>CPF</label>
            <input type="text" name="nr_cpf" id="nr_cpf" value="<?= $usuario->getNrCpf() ?>">
        </div>

        <div class="formulario-campos">
            <label>Login</label>
            <input type="text" name="ds_login" id="ds_login" value="<?= $usuario->getDsLogin() ?>">

            <label>Senha</label>
            <input type="password" name="pw_senha" id="pw_senha" value="<?= $usuario->getPwSenha() ?>">
        </div>

        <div class="formulario-campos">
            <label>Email</label>
            <input type="text" name="ds_email" id="ds_email" value="<?= $usuario->getDsEmail() ?>">

            <label>Perfil</label>
            <select name="id_perfil" id="id_perfil">
                <option value="1" <?= ($usuario->getIdPerfil() == 1) ? 'selected' : '' ?>>Administrador</option>
                <option value="2" <?= ($usuario->getIdPerfil() == 2) ? 'selected' : '' ?>>Atendente</option>
                <option value="3" <?= ($usuario->getIdPerfil() == 3) ? 'selected' : '' ?>>Desenvolvedor</option>
            </select>
        </div>

        <div class="formulario-campos">
            <input type="hidden" name="ao_status" value="0">
            <label>Ativo?</label>
            <input type="checkbox" name="ao_status" id="ao_status" value="1" <?= ($usuario->getAoStatus()) ? 'checked' : '' ?>>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a type="button" onclick="window.history.back()" class="btn btn-primary">Voltar</a>
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

    .formulario-campos {
        margin: 1em 30%;
    }

    .botoes {
        padding: 1.5rem 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
<?php
include_once 'Header.php';
include_once DIR_PERSISTENCIA . 'UsuarioDAO.class.php';

$dao = new UsuarioDAO();

function formatarCpf($cpf)
{
    return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
}
function formatarData($data)
{
    return date('d/m/Y', strtotime($data));
}

if (isset($_GET['filtro']) && !empty($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
    $usuarios = $dao->filtrar($filtro);
} else {
    $usuarios = $dao->listar();
}

?>

<div class="conteudo">
    <div class="filtrador" style="margin: 2em auto;width:95%;">
        <h2>Lista de Usuários</h2>
        <div class="filtro">
            <form action="GuiUsuarios.php" method="get">
                <input type="text" name="filtro" placeholder="Nome/CPF/Email" value="<?= isset($_GET['filtro']) ? htmlspecialchars($_GET['filtro']) : '' ?>" />
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
        </div>
    </div>
    <div class="listagem" style="background: #fcfcfc; margin: 2em auto;width:85%;">
        <table>
            <thead>
                <tr>
                    <th width="15%">Nome</th>
                    <th width="10%">CPF</th>
                    <th width="25%">Email</th>
                    <th width="8%">Status</th>
                    <th width="10%">Data de Cadastro</th>
                    <th width="10%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (empty($usuarios)) { ?>
                    <tr>
                        <td>Nenhum usuário encontrado.</td>
                    </tr>
                    <?php
                } else {
                    foreach ($usuarios as $usuario) { ?>
                        <tr>
                            <td><?= $usuario->getNmUsuario() ?></td>
                            <td><?= formatarCpf($usuario->getNrCpf()) ?></td>
                            <td><?= $usuario->getDsEmail() ?></td>
                            <td><?= $usuario->getAoStatus() ? "Ativo" : "Inativo" ?></td>
                            <td><?= formatarData($usuario->getDtCadastro()) ?></td>
                            <td>
                                <button class="btn btn-primary" onclick="location.href='GuiEditarUsuario.php?editar&id=<?= $usuario->getIdUsuario() ?>'">Editar</button>
                                <button class="btn btn-danger" onclick="location.href='../controle/ControleUsuario.php?op=deletar&id=<?= $usuario->getIdUsuario() ?>'">Deletar</button>
                            </td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once 'Footer.php'; ?>

<style>
    .btn-primary {
        background-color: #006b85;
        border-color: #006b85;
        color: #f0f0f0;
        font-weight: bold;
        padding: 0.42rem 0.5rem;
        border-radius: 0.25rem;
        transition: background-color 0.3s, border-color 0.3s;
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

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #f0f0f0;
        font-weight: bold;
        padding: 0.42rem 0.5rem;
        border-radius: 0.25rem;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
        color: #ffffff;
    }

    .btn-danger:active {
        background-color: #bd2130 !important;
        border-color: #b21f2d !important;
    }

    thead {
        background-color: #006b85;
        color: #fff;
    }
</style>
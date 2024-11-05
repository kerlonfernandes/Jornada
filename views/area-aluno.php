<?php

$alunoType = "Aluno";
$liderLevel = "Lider";


$user = (object) array(
    "userId" => "1",
    "type" => $alunoType,
    "groupLevel" => $liderLevel,
    // "group" => 1
);

$_SESSION['userId'] = $user->userId;
$_SESSION['type'] = $user->type;
$_SESSION['groupLevel'] = $user->groupLevel;
$_SESSION['group'] = isset($user->group) ? $user->group : "";


if (!isset($user->userId) || empty($user->userId)) {
    $helpers->redirect(SITE . "/login");
}

use HelpersClass\SupAid;

$helpers = new SupAid();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Aluno</title>
    <link rel="stylesheet" href="<?= ASSETS ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>/font-awesome.css">
    <link rel="stylesheet" href="<?= CSS ?>/styles.css">
    <link rel="stylesheet" href="<?= CSS ?>/css.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
</head>

<body>
    <?php
    require 'components/header.php';
    require 'components/overlay.php';

    $pages = [
        "criar-grupo" => "templates/aluno/criar-grupo.php",
        "convidar-integrante" => "templates/aluno/convidar-integrante.php",
        "etapas" => "templates/aluno/etapas.php",
        "informacoes-etapa" => "templates/aluno/informacoes-etapa.php",
        "submissao-etapa" => "templates/aluno/submissao-etapa.php",
        "informacoes-grupo" => "templates/aluno/informacoes-grupo.php",
        "convites" => "templates/aluno/convites.php",

    ];

    $pageToInclude = isset($route[0]) && array_key_exists($route[0], $pages)
        ? $pages[$route[0]]
        : "templates/aluno/home.php";
    include $pageToInclude;



    ?>

    <script src="<?= ASSETS ?>/jquery-3.5.1.min.js"></script>
    <script src="<?= ASSETS ?>/popper.min.js"></script>
    <script src="<?= ASSETS ?>/select2.min.js"></script>
    <script src="<?= ASSETS ?>/bootstrap.bundle.js"></script>
    <script src="<?= ASSETS ?>/all.min.js"></script>
    <script src="<?= JS ?>/scripts.js"></script>
    <script src="<?= JS ?>/page.js"></script>
    <script src="<?= JS ?>/js.js"></script>


    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Selecione',
                allowClear: true
            });

            $('#createGroupForm').on('submit', function(e) {
                var selectedMembers = $('#groupMembers').val();
                var memberCount = selectedMembers ? selectedMembers.length : 0;

                if (memberCount < 6 || memberCount > 8) {
                    alert('A quantidade de componentes do grupo deve ser entre 6 e 8.');
                    e.preventDefault();
                } else {
                    alert('Grupo criado com sucesso!');
                    // this.submit();
                }
            });
        });
    </script>


</body>

</html>
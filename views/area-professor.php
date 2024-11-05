<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Professor</title>
    <link rel="stylesheet" href="<?= ASSETS ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS ?>/font-awesome.css">
    <link rel="stylesheet" href="<?= CSS ?>/styles.css">
</head>

<body>
    <?php
    require 'components/header.php';
    require 'components/overlay.php';
    ?>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="search-card">
            <form action="" method="GET">
                <div class="input-group mb-3 search-input-group pesquisa">
                    <button class="btn" type="button" aria-label="Filtro" onclick="toggleFilter()">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                    <input type="text" class="form-control pesquisa" placeholder="Pesquisar grupo" aria-label="Pesquisar grupo" name="name" id="name">
                    <button class="btn" type="submit" aria-label="Pesquisar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

                <div class="filter-card" id="filterCard">
                    <div class="mb-2">
                        <label for="course" class="form-label">Curso</label>
                        <select class="form-select" id="course" name="course">
                            <option selected>Selecionar Curso</option>
                            <option value="1">Curso 1</option>
                            <option value="2">Curso 2</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container mt-5 d-flex justify-content-center flex-wrap" id="cardContainer"></div>

    <script src="<?= ASSETS ?>/bootstrap.bundle.js"></script>
    <script src="<?= ASSETS ?>/all.min.js"></script>
    <script src="<?= JS ?>/scripts.js"></script>
    <script src="<?= JS ?>/page.js"></script>
</body>

</html>
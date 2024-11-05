<div class="container mt-5 d-flex justify-content-center">
    <div class="search-card">
        <form class="search-member" method="GET">
            <div class="input-group mb-3 search-input-group pesquisa">
                <button class="btn" type="button" aria-label="Filtro" onclick="toggleFilter()">
                    <i class="fa-solid fa-filter"></i>
                </button>
                <input type="text" class="form-control pesquisa" placeholder="Pesquisar integrante" aria-label="Pesquisar integrante" name="name" id="name">
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
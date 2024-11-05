<div class="container mt-5">
    <h2>Etapas do Projeto</h2>
    <ul class="etapas-list">
        <li class="etapa-item">
            <h4>Etapa 1: Planejamento do Projeto</h4>
            <p class="etapa-info">
                Esta etapa envolve o levantamento de requisitos e a elaboração do escopo inicial do projeto.
                Os objetivos e prazos são definidos para orientar as próximas fases.
            </p>
            <div class="btn-group">
                <a href="path/to/planejamento.pdf" class="btn btn-download" download="planejamento.pdf">Download Arquivo</a>
                <a href="path/to/submissao1" class="btn btn-submit">Página de Submissão</a>
            </div>
        </li>


    </ul>
</div>

<script>
    function toggleInfo(element) {
        const info = element.nextElementSibling;
        const icon = element.querySelector('.expand-icon');
        info.classList.toggle('active');
        icon.classList.toggle('open');
    }
</script>
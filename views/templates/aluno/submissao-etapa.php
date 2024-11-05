<?php
    if(empty($route[1]) || !is_numeric($route[1])) {
        $helpers->redirect('../');
        exit;
    }
?>
<div class="container mt-5 d-flex justify-content-center">
    <div class="info-card text-center" style="width: 100%; max-width: 500px;">
        <h2>Submissão de Arquivos</h2>
        <form action="/submit" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="etapa" value="">
            <input type="hidden" name="integrante" value="">
            <div class="mb-3">
                <label for="fileUpload" class="form-label">Selecione os arquivos PDF ou PowerPoint</label>
                <input class="form-control" type="file" id="fileUpload" name="files" accept=".pdf, .ppt, .pptx" multiple required>
                <div class="form-text">Você pode enviar arquivos PDF e PowerPoint.</div>
            </div>
            <button type="submit" class="btn btn-submit">Submeter</button>
        </form>
    </div>
</div>

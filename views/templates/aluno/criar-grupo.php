<div class="container mt-5">
    <h2 class="text-center mb-4">Criar Grupo</h2>
    <form id="createGroupForm" class="shadow p-4 rounded bg-light">
        <div class="form-group">
            <label for="email">E-mail *</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="fullName">Nome Completo *</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>

        <div class="form-group">
            <label for="groupMembers">Nome de todos os componentes do grupo *</label>
            <select id="groupMembers" class="form-control select2" name="groupMembers[]" multiple="multiple" required>
                <option value="João">João</option>
                <option value="Maria">Maria</option>
                <option value="Pedro">Pedro</option>
                <option value="Ana">Ana</option>
                <option value="Lucas">Lucas</option>
                <option value="Carlos">Carlos</option>
                <option value="Fernanda">Fernanda</option>
                <option value="Gabriel">Gabriel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="course">Qual seu curso de graduação? *</label>
            <select class="form-control select2" id="course" name="course" required>
                <option value="" disabled selected>Selecione seu curso</option>
                <option value="Administracao">Administração</option>
                <option value="Agronomia">Agronomia</option>
                <option value="ADS">Análise e Desenvolvimento de Sistemas</option>
                <option value="Arquitetura">Arquitetura e Urbanismo</option>
                <option value="ComunicacaoSocial">Comunicação Social</option>
                <option value="CienciasContabeis">Ciências Contábeis</option>
                <option value="DireitoMatutino">Direito - Matutino</option>
                <option value="DireitoNoturno">Direito - Noturno</option>
                <option value="EducacaoFisicaBacharelado">Educação Física - Bacharelado</option>
                <option value="EducacaoFisicaLicenciatura">Educação Física - Licenciatura</option>
                <option value="Enfermagem">Enfermagem</option>
                <option value="EngenhariaProducao">Engenharia de Produção</option>
                <option value="EngenhariaMecanica">Engenharia Mecânica</option>
                <option value="Farmacia">Farmácia</option>
                <option value="Fisioterapia">Fisioterapia</option>
                <option value="MedicinaVeterinaria">Medicina Veterinária</option>
                <option value="Odontologia">Odontologia</option>
                <option value="Pedagogia">Pedagogia</option>
                <option value="Psicologia">Psicologia</option>
            </select>
        </div>

        <div class="form-group">
            <label for="period">Período *</label>
            <select class="form-control select2" id="period" name="period" required>
                <option value="" disabled selected>Selecione seu período</option>
                <option value="1">1º</option>
                <option value="2">2º</option>
                <option value="3">3º</option>
                <option value="4">4º</option>
                <option value="5">5º</option>
                <option value="6">6º</option>
                <option value="7">7º</option>
                <option value="8">8º</option>
                <option value="9">9º</option>
                <option value="10">10º</option>
            </select>
        </div>

        <div class="form-group">
            <label for="mentors">Quais os professores orientadores do seu grupo?</label>
            <select id="mentors" class="form-control select2" name="mentors[]">
                <option value="Professor A">Professor A</option>
                <option value="Professor B">Professor B</option>
                <option value="Professor C">Professor C</option>
                <option value="Professor D">Professor D</option>
            </select>
        </div>

        <div class="form-group">
            <label for="projectTitle">Qual o título do seu trabalho? *</label>
            <input type="text" class="form-control" id="projectTitle" name="projectTitle" required>
        </div>

        <button type="submit" class="btn-access">Criar Grupo</button>
    </form>
</div>

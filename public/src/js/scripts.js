function toggleFilter() {
  const filterCard = document.getElementById("filterCard");
  const isVisible = filterCard.classList.contains("show");

  filterCard.classList.toggle("show");

  if (isVisible) {
    document.getElementById("course").selectedIndex = 0;
    document.getElementById("name").value = "";
  }
}
function gerarCards(projetos) {
  const container = document.getElementById("cardContainer");

  projetos.forEach(projeto => {
      const card = document.createElement("div");
      card.className = "info-card";

      card.innerHTML = `
          <h5 class="mb-3">${projeto.nome}</h5>
          <div class="info-field">
              <strong>Líder:</strong> ${projeto.lider}
          </div>
          <div class="info-field">
              <strong>Curso:</strong> ${projeto.curso}
          </div>
          <div class="info-field">
              <strong>Período:</strong> ${projeto.periodo}
          </div>
          <button class="btn-access">Acessar</button>
      `;

      container.appendChild(card);
  });
}

// const projects = [
//   {
//     nome: "Projeto",
//     lider: "Lider",
//     curso: "ADS",
//     periodo: "1"
// },
// {
//   nome: "Projeto",
//   lider: "Lider",
//   curso: "ADS",
//   periodo: "1"
// },
// {
//   nome: "Projeto",
//   lider: "Lider",
//   curso: "ADS",
//   periodo: "1"
// }

// ];

// gerarCards(projects);

function toggleNotifications() {
  const notificationBar = document.getElementById('notificationBar');
  if (notificationBar.classList.contains('show')) {
      notificationBar.classList.remove('show');
  } else {
      notificationBar.classList.add('show');
  }
}
//BUSCADOR POKEDEX
function buscadorPokedex() {
  let web = new XMLHttpRequest();
  web.open("POST", "../php/buscadorPokedex.php");
  web.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  let buscador = document.getElementById("buscador").value;

  if (buscador == "") {
    return;
  }

  web.onload = function () {
    if (web.status === 200) {      
      console.log(web.status);
      console.log("RAW:", web.responseText);
      let pokemonsJSON = JSON.parse(web.responseText);
      console.log(pokemonsJSON);
      let pokedex = document.querySelector("#pokedex");
      pokedex.innerHTML = '';
  
      pokemonsJSON.forEach(pokemon => {
        pokedex.innerHTML += `
        <a href="pokedexDetall.php?id=${pokemon.ID_pokedex}">
          <div class="divPkmn">
            <p>#${pokemon.ID_pokedex}</p>
            <img src="${pokemon.imatgeM}" alt="${pokemon.nom}">
            <p>${pokemon.nom}</p>
          </div>
        </a>
        `;
      });

    } else {
      console.log(web.status);
      
    }
  }

  web.send("buscador=" + buscador);
}

//Filtre pokedex
document.addEventListener("DOMContentLoaded", () => {
  let filtres = document.querySelectorAll(".filtro");

  let filtre1 = "";
  let filtre2 = "";

  filtres.forEach(filtre => {
    filtre.addEventListener("click", () => {
      let tipoFiltre = filtre.getAttribute("data-nomF");
      let estatFiltre = filtre.getAttribute("data-filtre");

      // Gestió d'estat actiu / inactiu
      if (estatFiltre === "true") {
        filtre.setAttribute("data-filtre", "false");
        filtre.classList.remove("filtroActiu");

        if (filtre1 === tipoFiltre) filtre1 = "";
        else if (filtre2 === tipoFiltre) filtre2 = "";
      } else {
        if (filtre1 === "") {
          filtre1 = tipoFiltre;
          filtre.setAttribute("data-filtre", "true");
          filtre.classList.add("filtroActiu");
        } else if (filtre2 === "") {
          filtre2 = tipoFiltre;
          filtre.setAttribute("data-filtre", "true");
          filtre.classList.add("filtroActiu");
        } else {
          alert("Només pots tenir 2 filtres actius.");
          return;
        }
      }

      // 🚀 Petició AJAX després de fer clic
      let web = new XMLHttpRequest();
      web.open("POST", "../php/filtrePokedex.php");
      web.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      web.onload = function () {
        if (web.status === 200) {
          console.log(web.responseText);
          
          let pokemonsJSON = JSON.parse(web.responseText);
          let divPokedex = document.querySelector('#pokedex');
          divPokedex.innerHTML = "";

          pokemonsJSON.forEach(pokemon => {
            divPokedex.innerHTML += `
              <a href="pokedexDetall.php?id=${pokemon.ID_pokedex}">
                <div class="divPkmn">
                  <p>#${pokemon.ID_pokedex}</p>
                  <img src="${pokemon.imatgeM}" alt="${pokemon.nom}">
                  <p>${pokemon.nom}</p>
                </div>
              </a>
            `;
          });
        }
      };

      // Enviem filtres
      web.send("filtre1=" + filtre1 + "&filtre2=" + filtre2);
    });
  });
});

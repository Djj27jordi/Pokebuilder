document.addEventListener("DOMContentLoaded", () => {
  const plusDiv = document.querySelector(".poke.plus");
  const plusIcon = document.getElementById("plusIcon");
  const teamContainer = document.getElementById("pokemonTeam");
  let pokemonsCount = 0;
  const maxPokemons = 6;

  plusIcon.addEventListener("click", () => {
    if (pokemonsCount >= maxPokemons) return;

    fetch('../php/get_pokemon.php?id=1')
      .then(res => {
        if (!res.ok) throw new Error("Error en la resposta del servidor");
        return res.json();
      })
      .then(pokemon => {
        if (!pokemon || !pokemon.ID_pokedex) {
          throw new Error("No s'ha trobat el Pokémon");
        }

        // Crear nou div.poke amb l'estructura i estil indicats
        const pokeDiv = document.createElement("div");
        pokeDiv.className = "poke";
        pokeDiv.style = "display: flex; flex-direction: column; gap: 10px; align-items: center;";

        // Crear span amb la imatge
        const span = document.createElement("span");
        span.className = "equipPokemon";
        span.style = "display: flex; flex-direction: column; gap: 10px; align-items: center; justify-content: center;";

        const img = document.createElement("img");
        img.src = pokemon.imatgeM;
        img.alt = pokemon.nom;
        img.style = "width: 100px; height: 100px; align-self: center;";

        span.appendChild(img);

        // Crear label ocult per accesibilitat
        const label = document.createElement("label");
        label.setAttribute("for", "pokemon");
        label.style.display = "none";
        label.textContent = "Nom del Pokemon";

        // Crear input i posar text amb nom i tipus textuals
        const input = document.createElement("input");
        input.type = "text";
        input.name = "pokemon";
        input.placeholder = "Pokemon";

        let tipusText = pokemon.tipo1_nom || "";
        if (pokemon.tipo2_nom) {
          tipusText += " / " + pokemon.tipo2_nom;
        }
        input.value = `${pokemon.nom}`;

        // Afegir tot al nou div
        pokeDiv.appendChild(span);
        pokeDiv.appendChild(label);
        pokeDiv.appendChild(input);

        // Inserir el div abans del plusDiv
        teamContainer.insertBefore(pokeDiv, plusDiv);

        pokemonsCount++;

        // Amagar el plus quan arribem al màxim
        if (pokemonsCount >= maxPokemons) {
          plusDiv.style.display = "none";
        }
      })
      .catch(err => {
        console.error("Error carregant el Pokémon:", err);
      });
  });
});

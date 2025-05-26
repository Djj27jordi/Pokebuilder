let ID_pokemon;
let tipo1;
let tipo2;

const normal = "rgb(226, 226, 226)";
const planta = "rgb(171, 230, 160)";
const fuego = "rgb(244, 166, 166)";
const agua = "rgb(156, 201, 245)";
const lucha = "rgb(255, 183, 128)";
const bicho = "rgb(195, 212, 122)";
const veneno = "rgb(201, 164, 232)";
const psiquico = "rgb(246, 164, 187)";
const fantasma = "rgb(181, 159, 181)";
const electrico = "rgb(255, 235, 153)";
const hielo = "rgb(168, 240, 255)";
const dragon = "rgb(165, 175, 242)";
const roca = "rgb(224, 187, 94)";
const tierra = "rgb(196, 138, 98)";
const volador = "rgb(183, 216, 245)";

function antSegPkmn(proxPkmn) {
  const url = new URLSearchParams(window.location.search);
  let IdUrl = Number(url.get('id'));

  Number(IdUrl);

  if (proxPkmn == true) {
    IdUrl++;
  } else {
    IdUrl--;
  }
  
  window.location.href = `pokedexDetall.php?id=${IdUrl}`;
}

function botonsAntProx() {
  const url = new URLSearchParams(window.location.search);
  let IdUrl = Number(url.get('id'));
  let ant = IdUrl - 1;
  let prox = IdUrl + 1;
  console.log(ant, IdUrl, prox);
  

  let web = new XMLHttpRequest();
  web.open("POST", `../php/pastOrNext.php`);
  web.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  web.onload = function () {
    if (web.status === 200) {
      let pokemonPagJSON = JSON.parse(web.responseText);

      let anterior = document.querySelector('#pokedexAnterior');
      let seguent = document.querySelector('#pokedexSeguent');
      
      if (IdUrl <= 1) {
        anterior.style.display = "none";
        seguent.style.display = "block";
        seguent.style.justifyContent  = "end";
        seguent.innerHTML = `<p>#${prox} ${pokemonPagJSON[1].nom}</p>`;
      } else if (IdUrl >= 151) {
        anterior.style.justifyContent  = "start";
        anterior.style.display  = "block";
        seguent.style.display = "none";
        anterior.innerHTML = `<p>#${ant} ${pokemonPagJSON[0].nom}</p>`;
      } else {
        anterior.innerHTML = `<p>#${ant} ${pokemonPagJSON[0].nom}</p>`;
        seguent.innerHTML = `<p>#${prox} ${pokemonPagJSON[1].nom}</p>`;
      }
    }
  }

  web.send("idAnt=" + ant + "&idProx=" + prox);
}

function conseguirDades() {
  const url = new URLSearchParams(window.location.search);
  let IdUrl = Number(url.get('id'));

  let web = new XMLHttpRequest();
  web.open("POST", `../php/dadesPokemon.php`);
  web.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  web.onload = function () {
    if (web.status === 200) {
      console.log("la id es:" + IdUrl);
      console.log(web.responseText);
      

      let pokemonsJSON = JSON.parse(web.responseText);
      ID_pokemon = pokemonsJSON.ID_pokedex;

      let titolPag = document.querySelector('title');
      titolPag.textContent = `Pokedex - ${pokemonsJSON.nom}`;

      let img = document.querySelector('.fonsImg img');
      img.src = pokemonsJSON.imatgeM;

      let PS = document.querySelector('#numPS');
      let atac = document.querySelector('#numAtac');
      let defensa = document.querySelector('#numDef');
      let atEsp = document.querySelector('#numAtEsp');
      let defEsp = document.querySelector('#numDefEsp');
      let velocitat = document.querySelector('#numVel');
      let total = document.querySelector('#numTotal');
      PS.textContent = pokemonsJSON.PS;
      atac.textContent = pokemonsJSON.atac;
      defensa.textContent = pokemonsJSON.defensa;
      atEsp.textContent = pokemonsJSON.atEspecial;
      defEsp.textContent = pokemonsJSON.defEspecial;
      velocitat.textContent = pokemonsJSON.velocitat;
      total.textContent = pokemonsJSON.total;

      let nomPkmn = document.querySelector('.atrPkmn h2');
      let IdPkmn = document.querySelector('.atrPkmn h3');
      nomPkmn.textContent = pokemonsJSON.nom;
      IdPkmn.textContent = "Num. " + pokemonsJSON.ID_pokedex;

      let pes = document.querySelector('#pes');
      let altura = document.querySelector('#altura');
      pes.textContent = pokemonsJSON.pes;
      altura.textContent = pokemonsJSON.altura;
    }
  }

  web.send("id=" + IdUrl);
}

function genereIMG() {
  const url = new URLSearchParams(window.location.search);
  const IdUrl = url.get('id');
  let web = new XMLHttpRequest();
  web.open("POST", `../php/dadesPokemon.php`);
  web.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  
  web.onload = function () {
    if (web.status === 200) {
      console.log(web.status);
      let pokemonsJSON = JSON.parse(web.responseText);
      console.log(web.responseText);
      
      let genere = document.querySelector('input[name="homeDona"]:checked');
      let valorGenere;
      if (genere) {
        valorGenere = genere.value;
      } else {
        valorGenere = null;
      }
      
      let booleanShiny = document.querySelector('#booleanShiny').checked;
      let img = document.querySelector('.fonsImg img');
      
      if (valorGenere == "home" && !booleanShiny) {
        img.src = pokemonsJSON.imatgeM;
      } else if (valorGenere == "dona" && !booleanShiny) {
        img.src = pokemonsJSON.imatgeF;
      } else if (valorGenere == "home" && booleanShiny) {
        img.src = pokemonsJSON.imatgeShinyM;
      } else if (valorGenere == "dona" && booleanShiny) {
        img.src = pokemonsJSON.imatgeShinyF;
      } else if (!booleanShiny) {
        img.src = pokemonsJSON.imatgeM;
      } else if (booleanShiny) {
        img.src = pokemonsJSON.imatgeShinyM;
      } else {
        img.src = pokemonsJSON.imatgeM;
        console.log("no s'ha trobat");
      }
    }
  }
  web.send("id=" + IdUrl);
}

function tipoPokemon() {
  const url = new URLSearchParams(window.location.search);
  const IdUrl = url.get('id');

  let web = new XMLHttpRequest();
  web.open("POST", `../php/tipoPokemonEspecific.php`);
  web.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  web.onload = function () {
    if (web.status === 200) {
      console.log(web.status);
      console.log(web.responseText);
      let tiposJSON = JSON.parse(web.responseText);

      let divTipos = document.querySelector('#tipos');
      divTipos.innerHTML = ``;

      tiposJSON.forEach(tipo => {
        divTipos.innerHTML += `
        <div class="recuadreTipo" id="recuadre${tipo.nom}"><p>${tipo.nom}</p></div>`;
      });
      
      tipo1 = tiposJSON[0].nom;
      tipo2 = tiposJSON[1]?.nom || null;
    }
  }
  web.send("id=" + IdUrl);
}

// NO FUNCIONA: error en el php perque no envia res
// function debilitats (tipo1, tipo2) {
//   let web = new XMLHttpRequest();
//   web.open("POST", `../php/efectiu.php`);
//   web.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

//     web.onload = function () {
//       if (web.status === 200) {
//         console.log(web.responseText);
        
//         let esfectivitatJSON = JSON.parse(web.responseText);
//         let x2 = [];
//         let x4 = [];
//         let x0 = [];
//         let meitat = [];
//         let quart = [];

//         esfectivitatJSON.forEach(efectiu => {
//           const dmg = parseFloat(efectiu.dmg);
//           const tipus = efectiu.tipus_atacant; // o tipus_defensor, segons la teva lògica

//           if (dmg === 0) {
//             x0.push(tipus); // immune
//           } else if (dmg === 0.5) {
//             meitat.push(tipus); // resistent
//           } else if (dmg === 2.0) {
//             x2.push(tipus); // dèbil
//           }
//         });

//         function duplicats(array) {
//           let comptador = {};
//           let repetits = [];

//           array.forEach(t => {
//             comptador[t] = (comptador[t] || 0) + 1;
//           });
        
//           for (let tipus in comptador) {
//             if (comptador[tipus] > 1) {
//               repetits.push(tipus);
//             }
//           }
        
//           return repetits;
//         }

//         x4 = duplicats(x2);
//         quart = duplicats(meitat);

//         x2 = x2.filter(t => !x4.includes(t));
//         meitat = meitat.filter(t => !quart.includes(t));

//         x0.forEach(immun => {
//         x2 = x2.filter(t => t !== immun);
//         x4 = x4.filter(t => t !== immun);
//         meitat = meitat.filter(t => t !== immun);
//         quart = quart.filter(t => t !== immun);
//       });

//         console.log("Immunes (x0):", x0);
//         console.log("Resistents (x0.5):", meitat);
//         console.log("Molt resistents (x0.25):", quart);
//         console.log("Débils (x2):", x2);
//         console.log("Molt dèbils (x4):", x4);
//       }
//     }

//   web.send("tipo1=" + tipo1 + "&tipo2=" + tipo2);
// }

conseguirDades();
botonsAntProx();
tipoPokemon();
// debilitats(tipo1, tipo2);

let home = document.getElementById('signeHome');
let dona = document.getElementById('signeHome');
let shiny = document.getElementById('signeHome');

document.querySelector('#signeHome').addEventListener('change', genereIMG);
document.querySelector('#signeDona').addEventListener('change', genereIMG);
document.querySelector('#booleanShiny').addEventListener('change', genereIMG);
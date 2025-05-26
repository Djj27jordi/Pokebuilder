<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../IMG/logo.png" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/nav_i_footer.css">
  <link rel="stylesheet" href="../css/builder.css">
  <title>PokeBuilder - Crear Equip</title>
</head>
<body class="fons_barres">
    <nav>
        <div class="logoMenu">
            <a href="index.php">
                <img src="../../IMG/logo.png" class="logoMenu" alt="logo pagina i link al Menu">
            </a>
            <div class="menu" id="menu">
                <ul class="llistaMenu">
                    <li><a href="index.php">Inici</a></li>
                    <li class="dropdown"><a href="pokedex.php">Pokedex</a>
                        <ul class="menuDropdown">
                            <li><a href="pokedex.php">Normal</a></li>
                            <li><a href="pokedex.php">Planta</a></li>
                            <li><a href="pokedex.php">Fuego</a></li>
                            <li><a href="pokedex.php">Agua</a></li>
                            <li><a href="pokedex.php">Lucha</a></li>
                            <li><a href="pokedex.php">Bicho</a></li>
                            <li><a href="pokedex.php">Veneno</a></li>
                            <li><a href="pokedex.php">Psiquico</a></li>
                            <li><a href="pokedex.php">Fantasma</a></li>
                            <li><a href="pokedex.php">Eléctico</a></li>
                            <li><a href="pokedex.php">Hielo</a></li>
                            <li><a href="pokedex.php">Dragon</a></li>
                            <li><a href="pokedex.php">Roca</a></li>
                            <li><a href="pokedex.php">Tierra</a></li>
                            <li><a href="pokedex.php">Volador</a></li>
                        </ul>
                    </li>
                    <li><a href="builder.php">Builder</a></li>
                    <li><a href="posts.php">Publicacions</a></li>
                    <li><a href="preguntesfrq.php">Preguntes frequents</a></li>
                    <li><a href="nosaltres.php">Qui som?</a></li>
                </ul>
            </div>
        </div>
        <div class="perfil" id="perfil">
            <?php if (isset($_SESSION['apodo'])): ?>
                <p><?= htmlspecialchars($_SESSION['apodo']) ?></p>
                <img src="<?= htmlspecialchars($_SESSION['imatge']) ?>" class="fotoUser" alt="foto del usuari">
            <?php else: ?>
                <a href="login.php">Inicia sessió</a>
            <?php endif; ?>
        </div>
    </nav>
  <div class="cont_blanc">
    
    <h1>Team Builder</h1>
    <section class="pokemonsSel">
        <div class="equipo" style="display:flex; justify-content: center; align-items:center;">
          <div class="slot" id="afegir_poke">
              <button id="botoAfegir" style="display:flex; justify-content: center; align-items:center;">
                <img src="../../img/plus.png" alt="+" style="width: 100px; height: 100px; align-self: center; cursor: pointer;">
              </button>
          </div> 
          <div class="slot" id="slot01"></div>
          <div class="slot" id="slot02"></div>
          <div class="slot" id="slot03"></div>
          <div class="slot" id="slot04"></div>
          <div class="slot" id="slot05"></div>
          <div class="slot" id="slot06"></div>
        </div>
    </section>

    <section class="pokemonsSel">
      <div class="seleccioPokemon" style="display: flex; flex-direction: row; gap: 10px;" id="pokemonTeam">

        <!-- PLUS BUTTON -->
        <div class="poke plus" style="display: flex; flex-direction: column; gap: 10px; align-items: center; cursor: pointer;">
          <span class="equipPokemon" style="display: flex; flex-direction: column; gap: 10px; align-items: center; justify-content: center;">
            <img src="../../img/plus.png" id="plusIcon" alt="+" style="width: 100px; height: 100px; align-self: center;">
          </span>
          <label for="pokemon" style="display: none;">Nom del Pokemon</label>
          <input type="text" name="pokemon" placeholder="Pokemon" id="pokemonInput" autocomplete="off">
        </div>

      </div>
    </section>
  
  <section>
    <div class="dadesPokemon">
      <!-- IMG POKEMON -->
      <div class="fons1">
        <div class="fons2 centSelPkmn">
          <img src="../../img/shilluette.png" id="imgPokemon" class="pokemonSel" alt="">
          <!-- Modal Bootstrap -->
          <div class="modal fade" id="pokemonModal" tabindex="-1" aria-labelledby="pokemonModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="pokemonModalLabel">Detalls del Pokémon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tancar"></button>
              </div>
              <div class="modal-body">
                <img id="modalImgPokemon" src="" alt="Pokémon" class="img-fluid mb-3" />
                <label for="selectPokemon">Selecciona un Pokémon:</label>
                <select id="selectPokemon" class="form-select mb-3">
                  <!-- Aquí es carregaran les opcions -->
                </select>
              </div>
              <div class="modal-footer">
                <button id="confirmarPokemon" type="button" class="btn btn-primary">Confirmar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- STATS -->
      <div class="fons1">
        <div class="fons2Stats centStatsPkmn">
          <table>
            <thead>
              <tr style="font-weight: bold;">
                <td style="text-align: end;">Estadistica</td>
                <td>Base</td>
                <td></td>
                <td>Modificada</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="nomStat">PS: </td>
                <td id="statBasePS">-</td>
                <td><div id="barraBasePS"><div id="barraStatPS"></div></div></td>
                <td id="numStatPS">-</td>
              </tr>
              <tr>
                <td class="nomStat">Atac: </td>
                <td id="statBaseAt">-</td>
                <td><div id="barraBaseAtac"><div id="barraStatAtac"></div></div></td>
                <td id="numStatAt">-</td>
              </tr>
              <tr>
                <td class="nomStat">Defensa: </td>
                <td id="statBaseDe">-</td>
                <td><div id="barraBaseDefensa"><div id="barraStatDefensa"></div></div></td>
                <td id="numStatDe">-</td>
              </tr>
              <tr>
                <td class="nomStat">At.Especial: </td>
                <td id="statBaseAtEs">-</td>
                <td><div id="barraBaseAtEspecial"><div id="barraStatAtEspecial"></div></div></td>
                <td id="numStatAtEs">-</td>
              </tr>
              <tr>
                <td class="nomStat">Def.Especial: </td>
                <td id="statBaseDeEs">-</td>
                <td><div id="barraBaseDefEspecial"><div id="barraStatDefEspecial"></div></div></td>
                <td id="numStatDeEs">-</td>
              </tr>
              <tr>
                <td class="nomStat">Velocitat: </td>
                <td id="statBaseVel">-</td>
                <td><div id="barraBaseVelocitat"><div id="barraStatVelocitat"></div></div></td>
                <td id="numStatVel">-</td>
              </tr>
              <tr>
                <td class="nomStat">Suma: </td>
                <td id="statBaseTotal">-</td>
                <td></td>
                <td id="numStatTotal"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- IV / EV -->
      <div class="fons1">
        <h2>IV | EV</h2>
        <table>
          <thead>
            <tr>
              <th></th>
              <th>IV</th>
              <th>EV</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="nomStat">PS: </td>
              <td><input type="number" id="IvPS" class="IvPS" max="31" min="0" value="0"></td>
              <td><input type="number" id="EvPS" class="EvPS" max="252" min="0" value="0"></td>
            </tr>
            <tr>
              <td class="nomStat">Atac: </td>
              <td><input type="number" id="IvAt" class="IvAtac" max="31" min="0" value="0"></td>
              <td><input type="number" id="EvAt" class="EvAtac" max="252" min="0" value="0"></td>
            </tr>
            <tr>
              <td class="nomStat">Defensa: </td>
              <td><input type="number" id="IvDe" class="IvDefensa" max="31" min="0" value="0"></td>
              <td><input type="number" id="EvDe" class="EvDefensa" max="252" min="0" value="0"></td>
            </tr>
            <tr>
              <td class="nomStat">At.Especial: </td>
              <td><input type="number" id="IvAtEs" class="IvAtEspecial" max="31" min="0" value="0"></td>
              <td><input type="number" id="EvAtEs" class="EvAtEspecial" max="252" min="0" value="0"></td>
            </tr>
            
            <tr>
              <td class="nomStat">Def.Especial: </td>
              <td><input type="number" id="IvDeEs" class="IvDefEspecial" max="31" min="0" value="0"></td>
              <td><input type="number" id="EvDeEs" class="EvDefEspecial" max="252" min="0" value="0"></td>
            </tr>
            <tr>
              <td class="nomStat">Velocitat: </td>
              <td><input type="number" id="IvVel" class="IvVelocitat" max="31" min="0" value="0"></td>
              <td><input type="number" id="EvVel" class="EvVelocitat" max="252" min="0" value="0"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- MOVIMENTS  -->
      <div class="fons1">
        <div class="genere">
          <div class="gen_shsiny" style="display: flex; flex-direction: row; justify-content:space-between;">
            <h2>Genere</h2>
            <h2>Nivell</h2>
          </div>
          <div class="centreGenere">
            <div class="ordenarGenereShiny">
              <div class="genereHome">
                <input type="radio" name="genere" class="signeHome" id="signeHome" value="home" checked>
                <label for="signeHome"><i class='bx bx-md bx-male-sign'></i></label>
              </div>
              <div class="genereDona">
                <input type="radio" name="genere" class="signeDona" id="signeDona" value="dona">
                <label for="signeDona"><i class='bx bx-md bx-female-sign'></i></label>
              </div>
              <div class="esShiny">
                <input type="checkbox" name="es_shiny" class="shinyy" id="shiny" value="shiny">
                <label for="shiny"><img src="../../img/shiny.png" alt="shiny" style="width:40px;"></label>
              </div>
            </div>
            <div class="Shiny" style="display: flex; flex-direction: column; justify-content: center; align-items: flex-end;">
              <div class="esNivell">
                <label for="nivell"></label>
                <input type="number" name="nivell" id="nivell" min="1" max="100" value="50">  
              </div>
            </div>
          </div>
          <div>
            <h2>Moviments</h2>
            <div class="selMove">
              <select name="move1" id="move1" class="move1" required>
                <option value="" selected disabled>Moviment 1</option>
              </select>
              <select name="move2" id="move2" class="move2" required>
                <option value="" selected disabled>Moviment 2</option>
              </select>
              <select name="move3" id="move3" class="move3" required>
                <option value="" selected disabled>Moviment 3</option>
              </select>
              <select name="move4" id="move4" class="move4" required>
                <option value="" selected disabled>Moviment 4</option>
              </select>
            </div>
          </div>
        </div>
      </div>
  </section>
  
  <section class="sectDesc">
    <div class="fons1 divDescripcio">
      <h2>Descripció Equip</h2>
      <p>Explica la principal estrategia pensada per aquest equip</p>
      <textarea name="estrategia" id="estrategia" class="estrategia" placeholder="Quina és la teva estrategia?"></textarea>
    </div>
  </section>
  
  <section class="sectGuardar">
    <button id="guardarEquip" class="guardarEquip">GUARDAR EQUIP</button>
  </section>
  
  </div>

  <footer>
    <div class="menuFooter">
      <h3>Menu Ràpid</h3>
      <ul>
        <a href="index.html"></a><li>Inici</li></a>
        <a href="pokedex.html"></a><li>Pokedex</li></a>
        <a href="builder.html"><li>Builder</li></a>
        <a href="posts.html"><li>Publicacions</li></a>
        <a href="preguntesfrq.html"><li>Preguntes frequents</li></a>
        <a href="nosaltres.html"><li>Qui som?</li></a>
      </ul>
    </div>
    <div class="formulariFoter">
        <p class="pokebuilder_logo">
            P
            <span class="footer_span">
                <img src="../../IMG/logo.png" alt="logo"/>
            </span>
            KÉBUILDER
        </p>
        <img src="" alt="" class="logoFooter">
        <h3>Formulari de contacte</h3>
      <div>
        <label for="emailFooter">Email: </label>
        <input type="email" name="emailFooter" id="emailFooter">
      </div>
      <div>
        <label for="msgFooter">Missatge de contacte</label>
        <textarea name="msgFooter" id="msgFooter" placeholder="Diguen's coses a millorar o si tens algun problema"></textarea>
      </div>
    </div>
    <div class="contacteFooter">
      <h3>Contacten's</h3>
      <div class="divContacte">
        <div class="contacte"><a href="#"><img src="../../IMG/contacte/insta.png" alt=""></a></div>
        <div class="contacte"><a href="#"><img src="../../IMG/contacte/tiktok.png" alt=""></a></div>
        <div class="contacte"><a href="#"><img src="../../IMG/contacte/discord.png" alt=""></a></div>
        <div class="contacte"><a href="#"><img src="../../IMG/contacte/x.png" alt=""></a></div>
      </div>
    </div>
</footer>
<script src="../JavaScript/builder.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css?v5" rel="stylesheet" type="text/css">
    <link rel="icon" href="imagenes/imagen proyecto trivia v2.png">
    <script src="javascript/javascript.js"></script>
    <script src="javascript/jquery-3.6.0.min.js"></script>
    <title>Juego Trivia</title>
</head>

<body>
    <header>
        <div id="logo">
            <img src="imagenes/imagen proyecto trivia v2.png" alt="">
        </div>

        <nav id="menu">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="#" onclick="clicMenuJugar()">Jugar</a></li>
                <li><a href="#" onclick="clicMenuRanking()">Ranking</a></li>
            </ul>
        </nav>

        <div id="banner">
            <img src="imagenes/imagen banner trivia.jpg" alt="">

            <div id="textoBanner">
                <h3>
                    "Trivia es un juego en el que puedes responder preguntas según el tema que elijas"
                </h3>
            </div>
        </div>

    </header>

    <main>
        

        <div id="ingresarNombre">
            <h1 class="h1Titulo">Para jugar ingresa tu nombre!</h1>
            <input id="txtNombre" type="text">
            <button class="btnJugar" onclick="clicBtnJugar()">Jugar!</button>

            <!--
            <input id="btnJugar" type="button" value="Jugar!">
            !-->
        </div>

        <div id="elegirCategoria">
            <h1>Elige un tema!</h1>
            

            <div>
                <h3>Naturaleza</h3>
                <img src="imagenes/imagen naturaleza.jpg" alt="" width="100px" height="100px" onclick="elegirNaturaleza()">
            </div>
            
            <div>
                <h3>Música</h3>
                <img src="imagenes/imagen musica.jpeg" alt="" width="100px" height="100px" onclick="elegirMusica()">
            </div>
                
            <div>
                <h3>Historia</h3>
                <img src="imagenes/imagen historia.jpg" alt="" width="100px" height="100px"onclick="elegirHistoria()">
            </div>
            
            

            <!--
            <form name="formularioCategoria">
                Naturaleza
                <input type="radio" name="categoria" value="naturaleza">
                <br>
                Música
                <input type="radio" name="categoria" value="musica">
                <br>
                Historia
                <input type="radio" name="categoria" value="historia">
                <br>
                <input class="btnJugar" type="submit" value="Aceptar" onclick="elegir()">

            </form>
            -->
            
        </div>

        <div class="categoria" id="naturaleza">
            <h1 class="h1Titulo">Naturaleza</h1>

            
            <form class="formulario" id="formNaturaleza" name="formularioNaturaleza" onsubmit="return respuestasNaturaleza()">
                <h2>1. ¿Cuántas horas duerme un gato?</h2>
                <input type="radio" name="p1" value="a">a. 8 horas <br>
                <input type="radio" name="p1" value="b">b. 10-12 horas <br>
                <input type="radio" name="p1" value="c">c. 12-16 horas <br>
                <input type="radio" name="p1" value="d">d. 18 horas <br>

                <h2>2. ¿Cuántos años puede llegar a vivir un árbol?</h2>
                <input type="radio" name="p2" value="a">a. 100 años<br>
                <input type="radio" name="p2" value="b">b. 500 años<br>
                <input type="radio" name="p2" value="c">c. 5.000 años<br>
                <input type="radio" name="p2" value="d">d. 10.000 años<br>

                <h2>3. ¿Qué alimento no debe comer un perro?</h2>
                <input type="radio" name="p3" value="a">a. carne<br>
                <input type="radio" name="p3" value="b">b. pollo<br>
                <input type="radio" name="p3" value="c">c. vegetales<br>
                <input type="radio" name="p3" value="d">d. chocolate<br>

                <h2>4. ¿Cuál es el animal más venenoso del mundo?</h2>
                <input type="radio" name="p4" value="a">a. medusa<br>
                <input type="radio" name="p4" value="b">b. serpiente de cascabel<br>
                <input type="radio" name="p4" value="c">c. alacrán<br>
                <input type="radio" name="p4" value="d">d. araña de rincón<br>

                <h2>5. ¿De qué color es la piel de un oso polar?</h2>
                <input type="radio" name="p5" value="a">a. blanca<br>
                <input type="radio" name="p5" value="b">b. rosa<br>
                <input type="radio" name="p5" value="c">c. negra<br>
                <input type="radio" name="p5" value="d">d. gris<br>

                <input class="btnJugar" id="btnNaturaleza" type="submit" value="Finalizar">

            </form>
            
        </div>

        <div class="categoria" id="musica">
            <h1 class="h1Titulo">Música</h1>

        
            <form class="formulario" id="formMusica" name="formularioMusica" onsubmit="return respuestasMusica()">
                <h2>1. ¿Quién compuso "Las cuatro estaciones"?</h2>
                <input type="radio" name="p1" value="a">a. Mozart <br>
                <input type="radio" name="p1" value="b">b. Bach <br>
                <input type="radio" name="p1" value="c">c. Beethoven <br>
                <input type="radio" name="p1" value="d">d. Vivaldi <br>

                <h2>2. ¿En qué ciudad se originó el Jazz?</h2>
                <input type="radio" name="p2" value="a">a. Nueva Orleans<br> 
                <input type="radio" name="p2" value="b">b. Nueva York<br>
                <input type="radio" name="p2" value="c">c. París<br>
                <input type="radio" name="p2" value="d">d. Memphis<br>

                <h2>3. ¿En qúe país nació Freddie Mercury?</h2>
                <input type="radio" name="p3" value="a">a. Inglaterra<br>
                <input type="radio" name="p3" value="b">b. Tanzania<br>
                <input type="radio" name="p3" value="c">c. U.S.A<br>
                <input type="radio" name="p3" value="d">d. Suecia<br>

                <h2>4. ¿De qué famoso cantante es la canción Starman?</h2>
                <input type="radio" name="p4" value="a">a. Michael Jackson<br>
                <input type="radio" name="p4" value="b">b. Elton John<br>
                <input type="radio" name="p4" value="c">c. David Bowie<br>
                <input type="radio" name="p4" value="d">d. John Lennon<br>

                <h2>5. ¿De qué famoso grupo es la canción Another brick in the wall?</h2>
                <input type="radio" name="p5" value="a">a. The Rolling Stones<br>
                <input type="radio" name="p5" value="b">b. Led Zeppellin<br>
                <input type="radio" name="p5" value="c">c. Pink Floyd<br>
                <input type="radio" name="p5" value="d">d. Judas Priest<br>

                <input class="btnJugar" type="submit" value="Finalizar">

            </form>
        
        </div>

        <div class="categoria" id="historia">
            <h1 class="h1Titulo">Historia</h1>

            <form class="formulario" id="formHistoria" name="formularioHistoria" onsubmit="return respuestasHistoria()">
                <h2>1. ¿En qué guerra participó Juana de Arco?</h2>
                <input type="radio" name="p1" value="a">a. Primera cruzada <br>
                <input type="radio" name="p1" value="b">b. Guerras Napoleónicas <br>
                <input type="radio" name="p1" value="c">c. La guerra de los 30 años <br>
                <input type="radio" name="p1" value="d">d. La guerra de los 100 años <br>

                <h2>2. ¿Por qué condenó la Iglesia a Galileo Galilei?</h2>
                <input type="radio" name="p2" value="a">a. Por decir que la tierra era redonda<br>
                <input type="radio" name="p2" value="b">b. Por negar la existencia de dios<br>
                <input type="radio" name="p2" value="c">c. Por decir que la tierra giraba alrededor del sol<br>
                <input type="radio" name="p2" value="d">d. Por decir que la tierra era el centro del universo<br>

                <h2>3. ¿Qué hito informático de 1969 cambiaría radicalmente el curso de la historia de la humanidad?</h2>
                <input type="radio" name="p3" value="a">a. El primer ordenador personal<br>
                <input type="radio" name="p3" value="b">b. Internet<br>
                <input type="radio" name="p3" value="c">c. El primer router wi-fi<br>
                <input type="radio" name="p3" value="d">d. El primer Ipod<br>

                <h2>4. En qué país nació Albert Einstein?</h2>
                <input type="radio" name="p4" value="a">a. Inglaterra<br>
                <input type="radio" name="p4" value="b">b. Austria<br>
                <input type="radio" name="p4" value="c">c. Alemania<br>
                <input type="radio" name="p4" value="d">d. Bélgica<br>

                <h2>5. ¿Quién inventó la radio?</h2>
                <input type="radio" name="p5" value="a">a. Thomas Alva Edison<br>
                <input type="radio" name="p5" value="b">b. Leonardo da Vinci<br>
                <input type="radio" name="p5" value="c">c. Alexander Graham Bell<br>
                <input type="radio" name="p5" value="d">d. Nikola Tesla<br>

                <input class="btnJugar" type="submit" value="Finalizar">

            </form>
        </div>

        <div id="resultado">
            
        </div>

        <div id="rankingNaturaleza">
            <h1 class="h1Titulo">Ranking Naturaleza</h1>
        </div>

        <div id="rankingMusica">
            <h1 class="h1Titulo">Ranking Música</h1>
        </div>

        <div id="rankingHistoria">
            <h1 class="h1Titulo">Ranking Historia</h1>
        </div>
        

    </main>

    <footer>
        <h3>Juego creado por Ariel Varetto, Chile 2021</h1>
    </footer>
</body>
</html>
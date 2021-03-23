function clicMenuJugar(){
    document.getElementById("banner").style.display = 'none';
    document.getElementById("naturaleza").style.display = 'none';
    document.getElementById("musica").style.display = 'none';
    document.getElementById("historia").style.display = 'none';

    document.getElementById("rankingNaturaleza").style.display = 'none';
    document.getElementById("rankingMusica").style.display = 'none';
    document.getElementById("rankingHistoria").style.display = 'none';

    document.getElementById('ingresarNombre').style.display = 'block';
    document.getElementById('elegirCategoria').style.display = 'none';
    document.getElementById('resultado').style.display = 'none';
}

function clicMenuRanking(){
    document.getElementById("banner").style.display = 'none';
    document.getElementById("naturaleza").style.display = 'none';
    document.getElementById("musica").style.display = 'none';
    document.getElementById("historia").style.display = 'none';

    document.getElementById('ingresarNombre').style.display = 'none';
    document.getElementById('elegirCategoria').style.display = 'none';
    document.getElementById('resultado').style.display = 'none';

    //llenar ranking
    /*probar envio a 'mostrarRanking.php'*/

    //llenar ranking naturaleza
    var parametrosNaturaleza =
    {
        "ranking" : 'ranking',
    };
    $.ajax({
        type: "POST",
        url: "mostrarRankingNaturaleza.php",
        data: parametrosNaturaleza,
        
        success: function (mostrarMensaje) {
            $('#rankingNaturaleza').html(mostrarMensaje);
        }
    });
    //llenar ranking musica
    var parametrosMusica =
    {
        "ranking" : 'ranking',
    };
    $.ajax({
        type: "POST",
        url: "mostrarRankingMusica.php",
        data: parametrosMusica,
        
        success: function (mostrarMensaje) {
            $('#rankingMusica').html(mostrarMensaje);
        }
    });
    //llenar ranking historia
    var parametrosHistoria =
    {
        "ranking" : 'ranking',
    };
    $.ajax({
        type: "POST",
        url: "mostrarRankingHistoria.php",
        data: parametrosHistoria,
        
        success: function (mostrarMensaje) {
            $('#rankingHistoria').html(mostrarMensaje);
        }
    });


    document.getElementById("rankingNaturaleza").style.display = 'block';
    document.getElementById("rankingMusica").style.display = 'block';
    document.getElementById("rankingHistoria").style.display = 'block';

    
}

function clicBtnJugar(){
    document.getElementById("naturaleza").style.display = 'none';
    document.getElementById("musica").style.display = 'none';
    document.getElementById("historia").style.display = 'none';

    //resetear forms
    var fn = document.getElementById('formNaturaleza');
    var fm = document.getElementById('formMusica');
    var fh = document.getElementById('formHistoria');
    fn.reset();
    fm.reset();
    fh.reset();

    //validar que txtNombre no esté vacío
    var nombre = document.getElementById('txtNombre').value;

    if(nombre === null || nombre === ""){
        alert("Ingrese su nombre para jugar");
        return false;
    }else{
        document.getElementById('ingresarNombre').style.display = 'none';
        document.getElementById('elegirCategoria').style.display = 'block';
    }
    return false;
  
}
function elegir(){
    document.getElementById('elegirCategoria').style.display = 'none';

    /*mandar valor del radiobutton "categoria"*/
    
    var f = document.forms["formularioCategoria"];
    var n = "naturaleza";
    var m = "musica";
    var h = "historia";

    if(f["categoria"].value === n){
        document.getElementById("naturaleza").style.display = 'block';
        /*
        document.getElementById("musica").style.display = 'none';
        document.getElementById("historia").style.display = 'none';
        */
    }else{
        document.getElementById("musica").style.display = 'block';
    }
    return;
    
    /*
    else if(formulario["categoria"].value === m){
        document.getElementById("musica").style.display = 'block';
    }else{
        document.getElementById("historia").style.display = 'block';
    }
   */

    /*
    if(formulario["categoria"].value === h){
        document.getElementById("historia").style.display = 'block';
    }
    */
}

function elegirNaturaleza(){
    document.getElementById("elegirCategoria").style.display = 'none';
    document.getElementById("naturaleza").style.display = 'block';
}
function elegirMusica(){
    document.getElementById("elegirCategoria").style.display = 'none';
    document.getElementById("musica").style.display = 'block';
}
function elegirHistoria(){
    document.getElementById("elegirCategoria").style.display = 'none';
    document.getElementById("historia").style.display = 'block';
}


function respuestasNaturaleza(){
    var numeroPreguntas = 5;
    var puntos = 0;
    var formulario = document.forms["formularioNaturaleza"];
    var respuestas = ["c","c","d","a","c"];

    for(var i = 1; i <= numeroPreguntas; i++){
        if(formulario["p"+i].value === null || formulario["p"+i].value === ""){
            alert("No has respondido la pregunta "+i);
            return false; /*termina ciclo for*/
        }else{
            if(formulario["p"+i].value === respuestas[i-1]){
                puntos++;
            }
        }
    }
    var nombre = document.getElementById('txtNombre').value;

    var resultado = document.getElementById("resultado");
    document.getElementById("naturaleza").style.display = 'none';
    document.getElementById("resultado").style.display = 'block';

    resultado.innerHTML = '<h3> <span> '+ nombre +' </span>, lograste en naturaleza <span> '+ puntos +' </span> de <span> '+ numeroPreguntas +' puntos </span> </h3>';

    document.getElementById("rankingNaturaleza").style.display = 'block';
    
    /*probar envio a 'datos.php'*/
    var parametros =
    {
        "nombre" : nombre,
        "puntos" : puntos,
        "categoria" : 'naturaleza'
    };
    $.ajax({
        type: "POST",
        url: "datos.php",
        data: parametros,
        
        success: function (mostrarMensaje) {
            $('#rankingNaturaleza').html(mostrarMensaje);
        }
    });

    /*insertar nombre y puntaje en tabla 'naturaleza'*/

    /*mostrar en que ubicación del ranking quedó*/

    /*conectarse a la BD y mostrar ranking en el 'rankingNaturaleza'*/

    return false;
}

function respuestasMusica(){
    var numeroPreguntas = 5;
    var puntos = 0;
    var formulario = document.forms["formularioMusica"];
    var respuestas = ["d","a","b","c","c"];

    for(var i = 1; i <= numeroPreguntas; i++){
        if(formulario["p"+i].value === null || formulario["p"+i].value === ""){
            alert("No has respondido la pregunta "+i);
            return false; /*termina ciclo for*/
        }else{
            if(formulario["p"+i].value === respuestas[i-1]){
                puntos++;
            }
        }
    }
    var nombre = document.getElementById('txtNombre').value;

    var resultado = document.getElementById("resultado");
    document.getElementById("musica").style.display = 'none';
    document.getElementById("resultado").style.display = 'block';

    resultado.innerHTML = '<h3> <span> '+ nombre +' </span>, lograste en música <span> ' +puntos+' </span> de <span> '+ numeroPreguntas +' puntos </span> </h3>';
    document.getElementById("rankingMusica").style.display = 'block';

    /*probar envio a 'datos.php'*/
    var parametros =
    {
        "nombre" : nombre,
        "puntos" : puntos,
        "categoria" : 'musica'
    };
    $.ajax({
        type: "POST",
        url: "datos.php",
        data: parametros,
        
        success: function (mostrarMensaje) {
            $('#rankingMusica').html(mostrarMensaje);
        }
    });

    
    return false;
}

function respuestasHistoria(){
    var numeroPreguntas = 5;
    var puntos = 0;
    var formulario = document.forms["formularioHistoria"];
    var respuestas = ["d","c","b","c","d"];

    for(var i = 1; i <= numeroPreguntas; i++){
        if(formulario["p"+i].value === null || formulario["p"+i].value === ""){
            alert("No has respondido la pregunta "+i);
            return false; /*termina ciclo for*/
        }else{
            if(formulario["p"+i].value === respuestas[i-1]){
                puntos++;
            }
        }
    }
    var nombre = document.getElementById('txtNombre').value;
  
    var resultado = document.getElementById("resultado");
    document.getElementById("historia").style.display = 'none';
    document.getElementById("resultado").style.display = 'block';

    resultado.innerHTML = '<h3> <span> '+ nombre +' </span>, lograste en historia <span> '+ puntos +' </span> de <span> '+ numeroPreguntas +' puntos </span> </h3>';
    document.getElementById("rankingHistoria").style.display = 'block';    
    
    /*probar envio a 'datos.php'*/
    var parametros =
    {
        "nombre" : nombre,
        "puntos" : puntos,
        "categoria" : 'historia'
    };
    $.ajax({
        type: "POST",
        url: "datos.php",
        data: parametros,
        
        success: function (mostrarMensaje) {
            $('#rankingHistoria').html(mostrarMensaje);
        }
    });
    
    return false;
}

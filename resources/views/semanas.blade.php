@extends('layouts.design')

@section('ver-semana')
    <div class="container">

    <h1 style="text-align:center;"> Semanas </h1>
    <h3>Abajo podras ver los temas de las siguientes 6 semanas:</h3>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 1:</h2></div>
        <div class="card-body">
<<<<<<< Updated upstream
        <p name="Tema1">1.- Derivadas e Integrales</p>
=======
        <p>1.- Derivadas e Integrales</p>

>>>>>>> Stashed changes
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Derivadas e Integrales" data-content="La derivada de una función, se puede interpretar geométricamente como la pendiente de la curva de la función matemática f(x) trazada en función de x.    En Cambio la  integral de una función se puede interpretar geométricamente como el área bajo la curva de una función matemática f(x) trazada como una función de x." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>2.- Binomio de Newton</p>

        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Binomio de Newton" data-content="En matemática, el teorema del binomio es una fórmula que proporciona el desarrollo de la potencia n-ésima (siendo n, entero positivo) de un binomio." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>3.- Sumatorias</p>

        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Sumatorias" data-content="El sumatorio​​ (también conocido como operación de suma, notación sigma o símbolo suma), es una notación matemática que permite representar sumas de varios sumandos, n o incluso infinitos sumandos, evitando el empleo de los puntos suspensivos o de una explícita notación de paso al límite.​" style="margin-bottom:10px;width:200px">Ver Descripción</button>

        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 2:</h2></div>
        <div class="card-body">
        <p>1.- Programacion en Objetos</p>

        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Programacion de Objetos" data-content="Programación orientada a objetos (POO). Es un paradigma de programación que usa objetos y sus interacciones, para diseñar aplicaciones y programas informáticos. Está basado en varias técnicas, incluyendo herencia, abstracción, polimorfismo y encapsulamiento." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>2.- Programacion Web</p>

        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Programacion Web" data-content="Desarrollo web es un término que define la creación de sitios web para Internet o una intranet. Para conseguirlo se hace uso de tecnologías de software del lado del servidor y del cliente que involucran una combinación de procesos de base de datos con el uso de un navegador web a fin de realizar determinadas tareas o mostrar información." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>3.- Inteligencia Artificial</p>

        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
<<<<<<< Updated upstream
        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 2:</h2></div>
        <div class="card-body">
        <p name="Tema4">1.- Programacion en Objetos</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema5">2.- Programacion Web</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema6">3.- Inteligencia Artificial</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
=======
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Inteligencia Artificial" data-content=" En ciencias de la computación, una máquina «inteligente» ideal es un agente racional flexible que percibe su entorno y lleva a cabo acciones que maximicen sus posibilidades de éxito en algún objetivo o tarea." style="margin-bottom:10px;width:200px">Ver Descripción</button>

>>>>>>> Stashed changes
        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 3:</h2></div>
        <div class="card-body">
<<<<<<< Updated upstream
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema8">2.- Circuitos integrados</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema9">3.- Circuitos Logicos</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 4:</h2></div>
        <div class="card-body">
        <p name="Tema10">1.- Diseño Web</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema11">2.- Jquery y Ajax</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema12">3.- JavaScrit</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 5:</h2></div>
        <div class="card-body">
        <p name="Tema13">1.- Python</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema14">2.- C##</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema15">3.- VisualBasics</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 6:</h2></div>
        <div class="card-body">
        <p name="Tema16">1.- Bases de Datos</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema17">2.- Eliminar y Actualizar Campos</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema18">3.- Editar Columnas y Filas</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verreflexion'" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
=======

        <p>1.- Logica Computacional</P>

        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Logica" data-content="La lógica computacional es la misma lógica matemática aplicada al contexto de las ciencias de la computación. Su uso es fundamental en varios niveles: en los circuitos computacionales, en la programación lógica y en el análisis y optimización (de recursos temporales y espaciales) de algoritmos." style="margin-bottom:10px;width:200px">Ver Descripción</button>        

        <p>2.- Circuitos integrados</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Circuitos integrados" data-content="Un circuito integrado (CI), también conocido como chip o microchip, es una estructura de pequeñas dimensiones de material semiconductor, normalmente silicio, de algunos milímetros cuadrados de superficie (área), sobre la que se fabrican circuitos electrónicos generalmente mediante fotolitografía y que está protegida dentro de un encapsulado de plástico o de cerámica.​ El encapsulado posee conductores metálicos apropiados para hacer conexión entre el circuito integrado y un circuito impreso." style="margin-bottom:10px;width:200px">Ver Descripción</button>        

        <p>3.- Circuitos Logicos</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Circuitos Logicos" data-content="Los circuitos lógicos por lo general  sirven únicamente como una ayuda auxiliar necesaria para lograr un mejor entendimiento de los caracteres simbólicos no gráficos. Este tipo de representaciones gráficas son usados en informática y son llamados generalmente como circuitos digitales, este nombre radica del concepto de dígito, en especial con dos dígitos, esto son, los valores de “0” y “1”. Estos dos únicos valores se les conoce como forma binaria y significan:" style="margin-bottom:10px;width:200px">Ver Descripción</button>        

        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 4:</h2></div>
        <div class="card-body">
        <p>1.- Diseño Web</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Diseño Web" data-content="El diseño web es una actividad que consiste en la planificación, diseño, implementación y mantenimiento de sitios web. No es simplemente la implementación del diseño convencional ya que se abarcan diferentes aspectos como el diseño gráfico web, diseño de interfaz y experiencia de usuario, como la navegabilidad, interactividad, usabilidad, arquitectura de la información; interacción de medios, entre los que podemos mencionar audio, texto, imagen, enlaces, video y la optimización de motores de búsqueda." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>2.- Jquery y Ajax</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Jquery y Ajax" data-content="jQuery es una biblioteca multiplataforma de JavaScript, creada inicialmente por John Resig, que permite simplificar la manera de interactuar con los documentos HTML, manipular el árbol DOM, manejar eventos, desarrollar animaciones y agregar interacción con la técnica AJAX a páginas web. AJAX, acrónimo de Asynchronous JavaScript And XML (JavaScript asíncrono y XML), es una técnica de desarrollo web para crear aplicaciones interactivas o RIA (Rich Internet Applications). Estas aplicaciones se ejecutan en el cliente, es decir, en el navegador de los usuarios mientras se mantiene la comunicación asíncrona con el servidor en segundo plano." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>3.- JavaScrit</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Javascript" data-content="JavaScript (abreviado comúnmente JS) es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,3​ basado en prototipos, imperativo, débilmente tipado y dinámico." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 5:</h2></div>
        <div class="card-body">
        <p>1.- Python</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Python" data-content="Python es un lenguaje de programación interpretado cuya filosofía hace hincapié en una sintaxis que favorezca un código legible. Se trata de un lenguaje de programación multiparadigma, ya que soporta orientación a objetos, programación imperativa y, en menor medida, programación funcional. Es un lenguaje interpretado, usa tipado dinámico y es multiplataforma." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>2.- C#</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="C#" data-content="C# (pronunciado si sharp en inglés) es un lenguaje de programación orientado a objetos desarrollado y estandarizado por Microsoft como parte de su plataforma .NET, que después fue aprobado como un estándar por la ECMA (ECMA-334) e ISO (ISO/IEC 23270). C# es uno de los lenguajes de programación diseñados para la infraestructura de lenguaje común." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>3.- VisualBasics</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="VisualBasics" data-content="Visual Basic (VB) es un lenguaje de programación dirigido por eventos, desarrollado por Alan Cooper para Microsoft. Este lenguaje de programación es un dialecto de BASIC, con importantes agregados. Su primera versión fue presentada en 1991, con la intención de simplificar la programación utilizando un ambiente de desarrollo." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        </div>

        <div class="card-header"><h2 style="font-weight: bold;">Semana 6:</h2></div>
        <div class="card-body">
        <p>1.- Bases de Datos</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Bases de Datos" data-content="Una base de datos es un conjunto de datos pertenecientes a un mismo contexto y almacenados sistemáticamente para su posterior uso. En este sentido; una biblioteca puede considerarse una base de datos compuesta en su mayoría por documentos y textos impresos en papel e indexados para su consulta." style="margin-bottom:10px;width:200px">Ver Descripción</button>

        <p>2.- Eliminar Campos</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Eliminar Campos" data-content="MySQL pone a nuestra disposición el comando DELETE, que usaremos del siguiente modo: DELETE FROM tabla WHERE condición. Algo que podríamos leer como “borra de la tabla indicada aquello que cumpla cierta condición”." style="margin-bottom:10px;width:200px">Ver Descripción</button>
        
        <p>3.- Actualizar Campos</p>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <button type="button" class="btn btn-primary" data-toggle="popover" title="Actualizar Campos" data-content="Update es la instrucción del lenguaje SQL que nos sirve para modificar los registros de una tabla: UPDATE SET nombre_campo FROM tabla WHERE condición " style="margin-bottom:10px;width:200px">Ver Descripción</button>

>>>>>>> Stashed changes
        </div>
        
        <button type="button" class="btn btn-dark" onclick="window.location.href='/tema'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Tema</button>
    </div>
<script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


@endsection              
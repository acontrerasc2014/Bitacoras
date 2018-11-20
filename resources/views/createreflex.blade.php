
@extends('layouts.design')

@section('crear-reflexion')

<div class="w3-container">
  <h2>ABRIR POP-UP</h2>


  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Crear Reflexiones</h2>
      </header>
      <form class="form-group" id="formid" action="/reflexion" method="POST">
         {!!csrf_field() !!} 
         <span> Ingresa tu Nombre</span>
        <input type="text" name="nom" id="nom">  <br> 
        <br>
        <span> Ingresa tu Reflexion</span>
        <input type="text" name="reflex" id="reflex">  <br>
        <br> 
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Reflexion-Enviada")  >
    </form>
    </div>
  </div>
</div>


@stop  

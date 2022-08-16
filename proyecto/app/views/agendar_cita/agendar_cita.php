<link rel="stylesheet" href="../css/css_agendar_cita.css">
<!--MAIN-->
<div class="main">
    <!--MAIN-container-->
    <div class="container">
      <h2>Formulario de reserva</h2>
      <form action="mail.php" enctype="multipart/form-data" method="post" name="formulario_html5" autocomplete="off">
        <label for="nombre">Nombre</label></br>
        <input type="text" name="nombre" id="nombre" class="cajas"></br>
      
        <label for="email">Email</label></br>
        <input type="email" name="email" id="email" class="cajas"></br>
  
        <label for="id">Cedula</label></br>
        <input type="id" name="Cedula" id="Cedula" class="cajas"></br>
  
        <label for="telefono">Teléfono</label></br>
        <input type="number" name="telefono" id="telefono" class="cajas"></br>
        
        <label for="llegada">Fecha y hora</label></br>
        <input type="datetime-local" id="llegada" name="fecha-hora-llegada" class="cajas">
        </br>
     
        <label for="Servicio">Servicio</label></br>
        <select id="Servicio" class="cajas">
         <option value="1">Cambio de aceite</option>
         <option value="2">Servicio de grua</option>
         <option value="3">Revision tecnomecanica</option>
         <option value="4">Calibracion de llantas</option>
         <option value="5">Limpieza de vehiculos</option>
         <option value="6">Vehiculo de sustitucion</option>
       
       </select></br>
        <input type="submit" value="enviar" name="submit" class="btn">
  
  </form>
  
        
  
    </div>
  </div>
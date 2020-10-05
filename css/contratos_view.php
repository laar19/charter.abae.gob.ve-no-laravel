<!DOCTYPE HTML>
<html lang="es">
   <head>
      <meta charset="utf-8"/>
      <title>Vista Administrador</title>
      <meta charset="UTF-8">
      <link href="http://localhost/SAEGEC/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>      
      <script src="JS/jquery-2.1.1.js" type="text/javascript"></script>
      <script src="JS/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="JS/lista_usuario_js.js" type="text/javascript"></script>
   </head>
   <br><br><br>
   <body>
      <h2>Gestión de Contratos</h2>
      <?php
         //Si existen las sesiones flasdata que se muestren
         if($this->session->flashdata('correcto'))
         echo $this->session->flashdata('correcto');         
         if($this->session->flashdata('incorrecto')) 
         echo $this->session->flashdata('incorrecto');
      ?>
      <div id="contenido">         
         <a href="Registro_contrato/add/" class="btn btn-success " role="button">
         <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Agregar Nuevo Contrato</a>
         <br/><br/>       
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h3 class="panel-title">Lista de Contratos</h3>
            </div>
         </div>
      </div>
      <table class="table table-hover">
         <thead>
            <tr>
               <th>Número</th>
               <th>Costo</th>
               <th>Fecha</th>
               <th>Cedula del Titular</th>
            </tr>
            </thead>
         <?php
            foreach($ver as $fila){
         ?>         
         <tbody>
            <tr>
               <td><?=$fila->connumero;?></td>
               <td><?=$fila->concosto;?> </td>
               <td><?=$fila->confecha;?> </td>
               <td><?=$fila->titcedula;?></td>
                            
               <td>
               <a href="<?=base_url("Administrador/Contratos/mod/$fila->connumero")?>">
               <button type="button" class="btn btn-info btn-sm">
               <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar
               </button>
               </a>
               </td>
               <td>
                  <a href="<?=base_url("Administrador/Contratos/eliminar/$fila->connumero")?>">
                     <button type="button" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar
                     </button>
                  </a>
               </td>
            </tr>
         </tbody>
         <?php
            }
         ?>
      </table>
   </body>
</html>


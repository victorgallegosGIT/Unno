<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3 style="padding: 25px 25px 25px 9px; color: #FB005F !important;">
              <i class="fa fa-angle-right" style="color: #FB005F !important;"></i> Información de Clientes
            </h3>
              
            <!-- PRINT CUSTOMERS -->  
            <div class="row row-cols-1 row-cols-md-3 g-1 cards-father">
              <?php foreach($clientes as $cliente): ?>
                <div class="col-md-2">
                  <div class="card h-100 card-list">
                    <div class="card-body">
                      <h5 class="card-title text-center text-info">
                        <?php echo $cliente->nombre_cliente; ?>
                      </h5>
                      <p class="text-center text-info">
                        <?php echo $cliente->cuit_cliente; ?>
                      </p>
                      <center>
                        <i class="fa fa-user userImage"></i>
                      </center>
                      <div class="gap-1 row col-md-11 offset-md-1">
                          <div class="col-md-3 mt-4">
                            <button class="btn btn-warning btnIcons editIcon editClienteBtn" type="button">
                              <i class="fa fa-pencil"></i>
                            </button>
                          </div>
                          <div class="col-md-3 mt-4">
                            <button class="btn btn-info btnIcons infoIcon deleteClienteBtn"
                                    value="<?php echo $cliente->id_cliente; ?>+<?php echo $cliente->nombre_cliente; ?>" 
                                    type="button">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                          <div class="col-md-3 mt-4">
                            <button class="btn btn-danger btnIcons delIcon deleteClienteBtn"
                                    value="<?php echo $cliente->id_cliente; ?>+<?php echo $cliente->nombre_cliente; ?>" 
                                    type="button">
                              <i class="fa fa-trash"></i>
                          </button>
                          </div>
                      </div>
                    </div>
                
                    <div class="card-footer">
                      <center>
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </center>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            
            <!--
              <button class="btnDelete deleteClienteBtn" style="padding: 0px;"
                    type="button" value="<?php echo $cliente->id_cliente; ?>+<?php echo $cliente->nombre_cliente; ?>"><i class='fa fa-trash' style="text-align: center;"></i></button>

				<div class="row mb ml">
				
                  <div class="content-panel">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th style="color: #FB005F !important;">Nombre</th>
                                    <th style="color: #FB005F !important;">Teléfono</th>
                                    <th style="color: #FB005F !important;">Ciudad</th>
                                    <th style="color: #FB005F !important;">Dirección</th>
                                    <th style="color: #FB005F !important;">Condición</th>
                                    <th style="color: #FB005F !important;">Cuit</th>
                                    <th style="color: #FB005F !important;">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($clientes as $cliente): ?>
                                    <tr>
                                      <td style="color: black !important;"><?php echo $cliente->nombre_cliente; ?></td>
                                      <td style="color: black !important;"><?php echo $cliente->telefono_cliente; ?></td>
                                      <td style="color: black !important;"><?php echo $cliente->ciudad_cliente; ?></td>
                                      <td style="color: black !important;"><?php echo $cliente->direccion_cliente; ?></td>
                                      <td style="color: black !important;"><?php echo $cliente->condicion_iva; ?></td>
                                      <td style="color: black !important;"><?php echo $cliente->cuit_cliente; ?></td>
                                      <td>

                    <button class="btnUpdate editClienteBtn" style="padding: 0px;" type="button" value="<?php echo $cliente->id_cliente; ?>" data-toggle="modal" data-target="#modal-lg-edit"><i class='fa fa-pencil' style='text-align: center;'></i></button>
                    <button class="btnDelete deleteClienteBtn" style="padding: 0px;"
                    type="button" value="<?php echo $cliente->id_cliente; ?>+<?php echo $cliente->nombre_cliente; ?>"><i class='fa fa-trash' style="text-align: center;"></i></button>
                                        
                                      </td>
                                    </tr>
                                  <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                  </div>

				
              </div>

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


      



<!--EDIT CLIENTE-->
<div class="modal fade" id="modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FB005F !important;">
        <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Cliente <i class="fa fa-pencil" style="color: #C9D000; font-size: 25px;"></i></h3>
      </div>
      <div class="modal-body">
          <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
          </div>
        <form class="login100-form validate-form" method="POST">

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="nombresEdit" placeholder="Nombre" id="nombresEdit">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="telefonoEdit" placeholder="Teléfono" id="telefonoEdit">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="ciudadEdit" placeholder="Ciudad" id="ciudadEdit">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-building-o" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="direccionEdit" placeholder="Dirección" id="direccionEdit">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-home" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cuitEdit" placeholder="Cuit" id="cuitEdit">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="emailEdit" placeholder="Email" id="emailEdit">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <select id="condicion_iva_editable" class="form-control cond_iva_editable" style="margin-top: 15px;">
                        <option selected disabled class="editableCondition">Condición iva..</option>
                        <?php foreach($condiciones_iva as $condicion_iva): ?>
                          <option class="claseCond" value="<?php echo $condicion_iva->id; ?>"><?php echo $condicion_iva->condicion_iva; ?></option>
                        <?php endforeach; ?>
                      </select>
          </div>

          
        </form>
      </div>

        <center>
           <button type="button" class="botonGuardarCambios" id="saveClientEditable">Guardar cambios</button>
          </center>
      </div>
    </div>
  </div>
</div>
<!--EDIT CLIENTE-->
<script type="module" src="base.js"></script>
<script type="text/javascript">
  window.addEventListener('load', function() {

var base_url = '<?php echo base_url(); ?>';

  /* AÑADIR CLIENTE */

  $('.addClienteBtn ').on('click', function() {
    alert("HEY!")
  })

$('#btnRosa').on('click', function(){
    let myArr = "nombres="+$('#nombres').val() +
                "&telefono="+$('#telefono').val() +
                "&ciudad="+$('#ciudad').val() +
                "&direccion="+$('#direccion').val() +
                "&condicion_iva="+$('#condicion_iva').val() +
                "&cuit="+$('#cuit').val() +
                "&email="+$('#email').val();
                
                $.ajax({
                  type: 'POST',
                  data: myArr,
                  dataType:'json',
                  url:base_url+"clientes/clientes/addCliente",
                  success:function(response){
                    if(response.success==true){
                      
                      $('#modal-lg-add').modal("hide");

                      Swal.fire({
                        title: 'Éxito!',
                        text: 'Has agregado un cliente satisfactoriamente!',
                        icon: 'success',
                      })

                      setTimeout(function(){
                        location.href=base_url+'clientes/clientes'
                      }, 1500);

                    }else if(response.success==false){
                      alert("ERROR!");
                    }

                  } // fin SUCCESS function

                }) // fin ajax
 })                


  /* AÑADIR CLIENTE */

  /* EDITAR CLIENTE */

  $('.editClienteBtn').on("click", function() {
    let idCliente = $(this).val();

      $.ajax({
        type:'POST',
        dataType:'json',
        url:base_url+'clientes/clientes/selectClientToEdit/'+idCliente,
        success:function(data){
          let datos = data.clientEditable;

            $('#nombresEdit').val(datos.nombre_cliente);
            $('#telefonoEdit').val(datos.telefono_cliente);
            $('#ciudadEdit').val(datos.ciudad_cliente);
            $('#direccionEdit').val(datos.direccion_cliente);
            $('#cuitEdit').val(datos.cuit_cliente);
            $('#emailEdit').val(datos.email_cliente);
            $('#condicion_iva_editable option.editableCondition').text(datos.condicion_iva);

            $('#saveClientEditable').on("click", function() {
              saveDataCliente(idCliente);

            })

        }
      })

  })

function saveDataCliente(idCliente){
  let clientEditableData = "nombres="+$('#nombresEdit').val() +
                                "&telefono="+$('#telefonoEdit').val() +
                                "&ciudad="+$('#ciudadEdit').val() +
                                "&direccion="+$('#direccionEdit').val() +
                                "&cuit="+$('#cuitEdit').val() +
                                "&email="+$('#emailEdit').val() +
                                "&condicion="+$('#condicion_iva_editable').val();
  

                      Swal.fire({
                      title: 'Estás seguro de que quieres continuar?',
                      text: '**Atención, no podrás deshacer los cambios!**',
                      confirmButtonColor: '#a9d86e',
                      showCancelButton: true,
                      confirmButtonText: `Continuar!`,
                    }).then((result) => {
                      if (result.isConfirmed) {
                                  $.ajax({
                                    type:'POST',
                                    dataType:'json',
                                    data:clientEditableData,
                                    url:base_url+'clientes/clientes/updateCliente/'+idCliente,
                                    success:function(response){
                                      if(response.validation){
                                        $('#modal-lg-edit').modal("hide");
                                        
                                        Swal.fire({
                                          title: 'Éxito!',
                                          text: 'Has editado correctamente la información!',
                                          icon: 'success',
                                        })

                                          setTimeout(function(){
                                            location.href=base_url+'clientes/clientes'
                                          }, 1500);
                                        }
                                      //}
                                    }
                                  }) 
                                  }
                                  }) 
                                }

  /* EDITAR CLIENTE */
  
  /* ELIMINAR CLIENTE */

  $('.deleteClienteBtn').on("click", function() {
    let infoBotonCliente = $(this).val(),
        infoCliente = infoBotonCliente.split("+"),
        nombreCliente = infoCliente[1];
    
      Swal.fire({

        title: 'Estás seguro de eliminar a '+nombreCliente+' ?',
        text: "No podrás recuperar el registro!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#a9d86e',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sí, eliminar ahora!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.value) {
            var id_cliente = infoCliente[0];
            $.ajax({
                dataType:'json',
                url:base_url+"clientes/clientes/deleteCliente/"+id_cliente,
                success:function(resp){
                  
                  if(resp.success==true){
                    Swal.fire(
                      'Éxito!',
                      `Has eliminado la información de ${nombreCliente}`,
                      'success'
                    )

                    setTimeout("location.href='<?php echo base_url() ?>clientes/clientes'", 1500);
                  }else{
                    alert("ERROR!"); // falta meterle la animación de error!!
                  }
                }

            }) // ajax
                
          }  //if promise

        }); // promise

  });

})

</script>
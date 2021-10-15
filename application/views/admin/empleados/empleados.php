<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
            <h3 style="padding: 25px 25px 25px 9px; color: #FB005F !important;">
              <i class="fa fa-angle-right" style="color: #FB005F !important;"></i> Información de Empleados
            </h3>
               <button class="pull-right btn addClienteBtn" id="addClienteBtn" style="justify-content: flex-end" style="font-size: 50px"  type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-add"><i class="fa fa-plus" style="color: green;"></i></button>
            </div>              

            <!-- PRINT CUSTOMERS -->  
            <div class="row row-cols-1 row-cols-md-3 g-1 cards-father">
              <?php foreach($empleados as $empleado): ?>
                <div class="col-md-2">
                  <div id="<?php echo $empleado->id_empleado;  ?>" class="card h-100 card-list">
                    <div class="card-body">
                      <h5 class="card-title text-center text-info">
                        <?php echo $empleado->nombre_empleado; ?>
                      </h5>
                      <p class="text-center text-info">
                        <?php echo $empleado->telefono_empleado; ?>
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
                                    value="<?php echo $empleado->id_empleado; ?>+<?php echo $empleado->nombre_empleado; ?>" 
                                    type="button">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                          <div class="col-md-3 mt-4">
                            <button class="btn btn-danger btnIcons delIcon deleteClienteBtn"
                                    value="<?php echo $empleado->id_empleado; ?>+<?php echo $empleado->nombre_empleado; ?>" 
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

            
      </section><!-- /MAIN CONTENT -->
      <div class="modal fade" id="modal-lg-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="color: green;"><i class="fas fa-user-plus"></i> Empleado</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">

                      <div class="col-md-6">
                        <i class="fas fa-user-alt" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="nombres" id="nombres" placeholder="Nombres">

                      </div>

                      <div class="col-md-6">
                        <i class="fas fa-phone" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="number" name="telefono" id="telefono" placeholder="Teléfono">
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <i class="fa fa-city" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="ciudad" id="ciudad" placeholder="Ciudad">
                      </div>

                      <div class="col-md-6">
                        <i class="fa fa-home" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="direccion" id="direccion" placeholder="Dirección">
                      </div>
                    </div>
                      
                    <div class="row">
                      <div class="col-md-6">
                        <i class="fa fa-address-card" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="number" name="cuit" id="cuit" placeholder="Cuit">
                      </div>

                      <div class="col-md-6">
                        <i class="fas fa-envelope" style="font-size: 21px; color: #fb005b;"></i>
                        <input class="inputModal" type="text" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <select id="condicion_iva" class="form-control" style="margin-top: 15px;">
                        <option selected disabled>Condición iva..</option>
                        <?php foreach($condiciones_iva as $condicion_iva): ?>
                          <option value="<?php echo $condicion_iva->id; ?>"><?php echo $condicion_iva->condicion_iva; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  
                </div>
                  
                </form>
              </div>
            <div class="modal-footer justify-content-end">
              <button type="button" id="btnRosa" class="btn btnRosa">Guardar</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!--EDIT CLIENTE-->
<script type="text/javascript">

  window.addEventListener('load', function() {

var base_url = '<?php echo base_url(); ?>';
  
  let addCustomer = document.getElementById("addClienteBtn");
  addCustomer.addEventListener('click', () => {
    $('#modal-lg-add').modal("show");
  })
  /* AÑADIR EMPLEADO */

   /* ELIMINAR CLIENTE */

  $('.deleteClienteBtn').on("click", function() {
    let infoBotonCliente = $(this).val(),
        infoEmpleado = infoBotonCliente.split("+"),
        nombreEmpleado = infoEmpleado[1];
    
      Swal.fire({

        title: 'Estás seguro de eliminar a '+nombreEmpleado+' ?',
        text: "No podrás recuperar el registro!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#a9d86e',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sí, eliminar ahora!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.value) {
            var id_empleado = infoEmpleado[0];
            $.ajax({
                dataType:'json',
                url:base_url+"empleados/empleados/deleteEmpleados/"+id_empleado,
                success:function(resp){
                  
                  if(resp.success==true){
                    $(`#${id_empleado}`).addClass('animacionD');
                    
                    setTimeout("location.href='<?php echo base_url() ?>empleados/empleados'", 1500);
                  }else{
                    alert("ERROR!"); // falta meterle la animación de error!!
                  }
                }

            }) // ajax
                
          }  //if promise

        }); // promise

  });

/* AÑADIR empleados */

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
                  url:base_url+"empleados/empleados/addCliente",
                  success:function(response){
                    if(response.success==true){
                      
                      $('#modal-lg-add').modal("hide");

                      Toast.fire({
                          icon: 'success',
                          title: 'Empleado añadido satisfactoriamente!'
                        })

                      setTimeout(function(){
                        location.href=base_url+'empleados/empleados'
                      }, 1500);



                    }else if(response.success==false){
                      alert("ERROR!");
                    }

                  } // fin SUCCESS function

                }) // fin ajax
 })                


  /* AÑADIR CLIENTE */

        




  

  })



</script>
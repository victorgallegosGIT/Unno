<!--MODAL AÑADIR CLIENTE-->
  <div class="modal fade" id="modal-lg-add">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #FB005F !important;">
              <h3 style="color: #ffffff;" class="modal-title text-center" id="exampleModalLongTitle">Cliente <i class='fa fa-plus' style='padding-right: 10px; color: #a9d86e; font-size: 19px;'></i></h3>
            </div>
            <div class="modal-body">
              
                <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
          </div>
        <form class="login100-form validate-form" method="POST">

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="nombres" placeholder="Nombre" id="nombres">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="telefono" placeholder="Teléfono" id="telefono">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="ciudad" placeholder="Ciudad" id="ciudad">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-building-o" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="direccion" placeholder="Dirección" id="direccion">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-home" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cuit" placeholder="Cuit" id="cuit">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="email" placeholder="Email" id="email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <select id="condicion_iva" class="form-control" style="margin-top: 15px;">
                        <option selected disabled>Condición iva..</option>
                        <?php foreach($condiciones_iva as $condicion_iva): ?>
                          <option value="<?php echo $condicion_iva->id; ?>"><?php echo $condicion_iva->condicion_iva; ?></option>
                        <?php endforeach; ?>
                      </select>
          </div>

          
        </form>
      </div>

        <center>
           <button type="button" class="botonGuardar" id="btnRosa">Guardar</button>
        </center>
              </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!--MODAL AÑADIR CLIENTE-->
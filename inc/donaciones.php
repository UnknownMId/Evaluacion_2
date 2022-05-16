<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="js/code.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
<div id="central-content">

<br> <br> <br> <br>
    <div class="MascotaLover">
      <h1 class="display-4">DONACIONES</h1>
      <p class="lead">Visitas, aportes, donaciones, son algunas de las actividades que realizamos.</p>
      <hr class="my-4">
    </div>

  
    

         
<!-- Gallery -->
<h1 class="text-center display-4 my-4">Galería de imágenes</h1>
<div class="container">
  <div class="card-columns">
    <div class="card">
      <a href="#" data-toggle="modal" data-targets="#exampleModal">
      <img src="img/donacion_8.jpg" alt="" class="card-img-top">
      </a>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>


<!-- Gallery -->

    


    <!--    DONACIONES    -->

           
                <div class="donaciones">
                <h1 class="titulo-donaciones">DONACIONES</h1>  
                  <div class="col-12">
                  <form class="row g-3">
                        
                        <div class="col-md-6">
                        <label for="inputnombre" class="form-label">Nombre <Span style = "color: red;"> * </span></label>
                        <input type="text" class="form-control" id="inputnombre" required minlength="3" maxlength="30" pattern="[A-Za-z]+">
                        </div>
                        <div class="col-md-6">
                        <label for="inputapellido" class="form-label">Apellido <Span style = "color: red;"> * </span></label>
                        <input type="text" class="form-control" id="inputapellido" required minlength="3" maxlength="30" pattern="[A-Za-z]+">
                        </div>
                        <div class="col-md-6">
                        <label for="inputTelefono" class="form-label">Teléfono <Span style = "color: red;"> * </span></label>
                        <input type="text" class="form-control" id="inputTelefono" placeholder="9 1234 5678" required pattern="^[9|8|7|6|5]\d{8}$">
                        </div>
                        <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email <Span style = "color: red;"> * </span></label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="tucorreo@dominio.cl" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Region o Ciudad</label>
                          <div class="form-control" id='formulario'></div>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Comuna</label>
                          <div class="form-control" id='comunas' ></div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputDonacion" class="form-label">Monto a donar</label>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">Pesos</span>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Metodo de pago</label>
                            <select id="inputState" class="form-select">
                              <option selected>Elegir...</option>
                              <option>Credito</option>
                              <option>Debito</option>
                              <option>Cuenta Corriente</option>
                              <option>Transferencia Bancaria</option>

                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputComentario" class="form-label">Comentario</label>
                            <textarea class="form-control" id="inputComentario" maxlength="140" rows="5"></textarea>
                        </div>


                        <div class="col-12">
                        <br>
                        <button type="submit" class="btn btn-primary">DONAR</button>
                        </div>
                  </form>
                  </div>
                 
            </div>
</div>
<div id="central-content">
<br><br><br><br>


<!--jquery redireccion modal de imagenes-->
<script>
  $(document).ready(function() {
    $('.div-btn-modal1').on('click', function() {
        $('.modal-footer').removeClass('active');
        $("#MascotaLover").load('inc/carrito.php');
        return false;
    });


  });
</script>

<script>
// Cuando el mouse pasa por encima de algún elemento
window.addEventListener('mouseover', function(evt) {
    // Si elemento tiene la clase `enlace`
    if (evt.target.classList.contains('enlace')) {
      evt.target.style.color = 'orange';
    }
  });



  // Cuando el mouse salga de encima de algún elemento
window.addEventListener('mouseout', function(evt) {
  // Si elemento tiene la clase `enlace`
  if (evt.target.classList.contains('enlace')) {
    evt.target.style.color = 'brown';
  }
});

</script>


    

    <div class="MascotaLover">
        <hr class="my-4">
        <h1 class="display-4" id="Producto_tienda">PRODUCTOS</h1>
        <p class="lead">Aqui podras encontrar los mejores productos para tu regalon de la casa </p>
        <p>Tenemos todo lo necesario para tu regalon de la casa</p>
        <h5><a class="div-btn-modal1" href="#" class="enlace">Ir a Carrito</a></h5>
        <hr class="my-4">
    </div>


    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
          <div class="card h-100">
            <img src="img/cama_perro_1.jpg" class="card-img-top" alt="..." width="90" height="70">
            <div class="card-body">
              <h5 class="card-title">DAILY STUFF CAMA PELUCHE</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >22.990</p>
                                  <!-- Button trigger modal 1-->
                                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_1">
                                    Detalle
                                 </button>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card h-100">
            <img src="img/juguete_gato_1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CAT LOVE RATON MECANICO AZUL</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >6.600</p>
                                                  <!-- Button trigger modal 2-->
                                                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_2">
                                                    Detalle
                                                 </button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/collar_gato_1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ZEECAT ELLA COLLAR</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >4.900</p>
                
                                                  <!-- Button trigger modal 3-->
                                                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_3">
                                                    Detalle
                                                 </button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/transportadora_1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">TRANSPORTADORA DAILY STUFF ROUTE 1</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >13.990</p> 
                                                                  <!-- Button trigger modal 4-->
                                                                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_4">
                                                                    Detalle
                                                                 </button>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="img/rascador_2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RASGUÑADOR CON TERRAZA LEOPARDO</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >13.840</p> 
                <!-- Button trigger modal 5-->
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_5">
               Detalle
               </button>
            </div>
          </div>
        </div>

          <div class="col">
            <div class="card h-100">
              <img src="img/bebedor_1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ZEECAT DUO BOWL OLIVE</h5>
                <p class="card-text">Stock: disponible</p>
                <p class="card-text"><span>$</span >12.901</p>
               <!-- Button trigger modal 6-->
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_6">
                Detalle
                </button>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <img src="img/hueso_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">PLANET DOG HUESO AZUL</h5>
                <p class="card-text">Stock: disponible</p>
                <p class="card-text"><span>$</span >9.990</p>
                <!-- Button trigger modal 7-->
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_7">
                Detalle
                </button>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card h-100">
              <img src="img/arena_gato_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ARENA TOPCAT-R 4 KGL</h5>
                <p class="card-text">Stock: disponible</p>
                <p class="card-text"><span>$</span >8.000</p>
               <!-- Button trigger modal 8-->
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_8">
                Detalle
                </button>
              </div>
            </div>
          </div>


          <div class="col">
            <div class="card h-100">
              <img src="img/remedio_gato_1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">POWER GATO DE 4-8 KG</h5>
                <p class="card-text">Stock: disponible</p>
                <p class="card-text"><span>$</span >7.990</p>
                <!-- Button trigger modal 8-->
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_9">
                Detalle
                </button>
              </div>
            </div>
          </div>

      </div>

<br>
<br>

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Atras</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Siguente</a>
          </li>
        </ul>
      </nav>



     
<!-- Modal 1 -->
<div class="modal fade" id="Modal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CAMA PELUCHE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="col">
          <div class="card h-100">
            <img src="img/cama_perro_1.jpg" class="card-img-top" alt="..." width="90" height="70">
            <div class="card-body">
              <h5 class="card-title">DAILY STUFF CAMA PELUCHE</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >22.990</p>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >Hecho de felpa larga, súper suave y súper calido. Tacto comodo, pelo de felpa de alrededor de 4 cm de largo, a las mascotas les encanta dormir en el. Facil de limpiar y lavar.</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>  
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
        
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 1 -->




<!-- Modal 2-->
<div class="modal fade" id="Modal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RATON MECANICO AZUL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="col">
          <div class="card h-100">
            <img src="img/juguete_gato_1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CAT LOVE RATON MECANICO AZUL</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >6.600</p>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >Este pequeño ratón rápido está diseñado para atraer a su gato a perseguirlo salvajemente.</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 2 -->


<!-- Modal 3-->
<div class="modal fade" id="Modal_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COLLAR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="col">
          <div class="card h-100">
            <img src="img/collar_gato_1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ZEECAT ELLA COLLAR</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >4.900</p> 
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >El collar para gatos de liberación rápida Ella está hecho de poliéster súper suave y es de talla única.</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 3 -->


<!-- Modal 4-->
<div class="modal fade" id="Modal_4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TRANSPORTADORA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="col">
          <div class="card h-100">
            <img src="img/transportadora_1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">TRANSPORTADORA DAILY STUFF ROUTE 1</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >13.990</p> 
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >Transportador de viaje de plástico para mascotas. Ideal para perros pequeños<br>Medidas: 48 X 31 X 31 cm</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 4 -->


<!-- Modal 5-->
<div class="modal fade" id="Modal_5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RASGUÑADOR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="col">
          <div class="card h-100">
            <img src="img/rascador_2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RASGUÑADOR CON TERRAZA LEOPARDO</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >13.840</p> 
            </div>
          </div>
        </div>


      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >Set Condo para gatos con estampado de leopardo, ropa de cama de felfa ideal para relajarse y dormir.<br> Medidas: 78.7x40.6x40.6</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 5 -->


<!-- Modal 6-->
<div class="modal fade" id="Modal_6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BOWL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="col">
          <div class="card h-100">
            <img src="img/bebedor_1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ZEECAT DUO BOWL OLIVE</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >12.901</p> 
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >Es un comedero para gatos diseñados para mejorar la experiencia de comida de su gato.<br> Diámetro: 17 cm x 4.3 cm</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 6 -->


<!-- Modal 7-->
<div class="modal fade" id="Modal_7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HUESO AZUL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



        <div class="col">
          <div class="card h-100">
            <img src="img/hueso_1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PLANET DOG HUESO AZUL</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >9.990</p> 
            </div>
          </div>
        </div>


      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >Hueso azul de plastico , resistente y duradero, no hace daño a la mascota.<br> Medidas: 12.7 x 2.5 x 5.1 cm</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 7 -->



<!-- Modal 8-->
<div class="modal fade" id="Modal_8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ARENA PARA GATO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="col">
          <div class="card h-100">
            <img src="img/arena_gato_1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ARENA TOPCAT-R 4 KGL</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >8.000</p> 
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >ARENA TOPCAT-R de HAPPY HOME es una arena sanitaria premium aglutinante que absorbe y neutraliza el mal olor de la orina y deposiciones de los gatos. Contiene lavanda que neutraliza los malos olores y es repelente de insectos.</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 8 -->


<!-- Modal 9-->
<div class="modal fade" id="Modal_9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PULGUICIDA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="col">
          <div class="card h-100">
            <img src="img/remedio_gato_1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">POWER GATO DE 4-8 KG</h5>
              <p class="card-text">Stock: disponible</p>
              <p class="card-text"><span>$</span >7.990</p> 
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <H3 style="color: rgb(63, 63, 80);">Descripcion</H3>
        <p >La pipeta para gatos, que brinda máxima protección contra las pulgas. Power Gatos viene en 2 presentaciones distintas correspondiente al peso de la mascota.</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        <a class="div-btn-modal1" href="#">     
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-backdrop="false">Comprar</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal 9 -->




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/code.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</div>
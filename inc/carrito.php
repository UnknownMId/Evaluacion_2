
<script src="js/carrito.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<div id="central-content">


        <br><br><br><br>
    

    <div class="MascotaLover">
        <hr class="my-4">
        <h1 class="display-4" id="Producto_tienda">CARRITO DE COMPRA</h1>
        <p class="lead">Revisa tus productos en tu carrito de compra </p>
        <p></p>
        <hr class="my-4">
    </div>
        
        <div class="row">>
            
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-8 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-4">
                <h2>Carrito</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
                <p class="text-right">Total: &dollar;<span id="total"></span>;</p>
                
                <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
                <button id="boton-comprar" type="button" class="btn btn-success">Comprar</button>
                
                
            </aside>
        </div>
    


</div>

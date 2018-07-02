
<!-- Modal -->
<div id="myModal" class="modal" style="display: none">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" style="text-align: center">Detalle de Cotización</h3>
      </div>
      <div class="modal-body">
        
		<div class="row">
	 	<h4 style="background-color: gray; text-align: center; color: white;">Detalles del Vuelo</h4>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label v-if="vuelo.origen">Origen: @{{ vuelo.origen }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Destino: @{{ vuelo.destino }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Aerolinea: @{{ vuelo.aerolinea }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Hora de Despegue: @{{ vuelo.hora_despegue }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Hora de Aterrizaje: @{{ vuelo.hora_aterrizaje }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Tiempo Total de Vuelo: @{{ vuelo.tiempo_total_vuelo }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Clase: @{{ vuelo.clase }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Numero de Escalas: @{{ vuelo.cantidad_escalas }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Costo por lugar: @{{ vuelo.costo }}</label>
	    </div>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>


	    <h4 style="background-color: gray; text-align: center;  color: white;">Detalles del Hotel</h4>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Nombre: @{{ hotel.nombre }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <label>Estrellas: @{{ hotel.estrellas }}</label>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <a v-bind:href="hotel.ubicacion" target="_blank">Ver mapa</a>
	    </div>
	    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	        <label>Direccion: @{{ hotel.direccion }}</label>
	    </div>
	</div>

	<div class="row">
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <h4>Totales</h4>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	        <p>Numero de Lugares: <strong> @{{ totales.num_lugares}} </strong></p>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: right;">
	        <p>Subtotal: <strong> @{{ totales.total }} </strong></p>
	    </div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
	    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: right;">
	        <p>Total: <strong> @{{ totales.total }} </strong></p>
	    </div>
	</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" onclick="document.getElementById('myModal').style.display='none'">Cerrar</button>
      </div>
    </div>

  </div>
</div>
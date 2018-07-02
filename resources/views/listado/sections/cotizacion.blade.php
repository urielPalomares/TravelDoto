<h3>Mi cotización</h3>

 <div class="row well">
 	<h4>Detalles del Vuelo</h4>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Origen: @{{ vuelo_selected.origen }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Destino: @{{ vuelo_selected.destino }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Aerolinea: @{{ vuelo_selected.aerolinea }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Hora de Despegue: @{{ vuelo_selected.hora_despegue }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Hora de Aterrizaje: @{{ vuelo_selected.hora_aterrizaje }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Tiempo Total de Vuelo: @{{ vuelo_selected.tiempo_total_vuelo }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Clase: @{{ vuelo_selected.clase }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Numero de Escalas: @{{ vuelo_selected.cantidad_escalas }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <label>Costo por lugar: @{{ vuelo_selected.costo }}</label>
    </div>
</div>

<div class="row well" v-if="hotel_selected != null  || hotel_selected != '' ">
 	<h4>Detalles del Hotel</h4>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    	<p>Nombre: </p>
        <label> @{{ hotel_selected.nombre }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    	<p>Estrellas: </p>
        <label>Estrellas: @{{ hotel_selected.estrellas }}</label>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <a v-bind:href="hotel_selected.ubicacion" target="_blank">Ver mapa</a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <label>Direccion: @{{ hotel_selected.direccion }}</label>
    </div>
</div>

<div class="row well">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <h4>Totales</h4>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: right;">
        <p>Subtotal: <strong> @{{ total }} </strong></p>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: right;">
        <p>Total: <strong> @{{ total }} </strong></p>
    </div>
</div>

<div class="row" align="right">
	<a class="btn btn-success" v-on:click="enviarCotizacion">Finalizar Cotización</a>
</div>
<p>Escoge un vuelo para poder realizar una cotizacion</p>
<table id="table_vuelo" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Origen</th>
            <th>Destino</th>
            <th>Hora de Despegue</th>
            <th>Hora de Aterrizaje</th>
            <th>Cantidad de Escalas</th>
            <th>Aerolinea</th>
            <th>Clase</th>
            <th>Tiempo Total de Vuelo</th>
            <th>Precio</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <tr  v-for="vuelo in vuelos">
            <td>@{{ vuelo.origen }}</td>
            <td>@{{ vuelo.destino }}</td>
            <td>@{{ vuelo.hora_despegue }}</td>
            <td>@{{ vuelo.hora_aterrizaje }}</td>
            <td>@{{ vuelo.cantidad_escalas }}</td>
            <td>@{{ vuelo.aerolinea }}</td>
            <td>@{{ vuelo.clase }}</td>
            <td>@{{ vuelo.tiempo_total_vuelo }}</td>
            <td>@{{ vuelo.costo }}</td>
            <td><a href="javascript:;" class="btn btn-warning" v-on:click="addquotingT(vuelo)">Cotizar</a></td>
        </tr>
    </tbody>
</table>
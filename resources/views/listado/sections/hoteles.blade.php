<p>Escoge un hotel para poder realizar una cotizacion</p>
<table id="table_hotel" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Estrellas</th>
            <th>Ubicacion</th>
            <th>Google Maps</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <tr  v-for="hotel in hoteles">
            <td>@{{ hotel.nombre }}</td>
            <td>@{{ hotel.estrellas }}</td>
            <td>@{{ hotel.direccion }}</td>
            <td><a v-bind:href="hotel.ubicacion" target="_blank">Ver mapa</a></td>
            <td><a class="btn btn-warning" v-on:click="addquotingH(hotel)">Cotizar</a></td>
        </tr>
    </tbody>
</table>
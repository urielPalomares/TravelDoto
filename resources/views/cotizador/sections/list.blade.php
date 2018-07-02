<p>Escoge un hotel para poder realizar una cotizacion</p>
<table id="tbl_cot" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Fecha de Cotización</th>
            <th>Lugares</th>
            <th>Total</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <tr  v-for="cotizacion in cotizaciones">
            <td>@{{ cotizacion.created_at }}</td>
            <td>@{{ cotizacion.num_lugares }}</td>
            <td>@{{ cotizacion.total }}</td>
            <td><a href="javascript:;" class="btn btn-warning" v-on:click="showDetails(cotizacion)">Ver Detalle</a></td>
        </tr>
    </tbody>
</table>
<div style="text-align: right;">
    <label v-if="config.current_page != null">Pagina: @{{ config.current_page }}</label>
    <a v-on:click="lastPage(config.current_page - 1)" v-if="config.current_page > 1">&lt;&lt; Anterior</a> |
    <a v-on:click="nextPage(config.current_page + 1)">Siguiente &gt;&gt;</a>
    <label v-for="page in pages">| @{{page}} | </label>
</div>

@include('cotizador.sections.modalDetails')
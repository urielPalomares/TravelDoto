<div class="col-md-12 well">
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Cargar Datos de Hotel(es)</h3>
    </div>

    <div id="notificacion_resul_fcdu"></div>

    <form  id="cargar_datos_hotel" name="cargar_datos_hotel" method="post"  action="cargar_datos_hotel" class="formarchivo" enctype="multipart/form-data" >

      <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>">

      <div class="box-body">
        <div class="form-group col-xs-12"  >
          <label>Agregar Archivo de Excel </label>
          <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />
        </div>
        <div class="box-footer" style="text-align: center;">
          <button type="submit" class="btn btn-primary">Cargar Datos</button>
        </div>
      </div>
    </form>
  </div>
</div>
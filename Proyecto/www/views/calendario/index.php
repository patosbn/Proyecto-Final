<link rel="stylesheet" href="<?php echo URL; ?>views/recursos/jquery.timepicker.css">
<div class="modal fade" tabindex="-1" role="dialog" id="ModalPropiedades">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Evento</h4>
        <div class="modal-body">
          <div class="panel panel-default" id="Formu" style="height: 50vh; overflow-y: scroll;">
          </div>
          <button type="button" id="BtnModificar" class="btn btn-primary">Modificar</button>
          <button type="button" id="BtnAceptar" class="btn btn-success hidden">Aceptar</button>
        </div>
      </div>
    </div><!-- /.modal-content-->
  </div> <!--/.modal-dialog -->
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="RepEdit">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Repetición</h4>
      </div>
      <div class="modal-body" id="Selec">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">Se repite:</label>
            <div class="col-sm-4">
              <select id="RepSelect" class="form-control">
                <option  value="0" title="Todos los días">Todos los días</option>
                <option value="1" title="Todos los días hábiles (de lunes a viernes)">Todos los días hábiles (de lunes a viernes)</option>
                <option value="2" title="Todos los lunes, miércoles y viernes">Todos los lunes, miércoles y viernes</option>
                <option value="3" title="Todos los martes y jueves">Todos los martes y jueves</option>
                <option value="4" title="Todas las semanas">Todas las semanas</option>
                <option value="5" title="Todos los meses">Todos los meses</option>
                <option value="6" title="Todos los años">Todos los años</option>
              </select>
            </div>
          </div>
          <div class="form-group hidden" id="intervalo">
            <label class="col-sm-2 control-label">Repetir cada:</label>
            <div class="col-sm-4">
              <span>
                <select  class="form-control" id="RepCada">
                  <option value="1" selected="selected">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                </select>
                <p id="unidad"> días</p>
              </span>
            </div>
          </div>
          <div class="form-group hidden" id="diasmes">
            <label class="col-sm-2 control-label">Repetir el:</label>
            <label class="radio-inline">
              <input type="radio" name="Rep" id="diadelmes" value="diames"> día del mes (Ej.: "el 28 de cada mes")
            </label>
            <label class="radio-inline">
              <input type="radio" name="Rep" id="diadelasemana" value="diasemana" checked> día de la semana (Ej.: "el cuarto miércoles del mes")
            </label>
          </div>
          <div class="form-group hidden" id="cosaloca">
            <label class="col-sm-2 control-label">Repetir el:</label>
            <div class="col-sm-4">
              <select id="OrdinalSelect" class="form-control">
                <option  value="1">Primer</option>
                <option value="2">Segundo</option>
                <option value="3">Tercer</option>
                <option value="4">Cuarto</option>
                <option value="-1">Último</option>
              </select>
            </div>
            <div class="col-sm-4">
              <select id="SemSelect" class="form-control">
                <option  value="0">Lunes</option>
                <option value="1">Martes</option>
                <option value="2">Miércoles</option>
                <option value="3">Jueves</option>
                <option value="4">Viernes</option>
                <option value="5">Sábado</option>
                <option value="6">Domingo</option>
              </select>
            </div>
          </div>
          <div class="form-group hidden" id="diassemana">
            <label class="col-sm-2 control-label">Repetir el:</label>
            <label class="checkbox-inline">
              <input type="checkbox" value="0"> L
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="1"> M
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="2"> X
            </label>
            <label class="checkbox-inline">
              <input type="checkbox"  value="3"> J
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="4"> V
            </label>
            <label class="checkbox-inline">
              <input type="checkbox"  value="5"> S
            </label>
            <label class="checkbox-inline">
              <input type="checkbox"  value="6"> D
            </label>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Termina:</label>
            <div class="col-sm-10" id="radiostermina">
              <div class="radio">
                <label>
                  <input type="radio" name="Fin" class="radiomitre" id="optionsRadios1" checked value="option1">
                  Nunca
                </label>
              </div>
            </br>
            <div class="radio form-inline">
              <label>
                <input type="radio" name="Fin" class="radiomitre" id="optionsRadios2" value="option2">
                Después de
                <input type="number" id="NumVeces" class="form-control" disabled>
                veces
              </label>
            </div>
          </br>
          <div class="radio form-inline">
            <label>
              <input type="radio" name="Fin" class="radiomitre" id="optionsRadios3" value="option3">
              El
              <input type="text" id="DiaFin" class="form-control" disabled>
            </label>
          </div>
        </div>
      </div>
    </form>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary" id="AceptarModal"> Aceptar</button>
    <button type="button" class="btn btn-default" id="CancelarModal" data-dismiss="modal">Cancelar</button>
  </div>
</div>
</div><!-- /.modal-content-->
</div> <!--/.modal-dialog -->
</div> <!--/.modal -->
<script src="<?php echo URL; ?>views/recursos/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo URL; ?>views/recursos/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js" charset="UTF-8"></script>
<script src="<?php echo URL; ?>views/recursos/jquery.timepicker.min.js"></script>
<script src="<?php echo URL; ?>views/recursos/rrule/rrule.js"></script>
<script src="<?php echo URL; ?>views/recursos/rrule/nlp.js"></script>

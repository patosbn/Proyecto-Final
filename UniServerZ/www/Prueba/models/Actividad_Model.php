<?php
class actividad_Model extends Model {

  public function __construct() {
    parent::__construct();
  }
  public $calendar;
  public function setServicio($servicio)
  {
    $this->calendar = $servicio;
  }
  public function mostrar($idActividades)
  {
    $event = $servicio->events->get('primary', $idActividades);
    return $event->getSummary();
  }
  public function format($data)
  {
    # code...
  }
  public function editarEvento($data)
  {
    $event = new Google_Service_Calendar_Event(array(
      'summary' => $data["titulo"],
      'start' => array(
        'dateTime' => $data["inicio"], //'2015-05-28T09:00:00-07:00'
        'timeZone' => 'America/Buenos_Aires',
      ),
      'end' => array(
        'dateTime' => $data["fin"], //'2015-05-28T09:00:00-07:00'
        'timeZone' => 'America/Buenos_Aires',
      )
    ));
    if (count($data["recurrencia"])!=0) {
      $event['recurrence'] = $data["recurrencia"];
    }
    $updatedEvent = $service->events->update('primary', $data["id"], $event);
  }
  public function traerActividades() {
    $sql = "SELECT actividades.Nombre as actNombre, niveles.Nombre as nivNombre FROM actividadesmodalidadesniveles LEFT JOIN actividades ON actividadesmodalidadesniveles.idActividades = actividades.idActividades LEFT JOIN niveles ON actividadesmodalidadesniveles.idNiveles = niveles.idNiveles WHERE actividades.idActividades != 3 GROUP BY `nivNombre` ";
    $outp = $this->db->getAll($sql);
    echo json_encode($outp);
  }

}

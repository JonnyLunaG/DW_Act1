<?php
require_once $_SERVER['DOCUMENT_ROOT'].'dw_act1/lib/activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory('../dw_act1/7502110014_Jonny_Luna_Actividad1/modelo/entidades');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:@localhost/todoVehiculos',
       'test' => 'mysql://root:@localhost/todoVehiculos',
       'production' => 'mysql://root:@localhost/todoVehiculos'
     )
   );
});

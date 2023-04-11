<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaGuerrero/lib/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory('../modelo/entidades');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:@localhost/todoVehiculos',
       'test' => 'mysql://root:@localhost/todoVehiculos',
       'production' => 'mysql://root:@localhost/todoVehiculos'
     )
   );
});

<?php
require_once 'php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory('../model');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:@localhost/todovehiculos'       
     )
   );
});

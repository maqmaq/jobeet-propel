<?php
// auto-generated by sfRoutingConfigHandler
// date: 2011/07/25 13:55:02
return array(
'job' => new sfPropelRouteCollection(array (
  'model' => 'JobeetJob',
  'name' => 'job',
  'requirements' => 
  array (
  ),
)),
'job_show_user' => new sfPropelRoute('/job/:company_slug/:location_slug/:id/:position_slug', array (
  'module' => 'job',
  'action' => 'show',
), array (
  'id' => '\\d+',
  'sf_method' => 
  array (
    0 => 'get',
  ),
), array (
  'model' => 'JobeetJob',
  'type' => 'object',
)),
'homepage' => new sfRoute('/', array (
  'module' => 'job',
  'action' => 'index',
), array (
), array (
)),
);

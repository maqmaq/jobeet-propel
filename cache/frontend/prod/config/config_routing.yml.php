<?php
// auto-generated by sfRoutingConfigHandler
// date: 2011/07/25 00:04:17
return array(
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
'default_index' => new sfRoute('/:module', array (
  'action' => 'index',
), array (
), array (
)),
'default' => new sfRoute('/:module/:action/*', array (
), array (
), array (
)),
);

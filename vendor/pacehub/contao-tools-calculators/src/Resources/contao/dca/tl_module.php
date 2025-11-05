<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['calc_tools']
  = '{title_legend},name,headline,type;'
  . '{config_legend},calc_tools_type,calc_default_distance,calc_unit,calc_show_speed,'
  . 'calc_distance_min,calc_distance_max,calc_distance_step,calc_speed_min,calc_speed_max,calc_speed_step;'
  . '{template_legend:hide},customTpl;'
  . '{protected_legend:hide},protected;'
  . '{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['calc_tools_type'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_tools_type'],
  'exclude'   => true,
  'inputType' => 'select',
  'options'   => ['pace','swim_pace','vo2max','vdot','bike_watt','ergometer','ftp','bmi','bodyfat'],
  'reference' => &$GLOBALS['TL_LANG']['tl_module']['calc_tools_type_ref'],
  'eval'      => ['mandatory'=>true, 'tl_class'=>'w50 clr'],
  'sql'       => "varchar(16) NOT NULL default 'pace'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['calc_default_distance'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_default_distance'],
  'exclude'   => true,
  'inputType' => 'text',
  'eval'      => ['rgxp'=>'digit','tl_class'=>'w50'],
  'sql'       => "varchar(16) NOT NULL default '10'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['calc_unit'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_unit'],
  'exclude'   => true,
  'inputType' => 'select',
  'options'   => ['km','mi'],
  'reference' => &$GLOBALS['TL_LANG']['tl_module']['calc_tools_type_ref'],
  'eval'      => ['tl_class'=>'w50'],
  'sql'       => "varchar(2) NOT NULL default 'km'",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['calc_show_speed'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_show_speed'],
  'exclude'   => true,
  'inputType' => 'checkbox',
  'eval'      => ['tl_class'=>'w50 m12'],
  'sql'       => "char(1) NOT NULL default ''",
];

// Distance slider config
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_distance_min'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_distance_min'],
  'exclude'   => true,
  'inputType' => 'text',
  'eval'      => ['rgxp'=>'prcnt', 'tl_class'=>'w33 clr'],
  'sql'       => "varchar(16) NOT NULL default '0'",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_distance_max'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_distance_max'],
  'exclude'   => true,
  'inputType' => 'text',
  'eval'      => ['rgxp'=>'prcnt', 'tl_class'=>'w33'],
  'sql'       => "varchar(16) NOT NULL default '100'",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_distance_step'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_distance_step'],
  'exclude'   => true,
  'inputType' => 'text',
  'eval'      => ['rgxp'=>'prcnt', 'tl_class'=>'w33'],
  'sql'       => "varchar(16) NOT NULL default '0.1'",
];

// Speed slider config
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_speed_min'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_speed_min'],
  'exclude'   => true,
  'inputType' => 'text',
  'eval'      => ['rgxp'=>'prcnt', 'tl_class'=>'w33 clr'],
  'sql'       => "varchar(16) NOT NULL default '0'",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_speed_max'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_speed_max'],
  'exclude'   => true,
  'inputType' => 'text',
  'eval'      => ['rgxp'=>'prcnt', 'tl_class'=>'w33'],
  'sql'       => "varchar(16) NOT NULL default '30'",
];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_speed_step'] = [
  'label'     => &$GLOBALS['TL_LANG']['tl_module']['calc_speed_step'],
  'exclude'   => true,
  'inputType' => 'text',
  'eval'      => ['rgxp'=>'prcnt', 'tl_class'=>'w33'],
  'sql'       => "varchar(16) NOT NULL default '0.1'",
];

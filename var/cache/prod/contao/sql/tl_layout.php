<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'name' => 'varchar(255) NOT NULL default \'\'',
  'rows' => 'varchar(8) NOT NULL default \'2rwh\'',
  'headerHeight' => 'varchar(255) NOT NULL default \'\'',
  'footerHeight' => 'varchar(255) NOT NULL default \'\'',
  'cols' => 'varchar(8) NOT NULL default \'2cll\'',
  'widthLeft' => 'varchar(255) NOT NULL default \'\'',
  'widthRight' => 'varchar(255) NOT NULL default \'\'',
  'sections' => 'blob NULL',
  'framework' => 'varchar(255) NOT NULL default \'a:2:{i:0;s:10:"layout.css";i:1;s:14:"responsive.css";}\'',
  'stylesheet' => 'blob NULL',
  'external' => 'blob NULL',
  'loadingOrder' => 'varchar(16) NOT NULL default \'external_first\'',
  'combineScripts' => 'char(1) NOT NULL default \'1\'',
  'modules' => 'blob NULL',
  'template' => 'varchar(64) NOT NULL default \'\'',
  'minifyMarkup' => 'char(1) NOT NULL default \'1\'',
  'lightboxSize' => 'varchar(255) NOT NULL default \'\'',
  'defaultImageDensities' => 'varchar(255) NOT NULL default \'\'',
  'viewport' => 'varchar(255) NOT NULL default \'\'',
  'titleTag' => 'varchar(255) NOT NULL default \'\'',
  'cssClass' => 'varchar(255) NOT NULL default \'\'',
  'onload' => 'varchar(255) NOT NULL default \'\'',
  'head' => 'text NULL',
  'addJQuery' => 'char(1) NOT NULL default \'\'',
  'jquery' => 'text NULL',
  'addMooTools' => 'char(1) NOT NULL default \'\'',
  'mootools' => 'text NULL',
  'analytics' => 'text NULL',
  'externalJs' => 'blob NULL',
  'scripts' => 'text NULL',
  'script' => 'text NULL',
  'static' => 'char(1) NOT NULL default \'\'',
  'width' => 'varchar(255) NOT NULL default \'\'',
  'align' => 'varchar(32) NOT NULL default \'center\'',
  'newsfeeds' => 'blob NULL',
  'calendarfeeds' => 'blob NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_theme',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'stylesheet' => 
  array (
    'table' => 'tl_style_sheet',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'newsfeeds' => 
  array (
    'table' => 'tl_news_feed',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'calendarfeeds' => 
  array (
    'table' => 'tl_calendar_feed',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'alias' => 'varchar(255) BINARY NOT NULL default \'\'',
  'jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'sendViaEmail' => 'char(1) NOT NULL default \'\'',
  'mailerTransport' => 'varchar(255) NOT NULL default \'\'',
  'recipient' => 'varchar(1022) NOT NULL default \'\'',
  'subject' => 'varchar(255) NOT NULL default \'\'',
  'format' => 'varchar(12) NOT NULL default \'raw\'',
  'skipEmpty' => 'char(1) NOT NULL default \'\'',
  'storeValues' => 'char(1) NOT NULL default \'\'',
  'targetTable' => 'varchar(64) NOT NULL default \'\'',
  'customTpl' => 'varchar(64) NOT NULL default \'\'',
  'method' => 'varchar(12) NOT NULL default \'POST\'',
  'novalidate' => 'char(1) NOT NULL default \'\'',
  'attributes' => 'varchar(255) NOT NULL default \'\'',
  'formID' => 'varchar(64) NOT NULL default \'\'',
  'allowTags' => 'char(1) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'alias' => 'index',
);

$this->arrRelations = array (
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

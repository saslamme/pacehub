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
  'email' => 'varchar(255) NOT NULL default \'\'',
  'active' => 'char(1) NOT NULL default \'\'',
  'addedOn' => 'varchar(10) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'pid,email',
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid,email' => 'unique',
  'email' => 'index',
  'active' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_newsletter_channel',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

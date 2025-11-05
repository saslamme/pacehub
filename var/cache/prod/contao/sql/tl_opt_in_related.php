<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'relTable' => 'varchar(64) NULL',
  'relId' => 'int(10) unsigned NOT NULL default 0',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'relTable,relId' => 'index',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

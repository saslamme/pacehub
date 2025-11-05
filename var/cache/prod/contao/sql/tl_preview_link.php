<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'url' => 'varchar(2048) NOT NULL default \'\'',
  'showUnpublished' => 'char(1) NOT NULL default \'\'',
  'restrictToUrl' => 'char(1) NOT NULL default \'1\'',
  'createdAt' => 'int(10) unsigned NOT NULL default 0',
  'expiresAt' => 'int(10) unsigned NOT NULL default 0',
  'published' => 'char(1) NOT NULL default \'\'',
  'createdBy' => 'int(10) unsigned NOT NULL default 0',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'id,published,expiresAt' => 'index',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

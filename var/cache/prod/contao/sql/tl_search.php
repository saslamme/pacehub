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
  'title' => 'text NULL',
  'url' => 'varchar(2048) COLLATE ascii_bin NOT NULL default \'\'',
  'text' => 'mediumtext NULL',
  'filesize' => 'double NOT NULL default 0',
  'checksum' => 'varchar(32) NOT NULL default \'\'',
  'protected' => 'char(1) NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'language' => 'varchar(5) NOT NULL default \'\'',
  'vectorLength' => 'double NOT NULL default 0',
  'meta' => 'mediumtext NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'url',
  1 => 'checksum,pid',
);

$this->arrKeys = array (
  'id' => 'primary',
  'url' => 'unique',
  'checksum,pid' => 'unique',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

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
  'language' => 'varchar(32) NOT NULL default \'\'',
  'archives' => 'blob NULL',
  'format' => 'varchar(32) NOT NULL default \'rss\'',
  'source' => 'varchar(32) NOT NULL default \'source_teaser\'',
  'maxItems' => 'smallint(5) unsigned NOT NULL default 25',
  'feedBase' => 'varchar(255) NOT NULL default \'\'',
  'description' => 'text NULL',
  'imgSize' => 'varchar(255) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'alias',
);

$this->arrKeys = array (
  'id' => 'primary',
  'alias' => 'index',
);

$this->arrRelations = array (
  'archives' => 
  array (
    'table' => 'tl_news_archive',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

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
  'subject' => 'varchar(255) NOT NULL default \'\'',
  'alias' => 'varchar(255) BINARY NOT NULL default \'\'',
  'content' => 'mediumtext NULL',
  'text' => 'mediumtext NULL',
  'addFile' => 'char(1) NOT NULL default \'\'',
  'files' => 'blob NULL',
  'template' => 'varchar(64) NOT NULL default \'\'',
  'sendText' => 'char(1) NOT NULL default \'\'',
  'externalImages' => 'char(1) NOT NULL default \'\'',
  'mailerTransport' => 'varchar(255) NOT NULL default \'\'',
  'sender' => 'varchar(255) NOT NULL default \'\'',
  'senderName' => 'varchar(128) NOT NULL default \'\'',
  'sent' => 'char(1) NOT NULL default \'\'',
  'date' => 'varchar(10) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'alias',
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
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

<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'sorting' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'type' => 
  array (
    'name' => 'type',
    'type' => 'string',
    'length' => 64,
    'default' => 'text',
  ),
  'label' => 'varchar(255) NOT NULL default \'\'',
  'name' => 'varchar(64) NOT NULL default \'\'',
  'text' => 'text NULL',
  'html' => 'text NULL',
  'options' => 'blob NULL',
  'mandatory' => 'char(1) NOT NULL default \'\'',
  'rgxp' => 'varchar(32) NOT NULL default \'\'',
  'placeholder' => 'varchar(255) NOT NULL default \'\'',
  'customRgxp' => 'varchar(255) NOT NULL default \'\'',
  'errorMsg' => 'varchar(255) NOT NULL default \'\'',
  'minlength' => 'int(10) unsigned NOT NULL default 0',
  'maxlength' => 'int(10) unsigned NOT NULL default 0',
  'maxImageWidth' => 'int(10) unsigned NOT NULL default 0',
  'maxImageHeight' => 'int(10) unsigned NOT NULL default 0',
  'minval' => 'varchar(10) NOT NULL default \'\'',
  'maxval' => 'varchar(10) NOT NULL default \'\'',
  'step' => 'varchar(10) NOT NULL default \'\'',
  'size' => 'varchar(255) NOT NULL default \'a:2:{i:0;i:4;i:1;i:40;}\'',
  'multiple' => 'char(1) NOT NULL default \'\'',
  'mSize' => 'smallint(5) unsigned NOT NULL default 0',
  'extensions' => 'varchar(255) NOT NULL default \'jpg,jpeg,gif,png,pdf,doc,docx,xls,xlsx,ppt,pptx\'',
  'storeFile' => 'char(1) NOT NULL default \'\'',
  'uploadFolder' => 'binary(16) NULL',
  'useHomeDir' => 'char(1) NOT NULL default \'\'',
  'doNotOverwrite' => 'char(1) NOT NULL default \'\'',
  'class' => 'varchar(255) NOT NULL default \'\'',
  'value' => 'varchar(255) NOT NULL default \'\'',
  'accesskey' => 'char(1) NOT NULL default \'\'',
  'tabindex' => 'smallint(5) unsigned NOT NULL default 0',
  'fSize' => 'smallint(5) unsigned NOT NULL default 0',
  'customTpl' => 'varchar(64) NOT NULL default \'\'',
  'slabel' => 'varchar(255) NOT NULL default \'\'',
  'imageSubmit' => 'char(1) NOT NULL default \'\'',
  'singleSRC' => 'binary(16) NULL',
  'invisible' => 'char(1) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid,invisible' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

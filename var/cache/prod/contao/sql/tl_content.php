<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default 0',
  'ptable' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'sorting' => 'int(10) unsigned NOT NULL default 0',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'type' => 
  array (
    'name' => 'type',
    'type' => 'string',
    'length' => 64,
    'default' => 'text',
    'customSchemaOptions' => 
    array (
      'collation' => 'ascii_bin',
    ),
  ),
  'headline' => 'varchar(255) NOT NULL default \'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h2";}\'',
  'text' => 'mediumtext NULL',
  'addImage' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'showPreview' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'inline' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'overwriteMeta' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'singleSRC' => 'binary(16) NULL',
  'alt' => 'varchar(255) NOT NULL default \'\'',
  'imageTitle' => 'varchar(255) NOT NULL default \'\'',
  'size' => 'varchar(128) COLLATE ascii_bin NOT NULL default \'\'',
  'imagemargin' => 'varchar(128) COLLATE ascii_bin NOT NULL default \'\'',
  'imageUrl' => 'text NULL',
  'fullsize' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'caption' => 'varchar(255) NOT NULL default \'\'',
  'floating' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'above\'',
  'html' => 'mediumtext NULL',
  'listtype' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'\'',
  'listitems' => 'blob NULL',
  'tableitems' => 'mediumblob NULL',
  'summary' => 'varchar(255) NOT NULL default \'\'',
  'thead' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'tfoot' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'tleft' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'sortable' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'sortIndex' => 'smallint(5) unsigned NOT NULL default 0',
  'sortOrder' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'ascending\'',
  'mooHeadline' => 'varchar(255) NOT NULL default \'\'',
  'mooStyle' => 'varchar(255) NOT NULL default \'\'',
  'mooClasses' => 'varchar(255) NOT NULL default \'\'',
  'highlight' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'\'',
  'markdownSource' => 'varchar(12) COLLATE ascii_bin NOT NULL default \'sourceText\'',
  'code' => 'text NULL',
  'url' => 'text NULL',
  'target' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'overwriteLink' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'titleText' => 'varchar(255) NOT NULL default \'\'',
  'linkTitle' => 'varchar(255) NOT NULL default \'\'',
  'embed' => 'varchar(255) NOT NULL default \'\'',
  'rel' => 'varchar(64) NOT NULL default \'\'',
  'useImage' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'multiSRC' => 'blob NULL',
  'orderSRC' => 'blob NULL',
  'useHomeDir' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'perRow' => 'smallint(5) unsigned NOT NULL default 4',
  'perPage' => 'smallint(5) unsigned NOT NULL default 0',
  'numberOfItems' => 'smallint(5) unsigned NOT NULL default 0',
  'sortBy' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'\'',
  'metaIgnore' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'galleryTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'customTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'playerSRC' => 'blob NULL',
  'youtube' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'\'',
  'vimeo' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'posterSRC' => 'binary(16) NULL',
  'playerSize' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'playerOptions' => 'text NULL',
  'playerStart' => 'int(10) unsigned NOT NULL default 0',
  'playerStop' => 'int(10) unsigned NOT NULL default 0',
  'playerCaption' => 'varchar(255) NOT NULL default \'\'',
  'playerAspect' => 'varchar(8) COLLATE ascii_bin NOT NULL default \'\'',
  'splashImage' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'playerPreload' => 'varchar(8) COLLATE ascii_bin NOT NULL default \'\'',
  'playerColor' => 'varchar(6) COLLATE ascii_bin NOT NULL default \'\'',
  'youtubeOptions' => 'text NULL',
  'vimeoOptions' => 'text NULL',
  'sliderDelay' => 'int(10) unsigned NOT NULL default 0',
  'sliderSpeed' => 'int(10) unsigned NOT NULL default 300',
  'sliderStartSlide' => 'smallint(5) unsigned NOT NULL default 0',
  'sliderContinuous' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'data' => 'text NULL',
  'cteAlias' => 'int(10) unsigned NOT NULL default 0',
  'articleAlias' => 'int(10) unsigned NOT NULL default 0',
  'article' => 'int(10) unsigned NOT NULL default 0',
  'form' => 'int(10) unsigned NOT NULL default 0',
  'module' => 'int(10) unsigned NOT NULL default 0',
  'protected' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'guests' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'cssID' => 'varchar(255) NOT NULL default \'\'',
  'invisible' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'start' => 'varchar(10) COLLATE ascii_bin NOT NULL default \'\'',
  'stop' => 'varchar(10) COLLATE ascii_bin NOT NULL default \'\'',
  'com_order' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'ascending\'',
  'com_perPage' => 'smallint(5) unsigned NOT NULL default 0',
  'com_moderate' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'com_bbcode' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'com_disableCaptcha' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'com_requireLogin' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'com_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
);

$this->arrOrderFields = array (
  0 => 'orderSRC',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid,ptable,invisible,start,stop' => 'index',
  'type' => 'index',
);

$this->arrRelations = array (
  'cteAlias' => 
  array (
    'table' => 'tl_content',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'articleAlias' => 
  array (
    'table' => 'tl_article',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'article' => 
  array (
    'table' => 'tl_article',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'form' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'module' => 
  array (
    'table' => 'tl_module',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

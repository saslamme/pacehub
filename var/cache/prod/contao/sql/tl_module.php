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
  'headline' => 'varchar(255) NOT NULL default \'a:2:{s:5:"value";s:0:"";s:4:"unit";s:2:"h2";}\'',
  'type' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'navigation\'',
  'levelOffset' => 'smallint(5) unsigned NOT NULL default 0',
  'showLevel' => 'smallint(5) unsigned NOT NULL default 0',
  'hardLimit' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'showProtected' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'defineRoot' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'rootPage' => 'int(10) unsigned NOT NULL default 0',
  'navigationTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'customTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'pages' => 'blob NULL',
  'showHidden' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'customLabel' => 'varchar(64) NOT NULL default \'\'',
  'autologin' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'overviewPage' => 'int(10) unsigned NOT NULL default 0',
  'redirectBack' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'editable' => 'blob NULL',
  'memberTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'form' => 'int(10) unsigned NOT NULL default 0',
  'queryType' => 'varchar(8) COLLATE ascii_bin NOT NULL default \'and\'',
  'fuzzy' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'contextLength' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'minKeywordLength' => 'smallint(5) unsigned NOT NULL default 4',
  'perPage' => 'smallint(5) unsigned NOT NULL default 0',
  'searchType' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'simple\'',
  'searchTpl' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'inColumn' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'main\'',
  'skipFirst' => 'smallint(5) unsigned NOT NULL default 0',
  'loadFirst' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'singleSRC' => 'binary(16) NULL',
  'url' => 'text NULL',
  'imgSize' => 'varchar(128) COLLATE ascii_bin NOT NULL default \'\'',
  'useCaption' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'fullsize' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'multiSRC' => 'blob NULL',
  'orderSRC' => 'blob NULL',
  'html' => 'text NULL',
  'rss_cache' => 'int(10) unsigned NOT NULL default 3600',
  'rss_feed' => 'text NULL',
  'rss_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'numberOfItems' => 'smallint(5) unsigned NOT NULL default 3',
  'disableCaptcha' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'reg_groups' => 'blob NULL',
  'reg_allowLogin' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'reg_skipName' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'reg_close' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'\'',
  'reg_deleteDir' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'reg_assignDir' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'reg_homeDir' => 'binary(16) NULL',
  'reg_activate' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'reg_jumpTo' => 'int(10) unsigned NOT NULL default 0',
  'reg_text' => 'text NULL',
  'reg_password' => 'text NULL',
  'data' => 'text NULL',
  'protected' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'guests' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'cssID' => 'varchar(255) NOT NULL default \'\'',
  'rootPageDependentModules' => 'blob NULL',
  'faq_categories' => 'blob NULL',
  'faq_readerModule' => 'int(10) unsigned NOT NULL default 0',
  'com_order' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'ascending\'',
  'com_moderate' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'com_bbcode' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'com_requireLogin' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'com_disableCaptcha' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'com_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'calc_tools_type' => 'varchar(16) NOT NULL default \'pace\'',
  'calc_default_distance' => 'varchar(16) NOT NULL default \'10\'',
  'calc_unit' => 'varchar(2) NOT NULL default \'km\'',
  'calc_show_speed' => 'char(1) NOT NULL default \'\'',
  'calc_distance_min' => 'varchar(16) NOT NULL default \'0\'',
  'calc_distance_max' => 'varchar(16) NOT NULL default \'100\'',
  'calc_distance_step' => 'varchar(16) NOT NULL default \'0.1\'',
  'calc_speed_min' => 'varchar(16) NOT NULL default \'0\'',
  'calc_speed_max' => 'varchar(16) NOT NULL default \'30\'',
  'calc_speed_step' => 'varchar(16) NOT NULL default \'0.1\'',
  'news_archives' => 'blob NULL',
  'news_featured' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'all_items\'',
  'news_jumpToCurrent' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'\'',
  'news_readerModule' => 'int(10) unsigned NOT NULL default 0',
  'news_metaFields' => 'varchar(255) COLLATE ascii_bin NOT NULL default \'a:2:{i:0;s:4:"date";i:1;s:6:"author";}\'',
  'news_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'news_format' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'news_month\'',
  'news_startDay' => 'smallint(5) unsigned NOT NULL default 0',
  'news_order' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'order_date_desc\'',
  'news_showQuantity' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'list_table' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'list_fields' => 'tinytext NULL',
  'list_where' => 'tinytext NULL',
  'list_search' => 'tinytext NULL',
  'list_sort' => 'tinytext NULL',
  'list_info' => 'tinytext NULL',
  'list_info_where' => 'tinytext NULL',
  'list_layout' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'list_info_layout' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_calendar' => 'blob NULL',
  'cal_noSpan' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_hideRunning' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_startDay' => 'smallint(5) unsigned NOT NULL default 1',
  'cal_format' => 'varchar(32) COLLATE ascii_bin NOT NULL default \'cal_month\'',
  'cal_ignoreDynamic' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_order' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'ascending\'',
  'cal_readerModule' => 'int(10) unsigned NOT NULL default 0',
  'cal_limit' => 'smallint(5) unsigned NOT NULL default 0',
  'cal_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_ctemplate' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_showQuantity' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'cal_featured' => 'varchar(16) COLLATE ascii_bin NOT NULL default \'all_items\'',
  'newsletters' => 'blob NULL',
  'nl_channels' => 'blob NULL',
  'nl_text' => 'text NULL',
  'nl_hideChannels' => 'char(1) COLLATE ascii_bin NOT NULL default \'\'',
  'nl_subscribe' => 'text NULL',
  'nl_unsubscribe' => 'text NULL',
  'nl_template' => 'varchar(64) COLLATE ascii_bin NOT NULL default \'\'',
);

$this->arrOrderFields = array (
  0 => 'orderSRC',
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
  'rootPage' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'pages' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'overviewPage' => 
  array (
    'table' => 'tl_page',
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
  'reg_groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'reg_jumpTo' => 
  array (
    'table' => 'tl_page',
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
  'faq_categories' => 
  array (
    'table' => 'tl_faq_category',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'faq_readerModule' => 
  array (
    'table' => 'tl_module',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'news_archives' => 
  array (
    'table' => 'tl_news_archive',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'cal_calendar' => 
  array (
    'table' => 'tl_calendar',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'cal_readerModule' => 
  array (
    'table' => 'tl_module',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'newsletters' => 
  array (
    'table' => 'tl_newsletter_channel',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'nl_channels' => 
  array (
    'table' => 'tl_newsletter_channel',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

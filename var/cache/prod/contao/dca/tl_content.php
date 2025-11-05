<?php

namespace {
$GLOBALS['TL_DCA']['tl_content'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'enableVersioning' => \true, 'dynamicPtable' => \true, 'markAsCopy' => 'headline', 'onload_callback' => array(array('tl_content', 'adjustDcaByType'), array('tl_content', 'showJsLibraryHint'), array('tl_content', 'filterContentElements')), 'sql' => array('keys' => array('id' => 'primary', 'pid,ptable,invisible,start,stop' => 'index', 'type' => 'index'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_PARENT, 'fields' => array('sorting'), 'panelLayout' => 'filter;search,limit', 'headerFields' => array('title', 'headline', 'author', 'tstamp', 'start', 'stop'), 'child_record_callback' => array('tl_content', 'addCteType')), 'global_operations' => array('all' => array('href' => 'act=select', 'class' => 'header_edit_all', 'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"')), 'operations' => array('edit' => array('href' => 'act=edit', 'icon' => 'edit.svg', 'button_callback' => array('tl_content', 'disableButton')), 'copy' => array('href' => 'act=paste&amp;mode=copy', 'icon' => 'copy.svg', 'attributes' => 'onclick="Backend.getScrollOffset()"', 'button_callback' => array('tl_content', 'disableButton')), 'cut' => array('href' => 'act=paste&amp;mode=cut', 'icon' => 'cut.svg', 'attributes' => 'onclick="Backend.getScrollOffset()"'), 'delete' => array('href' => 'act=delete', 'icon' => 'delete.svg', 'attributes' => 'onclick="if(!confirm(\'' . ($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? \null) . '\'))return false;Backend.getScrollOffset()"'), 'toggle' => array('href' => 'act=toggle&amp;field=invisible', 'icon' => 'visible.svg', 'button_callback' => array('tl_content', 'toggleIcon')), 'show' => array('href' => 'act=show', 'icon' => 'show.svg'))),
    // Palettes
    'palettes' => array('__selector__' => array('type', 'addImage', 'sortable', 'useImage', 'overwriteMeta', 'overwriteLink', 'protected', 'splashImage', 'markdownSource', 'showPreview'), 'default' => '{type_legend},type', 'headline' => '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'text' => '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'html' => '{type_legend},type;{text_legend},html;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop', 'list' => '{type_legend},type,headline;{list_legend},listtype,listitems;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'table' => '{type_legend},type,headline;{table_legend},tableitems;{tconfig_legend},summary,thead,tfoot,tleft;{sortable_legend:hide},sortable;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'accordionStart' => '{type_legend},type;{moo_legend},mooHeadline,mooStyle,mooClasses;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'accordionStop' => '{type_legend},type;{moo_legend},mooClasses;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop', 'accordionSingle' => '{type_legend},type;{moo_legend},mooHeadline,mooStyle,mooClasses;{text_legend},text;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'sliderStart' => '{type_legend},type,headline;{slider_legend},sliderDelay,sliderSpeed,sliderStartSlide,sliderContinuous;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'sliderStop' => '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop', 'code' => '{type_legend},type,headline;{text_legend},highlight,code;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'markdown' => '{type_legend},type,headline;{text_legend},markdownSource;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'template' => '{type_legend},type,headline;{template_legend},data,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'hyperlink' => '{type_legend},type,headline;{link_legend},url,target,linkTitle,embed,titleText,rel;{imglink_legend:hide},useImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'toplink' => '{type_legend},type;{link_legend},linkTitle;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'image' => '{type_legend},type,headline;{source_legend},singleSRC,size,imagemargin,fullsize,overwriteMeta;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'gallery' => '{type_legend},type,headline;{source_legend},multiSRC,useHomeDir,sortBy,metaIgnore;{image_legend},size,imagemargin,perRow,fullsize,perPage,numberOfItems;{template_legend:hide},galleryTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'player' => '{type_legend},type,headline;{source_legend},playerSRC;{player_legend},playerSize,playerOptions,playerStart,playerStop,playerCaption,playerPreload;{poster_legend:hide},posterSRC;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'youtube' => '{type_legend},type,headline;{source_legend},youtube;{player_legend},playerSize,youtubeOptions,playerStart,playerStop,playerCaption,playerAspect;{splash_legend},splashImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'vimeo' => '{type_legend},type,headline;{source_legend},vimeo;{player_legend},playerSize,vimeoOptions,playerStart,playerColor,playerCaption,playerAspect;{splash_legend},splashImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'download' => '{type_legend},type,headline;{source_legend},singleSRC;{download_legend},inline,overwriteLink;{preview_legend},showPreview;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'downloads' => '{type_legend},type,headline;{source_legend},multiSRC,useHomeDir;{download_legend},inline,sortBy,metaIgnore;{preview_legend},showPreview;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'alias' => '{type_legend},type;{include_legend},cteAlias;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'article' => '{type_legend},type;{include_legend},articleAlias;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop', 'teaser' => '{type_legend},type;{include_legend},article;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'form' => '{type_legend},type,headline;{include_legend},form;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop', 'module' => '{type_legend},type;{include_legend},module;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop'),
    // Subpalettes
    'subpalettes' => array('addImage' => 'singleSRC,size,floating,imagemargin,fullsize,overwriteMeta', 'sortable' => 'sortIndex,sortOrder', 'useImage' => 'singleSRC,size,overwriteMeta', 'overwriteMeta' => 'alt,imageTitle,imageUrl,caption', 'overwriteLink' => 'linkTitle,titleText', 'protected' => 'groups', 'splashImage' => 'singleSRC,size', 'markdownSource_sourceText' => 'code', 'markdownSource_sourceFile' => 'singleSRC', 'showPreview' => 'size,fullsize,numberOfItems'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'pid' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'ptable' => array('sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'sorting' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'type' => array('exclude' => \true, 'filter' => \true, 'inputType' => 'select', 'options_callback' => array('tl_content', 'getContentElements'), 'reference' => &$GLOBALS['TL_LANG']['CTE'], 'eval' => array('helpwizard' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50'), 'sql' => array('name' => 'type', 'type' => 'string', 'length' => 64, 'default' => 'text', 'customSchemaOptions' => array('collation' => 'ascii_bin'))), 'headline' => array('exclude' => \true, 'search' => \true, 'inputType' => 'inputUnit', 'options' => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'), 'eval' => array('maxlength' => 200, 'tl_class' => 'w50 clr'), 'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h2\";}'"), 'text' => array('exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => array('mandatory' => \true, 'rte' => 'tinyMCE', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "mediumtext NULL"), 'addImage' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'showPreview' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'clr'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'inline' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'overwriteMeta' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'w50 clr'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'singleSRC' => array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('filesOnly' => \true, 'fieldType' => 'radio', 'mandatory' => \true, 'tl_class' => 'clr'), 'load_callback' => array(array('tl_content', 'setSingleSrcFlags')), 'sql' => "binary(16) NULL"), 'alt' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'imageTitle' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'size' => array('label' => &$GLOBALS['TL_LANG']['MSC']['imgSize'], 'exclude' => \true, 'inputType' => 'imageSize', 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('rgxp' => 'natural', 'includeBlankOption' => \true, 'nospace' => \true, 'helpwizard' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(128) COLLATE ascii_bin NOT NULL default ''"), 'imagemargin' => array('exclude' => \true, 'inputType' => 'trbl', 'options' => array('px', '%', 'em', 'rem'), 'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(128) COLLATE ascii_bin NOT NULL default ''"), 'imageUrl' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50'), 'sql' => "text NULL"), 'fullsize' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'caption' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'allowHtml' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'floating' => array('exclude' => \true, 'inputType' => 'radioTable', 'options' => array('above', 'left', 'right', 'below'), 'eval' => array('cols' => 4, 'tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'above'"), 'html' => array('exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => array('allowHtml' => \true, 'class' => 'monospace', 'rte' => 'ace|html', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "mediumtext NULL"), 'listtype' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('ordered', 'unordered'), 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default ''"), 'listitems' => array('exclude' => \true, 'inputType' => 'listWizard', 'eval' => array('multiple' => \true, 'allowHtml' => \true, 'tl_class' => 'clr'), 'xlabel' => array(array('tl_content', 'listImportWizard')), 'sql' => "blob NULL"), 'tableitems' => array('exclude' => \true, 'inputType' => 'tableWizard', 'eval' => array('multiple' => \true, 'allowHtml' => \true, 'doNotSaveEmpty' => \true, 'style' => 'width:142px;height:66px'), 'xlabel' => array(array('tl_content', 'tableImportWizard')), 'sql' => "mediumblob NULL"), 'summary' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'thead' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'tfoot' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'tleft' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'sortable' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'sortIndex' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'sortOrder' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('ascending', 'descending'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'ascending'"), 'mooHeadline' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'allowHtml' => \true, 'tl_class' => 'long'), 'sql' => "varchar(255) NOT NULL default ''"), 'mooStyle' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'mooClasses' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'rgxp' => 'alnum', 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'highlight' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('Apache', 'Bash', 'C#', 'C++', 'CSS', 'Diff', 'HTML', 'HTTP', 'Ini', 'JSON', 'Java', 'JavaScript', 'Markdown', 'Nginx', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'SCSS', 'SQL', 'Twig', 'YAML', 'XML'), 'eval' => array('includeBlankOption' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default ''"), 'markdownSource' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('sourceText', 'sourceFile'), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['markdownSource'], 'eval' => array('submitOnChange' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(12) COLLATE ascii_bin NOT NULL default 'sourceText'"), 'code' => array('exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => array('mandatory' => \true, 'preserveTags' => \true, 'decodeEntities' => \true, 'class' => 'monospace', 'rte' => 'ace', 'helpwizard' => \true, 'tl_class' => 'clr'), 'explanation' => 'insertTags', 'load_callback' => array(array('tl_content', 'setRteSyntax')), 'sql' => "text NULL"), 'url' => array('label' => &$GLOBALS['TL_LANG']['MSC']['url'], 'exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'dcaPicker' => \true, 'tl_class' => 'w50'), 'sql' => "text NULL"), 'target' => array('label' => &$GLOBALS['TL_LANG']['MSC']['target'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'overwriteLink' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['overwriteMeta'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true, 'tl_class' => 'w50 clr'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'titleText' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'linkTitle' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'embed' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'rel' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 64, 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'useImage' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'multiSRC' => array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'orderField' => 'orderSRC', 'files' => \true), 'sql' => "blob NULL", 'load_callback' => array(array('tl_content', 'setMultiSrcFlags'))), 'orderSRC' => array('label' => &$GLOBALS['TL_LANG']['MSC']['sortOrder'], 'sql' => "blob NULL"), 'useHomeDir' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'perRow' => array('exclude' => \true, 'inputType' => 'select', 'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12), 'eval' => array('tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 4"), 'perPage' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'numberOfItems' => array('label' => &$GLOBALS['TL_LANG']['MSC']['numberOfItems'], 'exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'sortBy' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default ''"), 'metaIgnore' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'galleryTpl' => array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('gallery_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'customTpl' => array('exclude' => \true, 'inputType' => 'select', 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'playerSRC' => array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'files' => \true, 'mandatory' => \true), 'sql' => "blob NULL"), 'youtube' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'save_callback' => array(array('tl_content', 'extractYouTubeId')), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default ''"), 'vimeo' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50'), 'save_callback' => array(array('tl_content', 'extractVimeoId')), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'posterSRC' => array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('filesOnly' => \true, 'fieldType' => 'radio'), 'sql' => "binary(16) NULL"), 'playerSize' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'playerOptions' => array('exclude' => \true, 'inputType' => 'checkbox', 'options' => array('player_autoplay', 'player_nocontrols', 'player_loop', 'player_playsinline', 'player_muted'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'eval' => array('multiple' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'playerStart' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0"), 'playerStop' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'nospace' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0"), 'playerCaption' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'playerAspect' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('16:9', '16:10', '21:9', '4:3', '3:2'), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['player_aspect'], 'eval' => array('includeBlankOption' => \true, 'nospace' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(8) COLLATE ascii_bin NOT NULL default ''"), 'splashImage' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'playerPreload' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('auto', 'metadata', 'none'), 'reference' => &$GLOBALS['TL_LANG']['tl_content']['player_preload'], 'eval' => array('includeBlankOption' => \true, 'nospace' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(8) COLLATE ascii_bin NOT NULL default ''"), 'playerColor' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 6, 'colorpicker' => \true, 'isHexColor' => \true, 'decodeEntities' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(6) COLLATE ascii_bin NOT NULL default ''"), 'youtubeOptions' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['playerOptions'], 'exclude' => \true, 'inputType' => 'checkbox', 'options' => array('youtube_autoplay', 'youtube_controls', 'youtube_cc_load_policy', 'youtube_fs', 'youtube_hl', 'youtube_iv_load_policy', 'youtube_modestbranding', 'youtube_rel', 'youtube_nocookie', 'youtube_loop'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'eval' => array('multiple' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'vimeoOptions' => array('label' => &$GLOBALS['TL_LANG']['tl_content']['playerOptions'], 'exclude' => \true, 'inputType' => 'checkbox', 'options' => array('vimeo_autoplay', 'vimeo_loop', 'vimeo_portrait', 'vimeo_title', 'vimeo_byline', 'vimeo_dnt'), 'reference' => &$GLOBALS['TL_LANG']['tl_content'], 'eval' => array('multiple' => \true, 'tl_class' => 'clr'), 'sql' => "text NULL"), 'sliderDelay' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0"), 'sliderSpeed' => array('exclude' => \true, 'search' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 300"), 'sliderStartSlide' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'sliderContinuous' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'data' => array('exclude' => \true, 'inputType' => 'keyValueWizard', 'sql' => "text NULL"), 'cteAlias' => array('exclude' => \true, 'inputType' => 'picker', 'eval' => array('mandatory' => \true, 'tl_class' => 'clr'), 'save_callback' => array(array('tl_content', 'saveAlias')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy', 'table' => 'tl_content')), 'articleAlias' => array('exclude' => \true, 'inputType' => 'picker', 'foreignKey' => 'tl_article.title', 'eval' => array('mandatory' => \true, 'tl_class' => 'clr'), 'save_callback' => array(array('tl_content', 'saveArticleAlias')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'article' => array('exclude' => \true, 'inputType' => 'picker', 'foreignKey' => 'tl_article.title', 'eval' => array('mandatory' => \true, 'tl_class' => 'clr'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'form' => array('exclude' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_form.title', 'options_callback' => array('tl_content', 'getForms'), 'eval' => array('mandatory' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50 wizard', 'includeBlankOption' => \true), 'wizard' => array(array('tl_content', 'editForm')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'module' => array('exclude' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_module.name', 'options_callback' => array('tl_content', 'getModules'), 'eval' => array('mandatory' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50 wizard', 'includeBlankOption' => \true), 'wizard' => array(array('tl_content', 'editModule')), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'protected' => array('exclude' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'groups' => array('exclude' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'guests' => array('exclude' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'cssID' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'tl_class' => 'w50 clr'), 'sql' => "varchar(255) NOT NULL default ''"), 'invisible' => array('exclude' => \true, 'toggle' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'start' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) COLLATE ascii_bin NOT NULL default ''"), 'stop' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'datim', 'datepicker' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "varchar(10) COLLATE ascii_bin NOT NULL default ''")),
);
// Dynamically add the permission check
if (\Contao\Input::get('do') == 'article') {
    \array_unshift($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'], array('tl_content', 'checkPermission'));
}
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_content extends \Contao\Backend
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import(\Contao\BackendUser::class, 'User');
    }
    /**
     * Check permissions to edit table tl_content
     */
    public function checkPermission()
    {
        if ($this->User->isAdmin) {
            return;
        }
        // Get the pagemounts
        $pagemounts = array();
        foreach ($this->User->pagemounts as $root) {
            $pagemounts[] = array($root);
            $pagemounts[] = $this->Database->getChildRecords($root, 'tl_page');
        }
        if (!empty($pagemounts)) {
            $pagemounts = \array_merge(...$pagemounts);
        }
        $pagemounts = \array_unique($pagemounts);
        // Check the current action
        switch (\Contao\Input::get('act')) {
            case '':
            // empty
            case 'paste':
            case 'create':
            case 'select':
                // Check access to the article
                $this->checkAccessToElement(\CURRENT_ID, $pagemounts, \true);
                break;
            case 'editAll':
            case 'deleteAll':
            case 'overrideAll':
            case 'cutAll':
            case 'copyAll':
                // Check access to the parent element if a content element is moved
                if (\in_array(\Contao\Input::get('act'), array('cutAll', 'copyAll'))) {
                    $this->checkAccessToElement(\Contao\Input::get('pid'), $pagemounts, \Contao\Input::get('mode') == 2);
                }
                $objCes = $this->Database->prepare("SELECT id FROM tl_content WHERE (ptable='tl_article' OR ptable='') AND pid=?")->execute(\CURRENT_ID);
                $objSession = \Contao\System::getContainer()->get('session');
                $session = $objSession->all();
                $session['CURRENT']['IDS'] = \array_intersect((array) $session['CURRENT']['IDS'], $objCes->fetchEach('id'));
                $objSession->replace($session);
                break;
            case 'cut':
            case 'copy':
                // Check access to the parent element if a content element is moved
                $this->checkAccessToElement(\Contao\Input::get('pid'), $pagemounts, \Contao\Input::get('mode') == 2);
            // no break
            default:
                // Check access to the content element
                $this->checkAccessToElement(\Contao\Input::get('id'), $pagemounts);
                break;
        }
    }
    /**
     * Check access to a particular content element
     *
     * @param integer $id
     * @param array   $pagemounts
     * @param boolean $blnIsPid
     *
     * @throws AccessDeniedException
     */
    protected function checkAccessToElement($id, $pagemounts, $blnIsPid = \false)
    {
        if ($blnIsPid) {
            $objPage = $this->Database->prepare("SELECT p.id, p.pid, p.includeChmod, p.chmod, p.cuser, p.cgroup, a.id AS aid FROM tl_article a, tl_page p WHERE a.id=? AND a.pid=p.id")->limit(1)->execute($id);
        } else {
            $objPage = $this->Database->prepare("SELECT p.id, p.pid, p.includeChmod, p.chmod, p.cuser, p.cgroup, a.id AS aid FROM tl_content c, tl_article a, tl_page p WHERE c.id=? AND c.pid=a.id AND a.pid=p.id")->limit(1)->execute($id);
        }
        // Invalid ID
        if ($objPage->numRows < 1) {
            throw new \Contao\CoreBundle\Exception\AccessDeniedException('Invalid content element ID ' . $id . '.');
        }
        // The page is not mounted
        if (!\in_array($objPage->id, $pagemounts)) {
            throw new \Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify article ID ' . $objPage->aid . ' on page ID ' . $objPage->id . '.');
        }
        // Not enough permissions to modify the article
        if (!\Contao\System::getContainer()->get('security.helper')->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_ARTICLES, $objPage->row())) {
            throw new \Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify article ID ' . $objPage->aid . '.');
        }
    }
    /**
     * Return all content elements as array
     *
     * @return array
     */
    public function getContentElements()
    {
        $security = \Contao\System::getContainer()->get('security.helper');
        $groups = array();
        foreach ($GLOBALS['TL_CTE'] as $k => $v) {
            foreach (\array_keys($v) as $kk) {
                if ($security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_ELEMENT_TYPE, $kk)) {
                    $groups[$k][] = $kk;
                }
            }
        }
        return $groups;
    }
    /**
     * Return the group of a content element
     *
     * @param string $element
     *
     * @return string
     */
    public function getContentElementGroup($element)
    {
        foreach ($GLOBALS['TL_CTE'] as $k => $v) {
            if (\array_key_exists($element, $v)) {
                return $k;
            }
        }
        return \null;
    }
    /**
     * Adjust the DCA by type
     *
     * @param object $dc
     */
    public function adjustDcaByType($dc)
    {
        $objCte = \Contao\ContentModel::findByPk($dc->id);
        if ($objCte === \null) {
            return;
        }
        switch ($objCte->type) {
            case 'hyperlink':
                unset($GLOBALS['TL_DCA']['tl_content']['fields']['imageUrl']);
                break;
            case 'image':
                $GLOBALS['TL_DCA']['tl_content']['fields']['imagemargin']['eval']['tl_class'] .= ' clr';
                break;
            case 'download':
            case 'downloads':
                $GLOBALS['TL_DCA']['tl_content']['fields']['size']['eval']['mandatory'] = \true;
                break;
        }
    }
    /**
     * Filter the content elements
     */
    public function filterContentElements()
    {
        if ($this->User->isAdmin) {
            return;
        }
        if (empty($this->User->elements)) {
            $GLOBALS['TL_DCA']['tl_content']['config']['closed'] = \true;
            $GLOBALS['TL_DCA']['tl_content']['config']['notEditable'] = \true;
        } elseif (!\in_array($GLOBALS['TL_DCA']['tl_content']['fields']['type']['sql']['default'] ?? \null, $this->User->elements)) {
            $GLOBALS['TL_DCA']['tl_content']['fields']['type']['default'] = $this->User->elements[0];
        }
        $objSession = \Contao\System::getContainer()->get('session');
        // Prevent editing content elements with not allowed types
        if (\Contao\Input::get('act') == 'edit' || \Contao\Input::get('act') == 'toggle' || \Contao\Input::get('act') == 'delete' || \Contao\Input::get('act') == 'paste' && \Contao\Input::get('mode') == 'copy') {
            $objCes = $this->Database->prepare("SELECT type FROM tl_content WHERE id=?")->execute(\Contao\Input::get('id'));
            if ($objCes->numRows && !\in_array($objCes->type, $this->User->elements)) {
                throw new \Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify content elements of type "' . $objCes->type . '".');
            }
        }
        // Prevent editing content elements with not allowed types
        if (\Contao\Input::get('act') == 'editAll' || \Contao\Input::get('act') == 'overrideAll' || \Contao\Input::get('act') == 'deleteAll') {
            $session = $objSession->all();
            if (!empty($session['CURRENT']['IDS']) && \is_array($session['CURRENT']['IDS'])) {
                if (empty($this->User->elements)) {
                    $session['CURRENT']['IDS'] = array();
                } else {
                    $objCes = $this->Database->prepare("SELECT id FROM tl_content WHERE id IN(" . \implode(',', \array_map('\\intval', $session['CURRENT']['IDS'])) . ") AND type IN(" . \implode(',', \array_fill(0, \count($this->User->elements), '?')) . ")")->execute(...$this->User->elements);
                    $session['CURRENT']['IDS'] = \array_intersect($session['CURRENT']['IDS'], $objCes->fetchEach('id'));
                }
                $objSession->replace($session);
            }
        }
        // Prevent copying content elements with not allowed types
        if (\Contao\Input::get('act') == 'copyAll') {
            $session = $objSession->all();
            if (!empty($session['CLIPBOARD']['tl_content']['id']) && \is_array($session['CLIPBOARD']['tl_content']['id'])) {
                if (empty($this->User->elements)) {
                    $session['CLIPBOARD']['tl_content']['id'] = array();
                } else {
                    $objCes = $this->Database->prepare("SELECT id, type FROM tl_content WHERE id IN(" . \implode(',', \array_map('\\intval', $session['CLIPBOARD']['tl_content']['id'])) . ") AND type IN(" . \implode(',', \array_fill(0, \count($this->User->elements), '?')) . ")")->execute(...$this->User->elements);
                    $session['CLIPBOARD']['tl_content']['id'] = \array_intersect($session['CLIPBOARD']['tl_content']['id'], $objCes->fetchEach('id'));
                }
                $objSession->replace($session);
            }
        }
    }
    /**
     * Show a hint if a JavaScript library needs to be included in the page layout
     *
     * @param object $dc
     */
    public function showJsLibraryHint($dc)
    {
        if ($_POST || \Contao\Input::get('act') != 'edit') {
            return;
        }
        $security = \Contao\System::getContainer()->get('security.helper');
        // Return if the user cannot access the layout module (see #6190)
        if (!$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_MODULE, 'themes') || !$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_LAYOUTS)) {
            return;
        }
        $objCte = \Contao\ContentModel::findByPk($dc->id);
        if ($objCte === \null) {
            return;
        }
        switch ($objCte->type) {
            case 'gallery':
                \Contao\Message::addInfo(\sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_mediabox', 'j_colorbox'));
                break;
            case 'sliderStart':
            case 'sliderStop':
                \Contao\Message::addInfo(\sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplate'], 'js_slider'));
                break;
            case 'accordionSingle':
            case 'accordionStart':
            case 'accordionStop':
                \Contao\Message::addInfo(\sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_accordion', 'j_accordion'));
                break;
            case 'table':
                if ($objCte->sortable) {
                    \Contao\Message::addInfo(\sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_tablesort', 'j_tablesort'));
                }
                break;
        }
    }
    /**
     * Add the type of content element
     *
     * @param array $arrRow
     *
     * @return string
     */
    public function addCteType($arrRow)
    {
        $key = $arrRow['invisible'] ? 'unpublished' : 'published';
        $type = $GLOBALS['TL_LANG']['CTE'][$arrRow['type']][0] ?? $arrRow['type'];
        $class = 'limit_height';
        // Remove the class if it is a wrapper element
        if (\in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['start']) || \in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['separator']) || \in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['stop'])) {
            $class = '';
            if (($group = $this->getContentElementGroup($arrRow['type'])) !== \null) {
                $type = ($GLOBALS['TL_LANG']['CTE'][$group] ?? $group) . ' (' . $type . ')';
            }
        } elseif (\in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['single'])) {
            if (($group = $this->getContentElementGroup($arrRow['type'])) !== \null) {
                $type = ($GLOBALS['TL_LANG']['CTE'][$group] ?? $group) . ' (' . $type . ')';
            }
        }
        // Add the ID of the aliased element
        if ($arrRow['type'] == 'alias') {
            $type .= ' ID ' . $arrRow['cteAlias'];
        }
        // Add the protection status
        if ($arrRow['protected'] ?? \null) {
            $groupIds = \Contao\StringUtil::deserialize($arrRow['groups'], \true);
            $groupNames = array();
            if (!empty($groupIds)) {
                if (\in_array(-1, \array_map('intval', $groupIds), \true)) {
                    $groupNames[] = $GLOBALS['TL_LANG']['MSC']['guests'];
                }
                if (\null !== ($groups = \Contao\MemberGroupModel::findMultipleByIds($groupIds))) {
                    $groupNames += $groups->fetchEach('name');
                }
            }
            $type .= ' (' . $GLOBALS['TL_LANG']['MSC']['protected'] . ($groupNames ? ': ' . \implode(', ', $groupNames) : '') . ')';
        }
        // Add the headline level (see #5858)
        if ($arrRow['type'] == 'headline' && \is_array($headline = \Contao\StringUtil::deserialize($arrRow['headline']))) {
            $type .= ' (' . $headline['unit'] . ')';
        }
        // Limit the element's height
        if (!\Contao\Config::get('doNotCollapse')) {
            $class .= ' h40';
        }
        $objModel = new \Contao\ContentModel();
        $objModel->setRow($arrRow);
        return '
<div class="cte_type ' . $key . '">' . $type . '</div>
<div class="' . \trim($class) . '">
' . \Contao\StringUtil::insertTagToSrc($this->getContentElement($objModel)) . '
</div>' . "\n";
    }
    /**
     * Return the edit article alias wizard
     *
     * @param DataContainer $dc
     *
     * @return string
     *
     * @deprecated Deprecated since Contao 4.9, to be removed in Contao 5.0
     */
    public function editArticleAlias(\Contao\DataContainer $dc)
    {
        \trigger_deprecation('contao/core-bundle', '4.9', 'Using "tl_content::editArticleAlias()" has been deprecated and will no longer work in Contao 5.0.');
        if ($dc->value < 1) {
            return '';
        }
        $title = \sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'], $dc->value);
        $href = \Contao\System::getContainer()->get('router')->generate('contao_backend', array('do' => 'article', 'table' => 'tl_content', 'id' => $dc->value, 'popup' => '1', 'nb' => '1', 'rt' => \REQUEST_TOKEN));
        return ' <a href="' . \Contao\StringUtil::specialcharsUrl($href) . '" title="' . \Contao\StringUtil::specialchars($title) . '" onclick="Backend.openModalIframe({\'title\':\'' . \Contao\StringUtil::specialchars(\str_replace("'", "\\'", $title)) . '\',\'url\':this.href});return false">' . \Contao\Image::getHtml('alias.svg', $title) . '</a>';
    }
    /**
     * Get all articles and return them as array (article alias)
     *
     * @param DataContainer $dc
     *
     * @return array
     *
     * @deprecated Deprecated since Contao 4.9, to be removed in Contao 5.0
     */
    public function getArticleAlias(\Contao\DataContainer $dc)
    {
        \trigger_deprecation('contao/core-bundle', '4.9', 'Using "tl_content::getArticleAlias()" has been deprecated and will no longer work in Contao 5.0.');
        $arrPids = array();
        $arrAlias = array();
        if (!$this->User->isAdmin) {
            foreach ($this->User->pagemounts as $id) {
                $arrPids[] = array($id);
                $arrPids[] = $this->Database->getChildRecords($id, 'tl_page');
            }
            if (!empty($arrPids)) {
                $arrPids = \array_merge(...$arrPids);
            } else {
                return $arrAlias;
            }
            $objAlias = $this->Database->prepare("SELECT a.id, a.pid, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid WHERE a.pid IN(" . \implode(',', \array_map('\\intval', \array_unique($arrPids))) . ") AND a.id!=(SELECT pid FROM tl_content WHERE id=?) ORDER BY parent, a.sorting")->execute($dc->id);
        } else {
            $objAlias = $this->Database->prepare("SELECT a.id, a.pid, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid WHERE a.id!=(SELECT pid FROM tl_content WHERE id=?) ORDER BY parent, a.sorting")->execute($dc->id);
        }
        if ($objAlias->numRows) {
            \Contao\System::loadLanguageFile('tl_article');
            while ($objAlias->next()) {
                $key = $objAlias->parent . ' (ID ' . $objAlias->pid . ')';
                $arrAlias[$key][$objAlias->id] = $objAlias->title . ' (' . ($GLOBALS['TL_LANG']['COLS'][$objAlias->inColumn] ?? $objAlias->inColumn) . ', ID ' . $objAlias->id . ')';
            }
        }
        return $arrAlias;
    }
    /**
     * Throw an exception if the current article is selected (circular reference)
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function saveArticleAlias($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->pid == $varValue) {
            throw new \RuntimeException($GLOBALS['TL_LANG']['ERR']['circularPicker']);
        }
        return $varValue;
    }
    /**
     * Return the edit alias wizard
     *
     * @param DataContainer $dc
     *
     * @return string
     *
     * @deprecated Deprecated since Contao 4.9, to be removed in Contao 5.0
     */
    public function editAlias(\Contao\DataContainer $dc)
    {
        \trigger_deprecation('contao/core-bundle', '4.9', 'Using "tl_content::editAlias()" has been deprecated and will no longer work in Contao 5.0.');
        if ($dc->value < 1) {
            return '';
        }
        $title = \sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'], $dc->value);
        $href = \Contao\System::getContainer()->get('router')->generate('contao_backend', array('do' => 'article', 'table' => 'tl_content', 'act' => 'edit', 'id' => $dc->value, 'popup' => '1', 'nb' => '1', 'rt' => \REQUEST_TOKEN));
        return ' <a href="' . \Contao\StringUtil::specialcharsUrl($href) . '" title="' . \Contao\StringUtil::specialchars($title) . '" onclick="Backend.openModalIframe({\'title\':\'' . \Contao\StringUtil::specialchars(\str_replace("'", "\\'", $title)) . '\',\'url\':this.href});return false">' . \Contao\Image::getHtml('alias.svg', $title) . '</a>';
    }
    /**
     * Get all content elements and return them as array (content element alias)
     *
     * @return array
     *
     * @deprecated Deprecated since Contao 4.9, to be removed in Contao 5.0
     */
    public function getAlias()
    {
        \trigger_deprecation('contao/core-bundle', '4.9', 'Using "tl_content::getAlias()" has been deprecated and will no longer work in Contao 5.0.');
        $arrPids = array();
        $arrAlias = array();
        if (!$this->User->isAdmin) {
            foreach ($this->User->pagemounts as $id) {
                $arrPids[] = array($id);
                $arrPids[] = $this->Database->getChildRecords($id, 'tl_page');
            }
            if (!empty($arrPids)) {
                $arrPids = \array_merge(...$arrPids);
            } else {
                return $arrAlias;
            }
            $objAlias = $this->Database->prepare("SELECT c.id, c.pid, c.type, (CASE c.type WHEN 'module' THEN m.name WHEN 'form' THEN f.title WHEN 'table' THEN c.summary ELSE c.headline END) AS headline, c.text, a.title FROM tl_content c LEFT JOIN tl_article a ON a.id=c.pid LEFT JOIN tl_module m ON m.id=c.module LEFT JOIN tl_form f on f.id=c.form WHERE a.pid IN(" . \implode(',', \array_map('\\intval', \array_unique($arrPids))) . ") AND (c.ptable='tl_article' OR c.ptable='') AND c.id!=? ORDER BY a.title, c.sorting")->execute(\Contao\Input::get('id'));
        } else {
            $objAlias = $this->Database->prepare("SELECT c.id, c.pid, c.type, (CASE c.type WHEN 'module' THEN m.name WHEN 'form' THEN f.title WHEN 'table' THEN c.summary ELSE c.headline END) AS headline, c.text, a.title FROM tl_content c LEFT JOIN tl_article a ON a.id=c.pid LEFT JOIN tl_module m ON m.id=c.module LEFT JOIN tl_form f on f.id=c.form WHERE (c.ptable='tl_article' OR c.ptable='') AND c.id!=? ORDER BY a.title, c.sorting")->execute(\Contao\Input::get('id'));
        }
        while ($objAlias->next()) {
            $arrHeadline = \Contao\StringUtil::deserialize($objAlias->headline, \true);
            if (isset($arrHeadline['value'])) {
                $headline = \Contao\StringUtil::substr($arrHeadline['value'], 32);
            } else {
                $headline = \Contao\StringUtil::substr(\preg_replace('/[\\n\\r\\t]+/', ' ', $arrHeadline[0]), 32);
            }
            $text = \Contao\StringUtil::substr(\strip_tags(\preg_replace('/[\\n\\r\\t]+/', ' ', $objAlias->text)), 32);
            $strText = ($GLOBALS['TL_LANG']['CTE'][$objAlias->type][0] ?? $objAlias->type) . ' (';
            if ($headline) {
                $strText .= $headline . ', ';
            } elseif ($text) {
                $strText .= $text . ', ';
            }
            $key = $objAlias->title . ' (ID ' . $objAlias->pid . ')';
            $arrAlias[$key][$objAlias->id] = $strText . 'ID ' . $objAlias->id . ')';
        }
        return $arrAlias;
    }
    /**
     * Throw an exception if the current content element is selected (circular reference)
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function saveAlias($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->id == $varValue) {
            throw new \RuntimeException($GLOBALS['TL_LANG']['ERR']['circularPicker']);
        }
        return $varValue;
    }
    /**
     * Return the edit form wizard
     *
     * @param DataContainer $dc
     *
     * @return string
     */
    public function editForm(\Contao\DataContainer $dc)
    {
        if ($dc->value < 1) {
            return '';
        }
        $title = \sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'], $dc->value);
        $href = \Contao\System::getContainer()->get('router')->generate('contao_backend', array('do' => 'form', 'table' => 'tl_form_field', 'id' => $dc->value, 'popup' => '1', 'nb' => '1', 'rt' => \REQUEST_TOKEN));
        return ' <a href="' . \Contao\StringUtil::specialcharsUrl($href) . '" title="' . \Contao\StringUtil::specialchars($title) . '" onclick="Backend.openModalIframe({\'title\':\'' . \Contao\StringUtil::specialchars(\str_replace("'", "\\'", $title)) . '\',\'url\':this.href});return false">' . \Contao\Image::getHtml('alias.svg', $title) . '</a>';
    }
    /**
     * Get all forms and return them as array
     *
     * @return array
     */
    public function getForms()
    {
        if (!$this->User->isAdmin && !\is_array($this->User->forms)) {
            return array();
        }
        $arrForms = array();
        $objForms = $this->Database->execute("SELECT id, title FROM tl_form ORDER BY title");
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objForms->next()) {
            if ($security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FORM, $objForms->id)) {
                $arrForms[$objForms->id] = $objForms->title . ' (ID ' . $objForms->id . ')';
            }
        }
        return $arrForms;
    }
    /**
     * Return the edit module wizard
     *
     * @param DataContainer $dc
     *
     * @return string
     */
    public function editModule(\Contao\DataContainer $dc)
    {
        if ($dc->value < 1) {
            return '';
        }
        $title = \sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'], $dc->value);
        $href = \Contao\System::getContainer()->get('router')->generate('contao_backend', array('do' => 'themes', 'table' => 'tl_module', 'act' => 'edit', 'id' => $dc->value, 'popup' => '1', 'nb' => '1', 'rt' => \REQUEST_TOKEN));
        return ' <a href="' . \Contao\StringUtil::specialcharsUrl($href) . '" title="' . \Contao\StringUtil::specialchars($title) . '" onclick="Backend.openModalIframe({\'title\':\'' . \Contao\StringUtil::specialchars(\str_replace("'", "\\'", $title)) . '\',\'url\':this.href});return false">' . \Contao\Image::getHtml('alias.svg', $title) . '</a>';
    }
    /**
     * Get all modules and return them as array
     *
     * @return array
     */
    public function getModules()
    {
        $arrModules = array();
        $objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id ORDER BY t.name, m.name");
        while ($objModules->next()) {
            $arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
        }
        return $arrModules;
    }
    /**
     * Return the edit article teaser wizard
     *
     * @param DataContainer $dc
     *
     * @return string
     *
     * @deprecated Deprecated since Contao 4.9, to be removed in Contao 5.0
     */
    public function editArticle(\Contao\DataContainer $dc)
    {
        \trigger_deprecation('contao/core-bundle', '4.9', 'Using "tl_content::editArticle()" has been deprecated and will no longer work in Contao 5.0.');
        if ($dc->value < 1) {
            return '';
        }
        $title = \sprintf($GLOBALS['TL_LANG']['tl_content']['editarticle'], $dc->value);
        $href = \Contao\System::getContainer()->get('router')->generate('contao_backend', array('do' => 'article', 'table' => 'tl_content', 'id' => $dc->value, 'popup' => '1', 'nb' => '1', 'rt' => \REQUEST_TOKEN));
        return ' <a href="' . \Contao\StringUtil::specialcharsUrl($href) . '" title="' . \Contao\StringUtil::specialchars($title) . '" onclick="Backend.openModalIframe({\'title\':\'' . \Contao\StringUtil::specialchars(\str_replace("'", "\\'", $title)) . '\',\'url\':this.href});return false">' . \Contao\Image::getHtml('alias.svg', $title) . '</a>';
    }
    /**
     * Get all articles and return them as array (article teaser)
     *
     * @param DataContainer $dc
     *
     * @return array
     *
     * @deprecated Deprecated since Contao 4.9, to be removed in Contao 5.0
     */
    public function getArticles(\Contao\DataContainer $dc)
    {
        \trigger_deprecation('contao/core-bundle', '4.9', 'Using "tl_content::getArticles()" has been deprecated and will no longer work in Contao 5.0.');
        $arrPids = array();
        $arrArticle = array();
        $arrRoot = array();
        $intPid = $dc->activeRecord->pid ?? \null;
        if (\Contao\Input::get('act') == 'overrideAll') {
            $intPid = \Contao\Input::get('id');
        }
        // Limit pages to the website root
        $objArticle = $this->Database->prepare("SELECT pid FROM tl_article WHERE id=?")->limit(1)->execute($intPid);
        if ($objArticle->numRows) {
            $objPage = \Contao\PageModel::findWithDetails($objArticle->pid);
            $arrRoot = $this->Database->getChildRecords($objPage->rootId, 'tl_page');
            \array_unshift($arrRoot, $objPage->rootId);
        }
        unset($objArticle);
        // Limit pages to the user's pagemounts
        if ($this->User->isAdmin) {
            $objArticle = $this->Database->execute("SELECT a.id, a.pid, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid" . (!empty($arrRoot) ? " WHERE a.pid IN(" . \implode(',', \array_map('\\intval', \array_unique($arrRoot))) . ")" : "") . " ORDER BY parent, a.sorting");
        } else {
            foreach ($this->User->pagemounts as $id) {
                if (!\in_array($id, $arrRoot)) {
                    continue;
                }
                $arrPids[] = array($id);
                $arrPids[] = $this->Database->getChildRecords($id, 'tl_page');
            }
            if (!empty($arrPids)) {
                $arrPids = \array_merge(...$arrPids);
            } else {
                return $arrArticle;
            }
            $objArticle = $this->Database->execute("SELECT a.id, a.pid, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid WHERE a.pid IN(" . \implode(',', \array_map('\\intval', \array_unique($arrPids))) . ") ORDER BY parent, a.sorting");
        }
        // Edit the result
        if ($objArticle->numRows) {
            \Contao\System::loadLanguageFile('tl_article');
            while ($objArticle->next()) {
                $key = $objArticle->parent . ' (ID ' . $objArticle->pid . ')';
                $arrArticle[$key][$objArticle->id] = $objArticle->title . ' (' . ($GLOBALS['TL_LANG']['COLS'][$objArticle->inColumn] ?? $objArticle->inColumn) . ', ID ' . $objArticle->id . ')';
            }
        }
        return $arrArticle;
    }
    /**
     * Dynamically set the ace syntax
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return string
     */
    public function setRteSyntax($varValue, \Contao\DataContainer $dc)
    {
        switch ($dc->activeRecord->highlight) {
            case 'C':
            case 'CSharp':
                $syntax = 'c_cpp';
                break;
            case 'CSS':
            case 'Diff':
            case 'Groovy':
            case 'HTML':
            case 'Java':
            case 'JavaScript':
            case 'Perl':
            case 'PHP':
            case 'PowerShell':
            case 'Python':
            case 'Ruby':
            case 'Scala':
            case 'SQL':
            case 'Text':
            case 'Twig':
            case 'YAML':
                $syntax = \strtolower($dc->activeRecord->highlight);
                break;
            case 'VB':
                $syntax = 'vbscript';
                break;
            case 'XML':
            case 'XHTML':
                $syntax = 'xml';
                break;
            default:
                $syntax = 'text';
                break;
        }
        if ($dc->activeRecord->type == 'markdown') {
            $syntax = 'markdown';
        }
        $GLOBALS['TL_DCA']['tl_content']['fields']['code']['eval']['rte'] = 'ace|' . $syntax;
        return $varValue;
    }
    /**
     * Add a link to the list items import wizard
     *
     * @return string
     */
    public function listImportWizard()
    {
        return ' <a href="' . $this->addToUrl('key=list') . '" title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['lw_import'][1]) . '" onclick="Backend.getScrollOffset()">' . \Contao\Image::getHtml('tablewizard.svg', $GLOBALS['TL_LANG']['MSC']['tw_import'][0]) . '</a>';
    }
    /**
     * Add a link to the table items import wizard
     *
     * @return string
     */
    public function tableImportWizard()
    {
        return ' <a href="' . $this->addToUrl('key=table') . '" title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_import'][1]) . '" onclick="Backend.getScrollOffset()">' . \Contao\Image::getHtml('tablewizard.svg', $GLOBALS['TL_LANG']['MSC']['tw_import'][0]) . '</a> ' . \Contao\Image::getHtml('demagnify.svg', '', 'title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_shrink']) . '" style="cursor:pointer" onclick="Backend.tableWizardResize(0.9)"') . \Contao\Image::getHtml('magnify.svg', '', 'title="' . \Contao\StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_expand']) . '" style="cursor:pointer" onclick="Backend.tableWizardResize(1.1)"');
    }
    /**
     * Return the link picker wizard
     *
     * @param DataContainer $dc
     *
     * @return string
     *
     * @deprecated Deprecated since Contao 4.4, to be removed in Contao 5.
     *             Set the "dcaPicker" eval attribute instead.
     */
    public function pagePicker(\Contao\DataContainer $dc)
    {
        \trigger_deprecation('contao/core-bundle', '4.4', 'Using "tl_content::pagePicker()" has been deprecated and will no longer work in Contao 5.0. Set the "dcaPicker" eval attribute instead.');
        return \Contao\Backend::getDcaPickerWizard(\true, $dc->table, $dc->field, $dc->inputName);
    }
    /**
     * Disable the button if the element type is not allowed
     *
     * @param array  $row
     * @param string $href
     * @param string $label
     * @param string $title
     * @param string $icon
     * @param string $attributes
     *
     * @return string
     */
    public function disableButton($row, $href, $label, $title, $icon, $attributes)
    {
        return \Contao\System::getContainer()->get('security.helper')->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_ELEMENT_TYPE, $row['type']) ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . \Contao\StringUtil::specialchars($title) . '"' . $attributes . '>' . \Contao\Image::getHtml($icon, $label) . '</a> ' : \Contao\Image::getHtml(\preg_replace('/\\.svg$/i', '_.svg', $icon)) . ' ';
    }
    /**
     * Dynamically add flags to the "singleSRC" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setSingleSrcFlags($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord) {
            switch ($dc->activeRecord->type) {
                case 'text':
                case 'hyperlink':
                case 'image':
                case 'accordionSingle':
                case 'youtube':
                case 'vimeo':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = '%contao.image.valid_extensions%';
                    break;
                case 'download':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = \Contao\Config::get('allowedDownload');
                    break;
                case 'markdown':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = 'md';
                    break;
            }
        }
        return $varValue;
    }
    /**
     * Dynamically add flags to the "multiSRC" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setMultiSrcFlags($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord) {
            switch ($dc->activeRecord->type) {
                case 'gallery':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isGallery'] = \true;
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = '%contao.image.valid_extensions%';
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['mandatory'] = !$dc->activeRecord->useHomeDir;
                    break;
                case 'downloads':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isDownloads'] = \true;
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = \Contao\Config::get('allowedDownload');
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['mandatory'] = !$dc->activeRecord->useHomeDir;
                    break;
            }
        }
        return $varValue;
    }
    /**
     * Extract the YouTube ID from a URL
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function extractYouTubeId($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord->youtube != $varValue) {
            $matches = array();
            if (\preg_match('%(?:youtube(?:-nocookie)?\\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\\.be/)([^"&?/ ]{11})%i', $varValue, $matches)) {
                $varValue = $matches[1];
            }
        }
        return $varValue;
    }
    /**
     * Extract the Vimeo ID from a URL
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function extractVimeoId($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord->vimeo != $varValue) {
            $matches = array();
            if (\preg_match('%vimeo\\.com/(?:channels/(?:\\w+/)?|groups/(?:[^/]+)/videos/|album/(?:\\d+)/video/|video/)?(\\d+)(?:$|/|\\?)%i', $varValue, $matches)) {
                // Unlisted video privacy hash
                if (\preg_match('%[?&]h=([0-9a-z]+)%i', $varValue, $matchesHash)) {
                    $varValue = $matches[1] . '?h=' . $matchesHash[1];
                } else {
                    $varValue = $matches[1];
                }
            }
        }
        return $varValue;
    }
    /**
     * Return the "toggle visibility" button
     *
     * @param array  $row
     * @param string $href
     * @param string $label
     * @param string $title
     * @param string $icon
     * @param string $attributes
     *
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        $security = \Contao\System::getContainer()->get('security.helper');
        if (!$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_EDIT_FIELD_OF_TABLE, 'tl_content::invisible')) {
            return '';
        }
        // Disable the button if the element type is not allowed
        if (!$security->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_ELEMENT_TYPE, $row['type'])) {
            return \Contao\Image::getHtml(\preg_replace('/\\.svg$/i', '_.svg', $icon)) . ' ';
        }
        $href .= '&amp;id=' . $row['id'];
        if ($row['invisible']) {
            $icon = 'invisible.svg';
        }
        return '<a href="' . $this->addToUrl($href) . '" title="' . \Contao\StringUtil::specialchars($title) . '" onclick="Backend.getScrollOffset();return AjaxRequest.toggleField(this,true)">' . \Contao\Image::getHtml($icon, $label, 'data-icon="' . \Contao\Image::getPath('visible.svg') . '" data-icon-disabled="' . \Contao\Image::getPath('invisible.svg') . '" data-state="' . ($row['invisible'] ? 0 : 1) . '"') . '</a> ';
    }
}
}

namespace {
// Add palette to tl_content
$GLOBALS['TL_DCA']['tl_content']['palettes']['comments'] = '{type_legend},type,headline;{comment_legend},com_order,com_perPage,com_moderate,com_bbcode,com_requireLogin,com_disableCaptcha;{template_legend:hide},com_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
// Add fields to tl_content
$GLOBALS['TL_DCA']['tl_content']['fields']['com_order'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array('ascending', 'descending'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'ascending'");
$GLOBALS['TL_DCA']['tl_content']['fields']['com_perPage'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0");
$GLOBALS['TL_DCA']['tl_content']['fields']['com_moderate'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['com_bbcode'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['com_disableCaptcha'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['com_requireLogin'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_content']['fields']['com_template'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('com_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
}

namespace {
// Dynamically add the permission check and other callbacks
if (\Contao\Input::get('do') == 'news') {
    \array_unshift($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'], array('tl_content_news', 'checkPermission'));
    $GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_news', 'generateFeed');
}
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @property News $News
 */
class tl_content_news extends \Contao\Backend
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import(\Contao\BackendUser::class, 'User');
    }
    /**
     * Check permissions to edit table tl_content
     */
    public function checkPermission()
    {
        if ($this->User->isAdmin) {
            return;
        }
        // Set the root IDs
        if (empty($this->User->news) || !\is_array($this->User->news)) {
            $root = array(0);
        } else {
            $root = $this->User->news;
        }
        // Check the current action
        switch (\Contao\Input::get('act')) {
            case '':
            // empty
            case 'paste':
            case 'select':
                // Check access to the news item
                $this->checkAccessToElement(\CURRENT_ID, $root, \true);
                break;
            case 'create':
                // Check access to the parent element if a content element is created
                $this->checkAccessToElement(\Contao\Input::get('pid'), $root, \Contao\Input::get('mode') == 2);
                break;
            case 'editAll':
            case 'deleteAll':
            case 'overrideAll':
            case 'cutAll':
            case 'copyAll':
                // Check access to the parent element if a content element is moved
                if (\in_array(\Contao\Input::get('act'), array('cutAll', 'copyAll'))) {
                    $this->checkAccessToElement(\Contao\Input::get('pid'), $root, \Contao\Input::get('mode') == 2);
                }
                $objCes = $this->Database->prepare("SELECT id FROM tl_content WHERE ptable='tl_news' AND pid=?")->execute(\CURRENT_ID);
                $objSession = \Contao\System::getContainer()->get('session');
                $session = $objSession->all();
                $session['CURRENT']['IDS'] = \array_intersect((array) $session['CURRENT']['IDS'], $objCes->fetchEach('id'));
                $objSession->replace($session);
                break;
            case 'cut':
            case 'copy':
                // Check access to the parent element if a content element is moved
                $this->checkAccessToElement(\Contao\Input::get('pid'), $root, \Contao\Input::get('mode') == 2);
            // no break
            default:
                // Check access to the content element
                $this->checkAccessToElement(\Contao\Input::get('id'), $root);
                break;
        }
    }
    /**
     * Check access to a particular content element
     *
     * @param integer $id
     * @param array   $root
     * @param boolean $blnIsPid
     *
     * @throws AccessDeniedException
     */
    protected function checkAccessToElement($id, $root, $blnIsPid = \false)
    {
        if ($blnIsPid) {
            $objArchive = $this->Database->prepare("SELECT a.id, n.id AS nid FROM tl_news n, tl_news_archive a WHERE n.id=? AND n.pid=a.id")->limit(1)->execute($id);
        } else {
            $objArchive = $this->Database->prepare("SELECT a.id, n.id AS nid FROM tl_content c, tl_news n, tl_news_archive a WHERE c.id=? AND c.pid=n.id AND n.pid=a.id")->limit(1)->execute($id);
        }
        // Invalid ID
        if ($objArchive->numRows < 1) {
            throw new \Contao\CoreBundle\Exception\AccessDeniedException('Invalid news content element ID ' . $id . '.');
        }
        // The news archive is not mounted
        if (!\in_array($objArchive->id, $root)) {
            throw new \Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify article ID ' . $objArchive->nid . ' in news archive ID ' . $objArchive->id . '.');
        }
    }
    /**
     * Check for modified news feeds and update the XML files if necessary
     */
    public function generateFeed()
    {
        $objSession = \Contao\System::getContainer()->get('session');
        $session = $objSession->get('news_feed_updater');
        if (empty($session) || !\is_array($session)) {
            return;
        }
        $request = \Contao\System::getContainer()->get('request_stack')->getCurrentRequest();
        if ($request) {
            $origScope = $request->attributes->get('_scope');
            $request->attributes->set('_scope', 'frontend');
        }
        $this->import(\Contao\News::class, 'News');
        foreach ($session as $id) {
            $this->News->generateFeedsByArchive($id);
        }
        if ($request) {
            $request->attributes->set('_scope', $origScope);
        }
        $objSession->set('news_feed_updater', \null);
    }
}
}

namespace {
// Dynamically add the permission check and other callbacks
if (\Contao\Input::get('do') == 'calendar') {
    \array_unshift($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'], array('tl_content_calendar', 'checkPermission'));
    $GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_calendar', 'generateFeed');
}
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @property Calendar $Calendar
 */
class tl_content_calendar extends \Contao\Backend
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import(\Contao\BackendUser::class, 'User');
    }
    /**
     * Check permissions to edit table tl_content
     */
    public function checkPermission()
    {
        if ($this->User->isAdmin) {
            return;
        }
        // Set the root IDs
        if (empty($this->User->calendars) || !\is_array($this->User->calendars)) {
            $root = array(0);
        } else {
            $root = $this->User->calendars;
        }
        // Check the current action
        switch (\Contao\Input::get('act')) {
            case '':
            // empty
            case 'paste':
            case 'create':
            case 'select':
                // Check access to the news item
                $this->checkAccessToElement(\CURRENT_ID, $root, \true);
                break;
            case 'editAll':
            case 'deleteAll':
            case 'overrideAll':
            case 'cutAll':
            case 'copyAll':
                // Check access to the parent element if a content element is moved
                if (\in_array(\Contao\Input::get('act'), array('cutAll', 'copyAll'))) {
                    $this->checkAccessToElement(\Contao\Input::get('pid'), $root, \Contao\Input::get('mode') == 2);
                }
                $objCes = $this->Database->prepare("SELECT id FROM tl_content WHERE ptable='tl_calendar_events' AND pid=?")->execute(\CURRENT_ID);
                $objSession = \Contao\System::getContainer()->get('session');
                $session = $objSession->all();
                $session['CURRENT']['IDS'] = \array_intersect((array) $session['CURRENT']['IDS'], $objCes->fetchEach('id'));
                $objSession->replace($session);
                break;
            case 'cut':
            case 'copy':
                // Check access to the parent element if a content element is moved
                $this->checkAccessToElement(\Contao\Input::get('pid'), $root, \Contao\Input::get('mode') == 2);
            // no break
            default:
                // Check access to the content element
                $this->checkAccessToElement(\Contao\Input::get('id'), $root);
                break;
        }
    }
    /**
     * Check access to a particular content element
     *
     * @param integer $id
     * @param array   $root
     * @param boolean $blnIsPid
     *
     * @throws AccessDeniedException
     */
    protected function checkAccessToElement($id, $root, $blnIsPid = \false)
    {
        if ($blnIsPid) {
            $objCalendar = $this->Database->prepare("SELECT a.id, n.id AS nid FROM tl_calendar_events n, tl_calendar a WHERE n.id=? AND n.pid=a.id")->limit(1)->execute($id);
        } else {
            $objCalendar = $this->Database->prepare("SELECT a.id, n.id AS nid FROM tl_content c, tl_calendar_events n, tl_calendar a WHERE c.id=? AND c.pid=n.id AND n.pid=a.id")->limit(1)->execute($id);
        }
        // Invalid ID
        if ($objCalendar->numRows < 1) {
            throw new \Contao\CoreBundle\Exception\AccessDeniedException('Invalid event content element ID ' . $id . '.');
        }
        // The calendar is not mounted
        if (!\in_array($objCalendar->id, $root)) {
            throw new \Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify article ID ' . $objCalendar->nid . ' in calendar ID ' . $objCalendar->id . '.');
        }
    }
    /**
     * Check for modified calendar feeds and update the XML files if necessary
     */
    public function generateFeed()
    {
        $objSession = \Contao\System::getContainer()->get('session');
        $session = $objSession->get('calendar_feed_updater');
        if (empty($session) || !\is_array($session)) {
            return;
        }
        $request = \Contao\System::getContainer()->get('request_stack')->getCurrentRequest();
        if ($request) {
            $origScope = $request->attributes->get('_scope');
            $request->attributes->set('_scope', 'frontend');
        }
        $this->import(\Contao\Calendar::class, 'Calendar');
        foreach ($session as $id) {
            $this->Calendar->generateFeedsByCalendar($id);
        }
        if ($request) {
            $request->attributes->set('_scope', $origScope);
        }
        $objSession->set('calendar_feed_updater', \null);
    }
}
}

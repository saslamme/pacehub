<?php

namespace {
$GLOBALS['TL_DCA']['tl_module'] = array(
    // Config
    'config' => array('dataContainer' => \Contao\DC_Table::class, 'ptable' => 'tl_theme', 'enableVersioning' => \true, 'markAsCopy' => 'name', 'onload_callback' => array(array('tl_module', 'checkPermission'), array('tl_module', 'addCustomLayoutSectionReferences')), 'sql' => array('keys' => array('id' => 'primary'))),
    // List
    'list' => array('sorting' => array('mode' => \Contao\DataContainer::MODE_PARENT, 'fields' => array('name'), 'panelLayout' => 'filter;sort,search,limit', 'headerFields' => array('name', 'author', 'tstamp'), 'child_record_callback' => array('tl_module', 'listModule')), 'label' => array('group_callback' => array('tl_module', 'getGroupHeader')), 'global_operations' => array('all' => array('href' => 'act=select', 'class' => 'header_edit_all', 'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"')), 'operations' => array('edit' => array('href' => 'act=edit', 'icon' => 'edit.svg'), 'copy' => array('href' => 'act=paste&amp;mode=copy', 'icon' => 'copy.svg', 'attributes' => 'onclick="Backend.getScrollOffset()"'), 'cut' => array('href' => 'act=paste&amp;mode=cut', 'icon' => 'cut.svg', 'attributes' => 'onclick="Backend.getScrollOffset()"'), 'delete' => array('href' => 'act=delete', 'icon' => 'delete.svg', 'attributes' => 'onclick="if(!confirm(\'' . ($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? \null) . '\'))return false;Backend.getScrollOffset()"'), 'show' => array('href' => 'act=show', 'icon' => 'show.svg'))),
    // Palettes
    'palettes' => array('__selector__' => array('type', 'defineRoot', 'protected', 'reg_assignDir', 'reg_activate'), 'default' => '{title_legend},name,type', 'navigation' => '{title_legend},name,headline,type;{nav_legend},levelOffset,showLevel,hardLimit,showProtected,showHidden;{reference_legend:hide},defineRoot;{template_legend:hide},customTpl,navigationTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'customnav' => '{title_legend},name,headline,type;{nav_legend},pages,showProtected;{template_legend:hide},customTpl,navigationTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'breadcrumb' => '{title_legend},name,headline,type;{nav_legend},showHidden;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'quicknav' => '{title_legend},name,headline,type;{label_legend},customLabel;{nav_legend},showLevel,hardLimit,showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'quicklink' => '{title_legend},name,headline,type;{label_legend},customLabel;{nav_legend},pages,showProtected;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'booknav' => '{title_legend},name,headline,type;{nav_legend},showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'articlenav' => '{title_legend},name,headline,type;{config_legend},loadFirst;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'sitemap' => '{title_legend},name,headline,type;{nav_legend},showProtected,showHidden;{reference_legend:hide},rootPage;{template_legend:hide},customTpl,navigationTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'login' => '{title_legend},name,headline,type;{config_legend},autologin;{redirect_legend},jumpTo,redirectBack;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'logout' => '{title_legend},name,type;{redirect_legend},jumpTo,redirectBack;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'personalData' => '{title_legend},name,headline,type;{config_legend},editable;{redirect_legend},jumpTo;{template_legend:hide},memberTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'registration' => '{title_legend},name,headline,type;{config_legend},editable,newsletters,disableCaptcha;{account_legend},reg_groups,reg_allowLogin,reg_assignDir;{redirect_legend},jumpTo;{email_legend},reg_activate;{template_legend:hide},memberTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'changePassword' => '{title_legend},name,headline,type;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'lostPassword' => '{title_legend},name,headline,type;{config_legend},reg_skipName,disableCaptcha;{redirect_legend},jumpTo;{email_legend:hide},reg_jumpTo,reg_password;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'closeAccount' => '{title_legend},name,headline,type;{config_legend},reg_close,reg_deleteDir;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'form' => '{title_legend},name,headline,type;{include_legend},form;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'search' => '{title_legend},name,headline,type;{config_legend},queryType,fuzzy,contextLength,minKeywordLength,perPage,searchType;{redirect_legend:hide},jumpTo;{reference_legend:hide},pages;{template_legend:hide},searchTpl,customTpl;{image_legend},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'articlelist' => '{title_legend},name,headline,type;{config_legend},skipFirst,inColumn;{reference_legend:hide},defineRoot;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'randomImage' => '{title_legend},name,headline,type;{source_legend},multiSRC,imgSize,fullsize,useCaption;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'html' => '{title_legend},name,type;{html_legend},html;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests', 'template' => '{title_legend},name,headline,type;{template_legend},data,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'rssReader' => '{title_legend},name,headline,type;{config_legend},rss_feed,numberOfItems,perPage,skipFirst,rss_cache;{template_legend:hide},rss_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID', 'two_factor' => '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID', 'root_page_dependent_modules' => '{title_legend},name,type;{config_legend},rootPageDependentModules;{protected_legend:hide},protected'),
    // Subpalettes
    'subpalettes' => array('defineRoot' => 'rootPage', 'protected' => 'groups', 'reg_assignDir' => 'reg_homeDir', 'reg_activate' => 'reg_jumpTo,reg_text'),
    // Fields
    'fields' => array('id' => array('sql' => "int(10) unsigned NOT NULL auto_increment"), 'pid' => array('foreignKey' => 'tl_theme.name', 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'belongsTo', 'load' => 'lazy')), 'tstamp' => array('sql' => "int(10) unsigned NOT NULL default 0"), 'name' => array('exclude' => \true, 'sorting' => \true, 'flag' => \Contao\DataContainer::SORT_INITIAL_LETTER_ASC, 'search' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'headline' => array('exclude' => \true, 'search' => \true, 'inputType' => 'inputUnit', 'options' => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'), 'eval' => array('maxlength' => 200, 'tl_class' => 'w50 clr'), 'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h2\";}'"), 'type' => array('exclude' => \true, 'sorting' => \true, 'flag' => \Contao\DataContainer::SORT_ASC, 'filter' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module', 'getModules'), 'reference' => &$GLOBALS['TL_LANG']['FMD'], 'eval' => array('helpwizard' => \true, 'chosen' => \true, 'submitOnChange' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default 'navigation'"), 'levelOffset' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'showLevel' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50 clr'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'hardLimit' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'showProtected' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'defineRoot' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'rootPage' => array('exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio', 'tl_class' => 'clr'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'navigationTpl' => array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('nav_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'customTpl' => array('exclude' => \true, 'inputType' => 'select', 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'pages' => array('exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'isSortable' => \true, 'mandatory' => \true), 'load_callback' => array(array('tl_module', 'setPagesFlags')), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'showHidden' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'customLabel' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('maxlength' => 64, 'rgxp' => 'extnd', 'tl_class' => 'w50'), 'sql' => "varchar(64) NOT NULL default ''"), 'autologin' => array('exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'jumpTo' => array('exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'overviewPage' => array('exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio', 'tl_class' => 'clr'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'redirectBack' => array('exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'editable' => array('exclude' => \true, 'inputType' => 'checkboxWizard', 'options_callback' => array('tl_module', 'getEditableMemberProperties'), 'eval' => array('multiple' => \true), 'sql' => "blob NULL"), 'memberTpl' => array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('member_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'form' => array('exclude' => \true, 'inputType' => 'select', 'foreignKey' => 'tl_form.title', 'options_callback' => array('tl_module', 'getForms'), 'eval' => array('chosen' => \true, 'tl_class' => 'w50 wizard'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'queryType' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('and', 'or'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('helpwizard' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(8) COLLATE ascii_bin NOT NULL default 'and'"), 'fuzzy' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'contextLength' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'rgxp' => 'natural', 'tl_class' => 'w50', 'placeholder' => array(48, 360)), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'minKeywordLength' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 4"), 'perPage' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'searchType' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('simple', 'advanced'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('helpwizard' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'simple'"), 'searchTpl' => array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('search_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'inColumn' => array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module', 'getLayoutSections'), 'reference' => &$GLOBALS['TL_LANG']['COLS'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'main'"), 'skipFirst' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0"), 'loadFirst' => array('exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'singleSRC' => array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('fieldType' => 'radio', 'filesOnly' => \true, 'mandatory' => \true, 'tl_class' => 'clr'), 'sql' => "binary(16) NULL"), 'url' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'url', 'decodeEntities' => \true, 'maxlength' => 2048, 'tl_class' => 'w50'), 'sql' => "text NULL"), 'imgSize' => array('label' => &$GLOBALS['TL_LANG']['MSC']['imgSize'], 'exclude' => \true, 'inputType' => 'imageSize', 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('rgxp' => 'natural', 'includeBlankOption' => \true, 'nospace' => \true, 'helpwizard' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(128) COLLATE ascii_bin NOT NULL default ''"), 'useCaption' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'fullsize' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'multiSRC' => array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('multiple' => \true, 'fieldType' => 'checkbox', 'orderField' => 'orderSRC', 'files' => \true, 'mandatory' => \true), 'load_callback' => array(array('tl_module', 'setMultiSrcFlags')), 'sql' => "blob NULL"), 'orderSRC' => array('label' => &$GLOBALS['TL_LANG']['MSC']['sortOrder'], 'sql' => "blob NULL"), 'html' => array('exclude' => \true, 'search' => \true, 'inputType' => 'textarea', 'eval' => array('allowHtml' => \true, 'class' => 'monospace', 'rte' => 'ace|html', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "text NULL"), 'rss_cache' => array('exclude' => \true, 'inputType' => 'select', 'options' => array(0, 5, 15, 30, 60, 300, 900, 1800, 3600, 10800, 21600, 43200, 86400), 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['CACHE'], 'sql' => "int(10) unsigned NOT NULL default 3600"), 'rss_feed' => array('exclude' => \true, 'inputType' => 'textarea', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'style' => 'height:60px'), 'sql' => "text NULL"), 'rss_template' => array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
        return \Contao\Controller::getTemplateGroup('rss_');
    }, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''"), 'numberOfItems' => array('label' => &$GLOBALS['TL_LANG']['MSC']['numberOfItems'], 'exclude' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 3"), 'disableCaptcha' => array('exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'reg_groups' => array('exclude' => \true, 'inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'reg_allowLogin' => array('exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'reg_skipName' => array('exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'reg_close' => array('exclude' => \true, 'inputType' => 'select', 'options' => array('close_deactivate', 'close_delete'), 'eval' => array('tl_class' => 'w50'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default ''"), 'reg_deleteDir' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'reg_assignDir' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'reg_homeDir' => array('exclude' => \true, 'inputType' => 'fileTree', 'eval' => array('fieldType' => 'radio', 'tl_class' => 'clr'), 'sql' => "binary(16) NULL"), 'reg_activate' => array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'reg_jumpTo' => array('exclude' => \true, 'inputType' => 'pageTree', 'foreignKey' => 'tl_page.title', 'eval' => array('fieldType' => 'radio'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('type' => 'hasOne', 'load' => 'lazy')), 'reg_text' => array('exclude' => \true, 'inputType' => 'textarea', 'eval' => array('style' => 'height:120px', 'decodeEntities' => \true, 'alwaysSave' => \true), 'load_callback' => array(array('tl_module', 'getActivationDefault')), 'sql' => "text NULL"), 'reg_password' => array('exclude' => \true, 'inputType' => 'textarea', 'eval' => array('style' => 'height:120px', 'decodeEntities' => \true, 'alwaysSave' => \true), 'load_callback' => array(array('tl_module', 'getPasswordDefault')), 'sql' => "text NULL"), 'data' => array('exclude' => \true, 'inputType' => 'keyValueWizard', 'sql' => "text NULL"), 'protected' => array('exclude' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'eval' => array('submitOnChange' => \true), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'groups' => array('exclude' => \true, 'inputType' => 'checkbox', 'foreignKey' => 'tl_member_group.name', 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy')), 'guests' => array('exclude' => \true, 'filter' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''"), 'cssID' => array('exclude' => \true, 'inputType' => 'text', 'eval' => array('multiple' => \true, 'size' => 2, 'tl_class' => 'w50'), 'sql' => "varchar(255) NOT NULL default ''"), 'rootPageDependentModules' => array('exclude' => \true, 'inputType' => 'rootPageDependentSelect', 'eval' => array('submitOnChange' => \true, 'includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => 'blob NULL')),
);
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module extends \Contao\Backend
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
     * Check permissions to edit the table
     *
     * @throws AccessDeniedException
     */
    public function checkPermission()
    {
        if ($this->User->isAdmin) {
            return;
        }
        if (!\Contao\System::getContainer()->get('security.helper')->isGranted(\Contao\CoreBundle\Security\ContaoCorePermissions::USER_CAN_ACCESS_FRONTEND_MODULES)) {
            throw new \Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to access the front end modules module.');
        }
    }
    /**
     * Return all front end modules as array
     *
     * @return array
     */
    public function getModules()
    {
        $groups = array();
        foreach ($GLOBALS['FE_MOD'] as $k => $v) {
            foreach (\array_keys($v) as $kk) {
                $groups[$k][] = $kk;
            }
        }
        return $groups;
    }
    /**
     * Return all editable fields of table tl_member
     *
     * @return array
     */
    public function getEditableMemberProperties()
    {
        $return = array();
        \Contao\System::loadLanguageFile('tl_member');
        $this->loadDataContainer('tl_member');
        foreach ($GLOBALS['TL_DCA']['tl_member']['fields'] as $k => $v) {
            if ($v['eval']['feEditable'] ?? \null) {
                $return[$k] = $GLOBALS['TL_DCA']['tl_member']['fields'][$k]['label'][0];
            }
        }
        return $return;
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
                $arrForms[$objForms->id] = $objForms->title;
            }
        }
        return $arrForms;
    }
    /**
     * Return all layout sections as array
     *
     * @return array
     */
    public function getLayoutSections()
    {
        $arrSections = array('header', 'left', 'right', 'main', 'footer');
        // Check for custom layout sections
        $objLayout = $this->Database->query("SELECT sections FROM tl_layout WHERE sections!=''");
        while ($objLayout->next()) {
            $arrCustom = \Contao\StringUtil::deserialize($objLayout->sections);
            // Add the custom layout sections
            if (!empty($arrCustom) && \is_array($arrCustom)) {
                foreach ($arrCustom as $v) {
                    if (!empty($v['id'])) {
                        $arrSections[] = $v['id'];
                    }
                }
            }
        }
        return \Contao\Backend::convertLayoutSectionIdsToAssociativeArray($arrSections);
    }
    /**
     * Use the module type as group header if sorted by type (see #8402)
     *
     * @param string $group
     * @param string $mode
     * @param string $field
     * @param array  $row
     *
     * @return string
     */
    public function getGroupHeader($group, $mode, $field, $row)
    {
        if ($field == 'type') {
            return $row['type'];
        }
        return $group;
    }
    /**
     * Load the default activation text
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function getActivationDefault($varValue)
    {
        if (\trim($varValue) === '') {
            $varValue = \is_array($GLOBALS['TL_LANG']['tl_module']['emailText'] ?? \null) ? $GLOBALS['TL_LANG']['tl_module']['emailText'][1] : $GLOBALS['TL_LANG']['tl_module']['emailText'] ?? \null;
        }
        return $varValue;
    }
    /**
     * Load the default password text
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function getPasswordDefault($varValue)
    {
        if (\trim($varValue) === '') {
            $varValue = \is_array($GLOBALS['TL_LANG']['tl_module']['passwordText'] ?? \null) ? $GLOBALS['TL_LANG']['tl_module']['passwordText'][1] : $GLOBALS['TL_LANG']['tl_module']['passwordText'] ?? \null;
        }
        return $varValue;
    }
    /**
     * List a front end module
     *
     * @param array $row
     *
     * @return string
     */
    public function listModule($row)
    {
        return '<div class="tl_content_left">' . $row['name'] . ' <span style="color:#999;padding-left:3px">[' . ($GLOBALS['TL_LANG']['FMD'][$row['type']][0] ?? $row['type']) . ']</span></div>';
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
        if ($dc->activeRecord && $dc->activeRecord->type == 'randomImage') {
            $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isGallery'] = \true;
            $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = '%contao.image.valid_extensions%';
        }
        return $varValue;
    }
    /**
     * Dynamically change attributes of the "pages" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setPagesFlags($varValue, \Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->type == 'search') {
            $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['mandatory'] = \false;
            unset($GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isSortable']);
        }
        return $varValue;
    }
}
}

namespace {
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqlist'] = '{title_legend},name,headline,type;{config_legend},faq_categories,faq_readerModule;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader'] = '{title_legend},name,headline,type;{config_legend},faq_categories,overviewPage,customLabel;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['faqpage'] = '{title_legend},name,headline,type;{config_legend},faq_categories;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['faq_categories'] = array('exclude' => \true, 'inputType' => 'checkboxWizard', 'foreignKey' => 'tl_faq_category.title', 'eval' => array('multiple' => \true, 'mandatory' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['faq_readerModule'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module_faq', 'getReaderModules'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('table' => 'tl_module', 'type' => 'hasMany', 'load' => 'lazy'));
$bundles = \Contao\System::getContainer()->getParameter('kernel.bundles');
// Add the comments template drop-down menu
if (isset($bundles['ContaoCommentsBundle'])) {
    $GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader'] = \str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['faqreader']);
}
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_faq extends \Contao\Backend
{
    /**
     * Get all FAQ reader modules and return them as array
     *
     * @return array
     */
    public function getReaderModules()
    {
        $arrModules = array();
        $objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='faqreader' ORDER BY t.name, m.name");
        while ($objModules->next()) {
            $arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
        }
        return $arrModules;
    }
}
}

namespace {
\Contao\System::loadLanguageFile('tl_content');
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['comments'] = '{title_legend},name,headline,type;{comment_legend},com_order,perPage,com_moderate,com_bbcode,com_protected,com_requireLogin,com_disableCaptcha;{template_legend:hide},com_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['com_order'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_order'], 'exclude' => \true, 'inputType' => 'select', 'options' => array('ascending', 'descending'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'ascending'");
$GLOBALS['TL_DCA']['tl_module']['fields']['com_moderate'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_moderate'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['com_bbcode'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_bbcode'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['com_requireLogin'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_requireLogin'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['com_disableCaptcha'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_disableCaptcha'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['com_template'] = array('label' => &$GLOBALS['TL_LANG']['tl_content']['com_template'], 'exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('com_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
}

namespace {
$GLOBALS['TL_DCA']['tl_module']['palettes']['calc_tools'] = '{title_legend},name,headline,type;' . '{config_legend},calc_tools_type,calc_default_distance,calc_unit,calc_show_speed,' . 'calc_distance_min,calc_distance_max,calc_distance_step,calc_speed_min,calc_speed_max,calc_speed_step;' . '{template_legend:hide},customTpl;' . '{protected_legend:hide},protected;' . '{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_tools_type'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_tools_type'], 'exclude' => \true, 'inputType' => 'select', 'options' => ['pace', 'vo2max', 'vdot'], 'reference' => &$GLOBALS['TL_LANG']['tl_module']['calc_tools_type_ref'], 'eval' => ['mandatory' => \true, 'tl_class' => 'w50 clr'], 'sql' => "varchar(16) NOT NULL default 'pace'"];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_default_distance'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_default_distance'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'digit', 'tl_class' => 'w50'], 'sql' => "varchar(16) NOT NULL default '10'"];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_unit'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_unit'], 'exclude' => \true, 'inputType' => 'select', 'options' => ['km', 'mi'], 'reference' => &$GLOBALS['TL_LANG']['tl_module']['calc_tools_type_ref'], 'eval' => ['tl_class' => 'w50'], 'sql' => "varchar(2) NOT NULL default 'km'"];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_show_speed'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_show_speed'], 'exclude' => \true, 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50 m12'], 'sql' => "char(1) NOT NULL default ''"];
// Distance slider config
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_distance_min'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_distance_min'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'prcnt', 'tl_class' => 'w33 clr'], 'sql' => "varchar(16) NOT NULL default '0'"];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_distance_max'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_distance_max'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'prcnt', 'tl_class' => 'w33'], 'sql' => "varchar(16) NOT NULL default '100'"];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_distance_step'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_distance_step'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'prcnt', 'tl_class' => 'w33'], 'sql' => "varchar(16) NOT NULL default '0.1'"];
// Speed slider config
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_speed_min'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_speed_min'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'prcnt', 'tl_class' => 'w33 clr'], 'sql' => "varchar(16) NOT NULL default '0'"];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_speed_max'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_speed_max'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'prcnt', 'tl_class' => 'w33'], 'sql' => "varchar(16) NOT NULL default '30'"];
$GLOBALS['TL_DCA']['tl_module']['fields']['calc_speed_step'] = ['label' => &$GLOBALS['TL_LANG']['tl_module']['calc_speed_step'], 'exclude' => \true, 'inputType' => 'text', 'eval' => ['rgxp' => 'prcnt', 'tl_class' => 'w33'], 'sql' => "varchar(16) NOT NULL default '0.1'"];
}

namespace {
// Add a palette selector
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'news_format';
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_readerModule,numberOfItems,news_featured,news_order,skipFirst,perPage;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader'] = '{title_legend},name,headline,type;{config_legend},news_archives,overviewPage,customLabel;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsarchive'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_readerModule,news_format,news_order,news_jumpToCurrent,perPage;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsmenu'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_format,news_order;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsmenunews_day'] = '{title_legend},name,headline,type;{config_legend},news_archives,news_showQuantity,news_format,news_startDay;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['news_archives'] = array('exclude' => \true, 'inputType' => 'checkbox', 'options_callback' => array('tl_module_news', 'getNewsArchives'), 'eval' => array('multiple' => \true, 'mandatory' => \true), 'sql' => "blob NULL", 'relation' => array('table' => 'tl_news_archive', 'type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['news_featured'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array('all_items', 'featured', 'unfeatured', 'featured_first'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'all_items'");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_jumpToCurrent'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array('hide_module', 'show_current', 'all_items'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_readerModule'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module_news', 'getReaderModules'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_metaFields'] = array('exclude' => \true, 'inputType' => 'checkbox', 'options' => array('date', 'author', 'comments'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('multiple' => \true), 'sql' => "varchar(255) COLLATE ascii_bin NOT NULL default 'a:2:{i:0;s:4:\"date\";i:1;s:6:\"author\";}'");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_template'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('news_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_format'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array('news_day', 'news_month', 'news_year'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50 clr', 'submitOnChange' => \true), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'news_month'");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_startDay'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array(0, 1, 2, 3, 4, 5, 6), 'reference' => &$GLOBALS['TL_LANG']['DAYS'], 'eval' => array('tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_order'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module_news', 'getSortingOptions'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'order_date_desc'");
$GLOBALS['TL_DCA']['tl_module']['fields']['news_showQuantity'] = array('exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$bundles = \Contao\System::getContainer()->getParameter('kernel.bundles');
// Add the comments template drop-down menu
if (isset($bundles['ContaoCommentsBundle'])) {
    $GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader'] = \str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['newsreader']);
}
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_news extends \Contao\Backend
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
     * Get all news archives and return them as array
     *
     * @return array
     */
    public function getNewsArchives()
    {
        if (!$this->User->isAdmin && !\is_array($this->User->news)) {
            return array();
        }
        $arrArchives = array();
        $objArchives = $this->Database->execute("SELECT id, title FROM tl_news_archive ORDER BY title");
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objArchives->next()) {
            if ($security->isGranted(\Contao\NewsBundle\Security\ContaoNewsPermissions::USER_CAN_EDIT_ARCHIVE, $objArchives->id)) {
                $arrArchives[$objArchives->id] = $objArchives->title;
            }
        }
        return $arrArchives;
    }
    /**
     * Get all news reader modules and return them as array
     *
     * @return array
     */
    public function getReaderModules()
    {
        $arrModules = array();
        $objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='newsreader' ORDER BY t.name, m.name");
        while ($objModules->next()) {
            $arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
        }
        return $arrModules;
    }
    /**
     * Return the sorting options
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getSortingOptions(\Contao\DataContainer $dc)
    {
        if ($dc->activeRecord && $dc->activeRecord->type == 'newsmenu') {
            return array('order_date_asc', 'order_date_desc');
        }
        return array('order_date_asc', 'order_date_desc', 'order_headline_asc', 'order_headline_desc', 'order_random');
    }
}
}

namespace {
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['listing'] = '{title_legend},name,headline,type;{config_legend},list_table,list_fields,list_where,list_search,list_sort,perPage,list_info,list_info_where;{template_legend:hide},list_layout,list_info_layout;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['list_table'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module_listing', 'getAllTables'), 'eval' => array('chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_fields'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('mandatory' => \true, 'decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_where'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('preserveTags' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_search'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_sort'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('decodeEntities' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info_where'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('preserveTags' => \true, 'maxlength' => 255, 'tl_class' => 'w50'), 'sql' => "tinytext NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_layout'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('list_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['list_info_layout'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('info_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_listing extends \Contao\Backend
{
    /**
     * Get all tables and return them as array
     *
     * @return array
     */
    public function getAllTables()
    {
        $arrTables = $this->Database->listTables();
        $arrViews = \Contao\System::getContainer()->get('database_connection')->createSchemaManager()->listViews();
        if (!empty($arrViews)) {
            $arrTables = \array_merge($arrTables, \array_keys($arrViews));
            \natsort($arrTables);
        }
        return \array_values($arrTables);
    }
}
}

namespace {
// Add a palette selector
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'cal_format';
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['calendar'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_startDay,cal_featured;{redirect_legend},jumpTo;{template_legend:hide},cal_ctemplate,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventlist'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_format,cal_featured,cal_order,cal_readerModule,cal_limit,perPage,cal_ignoreDynamic,cal_hideRunning;{template_legend:hide},cal_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_hideRunning,overviewPage,customLabel;{template_legend:hide},cal_template,customTpl;{image_legend},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventmenu'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_format,cal_featured,cal_order,cal_showQuantity;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['eventmenucal_day'] = '{title_legend},name,headline,type;{config_legend},cal_calendar,cal_noSpan,cal_format,cal_featured,cal_startDay,cal_showQuantity;{redirect_legend},jumpTo;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_calendar'] = array('exclude' => \true, 'inputType' => 'checkbox', 'options_callback' => array('tl_module_calendar', 'getCalendars'), 'eval' => array('mandatory' => \true, 'multiple' => \true), 'sql' => "blob NULL", 'relation' => array('table' => 'tl_calendar', 'type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_noSpan'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_hideRunning'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_startDay'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array(0, 1, 2, 3, 4, 5, 6), 'reference' => &$GLOBALS['TL_LANG']['DAYS'], 'eval' => array('tl_class' => 'w50 clr'), 'sql' => "smallint(5) unsigned NOT NULL default 1");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_format'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module_calendar', 'getFormats'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('tl_class' => 'w50 clr', 'submitOnChange' => \true), 'sql' => "varchar(32) COLLATE ascii_bin NOT NULL default 'cal_month'");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_ignoreDynamic'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'clr w50'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_order'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array('ascending', 'descending'), 'reference' => &$GLOBALS['TL_LANG']['MSC'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'ascending'");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_readerModule'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => array('tl_module_calendar', 'getReaderModules'), 'reference' => &$GLOBALS['TL_LANG']['tl_module'], 'eval' => array('includeBlankOption' => \true, 'tl_class' => 'w50'), 'sql' => "int(10) unsigned NOT NULL default 0", 'relation' => array('table' => 'tl_module', 'type' => 'hasOne', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_limit'] = array('exclude' => \true, 'inputType' => 'text', 'eval' => array('rgxp' => 'natural', 'tl_class' => 'w50'), 'sql' => "smallint(5) unsigned NOT NULL default 0");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_template'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('event_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_ctemplate'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('cal_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_showQuantity'] = array('exclude' => \true, 'inputType' => 'checkbox', 'eval' => array('tl_class' => 'w50 m12'), 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['cal_featured'] = array('exclude' => \true, 'inputType' => 'select', 'options' => array('all_items', 'featured', 'unfeatured'), 'reference' => &$GLOBALS['TL_LANG']['tl_module']['events'], 'eval' => array('tl_class' => 'w50'), 'sql' => "varchar(16) COLLATE ascii_bin NOT NULL default 'all_items'");
$bundles = \Contao\System::getContainer()->getParameter('kernel.bundles');
// Add the comments template drop-down menu
if (isset($bundles['ContaoCommentsBundle'])) {
    $GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader'] = \str_replace('{protected_legend:hide}', '{comment_legend:hide},com_template;{protected_legend:hide}', $GLOBALS['TL_DCA']['tl_module']['palettes']['eventreader']);
}
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_calendar extends \Contao\Backend
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
     * Get all calendars and return them as array
     *
     * @return array
     */
    public function getCalendars()
    {
        if (!$this->User->isAdmin && !\is_array($this->User->calendars)) {
            return array();
        }
        $arrCalendars = array();
        $objCalendars = $this->Database->execute("SELECT id, title FROM tl_calendar ORDER BY title");
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objCalendars->next()) {
            if ($security->isGranted(\Contao\CalendarBundle\Security\ContaoCalendarPermissions::USER_CAN_EDIT_CALENDAR, $objCalendars->id)) {
                $arrCalendars[$objCalendars->id] = $objCalendars->title;
            }
        }
        return $arrCalendars;
    }
    /**
     * Get all event reader modules and return them as array
     *
     * @return array
     */
    public function getReaderModules()
    {
        $arrModules = array();
        $objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id WHERE m.type='eventreader' ORDER BY t.name, m.name");
        while ($objModules->next()) {
            $arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
        }
        return $arrModules;
    }
    /**
     * Return the calendar formats depending on the module type
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getFormats(\Contao\DataContainer $dc)
    {
        if ($dc->activeRecord->type == 'eventmenu') {
            return array('cal_day', 'cal_month', 'cal_year');
        }
        return array('cal_list' => array('cal_day', 'cal_month', 'cal_year', 'cal_all'), 'cal_upcoming' => array('next_7', 'next_14', 'next_30', 'next_90', 'next_180', 'next_365', 'next_two', 'next_cur_month', 'next_cur_year', 'next_next_month', 'next_next_year', 'next_all'), 'cal_past' => array('past_7', 'past_14', 'past_30', 'past_90', 'past_180', 'past_365', 'past_two', 'past_cur_month', 'past_cur_year', 'past_prev_month', 'past_prev_year', 'past_all'));
    }
}
}

namespace {
// Add palettes to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['personalData'] = \str_replace(',editable', ',editable,newsletters', $GLOBALS['TL_DCA']['tl_module']['palettes']['personalData']);
$GLOBALS['TL_DCA']['tl_module']['palettes']['subscribe'] = '{title_legend},name,headline,type;{config_legend},nl_channels,nl_hideChannels,disableCaptcha;{text_legend},nl_text;{redirect_legend},jumpTo;{email_legend:hide},nl_subscribe;{template_legend:hide},nl_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['unsubscribe'] = '{title_legend},name,headline,type;{config_legend},nl_channels,nl_hideChannels,disableCaptcha;{redirect_legend},jumpTo;{email_legend:hide},nl_unsubscribe;{template_legend:hide},nl_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterlist'] = '{title_legend},name,headline,type;{config_legend},nl_channels;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['newsletterreader'] = '{title_legend},name,headline,type;{config_legend},nl_channels,overviewPage,customLabel;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
// Add fields to tl_module
$GLOBALS['TL_DCA']['tl_module']['fields']['newsletters'] = array('exclude' => \true, 'inputType' => 'checkbox', 'foreignKey' => 'tl_newsletter_channel.title', 'eval' => array('multiple' => \true), 'sql' => "blob NULL", 'relation' => array('type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_channels'] = array('exclude' => \true, 'inputType' => 'checkbox', 'options_callback' => array('tl_module_newsletter', 'getChannels'), 'eval' => array('multiple' => \true, 'mandatory' => \true), 'sql' => "blob NULL", 'relation' => array('table' => 'tl_newsletter_channel', 'type' => 'hasMany', 'load' => 'lazy'));
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_text'] = array('exclude' => \true, 'inputType' => 'textarea', 'eval' => array('rte' => 'tinyMCE', 'helpwizard' => \true), 'explanation' => 'insertTags', 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_hideChannels'] = array('exclude' => \true, 'inputType' => 'checkbox', 'sql' => "char(1) COLLATE ascii_bin NOT NULL default ''");
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_subscribe'] = array('exclude' => \true, 'inputType' => 'textarea', 'eval' => array('style' => 'height:120px', 'decodeEntities' => \true, 'alwaysSave' => \true), 'load_callback' => array(array('tl_module_newsletter', 'getSubscribeDefault')), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_unsubscribe'] = array('exclude' => \true, 'inputType' => 'textarea', 'eval' => array('style' => 'height:120px', 'decodeEntities' => \true, 'alwaysSave' => \true), 'load_callback' => array(array('tl_module_newsletter', 'getUnsubscribeDefault')), 'sql' => "text NULL");
$GLOBALS['TL_DCA']['tl_module']['fields']['nl_template'] = array('exclude' => \true, 'inputType' => 'select', 'options_callback' => static function () {
    return \Contao\Controller::getTemplateGroup('nl_');
}, 'eval' => array('includeBlankOption' => \true, 'chosen' => \true, 'tl_class' => 'w50'), 'sql' => "varchar(64) COLLATE ascii_bin NOT NULL default ''");
/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_newsletter extends \Contao\Backend
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
     * Load the default subscribe text
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function getSubscribeDefault($varValue)
    {
        if (\trim($varValue) === '') {
            $varValue = $GLOBALS['TL_LANG']['tl_module']['text_subscribe'][1];
        }
        return $varValue;
    }
    /**
     * Load the default unsubscribe text
     *
     * @param mixed $varValue
     *
     * @return mixed
     */
    public function getUnsubscribeDefault($varValue)
    {
        if (\trim($varValue) === '') {
            $varValue = $GLOBALS['TL_LANG']['tl_module']['text_unsubscribe'][1];
        }
        return $varValue;
    }
    /**
     * Get all channels and return them as array
     *
     * @return array
     */
    public function getChannels(\Contao\DataContainer $dc)
    {
        if (!$this->User->isAdmin && !\is_array($this->User->newsletters)) {
            return array();
        }
        $strQuery = "SELECT id, title FROM tl_newsletter_channel";
        // Show only channels with a redirect page in the web modules
        if (\in_array($dc->activeRecord->type, array('newsletterlist', 'newsletterreader'))) {
            $strQuery .= " WHERE jumpTo>0";
        }
        $strQuery .= " ORDER BY title";
        $arrChannels = array();
        $objChannels = $this->Database->execute($strQuery);
        $security = \Contao\System::getContainer()->get('security.helper');
        while ($objChannels->next()) {
            if ($security->isGranted(\Contao\NewsletterBundle\Security\ContaoNewsletterPermissions::USER_CAN_EDIT_CHANNEL, $objChannels->id)) {
                $arrChannels[$objChannels->id] = $objChannels->title;
            }
        }
        return $arrChannels;
    }
}
}

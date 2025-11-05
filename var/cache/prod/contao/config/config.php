<?php

namespace {
// Back end modules
$GLOBALS['BE_MOD'] = array(
    // Content modules
    'content' => array('article' => array('tables' => array('tl_article', 'tl_content'), 'table' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importTableWizardAction'), 'list' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importListWizardAction')), 'form' => array('tables' => array('tl_form', 'tl_form_field'), 'option' => array(\Contao\CoreBundle\Controller\BackendCsvImportController::class, 'importOptionWizardAction'))),
    // Design modules
    'design' => array('themes' => array('tables' => array('tl_theme', 'tl_module', 'tl_style_sheet', 'tl_style', 'tl_layout', 'tl_image_size', 'tl_image_size_item'), 'importTheme' => array(\Contao\Theme::class, 'importTheme'), 'exportTheme' => array(\Contao\Theme::class, 'exportTheme'), 'import' => array(\Contao\StyleSheets::class, 'importStyleSheet'), 'export' => array(\Contao\StyleSheets::class, 'exportStyleSheet')), 'page' => array('tables' => array('tl_page')), 'tpl_editor' => array('tables' => array('tl_templates'), 'new_tpl' => array('tl_templates', 'addNewTemplate'), 'compare' => array('tl_templates', 'compareTemplate'))),
    // Account modules
    'accounts' => array('member' => array('tables' => array('tl_member')), 'mgroup' => array('tables' => array('tl_member_group')), 'user' => array('tables' => array('tl_user')), 'group' => array('tables' => array('tl_user_group')), 'login' => array('tables' => array('tl_user'), 'hideInNavigation' => \true, 'disablePermissionChecks' => \true), 'security' => array('callback' => \Contao\ModuleTwoFactor::class, 'hideInNavigation' => \true, 'disablePermissionChecks' => \true)),
    // System modules
    'system' => array('files' => array('tables' => array('tl_files')), 'settings' => array('tables' => array('tl_settings')), 'maintenance' => array('callback' => \Contao\ModuleMaintenance::class), 'log' => array('tables' => array('tl_log')), 'preview_link' => array('tables' => array('tl_preview_link'), 'javascript' => 'bundles/contaocore/clipboard.min.js'), 'opt_in' => array('tables' => array('tl_opt_in'), 'resend' => array('tl_opt_in', 'resendToken')), 'undo' => array('tables' => array('tl_undo'), 'disablePermissionChecks' => \true)),
);
// Front end modules
$GLOBALS['FE_MOD'] = array('navigationMenu' => array('navigation' => \Contao\ModuleNavigation::class, 'customnav' => \Contao\ModuleCustomnav::class, 'breadcrumb' => \Contao\ModuleBreadcrumb::class, 'quicknav' => \Contao\ModuleQuicknav::class, 'quicklink' => \Contao\ModuleQuicklink::class, 'booknav' => \Contao\ModuleBooknav::class, 'articlenav' => \Contao\ModuleArticlenav::class, 'sitemap' => \Contao\ModuleSitemap::class), 'user' => array('login' => \Contao\ModuleLogin::class, 'logout' => \Contao\ModuleLogout::class, 'personalData' => \Contao\ModulePersonalData::class, 'registration' => \Contao\ModuleRegistration::class, 'changePassword' => \Contao\ModuleChangePassword::class, 'lostPassword' => \Contao\ModulePassword::class, 'closeAccount' => \Contao\ModuleCloseAccount::class), 'application' => array('form' => \Contao\Form::class, 'search' => \Contao\ModuleSearch::class), 'miscellaneous' => array('articlelist' => \Contao\ModuleArticleList::class, 'randomImage' => \Contao\ModuleRandomImage::class, 'html' => \Contao\ModuleHtml::class, 'rssReader' => \Contao\ModuleRssReader::class));
// Content elements
$GLOBALS['TL_CTE'] = array('texts' => array('headline' => \Contao\ContentHeadline::class, 'text' => \Contao\ContentText::class, 'html' => \Contao\ContentHtml::class, 'list' => \Contao\ContentList::class, 'table' => \Contao\ContentTable::class, 'code' => \Contao\ContentCode::class), 'accordion' => array('accordionSingle' => \Contao\ContentAccordion::class, 'accordionStart' => \Contao\ContentAccordionStart::class, 'accordionStop' => \Contao\ContentAccordionStop::class), 'slider' => array('sliderStart' => \Contao\ContentSliderStart::class, 'sliderStop' => \Contao\ContentSliderStop::class), 'links' => array('hyperlink' => \Contao\ContentHyperlink::class, 'toplink' => \Contao\ContentToplink::class), 'media' => array('image' => \Contao\ContentImage::class, 'gallery' => \Contao\ContentGallery::class, 'player' => \Contao\ContentMedia::class, 'youtube' => \Contao\ContentYouTube::class, 'vimeo' => \Contao\ContentVimeo::class), 'files' => array('download' => \Contao\ContentDownload::class, 'downloads' => \Contao\ContentDownloads::class), 'includes' => array('article' => \Contao\ContentArticle::class, 'alias' => \Contao\ContentAlias::class, 'form' => \Contao\Form::class, 'module' => \Contao\ContentModule::class, 'teaser' => \Contao\ContentTeaser::class));
// Back end form fields
$GLOBALS['BE_FFL'] = array('text' => \Contao\TextField::class, 'password' => \Contao\Password::class, 'textStore' => \Contao\TextStore::class, 'textarea' => \Contao\TextArea::class, 'select' => \Contao\SelectMenu::class, 'checkbox' => \Contao\CheckBox::class, 'checkboxWizard' => \Contao\CheckBoxWizard::class, 'radio' => \Contao\RadioButton::class, 'radioTable' => \Contao\RadioTable::class, 'inputUnit' => \Contao\InputUnit::class, 'trbl' => \Contao\TrblField::class, 'chmod' => \Contao\ChmodTable::class, 'picker' => \Contao\Picker::class, 'pageTree' => \Contao\PageTree::class, 'pageSelector' => \Contao\PageSelector::class, 'fileTree' => \Contao\FileTree::class, 'fileSelector' => \Contao\FileSelector::class, 'fileUpload' => \Contao\Upload::class, 'tableWizard' => \Contao\TableWizard::class, 'listWizard' => \Contao\ListWizard::class, 'optionWizard' => \Contao\OptionWizard::class, 'moduleWizard' => \Contao\ModuleWizard::class, 'keyValueWizard' => \Contao\KeyValueWizard::class, 'imageSize' => \Contao\ImageSize::class, 'timePeriod' => \Contao\TimePeriod::class, 'metaWizard' => \Contao\MetaWizard::class, 'sectionWizard' => \Contao\SectionWizard::class, 'serpPreview' => \Contao\SerpPreview::class, 'rootPageDependentSelect' => \Contao\RootPageDependentSelect::class);
// Front end form fields
$GLOBALS['TL_FFL'] = array('explanation' => \Contao\FormExplanation::class, 'html' => \Contao\FormHtml::class, 'fieldsetStart' => \Contao\FormFieldsetStart::class, 'fieldsetStop' => \Contao\FormFieldsetStop::class, 'text' => \Contao\FormTextField::class, 'password' => \Contao\FormPassword::class, 'textarea' => \Contao\FormTextArea::class, 'select' => \Contao\FormSelectMenu::class, 'radio' => \Contao\FormRadioButton::class, 'checkbox' => \Contao\FormCheckBox::class, 'upload' => \Contao\FormFileUpload::class, 'range' => \Contao\FormRange::class, 'hidden' => \Contao\FormHidden::class, 'captcha' => \Contao\FormCaptcha::class, 'submit' => \Contao\FormSubmit::class);
// Page types
$GLOBALS['TL_PTY'] = array('regular' => \Contao\PageRegular::class, 'forward' => \Contao\PageForward::class, 'redirect' => \Contao\PageRedirect::class, 'root' => \Contao\PageRoot::class, 'logout' => \Contao\PageLogout::class, 'error_401' => \Contao\PageError401::class, 'error_403' => \Contao\PageError403::class, 'error_404' => \Contao\PageError404::class);
// Maintenance
$GLOBALS['TL_MAINTENANCE'] = array(\Contao\Crawl::class, \Contao\PurgeData::class);
// Purge jobs
$GLOBALS['TL_PURGE'] = array('tables' => array('index' => array('callback' => array(\Contao\Automator::class, 'purgeSearchTables'), 'affected' => array('tl_search', 'tl_search_index', 'tl_search_term')), 'undo' => array('callback' => array(\Contao\Automator::class, 'purgeUndoTable'), 'affected' => array('tl_undo')), 'versions' => array('callback' => array(\Contao\Automator::class, 'purgeVersionTable'), 'affected' => array('tl_version')), 'log' => array('callback' => array(\Contao\Automator::class, 'purgeSystemLog'), 'affected' => array('tl_log')), 'crawl_queue' => array('callback' => array(\Contao\Automator::class, 'purgeCrawlQueue'), 'affected' => array('tl_crawl_queue'))), 'folders' => array('images' => array('callback' => array(\Contao\Automator::class, 'purgeImageCache'), 'affected' => array(\Contao\StringUtil::stripRootDir(\Contao\System::getContainer()->getParameter('contao.image.target_dir')))), 'previews' => array('callback' => array(\Contao\Automator::class, 'purgePreviewCache'), 'affected' => array(\Contao\StringUtil::stripRootDir(\Contao\System::getContainer()->getParameter('contao.image.preview.target_dir')))), 'scripts' => array('callback' => array(\Contao\Automator::class, 'purgeScriptCache'), 'affected' => array('assets/js', 'assets/css')), 'temp' => array('callback' => array(\Contao\Automator::class, 'purgeTempFolder'), 'affected' => array('system/tmp'))), 'custom' => array('pages' => array('callback' => array(\Contao\Automator::class, 'purgePageCache')), 'xml' => array('callback' => array(\Contao\Automator::class, 'generateXmlFiles')), 'symlinks' => array('callback' => array(\Contao\Automator::class, 'generateSymlinks'))));
// Backwards compatibility
// Image crop modes
$GLOBALS['TL_CROP'] = array('image_sizes' => array(), 'relative' => array('proportional', 'box'), 'exact' => array('crop', 'left_top', 'center_top', 'right_top', 'left_center', 'center_center', 'right_center', 'left_bottom', 'center_bottom', 'right_bottom'));
// Backwards compatibility
// Cron jobs
$GLOBALS['TL_CRON'] = array('monthly' => array(), 'weekly' => array(), 'daily' => array('purgeTempFolder' => array(\Contao\Automator::class, 'purgeTempFolder'), 'purgeRegistrations' => array(\Contao\Automator::class, 'purgeRegistrations'), 'purgeOptInTokens' => array(\Contao\Automator::class, 'purgeOptInTokens')), 'hourly' => array(), 'minutely' => array());
// Hooks
$GLOBALS['TL_HOOKS'] = array('getSystemMessages' => array(array(\Contao\Messages::class, 'languageFallback')));
// Register the auto_item keywords
$GLOBALS['TL_AUTO_ITEM'] = array('items', 'events');
// Register the supported CSS units
$GLOBALS['TL_CSS_UNITS'] = array('px', '%', 'em', 'rem', 'vw', 'vh', 'vmin', 'vmax', 'ex', 'pt', 'pc', 'in', 'cm', 'mm');
// Wrapper elements
$GLOBALS['TL_WRAPPERS'] = array('start' => array('accordionStart', 'sliderStart', 'fieldsetStart'), 'stop' => array('accordionStop', 'sliderStop', 'fieldsetStop'), 'single' => array('accordionSingle'), 'separator' => array());
// Models
$GLOBALS['TL_MODELS'] = array('tl_article' => \Contao\ArticleModel::class, 'tl_content' => \Contao\ContentModel::class, 'tl_files' => \Contao\FilesModel::class, 'tl_form_field' => \Contao\FormFieldModel::class, 'tl_form' => \Contao\FormModel::class, 'tl_image_size_item' => \Contao\ImageSizeItemModel::class, 'tl_image_size' => \Contao\ImageSizeModel::class, 'tl_layout' => \Contao\LayoutModel::class, 'tl_member_group' => \Contao\MemberGroupModel::class, 'tl_member' => \Contao\MemberModel::class, 'tl_module' => \Contao\ModuleModel::class, 'tl_opt_in' => \Contao\OptInModel::class, 'tl_page' => \Contao\PageModel::class, 'tl_style' => \Contao\StyleModel::class, 'tl_style_sheet' => \Contao\StyleSheetModel::class, 'tl_theme' => \Contao\ThemeModel::class, 'tl_user_group' => \Contao\UserGroupModel::class, 'tl_user' => \Contao\UserModel::class);
// Other global arrays
$GLOBALS['TL_PERMISSIONS'] = array();
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['accounts']['debug'] = array('enable' => array(\Contao\ManagerBundle\Controller\DebugController::class, 'enableAction'), 'disable' => array(\Contao\ManagerBundle\Controller\DebugController::class, 'disableAction'), 'hideInNavigation' => \true, 'disablePermissionChecks' => \true);
}

namespace {
// Add back end modules
$GLOBALS['BE_MOD']['content']['faq'] = array('tables' => array('tl_faq_category', 'tl_faq'));
// Front end modules
$GLOBALS['FE_MOD']['faq'] = array('faqlist' => \Contao\ModuleFaqList::class, 'faqreader' => \Contao\ModuleFaqReader::class, 'faqpage' => \Contao\ModuleFaqPage::class);
// Style sheet
if (\defined('TL_MODE') && \TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/contaofaq/faq.min.css|static';
}
// Register hooks
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array(\Contao\ModuleFaq::class, 'getSearchablePages');
// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'faqs';
$GLOBALS['TL_PERMISSIONS'][] = 'faqp';
// Models
$GLOBALS['TL_MODELS']['tl_faq_category'] = \Contao\FaqCategoryModel::class;
$GLOBALS['TL_MODELS']['tl_faq'] = \Contao\FaqModel::class;
}

namespace {
// Add content element
$GLOBALS['TL_CTE']['includes']['comments'] = \Contao\ContentComments::class;
// Front end modules
$GLOBALS['FE_MOD']['application']['comments'] = \Contao\ModuleComments::class;
// Back end modules
$GLOBALS['BE_MOD']['content']['comments'] = array('tables' => array('tl_comments'), 'stylesheet' => 'bundles/contaocomments/comments.min.css');
// Cron jobs
$GLOBALS['TL_CRON']['daily']['purgeCommentSubscriptions'] = array(\Contao\Comments::class, 'purgeSubscriptions');
// Models
$GLOBALS['TL_MODELS']['tl_comments'] = \Contao\CommentsModel::class;
$GLOBALS['TL_MODELS']['tl_comments_notify'] = \Contao\CommentsNotifyModel::class;
}

namespace {
$GLOBALS['FE_MOD']['miscellaneous']['calc_tools'] = \Pacehub\ToolsCalculatorsBundle\Module\CalcTools::class;
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['content']['news'] = array('tables' => array('tl_news_archive', 'tl_news', 'tl_news_feed', 'tl_content'), 'table' => array(\Contao\TableWizard::class, 'importTable'), 'list' => array(\Contao\ListWizard::class, 'importList'));
// Front end modules
$GLOBALS['FE_MOD']['news'] = array('newslist' => \Contao\ModuleNewsList::class, 'newsreader' => \Contao\ModuleNewsReader::class, 'newsarchive' => \Contao\ModuleNewsArchive::class, 'newsmenu' => \Contao\ModuleNewsMenu::class);
// Cron jobs
$GLOBALS['TL_CRON']['daily']['generateNewsFeeds'] = array(\Contao\News::class, 'generateFeeds');
// Style sheet
if (\defined('TL_MODE') && \TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/contaonews/news.min.css|static';
}
// Register hooks
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array(\Contao\News::class, 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array(\Contao\News::class, 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array(\Contao\News::class, 'generateFeeds');
// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'news';
$GLOBALS['TL_PERMISSIONS'][] = 'newp';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'newsfeedp';
// Models
$GLOBALS['TL_MODELS']['tl_news_archive'] = \Contao\NewsArchiveModel::class;
$GLOBALS['TL_MODELS']['tl_news_feed'] = \Contao\NewsFeedModel::class;
$GLOBALS['TL_MODELS']['tl_news'] = \Contao\NewsModel::class;
}

namespace {
// Front end module
$GLOBALS['FE_MOD']['application']['listing'] = \Contao\ModuleListing::class;
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['content']['calendar'] = array('tables' => array('tl_calendar', 'tl_calendar_events', 'tl_calendar_feed', 'tl_content'), 'table' => array(\Contao\TableWizard::class, 'importTable'), 'list' => array(\Contao\ListWizard::class, 'importList'));
// Front end modules
$GLOBALS['FE_MOD']['events'] = array('calendar' => \Contao\ModuleCalendar::class, 'eventreader' => \Contao\ModuleEventReader::class, 'eventlist' => \Contao\ModuleEventlist::class, 'eventmenu' => \Contao\ModuleEventMenu::class);
// Cron jobs
$GLOBALS['TL_CRON']['daily']['generateCalendarFeeds'] = array(\Contao\Calendar::class, 'generateFeeds');
// Style sheet
if (\defined('TL_MODE') && \TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/contaocalendar/calendar.min.css|static';
}
// Register hooks
$GLOBALS['TL_HOOKS']['removeOldFeeds'][] = array(\Contao\Calendar::class, 'purgeOldFeeds');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array(\Contao\Calendar::class, 'getSearchablePages');
$GLOBALS['TL_HOOKS']['generateXmlFiles'][] = array(\Contao\Calendar::class, 'generateFeeds');
// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'calendars';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarp';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeeds';
$GLOBALS['TL_PERMISSIONS'][] = 'calendarfeedp';
// Models
$GLOBALS['TL_MODELS']['tl_calendar_events'] = \Contao\CalendarEventsModel::class;
$GLOBALS['TL_MODELS']['tl_calendar_feed'] = \Contao\CalendarFeedModel::class;
$GLOBALS['TL_MODELS']['tl_calendar'] = \Contao\CalendarModel::class;
}

namespace {
// Back end modules
$GLOBALS['BE_MOD']['content']['newsletter'] = array('tables' => array('tl_newsletter_channel', 'tl_newsletter', 'tl_newsletter_recipients'), 'send' => array(\Contao\Newsletter::class, 'send'), 'import' => array(\Contao\Newsletter::class, 'importRecipients'), 'stylesheet' => 'bundles/contaonewsletter/newsletter.min.css');
// Front end modules
$GLOBALS['FE_MOD']['newsletter'] = array('subscribe' => \Contao\ModuleSubscribe::class, 'unsubscribe' => \Contao\ModuleUnsubscribe::class, 'newsletterlist' => \Contao\ModuleNewsletterList::class, 'newsletterreader' => \Contao\ModuleNewsletterReader::class);
// Register hooks
$GLOBALS['TL_HOOKS']['createNewUser'][] = array(\Contao\Newsletter::class, 'createNewUser');
$GLOBALS['TL_HOOKS']['activateAccount'][] = array(\Contao\Newsletter::class, 'activateAccount');
$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array(\Contao\Newsletter::class, 'getSearchablePages');
$GLOBALS['TL_HOOKS']['closeAccount'][] = array(\Contao\Newsletter::class, 'removeSubscriptions');
// Add permissions
$GLOBALS['TL_PERMISSIONS'][] = 'newsletters';
$GLOBALS['TL_PERMISSIONS'][] = 'newsletterp';
// Cron jobs
$GLOBALS['TL_CRON']['daily']['purgeNewsletterSubscriptions'] = array(\Contao\Newsletter::class, 'purgeSubscriptions');
// Models
$GLOBALS['TL_MODELS']['tl_newsletter_channel'] = \Contao\NewsletterChannelModel::class;
$GLOBALS['TL_MODELS']['tl_newsletter_deny_list'] = \Contao\NewsletterDenyListModel::class;
$GLOBALS['TL_MODELS']['tl_newsletter'] = \Contao\NewsletterModel::class;
$GLOBALS['TL_MODELS']['tl_newsletter_recipients'] = \Contao\NewsletterRecipientsModel::class;
}

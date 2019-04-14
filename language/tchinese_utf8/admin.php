<?php
/**
 * Events module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright  XOOPS Project (https://xoops.org)
 * @license    http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package    Events
 * @since      2.5
 * @author     tad
 * @version    $Id $
 **/
require_once "../../tadtools/language/{$xoopsConfig['language']}/admin_common.php";
define('_TAD_NEED_TADTOOLS', ' 需要 tadtools 模組，可至<a href="http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50" target="_blank">Tad教材網</a>下載。');

//tad_timeline-list
define('_MA_TAD_TIMELINE_EVENT_SN', '事件編號');
define('_MA_TAD_TIMELINE_YEAR', '事件年');
define('_MA_TAD_TIMELINE_MONTH', '事件月');
define('_MA_TAD_TIMELINE_DAY', '事件日');
define('_MA_TAD_TIMELINE_Y', '年');
define('_MA_TAD_TIMELINE_M', '月');
define('_MA_TAD_TIMELINE_D', '日');
define('_MA_TAD_TIMELINE_TEXT_HEADLINE', '事件標題');
define('_MA_TAD_TIMELINE_TEXT_TEXT', '事件說明');
define('_MA_TAD_TIMELINE_EVENT_UID', '發布者');
define('_MA_TAD_TIMELINE_UP_EVENT_SN', '上傳');
define('_MA_TAD_TIMELINE_SHOW_EVENT_SN_FILES', '上傳');
define('_MA_TAD_TIMELINE_JOSN_TITLE', '重要紀事');
define('_MA_TAD_TIMELINE_JOSN_TEXT', '重要紀事');

define('_MA_TADTIMELI_PERM_TITLE', '重要紀事細部權限設定');
define('_MA_TADTIMELI_PERM_DESC', '請勾選欲開放給群組使用的權限：');
define('_MA_TADTIMELI_EDIT_EVENT', '可新增、編輯、管理重要紀事');

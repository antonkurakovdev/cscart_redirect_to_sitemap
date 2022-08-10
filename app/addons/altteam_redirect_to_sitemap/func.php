<?php

/*****************************************************************************
 * This is a commercial software, only users who have purchased a  valid
 * license and accepts the terms of the License Agreement can install and use  
 * this program.
 *----------------------------------------------------------------------------
 * @copyright  LCC Alt-team: https://www.alt-team.com
 * @module     "Alt-team: Redirect to sitemap"
 * @license    https://www.alt-team.com/addons-license-agreement.html
****************************************************************************/

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_altteam_redirect_to_sitemap_dispatch_before_display()
{
	$status = Registry::get('view')->getTemplateVars('exception_status');
	if ($status == CONTROLLER_STATUS_NO_PAGE) {
		fn_redirect('sitemap.view');
		fn_set_notification('W', __('warning'), __('no_pages'));
	}
}
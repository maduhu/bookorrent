<?php
$lang = isset($_COOKIE['CakeCookie']['user_language']) ?  $_COOKIE['CakeCookie']['user_language'] : Configure::read('site.language');
$js_files = array(
	JS . 'libs/jquery.js',
	JS . 'libs/jquery-migrate-1.2.1.js',
	JS . 'libs/bootstrap-dropdown.js',
	JS . 'libs/bootstrap-collapse.js',
	JS . 'libs/bootstrap-tab.js',
	JS . 'libs/bootstrap-tooltip.js',
	JS . 'libs/bootstrap-affix.js',
	JS . 'libs/bootstrap-modal.js',
	JS . 'libs/bootstrap-alert.js',
	JS . 'libs/bootstrap-datetimepicker.min.js',		
	JS . 'libs/bootstrap-transition.js',
	JS . 'libs/bootstrap-carousel.js',
	JS . 'libs/jquery.easytabs.min.js',
	JS . 'libs/jquery.form.js',
	JS . 'libs/jquery.blockUI.js',
	JS . 'libs/jquery.metadata.js',
	JS . 'libs/jquery.cookie.js',
	JS . 'libs/jquery.uploader.js',
	JS . 'libs/AC_RunActiveContent.js',
	JS . 'libs/jquery.fuploader.js',
	JS . 'libs/jquery.flash.js',
	JS . 'libs/jquery-ui-1.10.3.custom.js',
	JS . 'libs/jquery.simplyCountable.js',
	JS . 'libs/wdCalendar_lang_US.js',
	JS . 'libs/datepicker_lang_US.js',
	JS . 'libs/date.format.js',
	JS . 'libs/jquery.datepick.js',
	JS . 'libs/detectmobilebrowser.js',
	JS . 'libs/jquery.ui.timepicker.js',
	JS . 'libs/jquery.cyclic-fade.js',
	JS . 'libs/jquery.datepick.ext.js',
	JS . 'libs/jquery.autogrowtextarea.js',
	JS . 'libs/markerclusterer.js',
	JS . 'libs/jquery.oauthpopup.js',
	JS . 'libs/jquery.easy-pie-chart.min.js',
	JS . 'libs/jquery.fullBg.js',
	JS . 'libs/jquery.scrollTo.js',
	JS . 'libs/jquery.pjax.js',
	JS . 'libs/jquery.timeago.js',
	JS . 'libs/jquery.payment.js',
	JS . 'libs/uploader/load-image.min.js',
	JS . 'libs/uploader/canvas-to-blob.min.js',	
	JS . 'libs/uploader/tmpl.min.js',
	JS . 'libs/uploader/jquery.iframe-transport.js',
	JS . 'libs/uploader/jquery.fileupload.js',
	JS . 'libs/uploader/jquery.fileupload-process.js',
	JS . 'libs/uploader/jquery.fileupload-image.js',
	JS . 'libs/uploader/jquery.fileupload-validate.js',
	JS . 'libs/uploader/jquery.fileupload-ui.js',
	JS . 'libs/uploader/locale.js',
	JS . 'user.js'
);
if($lang != 'en'){
	$js_files[] = JS . 'libs/locales/bootstrap-datepicker.'.$lang.'.js';
	$js_files[] = JS . 'libs/locales/jquery.timeago.'.$lang.'.js';
	$js_files[] = JS . 'libs/locales/jquery.datepick-'.$lang.'.js';
	$js_files[] = JS . 'libs/locales/wdCalendar_lang_'.$lang.'.js';
}

$js_files[] = JS . 'libs/jquery.calendar.js';
$js_files[] = JS . 'common.js';


if ($this->request->params['controller'] == 'item_users' && $this->request->params['action'] == 'index' && $this->request->params['named']['type'] == 'myworks' && !empty($this->request->params['named']['status']) && $this->request->params['named']['status'] == 'waiting_for_acceptance') {
	array_push($js_files, 'libs/jquery.datepicker.js');
}
$js_files = Set::merge($js_files, Configure::read('site.default.js_files'));
?>
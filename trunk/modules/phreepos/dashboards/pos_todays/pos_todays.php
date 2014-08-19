<?php
// +-----------------------------------------------------------------+
// |                   PhreeBooks Open Source ERP                    |
// +-----------------------------------------------------------------+
// | Copyright(c) 2008-2014 PhreeSoft      (www.PhreeSoft.com)       |
// +-----------------------------------------------------------------+
// | This program is free software: you can redistribute it and/or   |
// | modify it under the terms of the GNU General Public License as  |
// | published by the Free Software Foundation, either version 3 of  |
// | the License, or any later version.                              |
// |                                                                 |
// | This program is distributed in the hope that it will be useful, |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of  |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the   |
// | GNU General Public License for more details.                    |
// +-----------------------------------------------------------------+
//  Path: /modules/phreepos/dashboards/pos_todays/pos_todays.php
//
namespace phreepos\dashboards\pos_todays;
class pos_todays extends \core\classes\ctl_panel {
	public $id 					= 'pos_today';
	public $description	 		= CP_POS_TODAYS_DESCRIPTION;
	public $security_id  		= SECURITY_ID_POS_MGR;
	public $text		 		= CP_POS_TODAYS_TITLE;
	public $version      		= '3.5';
	public $size_params			= 1;
	public $default_params 		= array('num_rows'=> 0);
	public $module_id 			= 'phreepos';

	function output($params) {
		global $db, $currencies;
		if(count($params) != $this->size_params){ //upgrading
			$params = $this->upgrade($params);
		}
		$list_length = array();
		$contents = '';
		$control  = '';
		for ($i = 0; $i <= $this->max_length; $i++) $list_length[] = array('id' => $i, 'text' => $i);
		// Build control box form data
		$control  = '<div class="row">';
		$control .= '<div style="white-space:nowrap">' . TEXT_SHOW . TEXT_SHOW_NO_LIMIT;
		$control .= html_pull_down_menu('pos_todays_field_0', $list_length, $params['num_rows']);
		$control .= html_submit_field('sub_pos_todays', TEXT_SAVE);
		$control .= '</div></div>';

		// Build content box
		$total = 0;
		$sql = "select id, purchase_invoice_id, total_amount, bill_primary_name, currencies_code, currencies_value
		  from " . TABLE_JOURNAL_MAIN . "
		  where journal_id = 19 and post_date = '" . date('Y-m-d', time()) . "' order by purchase_invoice_id";
		if ($params['num_rows']) $sql .= " limit " . $params['num_rows'];
		$result = $db->Execute($sql);
		if ($result->RecordCount() < 1) {
		  	$contents = TEXT_NO_RESULTS_FOUND;
		} else {
			while (!$result->EOF) {
			 	$total += $result->fields['total_amount'];
				$contents .= '<div style="float:right">' . $currencies->format_full($result->fields['total_amount'], true, $result->fields['currencies_code'], $result->fields['currencies_value']) . '</div>';
				$contents .= '<div>';
				$contents .= $result->fields['purchase_invoice_id'];
				if($result->fields['bill_primary_name']<>''){
					$contents .= ' - ' . htmlspecialchars(gen_trim_string($result->fields['bill_primary_name'], 20, true));
				}
				$contents .= '</a></div>' . chr(10);
				$result->MoveNext();
			}
		}
		if (!$params['num_rows'] && $result->RecordCount() > 0) {
		  	$contents .= '<div style="float:right"><b>' . $currencies->format_full($total, true, $result->fields['currencies_code'], $result->fields['currencies_value']) . '</b></div>';
		  	$contents .= '<div><b>' . TEXT_TOTAL . '</b></div>' . chr(10);
		}
		return $this->build_div('', $contents, $control);
	}

	function update() {
		if(count($this->params) == 0){
			$this->params['num_rows'] = db_prepare_input($_POST['pos_todays_field_0']);
		}
		parent::update();
	}

}
?>
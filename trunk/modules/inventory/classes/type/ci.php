<?php
require_once(DIR_FS_MODULES . 'inventory/classes/inventory.php');
class ci extends inventory {//Charge Item
	public $inventory_type			= 'ci';
	public $title 					= INV_TYPES_CI;
	public $account_sales_income	= INV_CHARGE_DEFAULT_SALES;
	public $account_inventory_wage	= INV_CHARGE_DEFAULT_INVENTORY;
	public $account_cost_of_sales	= null;	
	public $cost_method				= 'f';
	public $posible_cost_methodes   = array('f');

	function update_inventory_status($sku, $field, $adjustment, $item_cost, $vendor_id, $desc){
		return true;
	}
}
/*=======================================*/
/** Change number or products per row to 3 **/
/** https://docs.woocommerce.com/document/change-number-of-products-per-row/ **/
/*=======================================*/
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

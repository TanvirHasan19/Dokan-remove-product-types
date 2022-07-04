/** Remove Product Types */
function remove_product_types( $product_types ){
    unset( $product_types['variable'] );
	unset( $product_types['external'] );
	unset( $product_types['grouped'] );
    return $product_types;
}
add_filter( 'dokan_product_types', 'remove_product_types', 11 );

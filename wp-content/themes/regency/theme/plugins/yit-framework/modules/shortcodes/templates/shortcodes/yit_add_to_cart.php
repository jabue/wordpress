<?php

global $woocommerce, $product;

$id = ( isset($id) ) ? (int) $id : '';

$product = function_exists( ' get_product' ) ? get_product( $id ) : wc_get_product( $id ) ;
if (! is_object( $product) || ! $product->is_purchasable() ) return;

$attribute_id = ( isset($attribute_id) ) ? (int) $attribute_id : '';
$show_price = ( isset($show_price) && $show_price == 'yes' ) ? true : false;
$show_cart = ( isset($show_cart) && $show_cart == 'yes' ) ? true : false;
$show_quantity = ( isset($show_quantity) && $show_quantity == 'yes' ) ? true : false;
$default_quantity = ( isset($default_quantity) && $default_quantity > 0 ) ? $default_quantity : 1;

$btn_added_classes = apply_filters( 'yit_sc_add_to_cart_btn_classes','' );

?>

<div class="woocommerce sc_add_to_cart <?php esc_attr( $vc_css ) ?>">

<?php if ( $product->is_in_stock()  ) : ?>
	<?php if ($product->product_type == 'simple') : ?>
		<?php if ( $show_price ) : ?>
           <div class="sc_add_to_cart_price">
            <?php echo $product->get_price_html(); ?>
           </div>
       <?php endif; ?>
		<?php if ( $show_cart ) : ?>
			<form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post" enctype='multipart/form-data'>
                <?php
                if ( ! $product->is_sold_individually() && $show_quantity )
                    woocommerce_quantity_input( array(
                        'input_value'  	=> $default_quantity,
                        'min_value' => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
                        'max_value' => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product )
                    ) );
                ?>
                <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
			 	<button type="submit" class="single_add_to_cart_button button <?php echo $btn_added_classes;?>"><?php echo apply_filters('single_add_to_cart_text', __( 'Add to cart', 'yit' ), $product->product_type); ?></button>
			</form>
		<?php endif ?>
	<?php elseif ($product->product_type == 'variable' && $attribute_id != '') : ?>
		<?php
			$attributes = $product->get_available_variations();

			foreach ($attributes as $key){
				if ( $key['variation_id'] == $attribute_id ): 
					$select = '';
					foreach ( $key['attributes'] as $key => $value ){						
						$select .= '<select name="' . $key . '" style="display: none;">	    				
					    				<option value="' . $value . '" class="active" selected="selected"></option>
					    			</select>';
					}
				endif;
			}
		?>
		<?php if ( $show_price ) :
			$variation = $product->get_child( $attribute_id );?>
            <div class="sc_add_to_cart_price">
			    <?php echo $variation->get_price_html();?>
            </div>
		<?php endif ?>
		<?php if ( $show_cart ) : ?>
			<form data-product_id="<?php echo $id ?>" enctype="multipart/form-data" method="post" class="variations_form cart group" action="<?php echo esc_url( $product->add_to_cart_url() ); ?>">
				<input type="hidden" value="1" name="quantity">
			    <div class="variations">	    		
	            	<?php echo $select ?>    
			    </div>

                <div class="variations_button">
                    <?php woocommerce_quantity_input(); ?>
                    <button type="submit" class="single_add_to_cart_button button alt <?php echo $btn_added_classes;?>"><?php echo $product->single_add_to_cart_text(); ?></button>
                </div>

                <input type="hidden" name="add-to-cart" value="<?php echo $product->id; ?>" />
                <input type="hidden" name="product_id" value="<?php echo esc_attr( $id ); ?>" />
                <input type="hidden" value="<?php echo $attribute_id ?>" name="variation_id">

			</form>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>
</div>
<main class="main-wrapper">

    <!-- Start Cart Area  -->
    <div class="axil-product-cart-area axil-section-gap">
        <div class="container">
            <div class="axil-product-cart-wrap">
                <div class="product-table-heading">
                    <h4 class="title">Your Cart</h4>
                    <a href="fashionApp.php?act=clear_cart" class="cart-clear">Clear Shoping Cart</a>
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-cart-table mb--40">
                        <thead>
                            <tr>
                                <th scope="col" class="product-remove"></th>
                                <th scope="col" class="product-thumbnail">Product</th>
                                <th scope="col" class="product-title">Name</th>
                                <th scope="col" class="product-size">Size</th>
                                <th scope="col" class="product-price">Price</th>
                                <th scope="col" class="product-quantity">Quantity</th>
                                <th scope="col" class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <!-- <input type="number" class="quantity-input" value="'.$item[4].'">
                        <div class="pro-qty">
                        <input type="number" class="quantity-input" value="'.$item[4].'">
                        </div> -->
                        <tbody>
                            <?php
                            // unset($_SESSION['cart']);
                            $total_final = 0;
                            $tax = 0;
                            $i=0;
                            if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0))
                            {
                                // var_dump($_SESSION['cart']);
                                foreach($_SESSION['cart'] as $item)
                                {
                                    $total = $item[3] * $item[4];
                                    echo '
                                    <tr>
                                        <td class="product-remove"><a href="fashionApp.php?act=removeProductSingle&id='.$item[0].'" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                                        <td style="width: 80px; height: 80px;" class="product-thumbnail fix_acount_pic"><a href="fashionApp.php?act=detail_product&id='.$item[0].'"><img src="../uploads/'.$item[2].'" alt="Digital Product"></a></td>
                                        <td class="product-title"><a href="fashionApp.php?act=detail_product&id='.$item[0].'">'.$item[1].'</a></td>
                                        <td class="product-price" data-title="Price"><span class="currency-symbol">'.$item[5].'</span></td>
                                        <td class="product-price" data-title="Price"><span class="currency-symbol">'.number_format($item[3]).'đ</span></td>
                                        <td class="product-price" data-title="quantity"><span class="currency-symbol">'.$item[4].'</span></td>
                                        <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">'.number_format($total).'đ</span></td>
                                    </tr>
                                    </tbody>
                                    ';
                                    $total_final +=$total;
                                    $tax=$total_final * 0.1;
                                }
                                echo'</table>

                                

                            </form>
                            ';
                            }
                        ?>
                            <script>
                            function submitForm(formIndex) {
                                var form = document.getElementById('check_cart_product_' + formIndex);
                                form.submit();
                            }
                            </script>

                            <!-- End Cart Area  -->

</main>
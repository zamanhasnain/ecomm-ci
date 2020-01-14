<link href="<?= base_url('templatecss/style-zaman.css') ?>" rel="stylesheet" />
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$item1 = 1;
$item2 = 2;
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 topspace" >
                <div class="card" style="margin-top: 100px">
                    <div class="card-header">
                        My Cart (10)
                    </div>
                    <div class="card-body m-0 p-0">
                        <!-- item list start-->
                        <div class="col-md-12 px-size">
                            <div class="alert alert-dismissible fade show p-0 mx-auto" role="alert ">
                                <div class="d-flex flex-row">
                                    <div class="col-md-3 p-0 col-sm-2" style="width: auto;">
                                        <div><img src="<?= base_url('template/imgs/food55.png') ?>" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-md-9 col-sm-10 font-size">
                                        <span class="badge badge-primary mt-2">25% OFF</span>
                                        <p class="py-0 my-0">Milkfood Rich Desi Ghee (Carton)</p>
                                        <p class="text-muted pt-0 mt-0">1l</p>
                                        <span class="qty">
                                            <span class="add-more-item" style="">
                                                <span class="minus bg-white text-danger border minus" id="minus_btn_<?php echo $item1;?>" onclick="minusItem(<?php echo $item1;?>);">-</span>
                                                <input type="number" id="qty_<?php echo $item1;?>" class="input-cart" name="qty" value="1" >
                                                <span class="plus bg-dark bg-white text-danger border plus" id="plus_btn_<?php echo $item1;?>" onclick="plusItem(<?php echo $item1;?>);">+</span>
                                            </span>
                                        </span>
                                        <span class="pl-1">x ₹<span id="unit_price_<?php echo $item1;?>">264</span>
                                    </span>
                                    <span class="text-muted" style="text-decoration: line-through;"> ₹398</span>
                                    <span class="margin font-weight-bold" > ₹<span id="item_tot_price_<?php echo $item1;?>">264</span></span>
                                </div>
                                <button type="button" class="close p-0" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bottom"></div>
                    <!-- item list end  --> 
                    <!-- item list start-->
                    <div class="col-md-12 px-size">
                        <div class="alert alert-dismissible fade show p-0 mx-auto" role="alert ">
                            <div class="d-flex flex-row">
                                <div class="col-md-3 p-0 col-sm-2" style="width: auto;">
                                    <div><img src="<?= base_url('template/imgs/food55.png') ?>" class="img-fluid" alt=""></div>
                                </div>
                                <div class="col-md-9 col-sm-10 font-size">
                                    <span class="badge badge-primary mt-2">25% OFF</span>
                                    <p class="py-0 my-0">Milkfood Rich Desi Ghee (Carton)</p>
                                    <p class="text-muted pt-0 mt-0">1l</p>
                                    <span class="qty">
                                        <span class="add-more-item" style="">
                                            <span class="minus bg-white text-danger border minus" id="minus_btn_<?php echo $item2;?>" onclick="minusItem(<?php echo $item2;?>);">-</span>
                                            <input type="number" id="qty_<?php echo $item2;?>" class="input-cart" name="qty" value="1" >
                                            <span class="plus bg-dark bg-white text-danger border plus" id="plus_btn_<?php echo $item2;?>" onclick="plusItem(<?php echo $item2;?>);">+</span>
                                        </span>
                                    </span>
                                    <span class="pl-1">x ₹<span id="unit_price_<?php echo $item2;?>">199</span>
                                </span>
                                <span class="text-muted" style="text-decoration: line-through;" > ₹398</span>
                                <span class="margin font-weight-bold"> ₹<span id="item_tot_price_<?php echo $item2;?>">264</span></span>
                            </div>
                            <button type="button" class="close p-0" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bottom"></div>
                <!-- item list end  --> 
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-4" >
        <div class="card" style="position: sticky;top:100px;">
            <div class="card-header">
                PRICE DETAILS
            </div>
            <div class="card-body">
                <div class="d-flex mb-2 flex-row">
                    <div class="col-md-6">
                        Price (2 items)
                    </div>
                    <div class="col-md-6 text-right">
                        <span class="pl-1"> ₹<input type="number" class="input-checkout-total" name="" value="264">
                        </span>
                    </div>
                </div>
                <div class="d-flex my-4 flex-row">
                    <div class="col-md-6">
                        Delivery Fee
                    </div>
                    <div class="col-md-6 text-right">
                        <span class="pl-1"> ₹<input type="number" class="input-checkout-total" name="" value="264">
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-row my-4">
                    <div class="col-md-6">
                        Total
                    </div>
                    <div class="col-md-6 text-right">
                        <span class="pl-1"> ₹<input type="number" class="input-checkout-total" name="" value="264">
                        </span>
                    </div>
                </div>
                <div>
                    <button type="button" id="" class="btn btn-outline-success btn-rounded  py-1 mt-3 mb-3 btn-block" style="
                    border-radius: 1.25rem;
                    ">Checkout</button>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</section>

<script src="<?= base_url('templatejs/cart.js') ?>"></script>


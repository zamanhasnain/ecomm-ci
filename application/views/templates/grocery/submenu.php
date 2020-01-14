<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>



<style>

  .sidebarSubmenu::-webkit-scrollbar-track
  {

    border-radius: 7px;

  }

  .sidebarSubmenu::-webkit-scrollbar
  {
    width: 5px;

  }

  .sidebarSubmenu::-webkit-scrollbar-thumb
  {
    border-radius: 7px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color:rgb(127,127,127);
  }

  [data-toggle="collapse"]:after {
    font-family: 'FontAwesome';
    color: rgb(81,170,27);
    margin-top: 3px;
    font-size: 12px;
    content:"\f068";
    float: left;

  }   
  [data-toggle="collapse"].collapsed:after {
   content:"\f067";
 }

</style>
<nav class=" navbar navbar-expand-md text-muted bg-white d-none d-sm-none d-md-block" style="position: sticky; top: 79px; z-index:100">
  <div class="container-fluid">
    <a href="#" class="navbar-brand text-dark"> <i class="fa fa-shopping-basket"></i> Super Store - Mandawali</a>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-muted font-weight-normal " href="#">Grocery & Staples</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted font-weight-normal" href="#">Vegetables & Fruits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted font-weight-normal" href="#">Personal Care</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted font-weight-normal" href="#">Household Items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted font-weight-normal" href="#">Home & Kitchen</a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
           <a class="btn border-0 dropdown-toggle text-muted" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow: none;">
            More
          </a>
          <div class="dropdown-menu subMenuDropdown" aria-labelledby="dropdownMenuButton">

            <a class="dropdown-item text-muted" href="#">Biscuits,Snacks& Chocolates</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-muted" href="#">Beverages</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-muted" href="#">Kitchen</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-muted" href="#">Breakfast & Dairy</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-muted" href="#">Grofres Exclusive</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-muted" href="#">Fresh and frozen Food</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-muted" href="#">Baby and Kids</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-muted" href="#">Pet care</a>
            <div class="dropdown-divider"></div>
          </div>
        </div>
      </div>
    </nav>

    <!-- ---left sidebar-----> 

    <div class="container-fluid mt-2">
      <!-- Button trigger modal -->

      <div class="row" style="margin-top: 100px;">
        <div class="col-md-3 sidebarSubmenu pr-0 d-none d-sm-none d-md-block" >
          <div class="card">
           <nav id="sidebar">
             <a href="" class="list-group-item list-group-item-action border-top-0" data-toggle=""><h6 class="text-center pt-4 pb-1">Product Category</h6> </a>
             <div id="accordion" class="accordion">
              <div class=" mb-0">
                <div class="card-header collapsed bg-white" data-toggle="collapse" href="#collapseOne">
                  <a class="card-title">
                    &nbsp;New Launches
                  </a>
                </div>
                <div id="collapseOne" class="card-body collapse" data-parent="" style="padding: 0;">
                  <ul class=" list-group-flush" id="collapse2 ">
                    <a href="#" class="list-group-item list-group-item-action ">Rice and Other Grains</a>
                    <a href="#" class="list-group-item list-group-item-action">Salt $ Sugar</a>
                    <a href="#" class="list-group-item list-group-item-action">Rice and Other Grains</a>
                    <a href="#" class="list-group-item list-group-item-action">Salt $ Sugar</a>
                    <a href="#" class="list-group-item list-group-item-action">Rice and Other Grains</a>
                  </ul>
                </div>
                <div class="card-header collapsed bg-white border-top" data-toggle="collapse" data-parent="" href="#collapseTwo">
                  <a class="card-title">
                   &nbsp;Grocery
                 </a>
               </div>
               <div id="collapseTwo" class="card-body collapse" data-parent=""style="padding: 0;" >
                 <ul class="list-group list-group-flush " id="collapse2">
                  <a href="#" class="list-group-item list-group-item-action pl-5">Rice and Other Grains</a>
                  <a href="#" class="list-group-item list-group-item-action pl-5">Salt $ Sugar</a>
                  <a href="#" class="list-group-item list-group-item-action pl-5">Rice and Other Grains</a>
                  <a href="#" class="list-group-item list-group-item-action pl-5">Salt $ Sugar</a>
                  <a href="#" class="list-group-item list-group-item-action pl-5">Rice and Other Grains</a>
                </ul>
              </div>
              <div class="card-header collapsed bg-white" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title">
                 &nbsp;Vegetables
               </a>
             </div>
             <div id="collapseThree" class="collapse" data-parent="#accordion" >
              <div class="card-body">

              </div>
            </div>
          </div>
        </div>

        <div class="list-group bg-transparent">

          <a href="#" class="list-group-item list-group-item-action">Pulses</a>
          <a href="#" class="list-group-item list-group-item-action">Atta & Other Flours</a>
          <a href="#" class="list-group-item list-group-item-action ">Rice and Other Grains</a>
          <a href="#" class="list-group-item list-group-item-action ">Salt $ Sugar</a>
          <a href="#" class="list-group-item list-group-item-action ">Spices</a>
          <a href="#" class="list-group-item list-group-item-action ">Dry Fruits and Nuts</a>
          <a href="#" class="list-group-item list-group-item-action ">Ghee & Vanaspati</a>
          <a href="#" class="list-group-item list-group-item-action ">Vegetablaes</a>
          <a href="#" class="list-group-item list-group-item-action ">Fruits</a>
          <a href="#" class="list-group-item list-group-item-action ">Salt $ Sugar</a>
          <a href="#" class="list-group-item list-group-item-action ">Spices</a>
          <a href="#" class="list-group-item list-group-item-action ">Dry Fruits and Nuts</a>
          <a href="#" class="list-group-item list-group-item-action ">Salt $ Sugar</a>
          <a href="#" class="list-group-item list-group-item-action ">Spices</a>
          <a href="#" class="list-group-item list-group-item-action ">Dry Fruits and Nuts</a>
          <a href="#" class="list-group-item list-group-item-action ">Salt $ Sugar</a>
          <a href="#" class="list-group-item list-group-item-action ">Spices</a>
          <a href="#" class="list-group-item list-group-item-action ">Dry Fruits and Nuts</a>
        </div>
      </nav>
    </div>
  </div>


  <!-- right side contents -->
  <div class="col-md-9 itemList">
   <div class="row">
    <div class="col-md-12">
      <img class="img-fluid" src="<?= base_url('template/imgs/sale1.jpg') ?>">
    </div>

    <div class=" col-md-12 ">
      <div class=" ">
        <div class="row bg-white">
          <div class="col-md-6 col-sm-12 ">
           <ol class="breadcrumb  bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
          <p class="font-weight-bold pl-3 mt-n4">Pulses</p>
        </div>

        <div class="col-md-6 col-sm-12  cat-filter">
            <div class=" d-inline-flex float-right mt-2 " >
              <label class="col-form-label float-sm-left pr-4 " for="name">Sort</label>
              <select id="dashboard-filter" class="form-control text-danger"style="width: 240px;" >
                <option>Popularity</option>
                <option>Price Low to high</option>
                <option>Price high to low</option>
                <option>Discounts</option>
                <option>Name(A to Z)</option>
              </select>
            </div>
        </div>

      </div>

    </div>
  </div>

</div>

<div class="btnStyleCategory d-md-none  border-top border-bottom py-2 bg-white"  style="overflow: scroll;
white-space: nowrap;">
<a href="#" class="btn btn-outline-success " role="button" aria-pressed="true"  style="
border-radius: 1.25rem;">New Launches</a>
<a href="#" class="btn btn-outline-success " role="button" aria-pressed="true" style="
border-radius: 1.25rem;">Pulses</a>
<a href="#" class="btn btn-outline-success " role="button" aria-pressed="true"style="
border-radius: 1.25rem;">Wheat</a>
<a href="#" class="btn btn-outline-success " role="button" aria-pressed="true"style="
border-radius: 1.25rem;" >Vegetables</a>
<a href="#" class="btn btn-outline-success " role="button" aria-pressed="true" style="
border-radius: 1.25rem;">Pet care</a>
<a href="#" class="btn btn-outline-success " role="button" aria-pressed="true" style="
border-radius: 1.25rem;">Flour</a>
<a href="#" class="btn btn-outline-success " role="button" aria-pressed="true" style="
border-radius: 1.25rem;">Rice and other grains</a>


</div>

<div class="row">
  <?php
  for ($i=0; $i <=8; $i++) { ?>
    <div class="col-md-4 mt-3">
      <div class="card">
       <span class="badge badge-danger mt-2 ml-1 font-weight-bold" style="width: 66px">50% OFF</span><img class="img-fluid mx-auto d-block" src="<?= base_url('template/imgs/item1.png') ?>">
       <div class="card-body">               
        <p class="card-text text-muted">Quick sample text to create the card </p>
        <p class="card-text text-muted">pack of 6 </p>
        <div class="">
          <span class="font-weight-bolder">&#8377; 1000 </span>&nbsp;<span class="text-muted"><s>2000</s></span>
          <span class="qty pl-4">
            <button type="button" class="addTocartBtn btn btn-outline-success btn-rounded  py-1" style="border-radius: 1.25rem;">Add To Cart</button>

            <span class="add-more-item" style="display: none;">
              <span class="minus bg-white text-danger border minus" onclick="minusItem(this);">-</span>
              <input type="number" class="count" name="qty" value="1" >
              <span class="plus bg-dark bg-white text-danger border plus" onclick="plusItem(this);">+</span>
            </span>
          </span>
        </div>
      </div>
      <div class="card-footer bg-white d-flex justify-content-center border-top-0" style="font-size: .9rem;">
        <span class="border bg-light text-primary ">&nbsp;<i class="fa fa-user-plus"></i>&nbsp;Club price:&#8377; 559<span class="pl-5">></span></span>
      </div>
    </div>
  </div>
<?php }
?>

</div>
</div>
</div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>

<!-- ------------------------------------- -->

<script>


  //Get the button
  var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

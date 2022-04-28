<?php include('header.php');
?>
<!--start of banner setion-->
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="carousel slide" id="slider" data-ride="carousel">
        <div class="carousel-inner">
          <!--div to ensure one carousel item should be active at a time-->
          <img src="images/banner-products.jpg">
          <!--div to write text over an image-->
          <div class="carousel-caption">
            <h2 class="banner2Heading">Our Products</h2>
            <p class="banner2Para">Our seeds are a guarantee of quality. Because we have
              worked with experts and because we make sure
              they're stored and transported in durable
              containers specially designed to keep the 
              optimal temperature and moisture 
              conditions.
            </p> 
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--categories section start-->
  <section class="categories">
    <div id="mainContainer" class="container">
      <h2 class="categoriesHeading">Our Categories</h2>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-default my_panel">
                <div class="panel-body">
                  <img src="images/category1.jpg" alt="" class="img-responsive center-block" />
                </div>
                <div class="panel-footer">
                 <p>INDOOR GROWING <br>CANNABIS SEEDS</p> 
               </div>
             </div>
           </div>

           <div class="col-sm-4">
            <div class="panel panel-default my_panel">
              <div class="panel-body">
                <img src="images/category2.jpg" alt="" class="img-responsive center-block" />
              </div>
              <div class="panel-footer">
               <p>OUTDOOR GROWING <br>CANNABIS SEEDS</p> 
             </div>
           </div>
         </div>

         <div class="col-sm-4">
          <div class="panel panel-default my_panel">
            <div class="panel-body">
              <img src="images/category3.jpg" alt="" class="img-responsive center-block" />
            </div>
            <div class="panel-footer">
             <p>CUP WINNING <br>CANNABIS SEEDS</p>
           </div>
         </div>
       </div>

     </div>
   </div>
 </div>
</div>
</section>
<!--categories section end-->

<!-- BestSeller section start -->
<section class="productSec">
  <center>
    <h2 class="bs">Our bestsellers</h2>
  </center><br>

  <div class="container">
    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
      <div class="proBox">
        <p class="p2">183 customer reviews</p> 
        <img src="images\stars1.png" class="s1">
        <img src="images\bestseller1.jpg" class="img-responsive">
        <h3 class="seeds">FEMISNISED SEEDS</h3>
        <h3>Gorilla</h3>
        <h4 class="p4">FROM 12.00 €</h4>
        <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#item1">View Product</button>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4"> 
      <div class="proBox">
        <p class="p2">183 customer reviews</p> 
        <img src="images\stars1.png" class="s2">
        <img src="images\bestseller2.jpg" class="img-responsive">

        <h3 class="seeds">FEMINISED SEEDS</h3>
        <h3>Amneshia Kush</h3>
        <h4 class="p5">FROM 12.00 €</h4>
        <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#item2">View Product</button>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
      <div class="proBox">
        <p class="p3">241 customer reviews</p> 
        <img src="images\stars1.png" class="s3">
        <img src="images\bestseller3.jpg" class="img-responsive">

        <h3 class="seeds">FEMINISED SEEDS</h3>
        <h3>Quick Critical Plus+</h3>
        <h4 class="p6">FROM 11.00 €</h4>
        <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#item3">View Product</button>
      </div>
    </div>
  </div>
</section>
<!-- BestSeller section end -->

<!-- Modal 1 cart page -->
<div class="modal fade" id="item1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Canna Seeds Cart Page</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">

            <div class="col-lg-3">
              <img src="images\bestseller1.jpg" class="img-responsive" style="width: 243px;height: 350px;">
            </div>

            <!--vertical divider-->
            <div class = "vertical" style="border-left: 1px solid #ccc; height: 365px; position:absolute; left: 50%"></div>

            <div class="col-lg-9">
              <p class="p2">183 customer reviews</p> 
              <img src="images\stars1.png" style="width: 100px; height: 15px;">
              <h3 class="seeds">FEMISNISED SEEDS</h3>
              <h3>Gorilla</h3>
              <h4 class="p4">FROM 12.00 €</h4>
              <form id='myform' method='POST' action='products.php'>
                <label>
                  Select Quantity
                </label><br>
                <input type='button' value='-' class='qtyminus' field='quantity' />
                <input type='text' name='quantity' value='0' class='qty' />
                <input type='button' value='+' class='qtyplus' field='quantity' /><br>
                <button type="submit" class="btn btn-success" onclick="addtoCartAlert();">Add to Cart</button>
              </form>
            </div>
          </div>              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 cart page -->
<div class="modal fade" id="item2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Canna Seeds Cart Page</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">

            <div class="col-lg-3">
              <img src="images\bestseller2.jpg" class="img-responsive" style="width: 243px;height: 350px;">
            </div>

            <!--vertical divider-->
            <div class = "vertical" style="border-left: 1px solid #ccc; height: 365px; position:absolute; left: 50%"></div>

            <div class="col-lg-9">
              <p class="p2">183 customer reviews</p> 
              <img src="images\stars1.png" style="width: 100px; height: 15px;">
              <h3 class="seeds">FEMISNISED SEEDS</h3>
              <h3>Amneshia Kush</h3>
              <h4 class="p4">FROM 12.00 €</h4>
              <form id='myform' method='POST' action='products.php'>
                <label>
                  Select Quantity
                </label><br>
                <input type='button' value='-' class='qtyminus' field='quantity' />
                <input type='text' name='quantity' value='0' class='qty' />
                <input type='button' value='+' class='qtyplus' field='quantity' /><br>
                <button type="submit" class="btn btn-success" onclick="addtoCartAlert();">Add to Cart</button>
              </form>
            </div>
          </div>              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 cart page -->
<div class="modal fade" id="item3" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Canna Seeds Cart Page</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">

            <div class="col-lg-3">
              <img src="images\bestseller3.jpg" class="img-responsive" style="width: 243px;height: 350px;">
            </div>

            <!--vertical divider-->
            <div class = "vertical" style="border-left: 1px solid #ccc; height: 365px; position:absolute; left: 50%"></div>

            <div class="col-lg-9">
              <p class="p2">241 customer reviews</p> 
              <img src="images\stars1.png" style="width: 100px; height: 15px;">
              <h3 class="seeds">FEMISNISED SEEDS</h3>
              <h3>Quick Critical Plus+</h3>
              <h4 class="p4">FROM 11.00 €</h4>
              <form id='myform' method='POST' action='products.php'>
                <label>
                  Select Quantity
                </label><br>
                <input type='button' value='-' class='qtyminus' field='quantity' />
                <input type='text' name='quantity' value='0' class='qty' required=""/>
                <input type='button' value='+' class='qtyplus' field='quantity' /><br>
                <button type="submit" class="btn btn-success" onclick="addtoCartAlert();">Add to Cart</button>
              </form>
            </div>
          </div>              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4 cart page -->
<div class="modal fade" id="item4" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Canna Seeds Cart Page</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">

            <div class="col-lg-3">
              <img src="images\popular1.jpg" class="img-responsive" style="width: 243px;height: 350px;">
            </div>

            <!--vertical divider-->
            <div class = "vertical" style="border-left: 1px solid #ccc; height: 365px; position:absolute; left: 50%"></div>

            <div class="col-lg-9">
              <img src="images\stars1.png" style="width: 100px; height: 15px;">
              <h3 class="seeds">Super Skunk Automated<br>
              Canna Seeds</h3>
              <h4 class="p4">11.00 €</h4>
              <form id='myform' method='POST' action='products.php'>
                <label>
                  Select Quantity
                </label><br>
                <input type='button' value='-' class='qtyminus' field='quantity' />
                <input type='text' name='quantity' value='0' class='qty' required=""/>
                <input type='button' value='+' class='qtyplus' field='quantity' /><br>
                <button type="submit" class="btn btn-success" onclick="addtoCartAlert();">Add to Cart</button>
              </form>
            </div>
          </div>              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 5 cart page -->
<div class="modal fade" id="item5" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Canna Seeds Cart Page</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">

            <div class="col-lg-3">
              <img src="images\popular2.jpg" class="img-responsive" style="width: 243px;height: 350px;">
            </div>

            <!--vertical divider-->
            <div class = "vertical" style="border-left: 1px solid #ccc; height: 365px; position:absolute; left: 50%"></div>

            <div class="col-lg-9">
              <img src="images\stars1.png" style="width: 100px; height: 15px;">
              <h3 class="seeds">Super Skunk Automated<br>
              Canna Seeds</h3>
              <h4 class="p4">8.50€</h4>
              <form id='myform' method='POST' action='products.php'>
                <label>
                  Select Quantity
                </label><br>
                <input type='button' value='-' class='qtyminus' field='quantity' />
                <input type='text' name='quantity' value='0' class='qty' required=""/>
                <input type='button' value='+' class='qtyplus' field='quantity' /><br>
                <button type="submit" class="btn btn-success" onclick="addtoCartAlert();">Add to Cart</button>
              </form>
            </div>
          </div>              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 6 cart page -->
<div class="modal fade" id="item6" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Canna Seeds Cart Page</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <img src="images\popular3.jpg" class="img-responsive" style="width: 243px;height: 350px;">
            </div>

            <!--vertical divider-->
            <div class = "vertical" style="border-left: 1px solid #ccc; height: 365px; position:absolute; left: 50%"></div>
            
            <div class="col-lg-9">
              <img src="images\stars1.png" style="width: 100px; height: 15px;">
              <h3 class="seeds">Super Skunk Automated<br>
              Canna Seeds</h3>
              <h4 class="p4">7.50€</h4>
              <form id='myform' method='POST' action='products.php'>
                <label>
                  Select Quantity
                </label><br>
                <input type='button' value='-' class='qtyminus' field='quantity' />
                <input type='text' name='quantity' value='0' class='qty' required=""/>
                <input type='button' value='+' class='qtyplus' field='quantity' /><br>
                <button type="submit" class="btn btn-success" onclick="addtoCartAlert();">Add to Cart</button>
              </form>
            </div>
          </div>              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Popular section start -->
<section class="popularSec">
  <center>
    <h2 class="v1">Popular</h2>
  </center><br>
  <div class="container">
    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
      <div class="popBox" data-toggle="modal" data-target="#item4">
        <img src="images\50-percent.png" class="img-responsive percent">  
        <img src="images\award-label.png" class="img8">
        <img src="images\popular1.jpg" class="img-responsive popular">

        <div class="jumbotron">
          <img src="images\hearts.jpg" class="hearts">
          <h4 class="t1">Super Skunk Automated</h4><br>
          <h2 class="t2">Canna Seeds</h2>
          <img src="images\stars1.png" class="s4">
          <p class="x8">11.00€</p>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">        
      <div class="popBox" data-toggle="modal" data-target="#item5">
        <img src="images\50-percent.png" class="img-responsive percent">  
        <img src="images\award-label.png" class="img8">
        <img src="images\popular2.jpg" class="img-responsive popular">
        <div class="jumbotron">
          <img src="images\hearts.jpg" class="hearts">
          <h4 class="t1">Super Skunk Automated</h4><br>
          <h2 class="t2">Canna Seeds</h2>
          <img src="images\stars1.png" class="s5">
          <p class="x8">8.50€</p>
        </div>
      </div>
    </div>


    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
      <div class="popBox" data-toggle="modal" data-target="#item6">
        <img src="images\50-percent.png" class="img-responsive percent">
        <img src="images\award-label.png" class="img8">
        <img src="images\popular3.jpg" class="img-responsive popular">
        <div class="jumbotron">
         <img src="images\hearts.jpg" class="hearts">
         <h4 class="t1">Super Skunk Automated</h4><br>
         <h2 class="t2">Canna Seeds</h2>
         <img src="images\stars1.png" class="s5">
         <p class="x8">7.50€</p>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- Popular section end -->
<?php include('footer.php')?>
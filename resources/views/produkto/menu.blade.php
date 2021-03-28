@extends('layouts.app')

@section('content')


<!-- Navbar section 
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom"> <a class="navbar-brand ml-2 font-weight-bold" href="index.html"><span id="burgundy">Love</span><span id="orange">Tea</span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor"
        aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
</nav>
 Navbar mobile view 
<div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div> -->
<div id="mobile-filter">
    <p class="pl-sm-0 pl-2"> Home | <b>All Drinks</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Chocolates</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Cappucino</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Caramel</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Accomp</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
        </form>
    </div>
    <div class="py-2 ml-3">
        <h6 class="font-weight-bold">Top Offers</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
            <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
        </form>
    </div>
</div>
<!-- -->



 <!--Sidebar filter section -->
<section id="sidebar">
  
    
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Nutella Series</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Oreo Series</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Fruit Tea</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Mango Graham Series</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Snacks</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Accompainments</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Lorem Ipsum</label> </div>
            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Lorem Ipsum</label> </div>
            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Lorem Ipsum</label> </div>
            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Lorem Ipsum</label> </div>
            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
        </form>
    </div>
    <div class="py-2 ml-3">
        <h6 class="font-weight-bold">Top Offers</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
            <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan breads</label> </div>
        </form>
    </div>
</section> 

<!-- products section -->
<section id="products">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Showing 3 results</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Sort by</span> <select name="sort" id="sort">
                    <option value="popularity"><b>Popularity</b></option>
                    <option value="price"><b>Price</b></option>
                    <option value="rating"><b>Rating</b></option>
                </select> </div>
            </div>
        </div>
       
        <div class="row">
            
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="/assets/img/menu/OreoMT.png">
                    <div class="card-body">
                        <h5><b>ITEM</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">&#8369;50.00</div>
    
                        </div>
                        <a href="/cart-user" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card"> <img class="card-img-top" src="/assets/img/menu/matchaMT.png">
                    <div class="card-body">
                        <h5><b>ITEM</b> </h5>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted">&#8369;50.00</div>
                           
                        </div>
                        <a href="/cart-user" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card d-relative"> <img class="card-img-top" src="/assets/img/menu/taroMT.png">
                    <div class="card-body">
                        <h5><b>ITEM</b> </h5>
                        <div class="rounded bg-white discount" id="orange">10% off</div>
                        <div class="d-flex flex-row my-2">
                            <div class="text-muted price"><del>&#8369;50.00</del>&#8369;25.00</div>
                           
                        </div>
                        <a href="/cart-user" style="text-decoration: none;" style="color: purple;"> <button class="btn w-100 rounded my-2" style="border-color: wheat;">Add to cart</button></a>
                    </div>
                </div>

            </div>
           

        </div>
    </div>
    
</section>
</div>

@endsection
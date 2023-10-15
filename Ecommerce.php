<!doctype html>
<html lang="en">
<head>
    <style>
        .main-navbar{
    border-bottom: 1px solid #ccc;
}
.main-navbar .top-navbar{
    background-color: #2874f0;
    padding-top: 10px;
    padding-bottom: 10px;
}
.main-navbar .top-navbar .brand-name{
    color: #fff;
}
.main-navbar .top-navbar .nav-link{     
    color: #fff;
    font-size: 16px;
    font-weight: 500;
}
.main-navbar .top-navbar .dropdown-menu{
    padding: 0px 0px;
    border-radius: 0px;
}
.main-navbar .top-navbar .dropdown-menu .dropdown-item{
    padding: 8px 16px;
    border-bottom: 1px solid #ccc;
    font-size: 14px;
}
.main-navbar .top-navbar .dropdown-menu .dropdown-item i{
    width: 20px;
    text-align: center;
    color: #2874f0;
    font-size: 14px;
}
.main-navbar .navbar{
    padding: 0px;
    background-color: #ddd;
}
.main-navbar .navbar .nav-item .nav-link{
    padding: 8px 20px;
    color: #000;
    font-size: 15px;
}

@media only screen and (max-width: 600px) {
    .main-navbar .top-navbar .nav-link{
        font-size: 12px;
        padding: 8px 10px;
    }
}
.carousel-caption {
  background-color: rgba(0, 0, 0, 0.6);
  padding: 20px;
  border-radius: 10px;
}

.carousel-caption h1 {
  font-size: 30px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 15px;
}

.carousel-caption p {
  font-size: 18px;
  color: #fff;
}

.product-card{
    background-color: #fff;
    border: 1px solid #ccc;
    margin-bottom: 24px;
}
.product-card a{
    text-decoration: none;
}
.product-card .stock{
    position: absolute;
    color: #fff;
    border-radius: 4px;
    padding: 2px 12px;
    margin: 8px;
    font-size: 12px;
}
.product-card .product-card-img{
    max-height: 260px;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}
.product-card .product-card-img img{
    width: 100%;
}
.product-card .product-card-body{
    padding: 10px 10px;
}
.product-card .product-card-body .product-brand{
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 4px;
    color: #937979;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.product-card .product-card-body .product-name{
    font-size: 20px;
    font-weight: 600;
    color: #000;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
.product-card .product-card-body .selling-price{
    font-size: 22px;
    color: #000;
    font-weight: 600;
    margin-right: 8px;
}
.product-card .product-card-body .original-price{
    font-size: 18px;
    color: #937979;
    font-weight: 400;
    text-decoration: line-through;
}
.product-card .product-card-body .btn1{
    border: 1px solid;
    margin-right: 3px;
    border-radius: 0px;
    font-size: 12px;
    margin-top: 10px;
}
.category-card{
    border: 1px solid #ddd;
    box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
    margin-bottom: 24px;
    background-color: #fff;
}
.category-card a{
    text-decoration: none;
}
.category-card .category-card-img{
    max-height: 260px;
    overflow: hidden;
    border-bottom: 1px solid #ccc;
}
.category-card .category-card-body{
    padding: 10px 16px;
}
.category-card .category-card-body h5{
    margin-bottom: 0px;
    font-size: 18px;
    font-weight: 600;
    color: #000;
    text-align: center;
}
.footer-area{
    padding: 40px 0px;
    background-color: #2874f0;
    color: #fff;
}
.footer-area a{
    text-decoration: none;
}
.footer-area .footer-heading{
    font-size: 24px;
    color: #fff;
}
.footer-area .footer-underline{
    height: 1px;
    width: 70px;
    background-color: #ddd;
    margin: 10px 0px;
}
.copyright-area{
    padding: 14px 0px;
    background-color: #262626;
}
.copyright-area p{
    margin-bottom: 0px;
    color: #fff;
}
.copyright-area .social-media{
    text-align: end;
}
.copyright-area .social-media a{
    margin: 0px 10px;
    color: black;
    width: 20px;
}

</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoppzy</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                        <h3 class="brand-name">Shoppzy</h3>
                    </div>
                    <div class="col-md-5 my-auto">
                        <form role="search">
                            <div class="input-group">
                                <input type="search" placeholder="Search your product" class="form-control" />
                                <button class="btn bg-white" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 my-auto">
                        <ul class="nav justify-content-end">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-shopping-cart"></i> Cart (0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-heart"></i> Wishlist (0)
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> Username 
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                   Shoppzy
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Featured Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fashions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Appliances</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/Shopping1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>Under 599<br> </span>
                            All Latest Fashion Outfits From Top Brands<br>
                            Zara,Max,Zudio,gucci and many more..
                        </h1>
                        <p>
                            
                        Fashion is a style that takes place on a body or face or an appearance that varies from person to person, day to day, time to time
                            
                            
                
                        </p>
                        <div>
                            <a href="#" class="btn btn-slider btn btn-dark  ">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/shopping3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>IPhones Under 60k </br> </span>
                            All brand mobile phones at a very discounted rate
                        </h1>
                        <p>
                        A line of smartphones produced by Apple Inc. that use Apple's own iOS mobile operating system
                        </p>
                        <div>
                            <a href="#" class="btn btn-slider btn-dark">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/shopping4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>Home Decoration Items<br> </span>
                            All Home Decor Items like curtains,artifacts at a marginal price
                        </h1>
                        <p>
                        s clearing and creating living spaces that are visually appealing and more attractive to the human eye. Designing and decorating our homes is something we can easily envision
                        </p>
                        <div>
                            <a href="#" class="btn btn-slider btn-dark">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Categories</h4>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="./images/wash.jpg" class="w-100" alt="Electronics" height=300px>
                            </div>
                            <div class="category-card-body">
                                <h5>Electronics Appliances</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="./images/artifact.jpeg" class="w-100" alt="Decor">
                            </div>
                            <div class="category-card-body">
                                <h5>Home Decor</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="./images/mens.jpeg" class="w-100" alt="Mens Fashion">
                            </div>
                            <div class="category-card-body">
                                <h5>Mens Fashion</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="">
                            <div class="category-card-img">
                                <img src="./images/women.jpeg" class="w-100" alt="Women Fashion">
                            </div>
                            <div class="category-card-body">
                                <h5>Women Fashion</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Products</h4>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            <label class="stock bg-success">In Stock</label>
                            <img src="./images/laptop.jpeg" alt="Laptop">
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">HP</p>
                            <h5 class="product-name">
                               <a href="">
                                    HP Laptop 
                               </a>
                            </h5>
                            <div>
                                <span class="selling-price">$500</span>
                                <span class="original-price">$799</span>
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            <label class="stock bg-success">In Stock</label>
                            <img src="./images/phone2.jpg" alt="IPhone 13">
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">Apple</p>
                            <h5 class="product-name">
                               <a href="">
                                    IPhone 13 Pro
                               </a>
                            </h5>
                            <div>
                                <span class="selling-price">$200</span>
                                <span class="original-price">$300</span>
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            <label class="stock bg-success">In Stock</label>
                            <img src="./images/shirt.jpg" alt="Mens Shirt">
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">Levis</p>
                            <h5 class="product-name">
                               <a href="">
                                    Mens Shirt 
                               </a>
                            </h5>
                            <div>
                                <span class="selling-price">$299</span>
                                <span class="original-price">$359</span>
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            <label class="stock bg-success">In Stock</label>
                            <img src="./images/asus.jpg" alt="Head Phone" height=300px>
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">Asus</p>
                            <h5 class="product-name">
                               <a href="">
                                Head Phone
                               </a>
                            </h5>
                            <div>
                                <span class="selling-price">$399</span>
                                <span class="original-price">$499</span>
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="footer-heading">Shoppzy</h4>
                        <div class="footer-underline"></div>
                        <p>
                            This Is A Commercial purpose Website Where You Can Find All The Things.Established in 2023 The CEO Of This Website is Lokesh Agrawal
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Quick Links</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="" class="text-white">Home</a></div>
                        <div class="mb-2"><a href="" class="text-white">About Us</a></div>
                        <div class="mb-2"><a href="" class="text-white">Contact Us</a></div>
                        <div class="mb-2"><a href="" class="text-white">Blogs</a></div>
                        <div class="mb-2"><a href="" class="text-white">Sitemaps</a></div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Shop Now</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="" class="text-white">Collections</a></div>
                        <div class="mb-2"><a href="" class="text-white">Trending Products</a></div>
                        <div class="mb-2"><a href="" class="text-white">New Arrivals Products</a></div>
                        <div class="mb-2"><a href="" class="text-white">Featured Products</a></div>
                        <div class="mb-2"><a href="" class="text-white">Cart</a></div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Reach Us</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2">
                            <p>
                                <i class="fa fa-map-marker"></i> Medicaps University Indore,453441,Madhya Pradesh
                            </p>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-phone"></i> +91 7723821480
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-envelope"></i> Shoppzy29@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class=""> &copy; 2023 - Shoppzy - Ecommerce. All rights reserved.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="social-media">
                            Get Connected:
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class='bx bxl-youtube'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
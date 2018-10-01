<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon/fav.ico" type="image/ico">
    <link rel="stylesheet" type="text/css" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./vendor/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">

    <link rel="stylesheet" href="css/product.css">

    <title>Product</title>
</head>
<body>
<header class="main-header">
    <div class="main-header-conteiner">
        <a href="/" class="main-header-logo"><img src="img/icon/logo.png" alt="хуй"
                                                  title="хуй" class="main-header-logo"></a>
        <div class="search">
            <form class="search-form">
                <button class="search-form-browse"><span class="browse-word">Browse</span></button>
                <input class="search-form-input" type="text" placeholder="&#160;&#160;&#160;Search for Items">
                <button class="search-form-submit"><span class="fa fa-search browse-icon" aria-hidden="true"></span>
                </button>
            </form>
        </div>
        <div class="account-btn-conteiner">
            <div class="cart-img-ref">
                <a href="basket/">
                    <i class="fa fa-shopping-cart fa-2x cart-img" aria-hidden="true"></i>
                </a>
                <div id="cart-item-amount"></div>
                <div class="pointer"></div>
                <div id="cart-mini" class="cart-mini">
                    <div class="total-sum">
                        <span>total</span>
                        <span id="total-mini-cart">$1000</span>
                    </div>
                    <button type="button" class="checkout-btn" onclick="location.href='checkout.html'">checkout</button>
                    <button type="button" class="go-to-cart-btn" onclick="location.href='shoping_cart.html'">go to
                        cart
                    </button>
                </div>
            </div>
            <button class="main-header-account-btn" name="My Account"><a href="/user">My Account</a></button>
        </div>
    </div>
</header>
<!-- -главная навигация -->
<nav class="navigation">
    <ul class="navigation-menu">
        <li>
            <a href="javascript://" class="navigation-menu-item">home</a>
            <ul class="navigation-menu-submenu hide">
                <li><a href="javascript://" class="navigation-menu-item">About company</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Contacts</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Servise</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Useful info</a></li>
            </ul>

        </li>

        <li>
            <a href="javascript://" class="navigation-menu-item">men</a>
            <ul class="navigation-menu-submenu hide">
                <li><a href="javascript://" class="navigation-menu-item">About company</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Contacts</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Servise</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Useful info</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript://" class="navigation-menu-item">women</a>
            <ul class="navigation-menu-submenu hide">
                <li><a href="javascript://" class="navigation-menu-item">About company</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Contacts</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Servise</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Useful info</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript://" class="navigation-menu-item">kids</a>
            <ul class="navigation-menu-submenu hide">
                <li><a href="javascript://" class="navigation-menu-item">About company</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Contacts</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Servise</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Useful info</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript://" class="navigation-menu-item">accoseriese</a>
            <ul class="navigation-menu-submenu hide">
                <li><a href="javascript://" class="navigation-menu-item">About company</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Contacts</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Servise</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Useful info</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript://" class="navigation-menu-item">fetured</a>
            <ul class="navigation-menu-submenu hide">
                <li><a href="javascript://" class="navigation-menu-item">About company</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Contacts</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Servise</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Useful info</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript://" class="navigation-menu-item">hot deals</a>
            <ul class="navigation-menu-submenu hide">
                <li><a href="javascript://" class="navigation-menu-item">About company</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Contacts</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Servise</a></li>
                <li><a href="javascript://" class="navigation-menu-item">Useful info</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!-- arrivals с хлебными крошками -->
<div class="arrivals-conteiner">
    <div class="arrivals">
        <span class="arrivals_new">new arrivals</span>
        <ul class="breadcrumbs">
            <li class="breadcrumbs_item"><a href="javascript://" class="breadcrumbs_item_a">home</a></li>
            <li class="breadcrumbs_item"><a href="javascript://" class="breadcrumbs_item_a">men</a></li>
            <li class="breadcrumbs_item"><span class="active">new arrivals</span></li>
        </ul>
    </div>
</div>
<div class="product-wrapper">
    <aside class="product-aside">
        <details class="product-aside-nav" open="open">
            <summary class="product-aside-nav-sum">category</summary>
            <a href="javascript://" class="product-aside-nav-item">Accessories</a>
            <a href="javascript://" class="product-aside-nav-item">Bags</a>
            <a href="javascript://" class="product-aside-nav-item">Denim</a>
            <a href="javascript://" class="product-aside-nav-item">Hoodies & Sweatshirts</a>
            <a href="javascript://" class="product-aside-nav-item">Jackets & Coats</a>
            <a href="javascript://" class="product-aside-nav-item">Pants</a>
            <a href="javascript://" class="product-aside-nav-item">Polos</a>
            <a href="javascript://" class="product-aside-nav-item">Shirts</a>
            <a href="javascript://" class="product-aside-nav-item">Shoes</a>
            <a href="javascript://" class="product-aside-nav-item">Shorts</a>
            <a href="javascript://" class="product-aside-nav-item">Sweaters & Knits</a>
            <a href="javascript://" class="product-aside-nav-item">T-Shirts</a>
            <a href="javascript://" class="product-aside-nav-item">Tanks</a>
        </details>
        <details class="product-aside-nav">
            <summary class="product-aside-nav-sum">brand</summary>
            <a href="javascript://" class="product-aside-nav-item">Zara</a>
            <a href="javascript://" class="product-aside-nav-item">Calvin Klein</a>
            <a href="javascript://" class="product-aside-nav-item">Dolce & Gabbana</a>
            <a href="javascript://" class="product-aside-nav-item">Giorgio Armani</a>
            <a href="javascript://" class="product-aside-nav-item">Dior</a>
            <a href="javascript://" class="product-aside-nav-item">Prada</a>
            <a href="javascript://" class="product-aside-nav-item">Versace</a>
            <a href="javascript://" class="product-aside-nav-item">Chanel</a>
        </details>
        <details class="product-aside-nav">
            <summary class="product-aside-nav-sum">designer</summary>
            <a href="javascript://" class="product-aside-nav-item">Donna Karan</a>
            <a href="javascript://" class="product-aside-nav-item">Marc Jacobs</a>
            <a href="javascript://" class="product-aside-nav-item">Oscar de la Renta</a>
            <a href="javascript://" class="product-aside-nav-item">Ralph Lauren</a>
            <a href="javascript://" class="product-aside-nav-item">Vera Wang</a>
        </details>
    </aside>
    <main class="product">
        <form class="product-search">
            <div class="product-search-fieldsets">
                <fieldset class="trending">
                    <legend>trending now</legend>
                    <form>
                        <input id="bohemian" name="radio" class="trending-now-trend" type="radio" checked>
                        <label class="trending-now-trend-label" for="bohemian">
                            <span>Bohemian</span>
                            <span>Floral</span>
                            <span>Lace</span>
                        </label>
                        <input id="floral" name="radio" class="trending-now-trend" type="radio">
                        <label class="trending-now-trend-label" for="floral">
                            <span>Floral</span>
                            <span>Lace</span>
                            <span>Bohemian</span>
                        </label>
                    </form>
                </fieldset>
                <fieldset class="trending size-conteiner">
                    <legend>size</legend>
                    <input id="xxs" type="checkbox" checked>
                    <label class="trending-now-size" for="xxs">xxs</label>
                    <input id="xs" type="checkbox">
                    <label class="trending-now-size" for="xs">xs</label>
                    <input id="s" type="checkbox">
                    <label class="trending-now-size" for="s">s</label>
                    <input id="m" type="checkbox">
                    <label class="trending-now-size" for="m">m</label>
                    <input id="l" type="checkbox">
                    <label class="trending-now-size" for="l">l</label>
                    <input id="xl" type="checkbox">
                    <label class="trending-now-size" for="xl">xl</label>
                    <input id="xxl" type="checkbox">
                    <label class="trending-now-size" for="xxl">xxl</label>
                </fieldset>
                <fieldset class="trending-price">
                    <legend>price</legend>
                    <p>
                        <label for="amount"></label>
                        <input class="slider-range-margin" type="text" id="amount" readonly
                               style="border:0; color:#4d4d4d; font-weight:bold;">
                    </p>
                    <div id="slider-range"></div>
                </fieldset>
            </div>

            <!-- сортировка товаров -->
            <div class="sort-conteiner">
                <span class="sort-by-show">Sort by</span>
                <div class="sort-name-quantity-conteiner">
                    <select class="sort-name-quantity">
                        <option value="name" class="sort-name">Name</option>
                        <option value="price" class="sort-name">Price</option>
                        <option value="precence" class="sort-name">Precence</option>
                    </select>
                </div>
                <span class="sort-by-show">Show</span>
                <div class="sort-name-quantity-conteiner">
                    <select class="sort-name-quantity">
                        <option value="3" class="quantity">3</option>
                        <option value="6" class="quantity">6</option>
                        <option value="9" class="quantity">9</option>
                        <option value="12" class="quantity">12</option>
                    </select>
                </div>
            </div>


            <!-- теперь карточки товаров -->
            <div class="product-search-product-card">
                <?= $content ?>
            </div>


            <div class="view-pages-conteiner">
                <ul>
                    <li><a href="javascript://"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    <li><a href="javascript://">1</a></li>
                    <li><a href="javascript://">2</a></li>
                    <li><a href="javascript://">3</a></li>
                    <li><a href="javascript://">4</a></li>
                    <li><a href="javascript://">5</a></li>
                    <li><a href="javascript://">6</a></li>
                    <li><a href="javascript://">7</a></li>
                    <li><a href="javascript://">&#8230;</a></li>
                    <li><a href="javascript://">20</a></li>
                    <li><a href="javascript://"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
                <button class="view-all">View All</button>
            </div>
        </form>
    </main>
</div>
<div class="black-box-conteiner">
    <div class="black-box">
        <div class="black-box-item">
            <img src="img/icon/forma_track.png" alt="track">
            <span>Free Delivery</span>
            <p>Worldwide delivery on all. Authorit<br> tively morph next-generatio</p>
        </div>
        <div class="black-box-item">
            <img src="img/icon/forma.png" alt="discount">
            <span>Sales & discounts</span>
            <p>Worldwide delivery on all. Authorit<br> tively morph next-generatio</p>
        </div>
        <div class="black-box-item">
            <img src="img/icon/forma_croun.png" alt="croun">
            <span>Quality assurance</span>
            <p>Worldwide delivery on all. Authorit<br> tively morph next-generatio</p>
        </div>
    </div>
</div>

<div class="subscribe">
    <div class="subscribe-logo-form-conteiner">
        <!-- <div class="subscribe-main-conteiner"> -->
        <div class="subscribe-brand-logo">
            <img src="img/brand-logo/brand_logo_img1.png" alt="Brand" class="subscribe-brand-logo-img">
            <img src="img/brand-logo/brand_logo_img2.png" alt="Brand" class="subscribe-brand-logo-img">
            <img src="img/brand-logo/brand_logo_img3.png" alt="Brand" class="subscribe-brand-logo-img">
            <img src="img/brand-logo/brand_logo_img4.png" alt="Brand" class="subscribe-brand-logo-img">
        </div>
        <div class="subscribe-form">
            <span class="subscribe-form-title">subscribe</span>
            <span class="subscribe-form-title2">for our newsletters and information</span>
            <form action="input" class="input">
                <input class="subscribe-mail" type="email" placeholder="Enter Your Email">
                <input type="button" value="Subscribe" class="subscribe-submit">
            </form>
        </div>
    </div>
    <div class="subscribe-conteiner">
        <div id="slider">
            <div id="slider-wrapper">
                <div class="showed">
                    <img src="img/slider/slider_img1.png" alt=""/>
                    <p class="caption ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequuntur
                        delectus dignissimos dolorum eligendi eos error fugiat necessitatibus nostrum numquam odit
                        officiis optio possimus quo reiciendis repellat, tempore temporibus voluptates.</p>
                </div>
                <div class="slide">
                    <img src="img/slider/slider_img.png" alt=""/>
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi culpa
                        cupiditate eum eveniet exercitationem iste molestiae nostrum omnis quaerat. Cum dolorum error
                        libero nam provident, quam saepe tempora veritatis.</p>
                </div>
                <div class="slide">
                    <img src="img/slider/slider_img2.png" alt=""/>
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam
                        aspernatur assumenda dicta distinctio error ex harum hic ipsum natus odio perspiciatis quasi,
                        quibusdam reprehenderit soluta suscipit unde voluptatibus? Maxime?</p>
                </div>
                <div class="slide">
                    <img src="img/slider/slider_img3.png" alt=""/>
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor est facilis ipsam
                        officiis porro possimus quas. A at delectus doloremque ea explicabo necessitatibus nisi quis quo
                        rerum tempore voluptates, voluptatum!</p>
                </div>
                <div class="slide">
                    <img src="img/slider/slider_img4.png" alt=""/>
                    <p class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, dolore et eum
                        magnam natus optio rem. Accusantium dicta exercitationem modi neque odio pariatur possimus, quas
                        repellendus sint, ullam, vero voluptates.</p>
                </div>
                <img class="left" src="img/slider/left.png" alt="">
                <img class="right" src="img/slider/right.png" alt="">
            </div>

            <div id="slider-nav">

                <a href="javascript://" class="current" data-slide="0"></a>
                <a href="javascript://" data-slide="1"></a>
                <a href="javascript://" data-slide="2"></a>
                <a href="javascript://" data-slide="3"></a>
                <a href="javascript://" data-slide="4"></a>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>
<!-- а теперь тот который перед совсем футером -->
<div class="footer">
    <div class="footer-first-part">
        <div class="footer-first-part-text">
            <a href="index.html"><img src="img/icon/logo.png" alt="logo"></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sit quaerat voluptas excepturi illum,
                blanditiis distinctio <br> consequuntur iste, est praesentium minus, dignissimos reiciendis <br>
                expedita dolore molestiae. Corrupti amet a,
                commodi harum!
            </p>
            <p class="second-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sit quaerat voluptas
                excepturi illum, blanditiis distinctio <br> consequuntur iste, est praesentium minus, dignissimos
                reiciendis <br> expedita dolore molestiae. Corrupti amet a,
                commodi harum!
            </p>

        </div>
        <div class="footer-links">
            <ul class="footer-links-item">
                <li class="footer-links-head">company</li>
                <li><a href="javascript://">Home</a></li>
                <li><a href="javascript://">Stop</a></li>
                <li><a href="javascript://">About</a></li>
                <li><a href="javascript://">How It Works</a></li>
                <li><a href="javascript://">Contact</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <ul class="footer-links-item">
                <li class="footer-links-head">information</li>
                <li><a href="javascript://">Terms & Conditions</a></li>
                <li><a href="javascript://">Privacy Policy</a></li>
                <li><a href="javascript://">How to Buy</a></li>
                <li><a href="javascript://">How to Sell</a></li>
                <li><a href="javascript://">Promotion</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <ul class="footer-links-item">
                <li class="footer-links-head">shop category</li>
                <li><a href="javascript://">Men</a></li>
                <li><a href="javascript://">Women</a></li>
                <li><a href="javascript://">Child</a></li>
                <li><a href="javascript://">Apparel</a></li>
                <li><a href="javascript://">Brows All</a></li>
            </ul>
        </div>
    </div>
    <!-- а это прям совсем подвал-подвал -->
</div>
<div class="foot-footer">
    <div class="foot-footer-conteiner">
        <span class="foot-footer-rights">&#169; 2017 Brand All Rights Reserved</span>
        <ul class="foot-footer-share">
            <li><a class="social-share" href="javascript://"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            </li>
            <li><a class="social-share" href="javascript://"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            </li>
            <li><a class="social-share" href="javascript://"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
            </li>
            <li><a class="social-share" href="javascript://"><span class="fa fa-pinterest-p" aria-hidden="true"></span></a>
            </li>
            <li><a class="social-share" href="javascript://"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
            </li>
        </ul>
    </div>
</div>
<div id="dialog" title="Basic dialog">
    <div>Your purcase added to cart!</div>
</div>
<script type="text/javascript" src="./vendor/jquery.min.js"></script>
<script type="text/javascript" src="./vendor/jquery-ui.min.js"></script>
<script type="text/javascript" src="./js/slider.js"></script>
<script type="text/javascript" src="./js/Product_class.js"></script>
<script type="text/javascript" src="./js/Basket.js"></script>
<script type="text/javascript" src="./js/submenu.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<script type="text/javascript" src="./js/product.js"></script>


</body>
</html>

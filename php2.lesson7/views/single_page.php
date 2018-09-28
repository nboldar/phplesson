<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon/fav.ico" type="image/ico">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./vendor/jquery-ui.css">

    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" href="css/single_page.css">
    <title>single_page</title>
</head>

<body>
    <!-- шапка сайта -->
    <header class="main-header">
        <div class="main-header-conteiner">
            <a href="./index" class="main-header-logo"><img src="img/icon/logo.png" alt="logo" class="main-header-logo"></a>
            <div class="search">
                <form class="search-form">
                    <button class="search-form-browse"><span class="browse-word">Browse</span></button>
                    <input class="search-form-input" type="text" placeholder="&#160;&#160;&#160;Search for Items">
                    <button class="search-form-submit"><span class="fa fa-search browse-icon" aria-hidden="true"></span>
        </button>
                </form>
            </div>
            <div class="account-btn-conteiner">
                <div href="javascript://" class="cart-img-ref">
                    <i class="fa fa-shopping-cart fa-2x cart-img" aria-hidden="true"></i>
                    <div id="cart-item-amount"></div>
                    <div class="pointer"></div>
                    <div id="cart-mini" class="cart-mini">
                        <div class="total-sum">
                            <span>total</span>
                            <span id="total-mini-cart"></span>
                        </div>
                        <button type="button" class="checkout-btn" onclick="location.href='checkout.html'">checkout</button>
                        <button type="button" class="go-to-cart-btn" onclick="location.href='shoping_cart.html'">go to cart</button>
                    </div>
                </div>
                <button class="main-header-account-btn" name="My Account">My Account</button>
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
    <div class="big_foto"><img src="<?=$product->img_url?>" alt="Choose Your Style"></div>
    <!-- тот большой квадрат с продажей и выбором -->
    <section class="choose-the-item">
        <span class="head-of-single"><?=$product->gender?> collection <div class="inside-head"></div></span>
        <span class="head-of-collection"><?=$product->brend?> cheap and chic</span>
        <span class="description">Compellingly actualize fully researched processes before proactive outsoursing. Progresively syndicate <br>
       collaborative architectures before cutting-edge services. Completely visualize parralel core competencies <br>
       rather than exceptional portals.</span>
        <span class="material-designer">material:<span class="material descrip">&nbsp;cotton</span>designer:<span class="designer descrip">&nbsp;<?=$brend?></span></span>
        <span class="price-of-collection">$<?=$product->price?></span>
        <form class="add-to-cart" action="/" method="post">
            <div class="select-conteiner">
                <div class="select-conteiner-item">
                    <span class="choose-conteiner-item">choose color</span>
                    <div class="form-select">
                        <select>
              <option value="red" selected>red</option>
              <option value="blue">blue</option>
              <option value="orange">orange</option>
            </select>
                    </div>
                </div>
                <div class="select-conteiner-item">
                    <span class="choose-conteiner-item">choose size</span>
                    <div class="form-select">
                        <select>
              <option value="xxl" selected>xxl</option>
              <option value="xl">xl</option>
              <option value="l">l</option>
              <option value="m">m</option>
              <option value="s">s</option>
              <option value="xs">xs</option>
            </select>
                    </div>
                </div>
                <div class="select-conteiner-item">
                    <span class="choose-conteiner-item">quantity</span>
                    <input type="number" name="number" value="1">
                </div>
            </div>
            <button formaction="#"><img src="img/icon/Red_cart.png" alt=""><span class="add-sigh">Add To Cart</span></button>
        </form>
    </section>
    <!-- секция с карточками -->
    <div class="may-like-also">
        <span class="like-also">you may like also</span>
        <div class="product-search-product-card">

        </div>
    </div>
    <!--                                                  - -->
    <!-- начинается футер -->
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sit quaerat voluptas excepturi illum, blanditiis distinctio <br> consequuntur iste, est praesentium minus, dignissimos reiciendis <br> expedita dolore molestiae. Corrupti amet
                    a, commodi harum!
                </p>
                <p class="second-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sit quaerat voluptas excepturi illum, blanditiis distinctio <br> consequuntur iste, est praesentium minus, dignissimos reiciendis <br> expedita dolore molestiae. Corrupti amet
                    a, commodi harum!
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
                <li><a class="social-share" href="javascript://"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                <li><a class="social-share" href="javascript://"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                <li><a class="social-share" href="javascript://"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                <li><a class="social-share" href="javascript://"><span class="fa fa-pinterest-p" aria-hidden="true"></span></a></li>
                <li><a class="social-share" href="javascript://"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>
            </ul>
        </div>
    </div>
    <div id="dialog" title="Basic dialog">
        <div>Your purcase added to cart!</div>
    </div>
    <script type="text/javascript" src="./vendor/jquery.min.js"></script>
    <script type="text/javascript" src="./vendor/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/submenu.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="js/Basket.js"></script>
    <script type="text/javascript" src="js/Product_class.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
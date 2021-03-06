<!DOCTYPE HTML>
<html>
    <head>
        <title>{{app('title')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="{{app('shop_css')}}/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{app('shop_css')}}/form.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="{{app('shop_js')}}/jquery1.min.js"></script>
        <!-- start menu -->
        <link href="{{app('shop_css')}}/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="{{app('shop_js')}}/megamenu.js"></script>
        <script>
            $(document).ready(function () {
                $(".megamenu").megamenu();
            });
        </script>
        <!--start slider -->
        <link rel="stylesheet" href="{{app('shop_css')}}/fwslider.css" media="all">
        <script src="{{app('shop_js')}}/jquery-ui.min.js"></script>
        <script src="{{app('shop_js')}}/css3-mediaqueries.js"></script>
        <script src="{{app('shop_js')}}/fwslider.js"></script>
        <!--end slider -->
        <script src="{{app('shop_js')}}/jquery.easydropdown.js"></script>
    </head>
    <body>
        <div class="header-top">
            <div class="wrap"> 
                <div class="header-top-left">
                    <div class="box">
                        <select tabindex="4" class="dropdown">
                            <option value="" class="label" value="">Language :</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">German</option>
                        </select>
                    </div>
                    <div class="box1">
                        <select tabindex="4" class="dropdown">
                            <option value="" class="label" value="">Currency :</option>
                            <option value="1">$ Dollar</option>
                            <option value="2">€ Euro</option>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="cssmenu">
                    <ul>
                        <li class="active"><a href="login.html">Account</a></li> |
                        <li><a href="checkout.html">Wishlist</a></li> |
                        <li><a href="checkout.html">Checkout</a></li> |
                        <li><a href="login.html">Log In</a></li> |
                        <li><a href="register.html">Sign Up</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="wrap">
                <div class="header-bottom-left">
                    <div class="logo">
                        <a href="index.html"><img src="{{app('shop_image')}}/logo.png" alt=""/></a>
                    </div>
                    <div class="menu">
                        <ul class="megamenu skyblue">
                            <li class="active grid"><a href="index.html">Home</a></li>
                            <li><a class="color4" href="#">women</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Contact Lenses</h4>
                                                <ul>
                                                    <li><a href="womens.html">Daily-wear soft lenses</a></li>
                                                    <li><a href="womens.html">Extended-wear</a></li>
                                                    <li><a href="womens.html">Lorem ipsum </a></li>
                                                    <li><a href="womens.html">Planned replacement</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Sun Glasses</h4>
                                                <ul>
                                                    <li><a href="womens.html">Heart-Shaped</a></li>
                                                    <li><a href="womens.html">Square-Shaped</a></li>
                                                    <li><a href="womens.html">Round-Shaped</a></li>
                                                    <li><a href="womens.html">Oval-Shaped</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Eye Glasses</h4>
                                                <ul>
                                                    <li><a href="womens.html">Anti Reflective</a></li>
                                                    <li><a href="womens.html">Aspheric</a></li>
                                                    <li><a href="womens.html">Bifocal</a></li>
                                                    <li><a href="womens.html">Hi-index</a></li>
                                                    <li><a href="womens.html">Progressive</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                    </div>
                                </div>
                            </li>				
                            <li><a class="color5" href="#">Men</a>
                                <div class="megapanel">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Contact Lenses</h4>
                                            <ul>
                                                <li><a href="mens.html">Daily-wear soft lenses</a></li>
                                                <li><a href="mens.html">Extended-wear</a></li>
                                                <li><a href="mens.html">Lorem ipsum </a></li>
                                                <li><a href="mens.html">Planned replacement</a></li>
                                            </ul>	
                                        </div>							
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Sun Glasses</h4>
                                            <ul>
                                                <li><a href="mens.html">Heart-Shaped</a></li>
                                                <li><a href="mens.html">Square-Shaped</a></li>
                                                <li><a href="mens.html">Round-Shaped</a></li>
                                                <li><a href="mens.html">Oval-Shaped</a></li>
                                            </ul>	
                                        </div>							
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Eye Glasses</h4>
                                            <ul>
                                                <li><a href="mens.html">Anti Reflective</a></li>
                                                <li><a href="mens.html">Aspheric</a></li>
                                                <li><a href="mens.html">Bifocal</a></li>
                                                <li><a href="mens.html">Hi-index</a></li>
                                                <li><a href="mens.html">Progressive</a></li>
                                            </ul>	
                                        </div>												
                                    </div>
                                </div>
                            </li>
                            <li><a class="color6" href="other.html">Other</a></li>
                            <li><a class="color7" href="other.html">Purchase</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-bottom-right">
                    <div class="search">	  
                        <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Search';
                                }">
                        <input type="submit" value="Subscribe" id="submit" name="submit">
                        <div id="response"> </div>
                    </div>
                    <div class="tag-list">
                        <ul class="icon1 sub-icon1 profile_img">
                            <li><a class="active-icon c1" href="#"> </a>
                                <ul class="sub-icon1 list">
                                    <li><h3>sed diam nonummy</h3><a href=""></a></li>
                                    <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="icon1 sub-icon1 profile_img">
                            <li><a class="active-icon c2" href="#"> </a>
                                <ul class="sub-icon1 list">
                                    <li><h3>No Products</h3><a href=""></a></li>
                                    <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
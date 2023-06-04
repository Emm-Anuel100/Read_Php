<?php
require_once "config.php";

$result = mysqli_query($conn, "SELECT * FROM (callall)");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bizard | Grocery Store</title>

     <!-- css file link for swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- link for favIcon-->
    <link rel="shortcut icon" href="./image/blog-1.jpg" type="image/x-icon">

</head>
<body>
<?php
if (mysqli_num_rows($result) > 0){
    # code...
    $row = mysqli_fetch_array($result);
}
?>


    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i><?php
            echo  $row["logo"];
            ?></a>

    <nav class="navbar">
        <a href="#home"><?php
            echo  $row["nav1"];
            ?></a>
        <a href="#features"><?php
            echo  $row["nav2"];
            ?></a>
        <a href="#products"><?php
            echo  $row["nav3"];
            ?></a>
        <a href="#categories"><?php
            echo  $row["nav4"];
            ?></a>
        <a href="#review"><?php
            echo  $row["nav5"];
            ?></a>
        <a href="#blogs"><?php
            echo  $row["nav6"];
            ?></a>
    </nav>

    <!--creating buttons for toggle-->
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div> <!--will be applied for mobile for navigation of the nav bar-->
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form"> 
        <input type="search" id="search-box" placeholder="search here..." name="search">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3><?php
            echo  $row["melon"];
            ?></h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 10</span>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3><?php
            echo  $row["product2"];
            ?></h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 5</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3><?php
            echo  $row["chicken"];
            ?></h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 3</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>
    <!--shopping carts ends here-->


    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box" required="">
        <input type="password" placeholder="your password" class="box" required="">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <div id="signup">create now</div></p>
        <input type="submit" value="login now" class="btn">
    </form>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Organic and <span>fresh</span> products </h3> <br>
        <h3>
        <?php
            echo  $row["organic"];
            ?><br>
        <a href="page2.php" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/feature-img-1.png" alt="">
            <h3>
            <?php
            echo  $row["feature"];
            ?></h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>
            <?php
            echo  $row["delivery"];
            ?></h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>
            <?php
            echo  $row["pay"];
            ?></h3>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section ends -->


<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-1.png" alt="">
                <h3>
                <?php
            echo  $row["product1"];
            ?></h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-2.png" alt="">
                <h3>
                <?php
            echo  $row["product2"];
            ?></h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-3.png" alt="">
                <h3>
                <?php
            echo  $row["product3"];
            ?></h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-4.png" alt="">
                <h3>
                <?php
            echo  $row["product4"];
            ?></h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product-5.png" alt="">
                <h3>
                <?php
            echo  $row["product5"];
            ?></h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-6.png" alt="">
                <h3>
                <?php
            echo  $row["product6"];
            ?></h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-7.png" alt="">
                <h3>
                <?php
            echo  $row["product7"];
            ?></h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-8.png" alt="">
                <h3>
                <?php
            echo  $row["product8"];
            ?></h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>
    <div class="swiper product-slider">

<div class="swiper-wrapper">

    <div class="swiper-slide box">
        <img src="image/product-1.png" alt="">
        <h3>
        <?php
    echo  $row["product1"];
    ?></h3>
        <div class="price"> $4.99/- - 10.99/- </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="swiper-slide box">
        <img src="image/product-2.png" alt="">
        <h3>
        <?php
    echo  $row["product2"];
    ?></h3>
        <div class="price"> $4.99/- - 10.99/- </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="swiper-slide box">
        <img src="image/product-3.png" alt="">
        <h3>
        <?php
    echo  $row["product3"];
    ?></h3>
        <div class="price"> $4.99/- - 10.99/- </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="swiper-slide box">
        <img src="image/product-4.png" alt="">
        <h3>
        <?php
    echo  $row["product4"];
    ?></h3>
        <div class="price"> $4.99/- - 10.99/- </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

</div>

</div>

<div class="swiper product-slider">

<div class="swiper-wrapper">

    <div class="swiper-slide box">
        <img src="image/product-5.png" alt="">
        <h3>
        <?php
    echo  $row["product5"];
    ?></h3>
        <div class="price"> $4.99/- - 10.99/- </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="swiper-slide box">
        <img src="image/product-6.png" alt="">
        <h3>
        <?php
    echo  $row["product6"];
    ?></h3>
        <div class="price"> $4.99/- - 10.99/- </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="swiper-slide box">
        <img src="image/product-7.png" alt="">
        <h3>
        <?php
    echo  $row["product7"];
    ?></h3>
        <div class="price"> $4.99/- - 10.99/- </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="swiper-slide box">
        <img src="image/product-8.png" alt="">
        <h3>
        <?php
    echo  $row["product8"];
    ?></h3>
        <div class="price"> $4.99/- - 10.99/- </div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>

</div>

</div>


</section>

<!-- products section ends -->


<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/cat-1.png" alt="">
            <h3>
            <?php
            echo  $row["categories1"];
            ?></h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-2.png" alt="">
            <h3>
            <?php
            echo  $row["categories2"];
            ?></h3>
            <p>up to 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-3.png" alt="">
            <h3>
            <?php
            echo  $row["categories3"];
            ?></h3>
            <p>up to 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-4.png" alt="">
            <h3>
            <?php
            echo  $row["categories4"];
            ?></h3>
            <p>up to 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="" alt="pic">
                <p>I love Bizard so well they deliver as quik as possible</p>
                <h3>    <?php
                echo  $row["client1"];
                 ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="" alt="pic">
                <p>Buying from Bizard is something i won't regret thumbs up</p>
                <h3>    <?php
               echo  $row["client2"];
                ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="" alt="pic">
                <p>I love Bizard so much i will give them a five star</p>
                <h3>  <?php
               echo  $row["client3"];
                ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="" alt="pic">
                <p>You guys are awesome i give you guys a five star</p>
                <h3>  <?php
               echo  $row["client4"];
                ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/blog-1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3><?php
            echo  $row["blog1"];
            ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3><?php
            echo  $row["blog2"];
            ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3><?php
            echo  $row["blog3"];
            ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container"> <!--grid display-->

        <div class="box">
            <h3> <i class="fas fa-shopping-basket"></i> <?php
            echo  $row["logo"];
            ?></h3>
            <p>Welcome to bizard where your satisfaction is our main goal.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <!--back to top section starts-->
            <section>
                <div id="go-home">
                <a href="#home">.</a>
                </div>
             </section>
               <!--back to top section  ends-->
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +234-812-166-9013 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +234-916-081-8737 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> emmanuel2004@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Abuja - Nigeria</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form>
            <input type="email" placeholder="your email" required="">
            <input type="submit" value="subscribe" class="btn" name="submit_email">
            <img src="image/payment.png" class="payment-img" alt="">
            </form>
            
        </div>

    </div>

    <div class="credit"> <span> &copy; 2020 - <?php echo  Date("Y"); ?>  </span><?php
            echo  $row["copy"];
            ?></div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
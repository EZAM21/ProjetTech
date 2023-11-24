<!DOCTYPE html>
<html lang="en-us">

<head>
        <meta charset="UTF-8">
        <!-- Meta description ici -->
        <!-- Meta keywords  ici -->
        <script src="https://kit.fontawesome.com/02b1d6d912.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Monda&family=Montserrat&display=swap" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/home.css"><!-- CSS du design de la page home -->
        <link rel="stylesheet" href="css/products.css"><!-- CSS du design de la page products -->
        <link rel="stylesheet" href="css/lightbox.css">
        <script src="js/lightbox-plus-jquery.js"></script>
        <title>Technomania.io - Featured Products</title>
    </head>

<body>
    <!-- Fin des propriétés html du header  -->
    <header>
        <h1>TECHNOMANIA.<span class="orange">IO</span></h1>
        <nav>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
            </ul>
        </nav>
        <div id="header_burger"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </div>
    </header>

    <!-- Fin des propriétés html du header  -->
    <!-- Début des propriétés CSS du container principal-->
    <main>
        <section>
            <!-- Les miniatures de images -->
            <div class="thumbs">
                <img src="pictures-products/image1.webp" alt="">
                <img src="pictures-products/image2.webp" alt="">
                <img src="pictures-products/image3.webp" alt="">
                <img src="pictures-products/image4.webp" alt="">
                <img src="pictures-products/image5.webp" alt="">
                <img src="pictures-products/image6.webp" alt="">
                <img src="pictures-products/image7.webp" alt="">
                <img src="pictures-products/image8.webp" alt="">
            </div>

            <!-- Image grande -->
            <div class="big">
                <img src="pictures-products/image1.webp" alt="Electric Makeup Brush Cleaner Machine">
            </div>

            <!-- Les informations sur le produit -->
            <div class="details">
                <h1>Pink Electric Makeup Brush Cleaner Machine, Windspeed Silicone Brush Cleaner Machine Beauty Blender
                    Cleanser For Beauty Makeup Brushes, Christmas Halloween Gifts for Your Girls </h1>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>145(ratings)</span>
                </div>
                <h2>200+ bought in past month</h2>
                <h3>$17.99<i class=" fa-solid fa-tags"></i></h3>
                <div class="button">
                    <a href="#">BUY ON AMAZON</a>
                </div>
            </div>
        </section>

        <div class="separator"></div>

        <section>
            <div class="advantage">
                <h3>About this item :</h3>
                <ul class="list">
                    <li>[ New Upgrade ]:Different from other cosmetic brush cleaning tools, this electric makeup
                        brush cleaner machine(Patented design) improves the concave and convex parts of the cleaning
                        area, and heightens the convex part so that they can fully contact the interior of the
                        cleaning brush and wash the cosmetic residues.</li>
                    <li>[ USB Power Supply ]: This makeup brush cleaner machine(Patented design) uses the USB
                        plug-in method to work, abandoning the traditional battery power supply method, and it can
                        be used when the power is turned on and the switch is pressed.</li>
                    <li>[ Protect Makeup Brushes ]: Excessive cleaning speed will reduce the service life of makeup
                        brushes. The moderate rotation speed of this beauty blender cleanser(Patented design), can
                        not only deep clean the residues of makeup brushes, but also prevent the bristles on the
                        makeup brushes from being damaged, gentle cleaning.</li>
                    <li>[ Save Time ]: The cleaning port of this silicone brush cleaner(Patented design) is large,
                        and there are many protrusions inside, which can clean multiple makeup brushes at the same
                        time, and there is no limit to the size of the makeup brushes, saving time and effort.</li>
                    <li>[ Portable & Lightweight ]: The size of this electric makeup brush cleaner machine(Patented
                        design) is only 3.4x3.5 inches, it is small in size and lightweight, it will not take up too
                        much desktop area, and it can also be placed in bags, suitcases, luggage, and is easy to
                        carry.</li>
                </ul>

            </div>
        </section>
    </main>
    <!-- Fin des propriétés html du container principal -->


    <!-- Début des propriétés html du footer  -->
    <footer>
        <ul>
            <li><a href="#"><i class="fa-solid fa-copyright"></i><span>2023</span>
                    <?= date('Y'); ?> - TECHNOMANIA.<span class="orange black">IO</span>
                </a></li>
        </ul>
    </footer>
    <!-- Fin des propriétés html du footer -->
</body>

</html>
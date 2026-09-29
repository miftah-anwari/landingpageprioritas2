<?php

    $namaWebsite = "Clarity";
    $judul1 = "Harvesting Goodness";
    $judul2 = "from Olive Oil";
    $deskripsi = "Enjoy a healthy life by eating Clarity Supplement that make your life healthier for today and forever.";
    $menus = array(
    array(
        "label" => "ABOUT",
        "url" => "#chooses"
    ),
    array(
        "label" => "PRODUCT",
        "url" => "#products"
    ),
     array(
        "label" => "CONTACT",
        "url" => "#contact"
    ),

    );
   $products = array(

    array(
        "nama" => "Super Antioxidant",
        "kapsul" => "60 capsules",
        "harga" => "$16,00",
        "gambar" => "image/supplement-1 1.png",
        "stok" => 10
    ),

    array(
         "nama" => "Super Antioxidant",
        "kapsul" => "60 capsules",
        "harga" => "$16,00",
        "gambar" => "image/supplement-1 1.png",
        "stok" => 10
    ),

    array(
        "nama" => "Super Antioxidant",
        "kapsul" => "60 capsules",
        "harga" => "$16,00",
        "gambar" => "image/supplement-1 1.png",
        "stok" => 10
    )

);

    $targets = array(
    array(
        "nama" => "Young Active People",
        "class" => "young",
        "deskripsi" => "We offer supplement that can give you more energy boost"
    ),
    array(
        "nama" => "Elderly",
        "class" => "elderly",
        "deskripsi" => "We offer supplement to keep your body fit and healthy aging"
    )
    );
    $judulChoose = "Why Choose Our Product";
    $chooses = array(
    array(
        "gambar" => "logo/Group.png",
        "judul" => "Perfect Quality",
        "deskripsi" => "We grow, farm, and bottle the finest olive products you can find."
    ),
    array(
        "gambar" => "logo/9.svg",
        "judul" => "Best Price Offers",
        "deskripsi" => "The price is very affordable among similar products."
    ),
    array(
        "gambar" => "logo/14.svg",
        "judul" => "100% Natural",
        "deskripsi" => "Harvested from the finest olive trees that deliver health benefits."
    )
    );
    $namaTestimonial = "Richard Johnson";
    $lokasiTestimonial = "Bandung, Indonesia";
    $footerDeskripsi = "Clarity is in the business of improving your health and wellness. We grow, farm, and bottle the finest olive products you can find.";

    $judulInformation = "Information";
    $aboutUs = "About Us";
    $ourProduct = "Our Product";
    $contactUs = "Contact Us";
    $judulHelpCenter = "Help Center";
    $privacyPolicy = "Privacy Policy";
    $terms = "Terms & Conditions";
    $legalSupport = "Legal Support";
    $nomorTelepon = "0361 123 4567";
    $email = "info.clarity@gmail.com";
    $copyright = "Copyright Clarity 2021 All Right Reserved";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $namaWebsite; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <nav class="navbar">

        <div class="container">

            <div class="logo">

                <img
                    class="clarity"
                    src="logo/logoclarity.png">

            </div>

            <button
                class="menu-btn"
                id="menuBtn">

                ☰

            </button>

            <ul class="menu">
                <?php if (isset($menus) && !empty($menus)): ?>

                     <?php foreach ($menus as $menu): ?>

                 <?php

             $menuLabel = isset($menu["label"]) && !empty($menu["label"])
                 ? $menu["label"]
                    : "Menu";

             $menuUrl = isset($menu["url"]) && !empty($menu["url"])
                 ? $menu["url"]
                 : "#";

                ?>

                <li>
                     <a href="<?php echo $menuUrl; ?>">
                     <?php echo $menuLabel; ?>
                    </a>
                </li>

        <?php endforeach; ?>

        <?php endif; ?>
            </ul>

        </div>

        <div
            class="mobile-menu"
            id="mobileMenu">

            <button
                class="close-btn"
                id="closeBtn">

                ×

            </button>

            <img
                class="cls-btn"
                src="logo/logoclarity.png">

            <a href="#chooses">
                About
            </a>

            <a href="#products">
                Products
            </a>

            <a href="#contact">
                Contact
            </a>

        </div>

    </nav>

    <section class="hero">

        <div class="container">

            <div class="hero-text">

                <h1>

        <?php

         if (isset($judul1) && !empty($judul1)) {
            echo $judul1;
            }

        ?>

        <br>

        <?php

            if (isset($judul2) && !empty($judul2)) {
            echo $judul2;
            }

        ?>

        </h1>


        <p>

         <?php

             if (isset($deskripsi) && !empty($deskripsi)) {
             echo $deskripsi;
             } else {
              echo "Deskripsi belum tersedia.";
             }

         ?>
        </p>

                <div class="buttons">

                    <a
                        href="#products"
                        class="btn-dark">

                        Shop Now

                    </a>

                    <a
                        href="#products"
                        class="btn-light">

                        View Product

                    </a>

                </div>

            </div>

        </div>

    </section>

    <section class="section-card" id="products">

     <div class="container">

        <h2>
            Shop Clarity
        </h2>

        <p class="subtitle">
            We offer supplement for you with very good quality for health
        </p>

        <div class="card-container">

            <?php foreach ($products as $product) { ?>

                <?php


                $nama = isset($product["nama"]) && !empty($product["nama"])
                    ? $product["nama"]
                    : "Product is Not Available";


                $kapsul = isset($product["kapsul"]) && !empty($product["kapsul"])
                    ? $product["kapsul"]
                    : "0 capsules";


                $harga = isset($product["harga"]) && !empty($product["harga"])
                    ? $product["harga"]
                    : "---";

                $gambar = isset($product["gambar"]) && !empty($product["gambar"])
                    ? $product["gambar"]
                    : "image/default.jpg";

                $stok = isset($product["stok"])
                    ? $product["stok"]
                    : 0;

                ?>

                <div class="card-item">

                    <div class="card1">

                        
                        <div class="gambar">

                            <img
                                src="<?php echo $gambar; ?>"
                                alt="<?php echo $nama; ?>"
                            >

                        </div>


                       
                        <div class="content">

                            <h3>
                                <?php echo $nama; ?>
                            </h3>


                            <div class="harga-container">

                                <p class="info-capsul">
                                    <?php echo $kapsul; ?>
                                </p>
                             
                                <p class="info-harga">
                                    <?php echo $harga; ?>
                                </p>

                            </div>

                        </div>
                       
                        <?php if ($stok < 1) { ?>

                            <a href="#" class="beli">
                                Out of Stock
                            </a>

                        <?php } else { ?>

                            <a href="#" class="beli">
                                Add To Cart
                            </a>

                        <?php } ?>

                        </div>

                   </div>

             <?php } ?>

          </div>

        </div>

    </section>

    <section class="target">

        <div class="title">

        <h2>
            Are You...
        </h2>

        </div>

         <div class="target-container">

         <?php if (!empty($targets)): ?>

        <?php foreach ($targets as $target): ?>

            <div class="box <?php echo $target["class"]; ?>">

                <div class="overlay">

                    <h3>
                        <?php echo $target["nama"]; ?>
                     </h3>

                     <p>
                       <?php echo $target["deskripsi"]; ?>
                    </p>

                    <a href="#">
                        Shop Product
                    </a>

                </div>

            </div>

        <?php endforeach; ?>

        <?php endif; ?>
        </div>

    </section>

    <section class="choose" id="chooses">

     <div class="container">

        <h1>
            <?= $judulChoose ?>
        </h1>

        <p class="subtitle">
            Clarity was created with the mission to improve
            your health and wellbeing with the purest
            olive products on earth.
        </p>

        <div class="card-container">

           <?php if (isset($chooses) && !empty($chooses)): ?>

        <?php foreach ($chooses as $choose): ?>

            <?php

            $chooseGambar = isset($choose["gambar"]) && !empty($choose["gambar"])
                ? $choose["gambar"]
                : "logo/default.png";


            $chooseJudul = isset($choose["judul"]) && !empty($choose["judul"])
                ? $choose["judul"]
                : "Title Not Yet Available";


            $chooseDeskripsi = isset($choose["deskripsi"]) && !empty($choose["deskripsi"])
                ? $choose["deskripsi"]
                : "Deskripsi belum tersedia.";

            ?>

            <div class="card-item">

                <div class="card">

                    <div class="icon">

                        <img
                            src="<?php echo $chooseGambar; ?>"
                            alt="<?php echo $chooseJudul; ?>"
                        >

                    </div>

                    <h4 class="mif">
                        <?php echo $chooseJudul; ?>
                    </h4>

                        <p>
                            <?php echo $chooseDeskripsi; ?>
                        </p>

                    </div>

                </div>

         <?php endforeach; ?>

        <?php else: ?>

            <p>
                Informasi belum tersedia.
            </p>

        <?php endif; ?>

        </div>

        </div>

    </section>

    <section class="testimonial">

            <h1>

              Testimonials

            </h1>

             <p class="subtitle">

                  We have provided the best service to customers who have trusted

            </p>

         <div class="testimonial-card">

             <div class="stars">

                  ★★★★★

             </div>

             <p class="text">

               “I love Super Antioxidant for the polyphenols and antioxidants.
               It's hard to find a good and pure Olive Oil Supplement
               I'm on my second bottle now and I feel great!”

             </p>

        <div class="profile">

            <div class="profile-img">

            </div>

            <div class="profile-text">

               <?php if (isset($namaTestimonial) && !empty($namaTestimonial)): ?>

         <h4>
         <?php echo $namaTestimonial; ?>
        </h4>

        <?php else: ?>

        <h4>
            Anonymous
        </h4>

        <?php endif; ?>
        <span>

         <?php

             if (isset($lokasiTestimonial) && !empty($lokasiTestimonial)) {
             echo $lokasiTestimonial;
             } else {
             echo "Location unknown";
             }

            ?>

        </span>
              </div>

            </div>

         </div>

    </section>

    <section class="newsletter" id="contact">

        <div class="newsletter-overlay"></div>

        <div class="newsletter-content">

            <h2>

                Subscribe To Our Newsletter

            </h2>

            <p>

                Sign up for our newsletter for information, offers and more.

            </p>

            <form class="newsletter-form">

                <div class="email-input">

                    <span class="email-icon">

                        ✉

                    </span>

                    <input
                        type="email"
                        placeholder="Enter your email address">

                </div>

                <button type="submit">

                    Send Now

                </button>

            </form>

        </div>

    </section>

    <footer class="footer">
        <div class="container">

        <div class="footer-container">

            <div class="footer-about">
                <h3>
                    <img
                        class="footer-logo"
                        src="logo/logoclaity-footer.png">
                </h3>

                <p>
                    <?php echo $footerDeskripsi; ?>
                </p>
            </div>

            <div class="footer-column">
                <h4>
             <?php
                 echo isset($judulInformation) && !empty($judulInformation)
                 ? $judulInformation
                 : "Information";
            ?>
        </h4>

        <a href="#chooses"> 
          <?php
               echo isset($aboutUs) && !empty($aboutUs)
               ? $aboutUs
               : "About Us";
         ?>
        </a>

        <a href="#products">
        <?php
             echo isset($ourProduct) && !empty($ourProduct)
              ? $ourProduct
              : "Our Product";
         ?>
            </a>

            <a href="#contact">
            <?php
                 echo isset($contactUs) && !empty($contactUs)
                 ? $contactUs
                 : "Contact Us";
             ?>

            </a>
            </div>

            <div class="footer-column">
               <h4>

        <?php
             echo isset($judulHelpCenter) && !empty($judulHelpCenter)
                ? $judulHelpCenter
               : "Help Center";
         ?>

            </h4>
            <a href="#">
             <?php
                 echo isset($privacyPolicy) && !empty($privacyPolicy)
                 ? $privacyPolicy
                 : "Privacy Policy";
              ?>
                </a>

            <a href="#">
             <?php
                  echo isset($terms) && !empty($terms)
                 ? $terms
                : "Terms & Conditions";
            ?>
            </a>

            <a href="#">
              <?php
                  echo isset($legalSupport) && !empty($legalSupport)
                 ? $legalSupport
                 : "Legal Support";
             ?>
            </a>
            </div>
            <div class="footer-contact">
                <div class="contact-item">
                    <span>
                        <img
                            class="teleponlogo-img"
                            src="logo/teleponlogo.svg">
                    </span>

                   <p class="teleponlogo">
                        <?php
                            echo isset($nomorTelepon) && !empty($nomorTelepon)
                            ? $nomorTelepon
                            : "Nomor Is Not Available";
                        ?>
                    </p>
                </div>

                <div class="contact-item">
                    <span class="lock-email">✉</span>

                        <p>
                            <?php
                                echo isset($email) && !empty($email)
                                ? $email
                                : "Email Is Not Available";
                            ?>
                        </p>
                </div>

                <div class="social-media">

                    <a href="#">
                        <img
                            class="logomif"
                            src="logo/instagramlogo.png">
                    </a>

                    <a href="#">
                        <img
                            class="logomif"
                            src="logo/twiterlogo.svg">
                    </a>

                    <a href="#">
                        <img
                            class="facebocklogo"
                            src="logo/facebocklogo.png">
                    </a>

                </div>

            </div>

        </div>

        <div class="copyright">
            <p>
                <?php
                     echo isset($copyright) && !empty($copyright)
                     ? $copyright
                     : "Copyright Clarity";
                 ?>
                 </p>
        </div>
    </footer>

    <script src="script.js"></script>

</body>

</html>
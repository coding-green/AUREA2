<?php
include 'header.php';
include_once('function.php');
?>
<!-- Banner section strats here -->
<div class="skin-care-banner-section">
    <div class="slider-btn-groups">
        <div class="slider-btn prev-1">
            <svg width="40" height="70" viewBox="0 0 52 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M51 1L1 50L51 99" stroke="white" stroke-linecap="round" />
                <path d="M37 28L15 50L37 72" stroke="white" stroke-linecap="round" />
            </svg>
            PREV
        </div>
        <div class="slider-btn next-1">
            NEXT
            <svg width="40" height="70" viewBox="0 0 52 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L51 50L1 99" stroke="#A0A0A0" stroke-linecap="round" />
                <path d="M15 28L37 50L15 72" stroke="#A0A0A0" stroke-linecap="round" />
            </svg>
        </div>
    </div>
    <div class="swiper banner-swiper-slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner-wrapper"
                    style="background-image: linear-gradient(180deg, rgba(0 ,0 ,0 , 0.4) 0%, rgba(0 ,0 ,0 , 0.4) 100%), url(assets/image/skin-care/banner-img1.jpg);">
                    <div class="container">
                        <div class="banner-content">
                            <span>한국 스킨케어</span>
                            <h2 style="color:white">Unleash Your Glow with the Best of Korean Skincare</h2>
                            <p>Welcome to Aurea Bliss—your trusted destination for authentic Korean skincare. Discover lab-certified products crafted to meet all your skin’s needs, from deep hydration to youthful radiance. Elevate your skincare routine with solutions you can rely on for real, glowing results.</p>
                            <a class="primary-btn4 breadcram-btn" href="booking.html">
                                Shop Now
                                <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                        stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-wrapper"
                    style="background-image: linear-gradient(180deg, rgba(0 ,0 ,0 , 0.4) 0%, rgba(0 ,0 ,0 , 0.4) 100%), url(assets/image/skin-care/banner-img2.jpg);">
                    <div class="container">
                        <div class="banner-content">
                                                        <span>한국 스킨케어</span>
                            <h2 style="color:white">Unleash Your Glow with the Best of Korean Skincare</h2>
                            <p>Welcome to Aurea Bliss—your trusted destination for authentic Korean skincare. Discover lab-certified products crafted to meet all your skin’s needs, from deep hydration to youthful radiance. Elevate your skincare routine with solutions you can rely on for real, glowing results.</p>
                            <a class="primary-btn4 breadcram-btn" href="booking.html">
                                Shop Now
                                <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                        stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-wrapper"
                    style="background-image: linear-gradient(180deg, rgba(0 ,0 ,0 , 0.4) 0%, rgba(0 ,0 ,0 , 0.4) 100%), url(assets/image/skin-care/banner-img3.jpg);">
                    <div class="container">
                        <div class="banner-content">
                            <span>한국 스킨케어</span>
                            <h2 style="color:white">Unleash Your Glow with the Best of Korean Skincare</h2>
                            <p>Welcome to Aurea Bliss—your trusted destination for authentic Korean skincare. Discover lab-certified products crafted to meet all your skin’s needs, from deep hydration to youthful radiance. Elevate your skincare routine with solutions you can rely on for real, glowing results</p>
                            <a class="primary-btn4 breadcram-btn" href="booking.html">
                                Shop Now
                                <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                        stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Banner section ends here -->
<div class="my-5 shop-by-concern">
    <h1>Shop by Skin Concern</h1>
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=acne'">
                <img src="assets/image/skin-care/skinconcern/acne.jpg" class="card-img-top" alt="Brand 2">
                <h5 class="card-title">Acne</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=antiaging'">
                <img src="assets/image/skin-care/skinconcern/anti aging.jpg" class="card-img-top" alt="Brand 1">
                <h5 class="card-title">Anti-Aging</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=blackheads'">
                <img src="assets/image/skin-care/skinconcern/blackheads.jpg" class="card-img-top" alt="Brand 6">
                <h5 class="card-title">Blackheads</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=darkspots'">
                <img src="assets/image/skin-care/skinconcern/dark spot and pigmentation.jpg" class="card-img-top" alt="Brand 3">
                <h5 class="card-title">Dark Spots & Pigmentation</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=dryness'">
                <img src="assets/image/skin-care/skinconcern/dryness_ dehydration.jpg" class="card-img-top" alt="Brand 4">
                <h5 class="card-title">Dryness Dehydration</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=dullness'">
                <img src="assets/image/skin-care/skinconcern/dullness.jpg" class="card-img-top" alt="Brand 5">
                <h5 class="card-title">Dullness</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=enlargedpores'">
                <img src="assets/image/skin-care/skinconcern/enlarged poers.jpg" class="card-img-top" alt="Brand 5">
                <h5 class="card-title">Enlarged Pores</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=keratosispilaris'">
                <img src="assets/image/skin-care/skinconcern/Keratosis pilaris.jpg" class="card-img-top" alt="Brand 5">
                <h5 class="card-title">Keratosis Pilaris</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=rednessrosacea'">
                <img src="assets/image/skin-care/skinconcern/Redness or rosacea.jpg" class="card-img-top" alt="Brand 5">
                <h5 class="card-title">Redness or Rosacea</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=texturedskin'">
                <img src="assets/image/skin-care/skinconcern/textured skin.jpg" class="card-img-top" alt="Brand 5">
                <h5 class="card-title">Textured Skin</h5>
            </div>
            <div class="card" onclick="window.location.href='product-listing.php?skin_concern=unevenskintone'">
                <img src="assets/image/skin-care/skinconcern/uneven skin tone.jpg" class="card-img-top" alt="Brand 5">
                <h5 class="card-title">Uneven Skin Tone</h5>
            </div>
        </div>
    </div>


</div>
<!-- product section strats here -->
<div class="skin-care-product-section mb-120 pt-120">
    <div class="container">
        <div class="row wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-lg-12 mb-60 d-flex align-items-center justify-content-between gap-3 flex-wrap">
                <div class="skin-care-section-title">
                    <span>New Arrivals</span>
                    <h2>OUR BEST SELLING</h2>
                </div>
                <div class="slider-btn-groups2">
                    <div class="slider-btn prev-1">
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M11 13C10 10.5 5 8 2 7C5 6 9.5 4.5 11 1" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="slider-btn next-1">
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M3 13C4 10.5 9 8 12 7C9 6 4.5 4.5 3 1" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-lg-12">
                <div class="swiper skin-care-product-swiper">
                    <div class="swiper-wrapper">

                        <?php
                        include_once('config.php');

                        $sql = "SELECT p.*, pi.main_image_path as MainPathImage FROM Products p
        LEFT JOIN product_images pi ON p.product_id = pi.product_id
        WHERE p.status = 'active'";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <div class="swiper-slide">
                                <div class="product-card-section">
                                    <div class="product-image">
                                        <img src="crm/<?php echo $row['MainPathImage'] ?>" alt="">
                                        <div class="add-cart-btn">
                                            <a href="addtocart.php?id=<?php echo $row["product_id"]; ?>" class=" primary-btn6 cart-btn"><svg width="16" height="16"
                                                    viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.9007 15H4.10071C2.45071 15 1.10071 13.65 1.10071 12V11.9L1.40071 3.9C1.45071 2.25 2.80071 1 4.40071 1H11.6007C13.2007 1 14.5507 2.25 14.6007 3.9L14.9007 11.9C14.9507 12.7 14.6507 13.45 14.1007 14.05C13.5507 14.65 12.8007 15 12.0007 15H11.9007ZM4.40071 2C3.30071 2 2.45071 2.85 2.40071 3.9L2.10071 12C2.10071 13.1 3.00071 14 4.10071 14H12.0007C12.5507 14 13.0507 13.75 13.4007 13.35C13.7507 12.95 13.9507 12.45 13.9507 11.9L13.6507 3.9C13.6007 2.8 12.7507 2 11.6507 2H4.40071Z" />
                                                    <path
                                                        d="M8 7C6.05 7 4.5 5.45 4.5 3.5C4.5 3.2 4.7 3 5 3C5.3 3 5.5 3.2 5.5 3.5C5.5 4.9 6.6 6 8 6C9.4 6 10.5 4.9 10.5 3.5C10.5 3.2 10.7 3 11 3C11.3 3 11.5 3.2 11.5 3.5C11.5 5.45 9.95 7 8 7Z" />
                                                </svg>
                                                ADD TO CART
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <h4><?php echo $row["product_name"]; ?></h4>
                                        <h6><?php echo round($row["price"] * $exchangeRate, 2) . " " . strtoupper($currencyCode) ?></h6>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="progress-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!-- product section ends here -->

<!-- our company section strats here -->
<div class="our-company-section mb-120">
    <div class="container">
        <div class="row g-4 mb-50">
            <div class="col-lg-6 text-center wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="assets/image/skin-care/our-company-image.png" alt="">
            </div>
            <div class="col-lg-6 d-flex align-items-center wow animate fadeInRight" data-wow-delay="200ms"
                data-wow-duration="1500ms">
                <div class="our-story">
                    <div class="skin-care-section-title text-center">
                        <span>Our Story</span>
                        <h2>OUR COMPANY</h2>
                    </div>
                    <div class="our-company-content text-center">
                        <p><span>Buret</span> was founded in 2013 by <span>Natrausal</span>, a passionate skincare
                            enthusiast & expert with a
                            vision to revolutionize the skincare industry. It all started in London(UK), where
                            Founder
                            combined years of research and a deep love for natural ingredients to create products
                            that
                            truly make a difference.</p>
                        <p>From ancient barbers to modern salons, the hair care industry has evolved significantly.
                            Today’s salons offer a comprehensive range of services and have become important
                            community
                            spaces where trends are set and
                            individual styles are crafted.</p>
                        <img src="assets/image/skin-care/signature-icon.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our company section ends here -->

<!-- offer section strats here -->
<div class="skin-care-service-section mb-120">
    <div class="container">
        <div class="row wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-lg-12 mb-60">
                <div class="skin-care-section-title text-center">
                    <span>Our Story</span>
                    <h2>What We offer</h2>
                </div>
            </div>
        </div>
        <div class="row wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-lg-12 position-relative">
                <div class="slider-btn-groups3">
                    <div class="slider-btn prev-1">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_1583_345" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="14" height="14">
                                <rect width="14" height="14" fill="#DA8E8E" />
                            </mask>
                            <g mask="url(#mask0_1583_345)">
                                <path d="M11 13C10 10.5 5 8 2 7C5 6 9.5 4.5 11 1" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="slider-btn next-1">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_1583_340" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="14" height="14">
                                <rect width="14" height="14" transform="matrix(-1 0 0 1 14 0)" fill="#DA8E8E" />
                            </mask>
                            <g mask="url(#mask0_1583_340)">
                                <path d="M3 13C4 10.5 9 8 12 7C9 6 4.5 4.5 3 1" stroke="#1E1E1E" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="swiper offer-section-swiper mb-50">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="skin-care-service-card">
                                <a href="services-details.php" class="service-image">
                                    <img src="assets/image/skin-care/service-image1.png" alt="">
                                </a>
                                <div class="service-content">
                                    <a href="services01.html">Facials</a>
                                    <h5><a href="services-details.html">FACIALS TREATMENT</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="skin-care-service-card">
                                <a href="services-details.html" class="service-image">
                                    <img src="assets/image/skin-care/service-image2.png" alt="">
                                </a>
                                <div class="service-content">
                                    <a href="services01.html">Therapy</a>
                                    <h5><a href="services-details.html">Microneedling</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="skin-care-service-card">
                                <a href="services-details.html" class="service-image">
                                    <img src="assets/image/skin-care/service-image3.png" alt="">
                                </a>
                                <div class="service-content">
                                    <a href="services01.html">Treatments</a>
                                    <h5><a href="services-details.html">Laser Treatments</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="skin-care-service-card">
                                <a href="services-details.html" class="service-image">
                                    <img src="assets/image/skin-care/service-image4.png" alt="">
                                </a>
                                <div class="service-content">
                                    <a href="services01.html">LED Therapy</a>
                                    <h5><a href="services-details.html">LED Light Therapy</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="skin-care-service-card">
                                <a href="services-details.html" class="service-image">
                                    <img src="assets/image/skin-care/service-image5.png" alt="">
                                </a>
                                <div class="service-content">
                                    <a href="services01.html">Injectable</a>
                                    <h5><a href="services-details.html">Injectables</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="skin-care-service-card">
                                <a href="services-details.html" class="service-image">
                                    <img src="assets/image/skin-care/service-image6.png" alt="">
                                </a>
                                <div class="service-content">
                                    <a href="services01.html">Therapy</a>
                                    <h5><a href="services-details.html">Body Treatments</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="skin-care-service-card">
                                <a href="services-details.html" class="service-image">
                                    <img src="assets/image/skin-care/service-image7.png" alt="">
                                </a>
                                <div class="service-content">
                                    <a href="services01.html">Treatments</a>
                                    <h5><a href="services-details.html">Consultations</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress-pagination2"></div>
            </div>
        </div>
    </div>
</div>
<!-- offer section End here -->

<!-- skin protection section strats here -->
<div class="skin-protection-section mb-120">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 d-flex align-items-center wow animate fadeInLeft" data-wow-delay="200ms"
                data-wow-duration="1500ms">
                <div class="skin-care-section-title text-center">
                    <span>Why Need Skin Care?</span>
                    <h2>Skin protection</h2>
                    <p>Skin care is not just about aesthetics; it is a vital part of overall health and well-being.
                        By adopting a regular skincare routine, you can protect your skin, prevent premature aging,
                        manage skin conditions, and maintain a healthy, glowing complexion. Taking care of your skin
                        is an investment
                        in your health and confidence.</p>
                    <p class="list-top-text">Here are several reasons why proper skin care is important:</p>
                    <ul>
                        <li><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1587_577)">
                                    <path
                                        d="M12 6C12 7.5913 11.3679 9.11742 10.2426 10.2426C9.11742 11.3679 7.5913 12 6 12C4.4087 12 2.88258 11.3679 1.75736 10.2426C0.632141 9.11742 0 7.5913 0 6C0 4.4087 0.632141 2.88258 1.75736 1.75736C2.88258 0.632141 4.4087 0 6 0C7.5913 0 9.11742 0.632141 10.2426 1.75736C11.3679 2.88258 12 4.4087 12 6ZM9.0225 3.7275C8.96893 3.67411 8.90514 3.63208 8.83495 3.60391C8.76476 3.57574 8.68961 3.56202 8.61399 3.56356C8.53838 3.5651 8.46385 3.58187 8.39486 3.61288C8.32588 3.64388 8.26385 3.68848 8.2125 3.744L5.60775 7.06275L4.038 5.49225C3.93137 5.39289 3.79033 5.3388 3.64461 5.34137C3.49888 5.34394 3.35984 5.40297 3.25678 5.50603C3.15372 5.60909 3.09469 5.74813 3.09212 5.89386C3.08955 6.03958 3.14364 6.18062 3.243 6.28725L5.2275 8.2725C5.28096 8.32586 5.34462 8.36791 5.41469 8.39614C5.48475 8.42437 5.55979 8.43819 5.63531 8.43679C5.71083 8.43539 5.7853 8.4188 5.85427 8.38799C5.92324 8.35719 5.9853 8.31281 6.03675 8.2575L9.03075 4.515C9.13282 4.40887 9.18921 4.26696 9.18781 4.11972C9.1864 3.97248 9.12732 3.83166 9.02325 3.7275H9.0225Z"
                                        fill="#595959" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1587_577">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Moisture Retention
                        </li>
                        <li><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1587_577)">
                                    <path
                                        d="M12 6C12 7.5913 11.3679 9.11742 10.2426 10.2426C9.11742 11.3679 7.5913 12 6 12C4.4087 12 2.88258 11.3679 1.75736 10.2426C0.632141 9.11742 0 7.5913 0 6C0 4.4087 0.632141 2.88258 1.75736 1.75736C2.88258 0.632141 4.4087 0 6 0C7.5913 0 9.11742 0.632141 10.2426 1.75736C11.3679 2.88258 12 4.4087 12 6ZM9.0225 3.7275C8.96893 3.67411 8.90514 3.63208 8.83495 3.60391C8.76476 3.57574 8.68961 3.56202 8.61399 3.56356C8.53838 3.5651 8.46385 3.58187 8.39486 3.61288C8.32588 3.64388 8.26385 3.68848 8.2125 3.744L5.60775 7.06275L4.038 5.49225C3.93137 5.39289 3.79033 5.3388 3.64461 5.34137C3.49888 5.34394 3.35984 5.40297 3.25678 5.50603C3.15372 5.60909 3.09469 5.74813 3.09212 5.89386C3.08955 6.03958 3.14364 6.18062 3.243 6.28725L5.2275 8.2725C5.28096 8.32586 5.34462 8.36791 5.41469 8.39614C5.48475 8.42437 5.55979 8.43819 5.63531 8.43679C5.71083 8.43539 5.7853 8.4188 5.85427 8.38799C5.92324 8.35719 5.9853 8.31281 6.03675 8.2575L9.03075 4.515C9.13282 4.40887 9.18921 4.26696 9.18781 4.11972C9.1864 3.97248 9.12732 3.83166 9.02325 3.7275H9.0225Z"
                                        fill="#595959" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1587_577">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Sun Protection
                        </li>
                        <li><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1587_577)">
                                    <path
                                        d="M12 6C12 7.5913 11.3679 9.11742 10.2426 10.2426C9.11742 11.3679 7.5913 12 6 12C4.4087 12 2.88258 11.3679 1.75736 10.2426C0.632141 9.11742 0 7.5913 0 6C0 4.4087 0.632141 2.88258 1.75736 1.75736C2.88258 0.632141 4.4087 0 6 0C7.5913 0 9.11742 0.632141 10.2426 1.75736C11.3679 2.88258 12 4.4087 12 6ZM9.0225 3.7275C8.96893 3.67411 8.90514 3.63208 8.83495 3.60391C8.76476 3.57574 8.68961 3.56202 8.61399 3.56356C8.53838 3.5651 8.46385 3.58187 8.39486 3.61288C8.32588 3.64388 8.26385 3.68848 8.2125 3.744L5.60775 7.06275L4.038 5.49225C3.93137 5.39289 3.79033 5.3388 3.64461 5.34137C3.49888 5.34394 3.35984 5.40297 3.25678 5.50603C3.15372 5.60909 3.09469 5.74813 3.09212 5.89386C3.08955 6.03958 3.14364 6.18062 3.243 6.28725L5.2275 8.2725C5.28096 8.32586 5.34462 8.36791 5.41469 8.39614C5.48475 8.42437 5.55979 8.43819 5.63531 8.43679C5.71083 8.43539 5.7853 8.4188 5.85427 8.38799C5.92324 8.35719 5.9853 8.31281 6.03675 8.2575L9.03075 4.515C9.13282 4.40887 9.18921 4.26696 9.18781 4.11972C9.1864 3.97248 9.12732 3.83166 9.02325 3.7275H9.0225Z"
                                        fill="#595959" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1587_577">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Dehydration
                        </li>
                        <li><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1587_577)">
                                    <path
                                        d="M12 6C12 7.5913 11.3679 9.11742 10.2426 10.2426C9.11742 11.3679 7.5913 12 6 12C4.4087 12 2.88258 11.3679 1.75736 10.2426C0.632141 9.11742 0 7.5913 0 6C0 4.4087 0.632141 2.88258 1.75736 1.75736C2.88258 0.632141 4.4087 0 6 0C7.5913 0 9.11742 0.632141 10.2426 1.75736C11.3679 2.88258 12 4.4087 12 6ZM9.0225 3.7275C8.96893 3.67411 8.90514 3.63208 8.83495 3.60391C8.76476 3.57574 8.68961 3.56202 8.61399 3.56356C8.53838 3.5651 8.46385 3.58187 8.39486 3.61288C8.32588 3.64388 8.26385 3.68848 8.2125 3.744L5.60775 7.06275L4.038 5.49225C3.93137 5.39289 3.79033 5.3388 3.64461 5.34137C3.49888 5.34394 3.35984 5.40297 3.25678 5.50603C3.15372 5.60909 3.09469 5.74813 3.09212 5.89386C3.08955 6.03958 3.14364 6.18062 3.243 6.28725L5.2275 8.2725C5.28096 8.32586 5.34462 8.36791 5.41469 8.39614C5.48475 8.42437 5.55979 8.43819 5.63531 8.43679C5.71083 8.43539 5.7853 8.4188 5.85427 8.38799C5.92324 8.35719 5.9853 8.31281 6.03675 8.2575L9.03075 4.515C9.13282 4.40887 9.18921 4.26696 9.18781 4.11972C9.1864 3.97248 9.12732 3.83166 9.02325 3.7275H9.0225Z"
                                        fill="#595959" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1587_577">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Anti-Aging Benefits
                        </li>
                    </ul>
                    <a class="primary-btn1 service-menu-btn" href="services-details.php">
                        VIEW SERVICE MENU
                        <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 position-relative wow animate fadeInRight" data-wow-delay="200ms"
                data-wow-duration="1500ms">
                <div class="swiper skin-protection-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/image/skin-care/skin-protection-image.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/image/skin-care/skin-protection-image2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/image/skin-care/skin-protection-image.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!-- skin protection section ends here -->

<!-- skin care discount section -->
<div class="skin-care-discount-section mb-120"
    style="background-image: url(assets/image/skin-care/discount-image.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="skin-care-discount-content wow animate fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <span class="offer-tag">50% DISCOUNT</span>
                    <h2>every new customer has
                        been <span>50% discount</span> to every
                        single service package.</h2>
                    <a class="primary-btn1 service-btn" href="booking.html">
                        Shop Now
                        <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- skin care discount section-->

<!-- testimonials section strats here -->
<div class="skin-care-testimonials-section mb-120">
    <div class="container">
        <div class="row wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-lg-12 mb-40">
                <div class="skin-care-section-title text-center">
                    <span>Testimonials</span>
                    <h2>love from customer</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 position-relative pt-30">
                <div class="slider-btn-groups4">
                    <div class="slider-btn prev-1">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_1583_345" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="14" height="14">
                                <rect width="14" height="14" fill="#DA8E8E" />
                            </mask>
                            <g mask="url(#mask0_1583_345)">
                                <path d="M11 13C10 10.5 5 8 2 7C5 6 9.5 4.5 11 1" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="slider-btn next-1">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_1583_340" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="14" height="14">
                                <rect width="14" height="14" transform="matrix(-1 0 0 1 14 0)" fill="#DA8E8E" />
                            </mask>
                            <g mask="url(#mask0_1583_340)">
                                <path d="M3 13C4 10.5 9 8 12 7C9 6 4.5 4.5 3 1" stroke="#1E1E1E" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="swiper feedback-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="feedback-content">
                                <div class="author-area">
                                    <div class="author-content">
                                        <h6>Lazie Juie</h6>
                                        <span>25 Age, Mirpur (DOSH)</span>
                                    </div>
                                </div>
                                <div class="author-text">
                                    <div class="rating">
                                        <ul class="star">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p class="farst-para">Go to beauty and spa salons is to prioritize self-care.
                                    </p>
                                    <p>Regular exfoliation and cleansing remove dead skin cells, revealing a
                                        brighter, more radiant complexion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feedback-content">
                                <div class="author-area">
                                    <div class="author-content">
                                        <h6>Emy Ecolite</h6>
                                        <span>22 Age, Khilkhet, Dhaka</span>
                                    </div>
                                </div>
                                <div class="author-text">
                                    <div class="rating">
                                        <ul class="star">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p class="farst-para">Certain skincare products stimulate collagen production.
                                    </p>
                                    <p>Effective skin care can help manage and prevent conditions like acne, eczema,
                                        and rosacea..</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feedback-content">
                                <div class="author-area">
                                    <div class="author-content">
                                        <h6>amelia bella</h6>
                                        <span>30 Age, Baridhara (DOSH)</span>
                                    </div>
                                </div>
                                <div class="author-text">
                                    <div class="rating">
                                        <ul class="star">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p class="farst-para">Good skin can make a positive impression.</p>
                                    <p>Certain skincare products stimulate collagen production, maintaining skin
                                        elasticity and firmness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feedback-content">
                                <div class="author-area">
                                    <div class="author-content">
                                        <h6>Lazie Juie</h6>
                                        <span>25 Age, Mirpur (DOSH)</span>
                                    </div>
                                </div>
                                <div class="author-text">
                                    <div class="rating">
                                        <ul class="star">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p class="farst-para">Go to beauty and spa salons is to prioritize self-care.
                                    </p>
                                    <p>Regular exfoliation and cleansing remove dead skin cells, revealing a
                                        brighter, more radiant complexion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feedback-content">
                                <div class="author-area">
                                    <div class="author-content">
                                        <h6>Emy Ecolite</h6>
                                        <span>22 Age, Khilkhet, Dhaka</span>
                                    </div>
                                </div>
                                <div class="author-text">
                                    <div class="rating">
                                        <ul class="star">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p class="farst-para">Certain skincare products stimulate collagen production.
                                    </p>
                                    <p>Effective skin care can help manage and prevent conditions like acne, eczema,
                                        and rosacea..</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="feedback-content">
                                <div class="author-area">
                                    <div class="author-content">
                                        <h6>amelia bella</h6>
                                        <span>30 Age, Baridhara (DOSH)</span>
                                    </div>
                                </div>
                                <div class="author-text">
                                    <div class="rating">
                                        <ul class="star">
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <p class="farst-para">Good skin can make a positive impression.</p>
                                    <p>Certain skincare products stimulate collagen production, maintaining skin
                                        elasticity and firmness.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress-pagination3"></div>
            </div>
        </div>
    </div>
</div>
<!-- testimonials section strats here -->

<!-- partner section strats here -->
<div class="partner-logo-section mb-120 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-wrap">
                    <div class="logo-title">
                        <h5>We have 5 Brands & 20+ Trusted Partner</h5>
                    </div>
                    <div class="logo-area">
                        <div class="marquee_text2">
                            <?php
                                    $sql = "SELECT * FROM Brands";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->execute();

                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <a href="product-listing.php?brand=<?php echo urlencode($row['brands_name']); ?>">
                                            <img style="aspect-ratio: 18/9;height:80px" src="assets/image/brands/<?php echo $row['brand_image'] ?>" alt="">
                                        </a>
                                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partner section ends here -->

<!-- faq section strats here -->
<div class="faq-section style-2 mb-120 pt-120">
    <div class="container">
        <div class="row wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="col-lg-12 mb-60">
                <div class="skin-care-section-title text-center">
                    <span>Our Faq’s</span>
                    <h2>get to know</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center g-lg-4 gy-5">
            <div class="col-lg-8">
                <div class="faq-area">
                    <div class="faq-wrap">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item wow animate fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">What are your salon
                                        hours?</button>
                                </h5>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Our salon is open from 8:00 am to 9:00pm, 6 days in a week. We also offer
                                        extended hours on specific days for your convenience.
                                        <div class="opening-time">
                                            <h6>Opening Hours :</h6>
                                            <ul>
                                                <li>
                                                    <span>Sat - Tue</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>10AM - 7PM</span>
                                                </li>
                                                <li>
                                                    <span>Wed - Thu</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>8AM - 6PM</span>
                                                </li>
                                                <li>
                                                    <span>Sunday</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>CLOSED</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInUp" data-wow-delay="350ms"
                                data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">How can I book an
                                        appointment?</button>
                                </h5>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Our salon is open from 8:00 am to 9:00pm, 6 days in a week. We also offer
                                        extended hours on specific days for your convenience.
                                        <div class="opening-time">
                                            <h6>Opening Hours :</h6>
                                            <ul>
                                                <li>
                                                    <span>Sat - Tue</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>10AM - 7PM</span>
                                                </li>
                                                <li>
                                                    <span>Wed - Thu</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>8AM - 6PM</span>
                                                </li>
                                                <li>
                                                    <span>Sunday</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>CLOSED</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInUp" data-wow-delay="500ms"
                                data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">What services do
                                        you offer?</button>
                                </h5>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Our salon is open from 8:00 am to 9:00pm, 6 days in a week. We also offer
                                        extended hours on specific days for your convenience.
                                        <div class="opening-time">
                                            <h6>Opening Hours :</h6>
                                            <ul>
                                                <li>
                                                    <span>Sat - Tue</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>10AM - 7PM</span>
                                                </li>
                                                <li>
                                                    <span>Wed - Thu</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>8AM - 6PM</span>
                                                </li>
                                                <li>
                                                    <span>Sunday</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>CLOSED</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInUp" data-wow-delay="650ms"
                                data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">What is your
                                        cancellation policy?</button>
                                </h5>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Our salon is open from 8:00 am to 9:00pm, 6 days in a week. We also offer
                                        extended hours on specific days for your convenience.
                                        <div class="opening-time">
                                            <h6>Opening Hours :</h6>
                                            <ul>
                                                <li>
                                                    <span>Sat - Tue</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>10AM - 7PM</span>
                                                </li>
                                                <li>
                                                    <span>Wed - Thu</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>8AM - 6PM</span>
                                                </li>
                                                <li>
                                                    <span>Sunday</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>CLOSED</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInUp" data-wow-delay="800ms"
                                data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">Do you offer
                                        consultations?</button>
                                </h5>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Our salon is open from 8:00 am to 9:00pm, 6 days in a week. We also offer
                                        extended hours on specific days for your convenience.
                                        <div class="opening-time">
                                            <h6>Opening Hours :</h6>
                                            <ul>
                                                <li>
                                                    <span>Sat - Tue</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>10AM - 7PM</span>
                                                </li>
                                                <li>
                                                    <span>Wed - Thu</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>8AM - 6PM</span>
                                                </li>
                                                <li>
                                                    <span>Sunday</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>CLOSED</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInUp" data-wow-delay="950ms"
                                data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">How often should I
                                        get my hair trimmed?</button>
                                </h5>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Our salon is open from 8:00 am to 9:00pm, 6 days in a week. We also offer
                                        extended hours on specific days for your convenience.
                                        <div class="opening-time">
                                            <h6>Opening Hours :</h6>
                                            <ul>
                                                <li>
                                                    <span>Sat - Tue</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>10AM - 7PM</span>
                                                </li>
                                                <li>
                                                    <span>Wed - Thu</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>8AM - 6PM</span>
                                                </li>
                                                <li>
                                                    <span>Sunday</span>
                                                    <svg width="24" height="1" viewBox="0 0 24 1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="24" height="1" fill-opacity="0.3"></rect>
                                                    </svg>
                                                    <span>CLOSED</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-area text-center">
                    <a class="primay-btn2 enqiry-btn" href="contact.html">
                        <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span>HAVE ANY <br>
                            ENQIRY</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq section ends here -->

<?php include 'reel-popup.php'; ?>
<?php
include 'footer.php';
?>
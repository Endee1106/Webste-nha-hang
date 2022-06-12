
<section class="section" id="home">
    <div
        class="hero"
        style="background-image: url(http://file.hstatic.net/1000115147/file/goi-cuon-tom-thit-1_24de7b0e3b59419cb4a5dee0c8031e10_grande.jpg)"
    >
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <!-- sliderhome -->
            <div class="sliderhome">
                <!-- slidehome item -->
                <div class="slidehome activehome">
                    <!-- item info -->
                    <div class="dish-info">
                        <div class="dish-name">
                            <h2>goi cuon</h2>
                        </div>
                        <div class="dish-description">
                            <p>
                                Goi Cuon lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Sequi
                                corrupti id laboriosam quia illum
                                dolorem recusandae sit laudantium
                                debitis aspernatur assumenda dolore
                                voluptas deleniti optio porro deserunt,
                                autem, minus ut!
                            </p>
                        </div>
                        <a href="product.html" class="btn">order now</a>
                    </div>
                    <!-- end item info -->
                    <!-- item image -->
                    <div class="dish-img">
                        <img
                            src="http://file.hstatic.net/1000115147/file/goi-cuon-tom-thit-1_24de7b0e3b59419cb4a5dee0c8031e10_grande.jpg"
                            alt=""
                        />
                    </div>
                    <!-- end item image -->
                </div>
                <!-- end slidehome item -->
                <!-- slidehome item -->
                <div class="slidehome activehome">
                    <!-- item info -->
                    <div class="dish-info">
                        <div class="dish-name">
                            <h2>pho ga</h2>
                        </div>
                        <div class="dish-description">
                            <p>
                                Pho Ga lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Illum
                                nemo aliquid inventore? Rem, ducimus,
                                inventore minima, facere eius vitae
                                laborum accusantium iusto ipsam
                                consequatur debitis doloremque? Tempore
                                non esse alias!
                            </p>
                        </div>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <!-- end item info -->
                    <!-- item image -->
                    <div class="dish-img">
                        <img src="https://cdn.tgdd.vn/2021/09/CookProduct/1200(3)-1200x676-2.jpg" alt="" />
                    </div>
                    <!-- end item image -->
                </div>
                <!-- end slidehome item -->
                <!-- slidehome item -->
                <div class="slidehome activehome">
                    <!-- item info -->
                    <div class="dish-info">
                        <div class="dish-name">
                            <h2>bun bo</h2>
                        </div>
                        <div class="dish-description">
                            <p>
                                Bun Bo lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Nobis
                                perferendis sed reprehenderit velit
                                similique, explicabo recusandae eveniet
                                porro. Similique vitae dolorem
                                architecto, perspiciatis placeat nobis
                                velit impedit sunt dolores vel
                            </p>
                        </div>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <!-- end item info -->
                    <!-- item image -->
                    <div class="dish-img">
                        <img src="https://cdn.tgdd.vn/2021/04/CookProduct/1-1200x676-21.jpg" alt="" />
                    </div>
                    <!-- end item image -->
                </div>
                <!-- end slidehome item -->
                <!-- sliderhome control -->
                <div class="sliderhome-control">
                    <div class="sliderhome-control-item">
                        <img
                            src="http://file.hstatic.net/1000115147/file/goi-cuon-tom-thit-1_24de7b0e3b59419cb4a5dee0c8031e10_grande.jpg"
                            alt=""
                        />
                    </div>
                    <div class="sliderhome-control-item">
                        <img
                            src="https://cdn.tgdd.vn/2021/09/CookProduct/1200(3)-1200x676-2.jpg"
                            alt=""
                        />
                    </div>
                    <div class="sliderhome-control-item">
                        <img
                            src="https://cdn.tgdd.vn/2021/04/CookProduct/1-1200x676-21.jpg"
                            alt=""
                        />
                    </div>
                </div>
                <!-- end sliderhome control -->
            </div>
            <!-- end sliderhome -->
        </div>
    </div>
</section>
<section class="menu0">
    <div class="menu0_container">
        <div class="menu0_tieude">Our Storry</div>
        <h3 class="menu0_h3">OVER 20 YEARS OF EXPERIENCE</h3>
        <div class="menu0_noidung">
            Ristora is a restaurant, bar and coffee roastery located on
            a busy corner site in Farringdon’s Exmouth Market. With
            glazed frontage on two sides of the building, overlooking
            the market and a bustling London intersection optio cumque
            nihil impedit quo minus id quod maxime.
        </div>
        <div class="menu0_h4">
            WE ARE OPEN FOR BREAKFAST, LUNCH & DINNER
        </div>
        <div class="menu0_diachi">
            1062 Bulk Street, Florida, CL 13805 | (608) 853-8569
        </div>
        <div class="menu0_btn">DISCOVER MORE</div>
    </div>
</section>
<section class="menu1">
    <div class="titlle">
        <a href="">
            <img
                src="https://bizweb.dktcdn.net/100/332/765/themes/825892/assets/icon-banh.png?1624683794614"
                alt=""
                class="icon"
            />
        </a>
        <h2 class="tieude">Danh sách món ăn</h2>
    </div>
    <div class="slider show-on-scroll left-to-right" id="slider">
        <div class="slide" id="slide">
            <?php foreach($productList as $productItem) {?>
                <div class="item">
                    <div class="wow fadeInLeft card">
                        <div class="flip">
                            <div
                                class="front"
                                style="
                                    background-image: url(<?= $productItem['product_image']; ?>);
                                "
                            ></div>
                            <div class="back">
                                <h2 class="back_h2"><?= $productItem['product_name']; ?></h2>
                                <p><?= $productItem['product_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="ctrl-btn pro-prev"><</button>
        <button class="ctrl-btn pro-next">></button>
    </div>
</section>
<section class="today">
    <div class="titlle">
        <a href="">
            <img
                src="https://bizweb.dktcdn.net/100/332/765/themes/825892/assets/icon-banh.png?1624683794614"
                alt=""
                class="icon"
            />
        </a>
        <h2 class="tieude">Today what do eat?</h2>
    </div>
    <div class="today_doit">
        <div class="today_left show-on-scroll left-to-right">
            <h3 class="today_h3">Today what do eat?</h3>
            <div class="today_contact">
                Surely, each of us has once fallen into the situation of
                not knowing what to eat today? Cook something new to
                replace your boring menu? This seems like a very small
                problem, but it actually makes us worry as soon as we
                wake up in the morning. So why don't you go directly to
                the food-heath section to order the menu for today or a
                busy week? Come on, let's explore with META!
            </div>
        </div>
        <div class="today_right show-on-scroll right-to-left">
            <div class="today_girdlayout">
                <div class="today_girditem">
                    <img
                        src="https://images.unsplash.com/photo-1626074353765-517a681e40be?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80"
                        alt=""
                        class="gird_img"
                    />
                    <div class="gird_monan">
                        <h2 class="gird_mc">Thịt gà</h2>
                    </div>
                </div>
                <div class="today_girditem">
                    <img
                        src="https://images.unsplash.com/photo-1601314212732-047d4bdffd22?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80"
                        alt=""
                        class="gird_img"
                    />
                    <div class="gird_monan">
                        <h2 class="gird_mc">Cá chép</h2>
                    </div>
                </div>
                <div class="today_girditem">
                    <img
                        src="https://images.unsplash.com/photo-1529193591184-b1d58069ecdd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80"
                        alt=""
                        class="gird_img"
                    />
                    <div class="gird_monan">
                        <h2 class="gird_mc">Thịt kho tàu</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cuoi"></section>
<section class="menu2">
    <div class="titlle">
        <a href="">
            <img
                src="https://bizweb.dktcdn.net/100/332/765/themes/825892/assets/icon-banh.png?1624683794614"
                alt=""
                class="icon"
            />
        </a>
        <h2 class="tieude">Món ăn được ưa chuộng</h2>
    </div>
    <div class="menu2_container">
        <div class="product show-on-scroll right-to-left">
            <?php foreach($top4 as $item) { ?>
                <div class="wow bounceInLeft menu2_itembox">
                    <div class="imgbox">
                        <img
                            src="<?= $item['product_image'] ?>"
                        />
                    </div>
                    <div class="details">
                        <div class="gia">
                            <h2><?= $item['product_name'] ?></h2>
                            <div class="price"><?= number_format($item['product_price']) ?></div>
                        </div>

                        <a href="?act=cart&xuli=add&id=<?= $item['product_id'];?>" class="addcart">Add To Cart</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>
<section class="giamgia">
    <div class="tong_giamgia">
        <div class="container_giamgia">
            <div class="thunhat_giamgia">
                <h3 class="h3_giamgia">The</h3>
                <h2 class="h2_giamgia">County General</h2>
                <div class="noidung_giamgia">
                    Semper lacus cursus porta a primis feugiat ligula
                    risus auctor rhoncus semper undo
                </div>
                <div class="btn_giamgia">
                    <a href=""> ORDER NOW</a>
                </div>
            </div>
            <div class="thuhai_giamgia">
                <div class="hm_giamgia">
                    <img
                        src="https://jthemes.net/themes/html/testo/files/images/promo-11-img.png"
                        alt=""
                        class="img_giamgia"
                    />
                    <div class="price_giamgia">
                        <div class="cm_giamgia">
                            <h5 class="h5_giamgia">ONLY</h5>
                            <h3 class="gia_giamgia">$9.99</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thuba_giamgia">
                <div class="banhnho_giamgia">
                    <img
                        src="https://jthemes.net/themes/html/testo/files/images/menu/burger-02.png"
                        alt=""
                        class="ma_giamgia"
                    />
                    <div class="ut_giamgia">Ultimate Bacon Burger</div>
                </div>
                <div class="banhnho_giamgia">
                    <img
                        src="https://jthemes.net/themes/html/testo/files/images/menu/burger-02.png"
                        alt=""
                        class="ma_giamgia"
                    />
                    <div class="ut_giamgia">Ultimate Bacon Burger</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="create">
    <div class="create_container">
        <div class="create_tieude">
            We Create Sweet
            <span class="tt" style="color: rgb(198, 56, 28)"
                >Memories</span
            >
        </div>
        <div class="create_city">THE BEST RESTAURANT IN THE CITY</div>
        <div class="create_btn">
            <a href="contact.html" class="create_a"> DISCOVER MORE</a>
        </div>
    </div>
</section>
<section class="cungan">
    <div class="cungan_container">
        <div class="cungan_row">
            <div class="cungan_img">
                <img
                    src="https://jthemes.net/themes/html/testo/files/images/about-01-img.png"
                    alt=""
                    class="cungan_hinhanh"
                />
            </div>
            <div class="cungan_noidung">
                <h2 class="cungan_h2">
                    Nothing brings people together like a good burger
                </h2>
                <div class="cungan_p">
                    Semper lacus cursus porta primis ligula risus tempus
                    and sagittis ipsum mauris lectus laoreet purus ipsum
                    tempor enim ipsum porta justo integer ultrice
                    aligula lectus aenean magna and pulvinar purus at
                    pretium gravida
                </div>
                <ul class="cungan_ul">
                    <li class="cungan_li">
                        Fringilla risus, luctus mauris orci auctor purus
                        euismod pretium purus pretium ligula rutrum
                        tempor sapien
                    </li>
                    <li class="cungan_li">
                        Quaerat sodales sapien euismod purus blandit
                    </li>
                    <li class="cungan_li">
                        Nemo ipsam egestas volute turpis dolores ut
                        aliquam quaerat sodales sapien undo pretium a
                        purus mauris
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog">
    <div class="titlle">
        <a href="">
            <img
                src="https://bizweb.dktcdn.net/100/332/765/themes/825892/assets/icon-banh.png?1624683794614"
                alt=""
                class="icon"
            />
        </a>
        <h2 class="tieude">Blog</h2>
    </div>
    <div class="blog_container">
        <div class="blog_main owl-carousel">
            <div class="blog_box">
                <div class="blog_img">
                    <img
                        src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt=""
                    />
                </div>
                <div class="blog_contact">
                    <h3 class="blog_h3">Recipe</h3>
                    <div class="blog_p">
                        The great benefits of strawberries that not
                    </div>
                    <a href="" class="blog_a"> Xem chi tiết </a>
                </div>
            </div>
            <div class="blog_box">
                <div class="blog_img">
                    <img
                        src="https://images.unsplash.com/photo-1619738566066-81c6d589c80c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                        alt=""
                    />
                </div>
                <div class="blog_contact">
                    <h3 class="blog_h3">Recipe</h3>
                    <div class="blog_p">
                        The great benefits of strawberries that not
                    </div>
                    <a href="" class="blog_a"> Xem chi tiết </a>
                </div>
            </div>
            <div class="blog_box">
                <div class="blog_img">
                    <img
                        src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt=""
                    />
                </div>
                <div class="blog_contact">
                    <h3 class="blog_h3">Recipe</h3>
                    <div class="blog_p">
                        The great benefits of strawberries that not
                    </div>
                    <a href="" class="blog_a"> Xem chi tiết </a>
                </div>
            </div>
        </div>
    </div>
</section>

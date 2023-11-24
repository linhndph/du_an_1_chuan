<style>
    .inner-banner {
        margin-top: 50px;
    }
</style>
<div class="navbar-area">

    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="assets/img/logos/logo-3.png" class="logo-one" alt="Logo">
            <img src="assets/img/logos/footer-logo3.png" class="logo-two" alt="Logo">
        </a>
    </div>

    <div class="main-nav nav-three">

    </div>
</div>


<div class="inner-banner inner-bg10">

</div>


<div class="room-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="room-details-side">
                    <div class="side-bar-form">
                        <h3>Booking Sheet </h3>
                        <form>
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Check in</label>
                                        <div class="input-group">
                                            <input id="datetimepicker" type="text" class="form-control"
                                                placeholder="09/29/2020">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class="bx bxs-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Check Out</label>
                                        <div class="input-group">
                                            <input id="datetimepicker-check" type="text" class="form-control"
                                                placeholder="09/29/2020">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class="bx bxs-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Numbers of Persons</label>
                                        <select class="form-control">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Numbers of Rooms</label>
                                        <select class="form-control">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="room-details-article">
                    <!-- ảnh -->
                    <?php
                    $chitietsan = loadone_SAN_BT($id_san);
                    if (is_array($chitietsan)) {
                        extract($chitietsan);
                        $img_san = "../views/Admin/quanlysan/anhsan/" . $chitietsan['img_san'];
                        echo '
                
            <div class="room-details-item">
            <img src="' . $img_san . '" alt="Images">
        </div>
    </div>
    <div class="room-details-title">
        <h2>
            ' . $ten_san . '
        </h2>
        <ul>
            <li>
               ' . $gia .' VNĐ 
            </li>
        </ul>
    </div>
                ';
                    }
                    ?>
                    <div class="room-details-review">
                        <h2>Clients Review and Retting's</h2>
                        <div class="review-ratting">
                            <h3>Your retting: </h3>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="30" rows="8" required
                                            data-error="Write your message"
                                            placeholder="Write your review here.... "></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three">
                                        Submit Review
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="room-details-other pb-70">
    <div class="container">
        <div class="room-details-text">
            <h2>Sân cùng loại</h2>
        </div>
        <div class="row ">
            <?php
             $listsan_cungloai = loadOne_SAN_CUNGLOAI($id_san, $id_danh_muc);
            foreach($listsan_cungloai as $cungloai){
                 extract($cungloai);
              
                $idchitiet="ClientController.php?act=sancungloai&id_san=" . $id_san;
                $img_san = "../views/Admin/quanlysan/anhsan/" . $cungloai['img_san'];
                echo '
                <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="'.$idchitiet.'">
                                    <img src="'.$img_san.'" alt="Images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                <h3>
                                    <a href="'.$idchitiet.'">'.$ten_san.'</a>
                                </h3>
                                <span>'.$gia.' VNĐ </span>
                                <a href="'.$idchitiet.'" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                ';
               
            }

            ?>
            <!-- <div class="col-lg-6">
                <div class="room-card-two">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4 p-0">
                            <div class="room-card-img">
                                <a href="room-details.html">
                                    <img src="assets/img/room/room-style-img2.jpg" alt="Images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                <h3>
                                    <a href="room-details.html">Single Room</a>
                                </h3>
                                <span>300 / Per Night </span>
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed
                                    pulvinar purus.</p>
                                <ul>
                                    <li><i class="bx bx-user"></i> 1 Person</li>
                                    <li><i class="bx bx-expand"></i> 25m2 / 276ft2</li>
                                </ul>
                                <ul>
                                    <li><i class="bx bx-show-alt"></i> Sea Balcony</li>
                                    <li><i class="bx bxs-hotel"></i> Smallsize / Twin</li>
                                </ul>
                                <a href="room-details.html" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
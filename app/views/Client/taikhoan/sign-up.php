

    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color">Sign Up</span>
                                <h2>Create an Account!</h2>
                            </div>
                            <form id="contactForm" action="ClientController.php?act=dangky" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="text" name="ten_dang_nhap" id="ten_dang_nhap" class="form-control" 
                                                data-error="Please enter your Username" placeholder="Tên đăng nhập">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="mat_khau"
                                                placeholder="Mật khẩu">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="mat_khau"
                                                placeholder="Nhập lại mật khẩu">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="sdt"
                                                placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                      
                                    <div class=""></div>
                        
                                    <div class="col-12">
                                        <p class="account-desc">
                                            Already have an account?
                                            <a href="ClientController.php?act=dangnhap">Sign In</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <?php 
                if (isset($thongbao) && $thongbao != "") {
                    echo '<div class="container mt-3"><div class="alert alert-success " role="alert">' . $thongbao . '</div></div>';
                }
                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
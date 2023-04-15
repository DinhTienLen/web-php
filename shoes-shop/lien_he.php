<?php
require_once __DIR__. "/autoload/autoload.php" ;
?>
<?php require_once __DIR__. "/layouts/header.php" ;?>
     <div class="col-md-9  ">
     	<section class="box-main1" id="slide">
            <h3 class="title-main"><a href="">Thông tin liên hệ</a></h3>
            <div class= "contact-desc">
                                <h4 style="margin-top: 15px; margin-bottom: 10px;">Một vài thông tin về công ty:</h4>
                <p>Lớp 19CNTTD
                </p>
                <p>Địa chỉ công ty : Đà Nẵng
                </p>
                <p>Email : Liên hệ các vấn đề về đặt hàng online : lethanhhung16122001@gmail.com </p>
                <p>Email : Liên hệ các vấn đề về kênh cửa hàng, đại lý (offline) : chamsockhachhang@HungStore.com.vn</p>

                <p>Thời gian tư vấn: Thứ hai đến thứ bảy: từ 7h đến 16h30.</p>

                <p>Hotline : 1800.1090 </p>

                <p>Sđt: 0905.123.456 </p>
                <div class="contact">
                <form action="" class="contact__form">
                    <label class="contact__label" >Họ và tên</label> <br>
                    <input id="username" class="contact__item" type="text" name="username" placeholder="Điền tên của bạn" value="">
                    <p class="contact__error" id="error-name"></p>
                    <br>
                    <label class="contact__label" >Email</label> <br>
                    <input id="email"  class="contact__item"  type="email" name="email" placeholder="Điền email của bạn" value="">
                    <p class="contact__error" id="error-email"></p>
                    <br>
                    <label class="contact__label" >Tiêu đề</label> <br>
                    <input id="tieude"  class="contact__item"  type="tieude" name="tieude" placeholder="Điền vấn đề bạn gặp phải" value="">
                    <p class="contact__error" id="error-tieude"></p>
                    <br>
                    <label for="">Tin nhắn</label> <br>
                    <textarea id="mess"  class="contact__item"  cols="30" rows="5" value="" placeholder="Mô tả chi tiết vấn đề của bạn ?"></textarea>
                    <p class="contact__error" id="error-mess"></p>
                    <br>
                    <button onclick="return  testForm()" class="contact__button">Gửi</button>
                </form>
            </div>
            </div>

        </section>
    </div>
    </div>
<?php require_once __DIR__. "/layouts/footer.php" ;?>

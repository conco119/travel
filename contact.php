<html>
    <?php require('templates/head.php'); ?>
    <?php require("includes/VSCPDO.php"); ?>
    <?php require("includes/function.php") ?>
    <body>

        <?php

        require('templates/navigation.php');

        ?>
        <script>
            document.getElementById("fix").href="#";
        </script>
        <div class="container-fluid">

                <?php require("templates/banner.php"); ?>
          <div class="main-bottom">
                <div class="box-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <form method="post" action="admin/add-contact.php">
                                        <div class="contact-left">
                                            <h3  class="title-contact">LIÊN HỆ</h3>
                                            <div class="form-group">
                                                <label>Họ Tên<span style="color:red;">*</span></label>
                                                <p style="color:red;"><?php if(isset($_GET["name"])) echo $_GET["name"]; ?></p>
                                                <input type="text" class="form-control" name="name" autocomplete="off" >
                                            </div>
                                            <div class="form-group">
                                                <label>Email<span style="color:red;">*</span></label>
                                                <p style="color:red;"><?php if(isset($_GET["email"])) echo $_GET["email"]; ?></p>
                                                <input type="text" class="form-control" name="email" autocomplete="off" >
                                            </div>
                                            <div class="form-group">
                                                <label>Điện thoại<span style="color:red;">*</span></label>
                                                <p style="color:red;"><?php if(isset($_GET["phone"])) echo $_GET["phone"]; ?></p>
                                                <input type="text" class="form-control" name="phone" autocomplete="off" >
                                            </div>
                                            <div class="form-group">
                                                <label>Quốc Tịch</label>
                                                <p style="color:red;"><?php if(isset($_GET["nation"])) echo $_GET["nation"]; ?></p>
                                                <select class="form-control" name="nation" autocomplete="off" >
                                                  <?php
                                                  $exp = new vsc_pdo("localhost,root,,travel");
                                                  $row = $exp -> fetch_all("select * from  nationality");
                                                  foreach($row as $value){
                                                   ?>
                                                   <option value="<?php echo $value['nationality_id'] ?>"><?php echo $value['nationality_name'] ?></option>
                                                   <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Nội dung <span style="color:red;">*</span></label>
                                                <p style="color:red;"><?php if(isset($_GET["content"])) echo $_GET["content"]; ?></p>
                                                <textarea  class="form-control" rows="10" name="content" ></textarea>
                                                <?php if(isset($_GET["s"]))
                                                        if($_GET["s"]==1)
                                                            echo "<p style='color:red;'>Gửi thành công<p>";
                                                 ?>
                                            </div>
                                            <button class="btn btn-primary" type="submit" name="submit">Gửi</button>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="contact-right">
                                        <div class="title">
                                             <p class="h3">THÔNG TIN LIÊN HỆ</p>
                                            </div>

                                        <div class="contact-map">
                                            <ul>
                                                <li>42 Luong Ngoc Quyen Street Ha Noi</li>
                                                <li>Phone(+84) 936 .668 .388</li>
                                                <li>info@vietnamtravel24.com</li>
                                                <li>www.vietnamtravel24.com</li>
                                                <li>Hotline: ( MS Hà ) +84 936 683 088</li>
                                                <li>Follows Us</li>
                                            </ul>
                                            <div class="google-maps">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8860.069288291863!2d105.79927806254162!3d20.98460849021615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x58ffc66343a45247!2zVHLGsOG7nW5nIMSR4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgR2lhbyB0aMO0bmcgVuG6rW4gdOG6o2k!5e0!3m2!1svi!2s!4v1486981959297" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
          </div>
        </div>
        <?php

            require('templates/footer.php');

        ?>

    </body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Gmail Đăng nhập</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/CSE485_Gmail/Source/images/favicon-gmail.png">
    <link rel="stylesheet" href="css/signin.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div id="div1">
        <img src="images/logo-google.png" style="width:25%; height:25%; padding-top: 15px;" alt="">
        <h4>Đăng nhập</h4>
        <p style="margin-bottom: 8%;">để tiếp tục đến Gmail</p>
       
        <form class="form-signin" action="process-signin.php" method="post"> 
        <input type="email" id="inputEmail" name="txtEmail"   placeholder="Email hoặc số điện thoại" required>
            <p class="invalid-feedback">
                Please provide a valid zip.
            </p><br>
            <?php
                    if(isset($_GET['error'])){
                        echo "<p style='color:red;font-size:13px;margin:5px 33px;text-align:left;'><svg aria-hidden='true' fill='currentColor' focusable='false' width='16px' height='16px' viewBox='0 0 24 24' xmlns='https://www.w3.org/2000/svg'><path d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z'></path></svg> {$_GET['error']} </p>";
                    }

                ?>
            <div class="col-md-6" style="margin-top:10px;">
                <a style="text-decoration: none; " href="Forget.php">Bạn quên địa chỉ email</a>
            </div>
            <p style="padding: 5%; color: rgb(124, 121, 117);">
                Đây không phải máy tính của bạn? Hãy sử dụng chế độ Khách để đăng nhập một cách riêng tư.
                <a style="text-decoration:none" href="https://support.google.com/chrome/answer/6130773?hl=vi">Tìm hiểu thêm</a>
            </p>
            <div class="row" style="margin-bottom: 60px;">
                <div class="col-md-5">
                    <a style="text-decoration: none" href="SignUp.php">Tạo tài khoản</a>
                </div>
                <div class="d-grid  col-4 mx-auto">
                    <button type="submit" class="btn btn-primary" name="btnSignIn">Tiếp theo</button>
                </div>
            </div>
        </form>
        <!-- type="submit" name="btnSignIn"> -->
    </div>
    <div style="margin-left: 36.5%; font-size: 15px; width: 26%;">

        <!-- nav -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <select class="btn btn-default" id="language" name="language" requied
                    style="font-size: 14px; width: 110px;">
                    <option value="#">Tiếng Việt </option>
                    <option value="#">English (United Kingdom)</option>
                    <option value="#">English (United States)</option>
                    <option value="#">Canada</option>
                    <option value="#">France</option>
                    <option value="#">Italiano</option>
                    <option value="#">Chinese</option>
                </select>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size: 14px;  ">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://support.google.com/accounts?hl=vi#topic=3382296"
                            style="color: rgb(124, 121, 117);">Trợ giúp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://policies.google.com/privacy?gl=VN&hl=vi"
                            style="color: rgb(124, 121, 117);">Bảo mật</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://policies.google.com/terms?gl=VN&hl=vi"
                            style="color: rgb(124, 121, 117);">Điều khoản</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

</body>

</html>
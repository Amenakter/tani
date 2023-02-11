<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bangladesh Bank</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="cont_p container ">
        <!-- hearder -->
        <header class=" mt-3">
            <div class="row">
                <div class="col-lg-2">
                    <nav class="navbar   ">
                        <div class="">
                            <button class="navbar-toggler text-bg-light" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Monetary Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Financial System</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Publication</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">MEDIA & Press Release</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-4 mt-3">
                    <form class="d-flex searchbar">
                        <input type="search" placeholder="Search">
                        <i class="font fa fa-search" aria-hidden="true"></i>
                    </form>
                </div>
                <div class="col-lg-6 top_right d-flex justify-content-end mt-2">
                    <p>English</p>
                </div>
            </div>

        </header>
        <!-- header part end -->
    </div>
    <!-- Hero section -->
    <div class="row">
        <div class="banner">
            <?php dynamic_sidebar('bannerbb');?>
        </div>
    </div>
    <!-- Hero section end -->
    <script src="./assests/js/bootstrap.bundle.min.js"></script>
    <?php wp_footer(); ?>
</body>

</html>
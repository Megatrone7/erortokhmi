<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the First Site" />
    <meta name="author" content="Reza Ghorbani">
    <meta name="keywords" content="HTML ,CSS, PHP, developer" />

    <!-- My CSS File -->
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('styleResponsive.css')); ?>">
    <!-- Add Msi CSS File -->
    <link rel="stylesheet" href="<?php echo e(asset('msi2.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('msiRespnsive.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('aos.css')); ?>">
    <!-- Add bootstrap Icon File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <title>قابینو</title>
</head>

<body onscroll="MyBtn_GoUp();">

    <!-- ======= Header ======= -->
    <header id="header" class="w-100 bg-dark">
        <div class="container">
            <div id="details-header" class="row ai-baseline bg-dark text-white">
                <div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <i class="bi bi-telephone"></i>
                    <strong>+98 9392985720</strong>
                </div>
                <div class="col-10 col-sm-6 col-md-4 col-lg-4 col-xl-5">
                    <i class="bi bi-geo-alt"></i>
                    <strong>مشهد-آزادی-شهرک غرب</strong>
                </div>
                <div class="col-10 col-md-4 col-md-4 col-lg-4 col-xl-3 ta-left social-links">
                    <a href="#" class="me-1 rounded-circle px-1 py-1 d-inline-b icon-headers text- instagram">
                        <i class="bi bi-instagram"></i></a>
                    <a href="#" class="me-1 rounded-circle py-1 px-1 d-inline-b icon-headers text- facebook">
                        <i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-1 rounded-circle py-1 px-1 d-inline-b icon-headers text telegram">
                        <i class="bi bi-telegram"></i></a>

                </div>
            </div>
            <nav class="navbar bg-raisan-black">
                <div class="container jc-start">
                    <a class="navbar-brand ai-center" href="index.blade.html">
                        <img src="../../../../../Music/ghabino-v2/assets/img/logo-2.webp" class=" me-1 ms-2 logo" alt="logoSite">
                        <span class="text-white fs-2">قابینو</span>
                    </a>
                    <div class="navbar-collapse collapse" id="navbarCollapse">
                        <ul id="" class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item d-inline-block position-relative">
                                <a class="nav-link active" aria-current="page" href="index.blade.html">خانه</a>
                            </li>
                            <li class="nav-item d-inline-block position-relative">
                                <a class="nav-link" href="#">خدمات عکاسی</a>
                                <ul>
                                    <li class="d-inline-block position-relative"><a href="#">خانوادگی</a>
                                        <ul>
                                            <li><a href="#">چهره-پروفایل</a></li>
                                            <li><a href="#">زوج</a></li>
                                            <li><a href="#">بارداری</a></li>
                                            <li><a href="#">نوزاد</a></li>
                                            <li><a href="#">کودک</a></li>
                                        </ul>
                                    </li>
                                    <li class="d-inline-block position-relative"><a href="#">مراسم</a>
                                        <ul>
                                            <li><a href="#">تولد و مهمانی</a></li>
                                            <li><a href="#">عقد و عروسی</a></li>
                                            <li><a href="#">فارغ التحصیلی</a></li>
                                        </ul>

                                    </li>
                                    <li class="d-inline-block position-relative"><a href="#">تبلیغاتی</a>
                                        <ul>
                                            <li><a href="#">صنعتی زمینه سفید</a></li>
                                            <li><a href="#">طلا و جواهر</a></li>
                                            <li><a href="#">مدلینگ پوشاک و لباس</a></li>
                                            <li><a href="#">معمار و دکوراسیون</a></li>
                                            <li><a href="#">خط تولید</a></li>
                                            <li><a href="#">تبلغات غذا</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li class="nav-item d-inline-block position-relative">
                                <a class="nav-link" href="#">خدمات فیلمبرداری</a>
                            </li>
                            <li class="nav-item d-inline-block position-relative">
                                <a class="nav-link" href="#">بلاگ</a>
                            </li>
                            <li class="nav-item d-inline-block position-relative">
                                <a class="nav-link" href="#">درباره ما</a>
                            </li>
                            <li class="nav-item d-inline-block position-relative">
                                <a class="nav-link" href="#">تماس با ما</a>
                            </li>

                        </ul>
                    </div>
                    <div class="row ai-baseline jc-center box-users">
                        <form id="form" class="form-search me-auto" role="search">
                            <input type="search" id="query" name="q" placeholder="جستجو..."
                                aria-label="Search through site content">
                            <button> <svg viewBox="0 0 1024 1024">
                                    <path class="path1"
                                        d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                                    </path>
                                </svg></button>
                        </form>
                        <div class="btn-light">
                            <button type="button" class="btn text-light hover-link me-2">ورود</button>
                            <button type="button" class="btn text-light hover-link w-30">ثبت نام</button>
                        </div>

                    </div>

                </div>
            </nav>

            <!--mobile nav for responsive -->
            <nav id="responsive-navigation">
                <ul>
                    <li><a href="#">خانه</a></li>
                    <li><a href="#">قهوه</a></li>
                    <li><a href="#">کیک</a></li>
                    <li><a href="#">نوشیدنی</a></li>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">تماس با ما</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- =======/end Header-->

    <!-- ======= slider Section ======= -->
    <section id="slider" class="bg-img-header h-60vh text-white">
        <div id="" class="showcase d-flex fd-column jc-center ta-center ai-baseline h-100">
            <div class="p-5 m-3 ai-end">
                <div class="badge">
                    <p>ثبت خاطراتی ماندگار</p>
                </div>
                <h1 class="1-heading p-2 pb-4 fw-bold ">آفیش عکس با قابینو</h1>
                <p class="my-4 pb-4">ما با داستانی عاشقانه شروع کردیم , داستانی که شروعش با یک عکس بود</p>
            </div>
        </div>
    </section>
    <!--=======/end slider Section -->
    <!-- ======= main ======= -->
    <main role="main">
        <!-- ======= page-about section ======= -->
        <section class="page-about">
            <div class="container py-2">
                <div class="section-title ta-center aos-init aos-animate" data-aos="fade-up"">
                            <h2>درباره ما</h2>
                            <p class=" mb-3">رضایت شما مهم تر از هر چیزی برایمان است</p>
                </div>
                <div class="row pt-4 aos-init aos-animate" data-aos="fade-down">
                    <div class="col-10 mx-auto col-lg-4 offset-lg-1">
                        <div class="img-place">
                            <img src="../../../../../Music/ghabino-v2/assets/img/about%20me.webp" alt="">
                        </div>
                    </div>
                    <div class="col-10 col-lg-6 my-auto about-cap">
                        <div class="box-details">
                            <h3 class="fw-normal pt-4 pb-2">من شقایق قربانی، مسئول قابینو هستم.</h3>
                            <p class="pt-1 lh-2 text-muted ta-justify pb-2">
                                قابینو با هدف جلب رضایت مشتری و خدمات شایسته برای شما راه اندازی شده است تا اسرع وقت پاسخ
                                درخواست های شما برای عکاسی و فیلم برداری باشد
                                قابینو با هدف جلب رضایت مشتری و خدمات شایسته برای شما راه اندازی شده است تا اسرع وقت پاسخ
                                درخواست های شما برای عکاسی و فیلم برداری باشد
                            </p>
                            <div class="pb-5 d-flex jc-around ta-center">
                                <div class="d-flex fd-column">
                                    <span data-purecounter-duration="2.5" data-purecounter-end="232"
                                        data-purecounter-pulse="5" class="purecounter mb-3">10</span>
                                    <strong>مشتریان ما</strong>
                                </div>
                                <div class="d-flex fd-column">
                                    <span data-purecounter-duration="2.5" data-purecounter-end="320"
                                        data-purecounter-pulse="5" class="purecounter mb-3">10</span>
                                    <strong>پروژه ها</strong>
                                </div>
                                <div class="d-flex fd-column">
                                    <span data-purecounter-duration="2.5" data-purecounter-end="15"
                                        data-purecounter-pulse="2" class="purecounter mb-3">10</span>
                                    <strong>دوره ها</strong>
                                </div>
                            </div>
                            <a class="border border-info rounded-25 px-3 py-2 socialBtn text-black m-auto" href="#">ارتباط با
                                ما</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======/end  page-about Section -->

        <!-- ======= Services Section ======= -->
        <section id="Services" class="services bg-gray-main">
            <div class="container">
                <div class="section-title ta-center aos-init aos-animate" data-aos="fade-up">
                    <h2>سرویس ها</h2>
                    <p class="mb-3">مروری بر برخی بهترین سرویس های ما که باعث شده از سایر رقیبان پیشی گرفته و باعث
                        انتخاب اول شما
                        تبدیل شده
                        است.</p>
                </div>
                <div class="row mt-4 ta-center">
                    <div class="col-md-5 col-lg-3">
                        <div class="card card-service">
                            <div class="icon">
                                <span class="bi bi-card-checklist d-flex"></span>
                            </div>
                            <div class="caption">
                                <h4  class="fw-600">عکاسی حرفه ای</h4>
                                <p class="lh-2">محصول ما به گونه ای طراحی شده است تا به ساده ترین شکل آماده به مصرف شود.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="card card-service">
                            <div class="icon">
                                <span class="bi bi-clipboard-check d-flex"></span>
                            </div>
                            <div class="caption">
                                <h4 class="fw-600">ضمانت کیفیت</h4>
                                <p class="lh-2">کیفیت اتفاقی نیست و ما تمامی محصولات خود را ضمانت می نماییم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="card card-service">
                            <div class="icon">
                                <span class="bi bi-list-ol d-flex"></span>
                            </div>
                            <div class="caption">
                                <h4  class="fw-600">تجهیزات عالی</h4>
                                <p class="lh-2">انتخاب خود را با کمک نظرات کاربران پیدا کنید تا به بهترین انتخاب
                                    برسانید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="card card-service">
                            <div class="icon">
                                <span class="bi bi-people d-flex"></span>
                            </div>
                            <div class="caption">
                                <h4 class="fw-600">دیده متمایز</h4>
                                <p class="lh-2">برای اینکه از اتلاف وقت شما جلو گیری شود ما در روند پرداخت سرعت بخشیدیم
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="card card-service">
                            <div class="icon">
                                <span class="bi bi-people d-flex"></span>
                            </div>
                            <div class="caption">
                                <h4  class="fw-600">رزرو آنلاین</h4>
                                <p class="lh-2">برای اینکه از اتلاف وقت شما جلو گیری شود ما در روند پرداخت سرعت بخشیدیم
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="card card-service">
                            <div class="icon">
                                <span class="bi bi-people d-flex"></span>
                            </div>
                            <div class="caption">
                                <h4  class="fw-600">ادیت رایگان</h4>
                                <p class="lh-2">برای اینکه از اتلاف وقت شما جلو گیری شود ما در روند پرداخت سرعت بخشیدیم
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="card card-service">
                            <div class="icon">
                                <span class="bi bi-people d-flex"></span>
                            </div>
                            <div class="caption">
                                <h4  class="fw-600">لوکیشن متنوع و خاص</h4>
                                <p class="lh-2">برای اینکه از اتلاف وقت شما جلو گیری شود ما در روند پرداخت سرعت بخشیدیم
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="card card-service">
                            <div class="icon">
                                <span class="bi bi-people d-flex"></span>
                            </div>
                            <div class="caption">
                                <h4  class="fw-600">نرخ عادلانه</h4>
                                <p class="lh-2">برای اینکه از اتلاف وقت شما جلو گیری شود ما در روند پرداخت سرعت بخشیدیم
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======/end Services Section -->

        <!-- ======= page-facts Section ======= -->
        <section id="page-facts" class="page-facts position-relative text-white ta-center">
            <div class="container">
                <div class="row content position-relative ai-baseline jc-center">
                    <p class="ps-4 fs-4">
                        برای ثبت بهترین خاطرات ماندگار شیرین همین حالا اقدام کن!
                    </p>
                    <a class="border border-info rounded-25 px-3 py-3 socialBtn text-white ps-4" href="#">بیشتر</a>
                </div>
        </section>
        <!-- =======/end  page-facts Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <div class="section-title ta-center aos-init aos-animate" data-aos="fade-up"">
                    <h2>نمونه کار</h2>
                    <p class=" mb-3">شما برخی از نمونه کار های ما را مشاهد می کنید برخی از دسته های در این بخش آمده است
                    تا شما نیم
                    نگاهی از آنها
                    داشته باشید برای مشاهد نمونه کار مورد نظر وارد بخش مربوطه شوید.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex jc-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">همه</li>
                            <li data-filter=".filter-prduct" class="">محصول</li>
                            <li data-filter=".filter-profile" class="">چهره</li>
                            <li data-filter=".filter-ghorg" class="">طبیعت</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container position-relative w-80 mx-auto ">
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-10 col-md-6 col-lg-4 portfolio-item aos-init aos-animate" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="portfolio-wrap">
                            <img src="<?php echo e($customer->url); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4 class="fw-600"><?php echo e($customer->name); ?></h4>
                                <p><?php echo e($customer->descroption); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </section>
        <!-- =======/end  Portfolio Section -->

        <!-- ======= blog Section ======= -->
        <section id="recent-blog" class="recent-blog">
            <div class="container">
                <div class="section-title ta-center aos-init aos-animate" data-aos="fade-up"">
                    <h2>بلاگ</h2>
                    <p class=" mb-3 text-black fw-normal">مروری بر آخرین بلاگ</p>
                </div>
                <div class="row jc-center post-recent">
                    <div class="col-10 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="img-place">
                                <img src="../../../../../Music/ghabino-v2/assets/img/blog/gallery-9.webp" alt="">
                            </div>
                            <div class="caption">
                                <div class="meta text-black fs-7 fw-700 mb-3">
                                    <span class="post-date">
                                        <i class="bi bi-calendar-date-fill"></i>
                                        سه شنبه 1 ادربیشت</span>
                                    <span class="post-author">
                                        <i class="bi bi-chat-fill"></i>
                                        32 نظر
                                    </span>
                                </div>
                                <h3 class="post-title text-black ">عنوان مقاله اول</h3>
                                <p class="ta-justify lh-2">متن مقاله اول است که در این باکس قرار دارد و می توان عوض کرده
                                    و
                                    متن دلخواه خود را
                                    گذاشته باشید</p>
                                <a href="#">
                                    <span class="ls-text">بیشتر بخوانید</span>
                                    <i class=""></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="img-place">
                                <img src="../../../../../Music/ghabino-v2/assets/img/blog/gallery-10.webp" alt="">
                            </div>
                            <div class="caption">
                                <div class="meta text-black fs-7 fw-700 mb-3">
                                    <span class="post-date">
                                        <i class="bi bi-calendar-date-fill"></i>
                                        سه شنبه 1 ادربیشت</span>
                                    <span class="post-author">
                                        <i class="bi bi-chat-fill"></i>
                                       32 نظر
                                    </span>
                                </div>
                                <h3 class="post-title text-black">عنوان مقاله دوم</h3>
                                <p class="ta-justify lh-2">متن مقاله اول است که در این باکس قرار دارد و می توان عوض کرده
                                    و
                                    متن دلخواه خود را
                                    گذاشته باشید</p>
                                <a href="#">
                                    <span class="ls-text">بیشتر بخوانید</span>
                                    <i class=""></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="img-place">
                                <img src="../../../../../Music/ghabino-v2/assets/img/blog/gallery-13.webp" alt="">
                            </div>
                            <div class="caption">
                                <div class="meta text-black fs-7 fw-700 mb-3">
                                    <span class="post-date">
                                        <i class="bi bi-calendar-date-fill"></i>
                                        سه شنبه 1 ادربیشت</span>
                                    <span class="post-author">
                                        <i class="bi bi-chat-fill"></i>
                                     20 نظر
                                    </span>
                                </div>
                                <h3 class="post-title text-black">عنوان مقاله سوم</h3>
                                <p class="ta-justify lh-2">متن مقاله اول است که در این باکس قرار دارد و می توان عوض کرده
                                    و
                                    متن دلخواه خود را
                                    گذاشته باشید</p>
                                <a href="#">
                                    <span class="ls-text">بیشتر بخوانید</span>
                                    <i class=""></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="img-place">
                                <img src="../../../../../Music/ghabino-v2/assets/img/blog/gallery-16.webp" alt="">
                            </div>
                            <div class="caption">
                                <div class="meta text-black fs-7 fw-700 mb-3">
                                    <span class="post-date">
                                        <i class="bi bi-calendar-date-fill"></i>
                                        سه شنبه 1 ادربیشت</span>
                                    <span class="post-author">
                                        <i class="bi bi-chat-fill"></i>
                                      66 نظر
                                    </span>
                                </div>
                                <h3 class="post-title text-black">عنوان مقاله چهارم</h3>
                                <p class="ta-justify lh-2">متن مقاله اول است که در این باکس قرار دارد و می توان عوض کرده
                                    و
                                    متن دلخواه خود را
                                    گذاشته باشید</p>
                                <a href="#">
                                    <span class="ls-text">بیشتر بخوانید</span>
                                    <i class=""></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- learn more portfolio-->
                    <div class="ta-center py-3">
                        <a href="#" class="border border-info rounded-25 px-3 py-2 socialBtn text-black">مشاهده
                            بیشتر</a>
                    </div>
                    <!-- /end learn more portfolio-->
                </div>
            </div>
        </section>
        <!-- =======/end blog section -->

        <!-- ======= User comments Section ======= -->
        <section id="User-comments" class="User-comments position-relative text-white ta-center">
            <div class="container">
                <div class="row content fd-column jc-center position-relative">
                    <div class="section-title ta-center">
                        <h2 class="text-white">نظرات شما</h2>
                        <p class=" mb-4 text-white fw-normal">مروری به نظرات و پیشنهادات شما عزیزان</p>
                    </div>
                    <div>
                        <img src="../../../../../Music/ghabino-v2/assets/img/proflie/proflie-1.jpg" class="img-profile mb-3" />
                        <p id="commnet-user" class="commnet-users mt-2 fs-6">خیلی عالی بود واقعا حرفه بودن در عکاسی تشکر میکنم</p>
                    </div>

                </div>
        </section>
        <!-- =======/end  page-facts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title ta-center">
                    <h2>ارتباط با ما</h2>
                    <p class=" mb-3 text-black fw-normal">شما می توانید از راه های ارتباط زیر با نا در ارتباط باشید.</p>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex ai-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>آدرس:</h4>
                                <p>مشهد-شهرک رازی-رازی 3-پلاک 8</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>ایمیل:</h4>
                                <p>info@coffee.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>شماره تماس</h4>
                                <p class="direction-l f-right">+98 9392985720</p>
                            </div>
                            <iframe src="https://www.google.com/maps" frameborder="0"
                                style="border:0; width: 100%; height: 290px;"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex ai-stretch">
                        <form action="" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">نام شما</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="نام خود را وارد کنید " required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">ایمیل شما</label>
                                    <input type="email" class="form-control" name="email" placeholder="info@gmail.com"
                                        id="email" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Subject">عنوان</label>
                                <input type="text" class="form-control" name="Subject" placeholder="موضوع مورد نظر"
                                    id="Subject" required="">
                            </div>
                            <div class="form-group">
                                <label for="message">پیام</label>
                                <textarea class="form-control" name="message" id="message"
                                    placeholder="پیام خود را درج نمایید" rows="10" required=""></textarea>
                            </div>
                            <div class="ta-center">
                                <button type="submit" class="border border-info rounded-25 px-4 py-2 w-15">ارسال
                                    پیام</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!--=======/end main -->

    <!-- ======= footer ======= -->
    <footer>
        <section class="vg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 py-3">
                        <div class="footer-info">
                            <h4 class="text-white">قابینو</h4>
                            <hr>
                            <p class="lh-2">
                                قابینو با هدف جلب رضایت مشتری و خدمات شایسته برای شما راه اندازی شده است تا اسرع وقت
                                پاسخ
                                درخواست های شما برای عکاسی و فیلم برداری باشد
                            </p>
                            <img src="../../../../../Music/ghabino-v2/assets/img/logo-2.webp" alt="logo-site" class="w-30">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 py-3">
                        <div class="footer-info">
                            <h4 class="text-white">دسترسی سریع</h4>
                            <hr>
                            <ul class="p-0 m-0">
                                <li class="pt-0 py-2 d-flex align-items-center">
                                    <a href="index.blade.html" class="text-gray2">خانه</a>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <a href="#" class="text-gray2">خدمات عکاسی</a>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <a href="#" class="text-gray2">خدمات فیلم برداری</a>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <a href="#" class="text-gray2">بلاگ</a>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <a href="#" class="text-gray2">ارتباط با ما</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 py-3">
                        <div class="footer-info">
                            <h4 class="text-white">راه های ارتباطی</h4>
                            <hr>
                            <ul class="p-0 m-0">
                                <li class="pt-0 py-2 d-flex align-items-center">
                                    <a href="#" class="d-inline-b line-1 text-gray2"></a>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <a href="#" class="d-inline-b line-1 text-gray2">قهوه دمی</a>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <a href="#" class="d-inline-b line-1 text-gray2">کاپیچینو</a>
                                </li>
                                <li class="py-2 d-flex align-items-center">
                                    <a href="#" class="d-inline-b line-1 text-gray2">شکلات داغ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 py-3">
                        <div class="footer-info">
                            <h4 class="text-white">شبکه های اجتماعی</h4>
                            <hr>
                            <p class="text-gray2">ما را در شبکه های اجتماعی دنبال کنید</p>
                            <div class="social-links text-center mt-3">
                                <a href="#" class="text-white twitter">
                                    <i class="bi bi-twitter me-1 rounded-circle py-1 px-2"></i></a>
                                <a href="#" class="text-white facebook">
                                    <i class="bi bi-facebook me-1 rounded-circle py-1 px-2"></i></a>
                                <a href="#" class="text-white instagram">
                                    <i class="bi bi-instagram me-1 rounded-circle py-1 px-2 "></i></a>
                                <a href="#" class="text-white google-plus">
                                    <i class="bi bi-skype me-1 rounded-circle py-1 px-2 "></i></a>
                                <a href="#" class="text-white linkedin">
                                    <i class="bi bi-linkedin rounded-circle me-1 py-1 px-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row jc-center mt-5">
                    <div class="col-12 mb-3 ta-center">
                        <h4 class="mb-4 lh-1 fw-w-6">به خبرنامه ما بپیوندید</h4>
                        <p>برای کسب اطلاعات بشتر درباره آخرین خبر، محصولات و مقالات ایمیل خود را ثبت کنید.</p>
                    </div>
                    <div class="col-lg-6 mx-auto">
                        <form class="mb-3">
                            <div class="input-group ">
                                <input type="text" class="form-control direction-l order-1"
                                    placeholder="exampel@gmail.com">
                                <input type="submit" class="btn btn-theme" value="عضویت">
                            </div>
                        </form>
                    </div>
                    <div class="col-12 mt-3 fs-5 ta-center">
                        <p class="fs-7">© Copyright <strong><a href="#" class="text-white">ghabeino</a></strong>. All
                            Rights
                            Reserved </p>
                    </div>
                    <a href="#header" class="last-link"><i class="bi bi-arrow-up-circle-fill"></i></a>
                </div>
            </div>

        </section>
    </footer>
    <!--=======/end footer -->

    <!-- ======= intro ======= -->
    <!--<div class="intro">
        <i class="bi bi-chat-left-dots-fill"></i>
        <i class="bi bi-house-fill"></i>
        <i class="bi bi-bookmark-fill"></i>
    </div>-->
    <!--=======/end footer -->

    <!--animation on scroll-->
    <script src="<?php echo e(asset('aos.js')); ?>"></script>
    <!--Number counter-->
    <script src="<?php echo e(asset('purecounter_vanilla.js')); ?>"></script>
    <script src="<?php echo e(asset('jquery-3.6.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('myjs.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\mega\Desktop\New folder (3)\blog\resources\views/index.blade.php ENDPATH**/ ?>
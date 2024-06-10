<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="/dist/style.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Arlett - Whisky</title>
</head>

<body class="bg-black font-league">


<header class=" w-full h-[1280px] top-0 bg-center decor__header lg:mb-32">

    <!--  nav -->
    <div class="w-full">
        <nav class=" container mx-auto ">
            <div class=" py-8 px-8 lg:px-0 max-w-screen-xl flex flex-col items-center justify-start mx-auto lg:flex-row ">
                <div class="w-full flex justify-between items-center">
                    <a href="/" class="mr-6">
                        <img class="" src="/img/LOGO%20ARLETTE%201%201%20(1).png" alt="logo">
                    </a>

                    <!-- Mobile menu button -->
                    <!-- The overlay -->
                    <div class="lg:hidden ">
                        <div id="myNav" class="overlay">

                            <!-- Button to close the overlay navigation -->
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                            <!-- Overlay content -->
                            <div class="overlay-content ">
                                <div class="dropMenu text-4xl uppercase hover:text-customColor1">Nos whiskys
                                    <ul class="dropList dnone  ">
                                        <li class="uppercase ">Single malt</li>
                                        <li><a class="text-sm pl-3 hover:text-bottleOri normal-case"
                                               href="/?page=original">Original</a></li>
                                        <li><a class="text-sm pl-3 hover:text-bottleMizu normal-case"
                                               href="/?page=mizunara">Mizunara</a></li>
                                        <li><a class="text-sm pl-3 hover:text-bottleTourb normal-case"
                                               href="/?page=tourbe">Tourbé</a></li>
                                        <li><a class="text-sm pl-3 hover:text-bottlebarb normal-case"
                                               href="/?page=barbade">Barbade</a></li>
                                        <li><a class=" pl-3 hover:text-customColor1"
                                               href="/?page=blended">Blended</a>
                                        </li>
                                    </ul>

                                </div>
                                <a class="uppercase hover:text-customColor1 <?php if (isset($_GET['page']) && $_GET['page'] == "distillerie") echo "text-customColor1"; ?>" href="/?page=distillerie">La
                                    Distillerie Tessendier</a>
                                <a class="uppercase hover:text-customColor1" href="/?page=cocktail">Cocktails</a>
                                <a class="uppercase hover:text-customColor1" href="/?page=contact">Contact</a>
                                <a class="hover:text-customColor1" target="_blank"
                                   href="https://www.vinatis.com/maisons/arlett-whisky"><i
                                        class="fa-solid fa-bag-shopping"></i></a>
                            </div>
                        </div>
                        <span onclick="openNav()"><i class="fa-solid fa-bars fa-2xl text-customColor1"></i>
                    </span>
                    </div>
                    <!-- nav fullscreen -->
                    <div class="w-full hidden lg:block text-center ">
                        <ul class="items-center text-xl text-white self-center inline-flex w-full flex-col lg:flex-row  md:mt-0">
                            <li class="dropdown border-r-2 border-customColor1 px-3">
                                <div class="dropdown__btn uppercase hover:text-customColor1">Nos whiskys</div>
                                <div class="dropdown__content text-start relative z-50 ">
                                    <div class="pl-2 text-start drop-menu dropMenu cursor-pointer"
                                    >Single Malt
                                        <ul class="dropList dnone">
                                            <li class=" "><a class="text-lg pl-3 hover:text-bottleOri"
                                                             href="/?page=original">Original</a></li>
                                            <li class=" "><a class="text-lg pl-3 hover:text-bottleMizu"
                                                             href="/?page=mizunara">Mizunara</a></li>
                                            <li class=" "><a class="text-lg pl-3 hover:text-bottleTourb"
                                                             href="/?page=tourbe">Tourbé</a></li>
                                            <li class=" "><a class="text-lg pl-3 hover:text-bottlebarb"
                                                             href="/?page=barbade">Barbade</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-start  hover:text-customColor1 pl-2"
                                       href="/?page=blended">Blended</a>
                                </div>
                            </li>
                            <li class="inline-block border-r-2 border-customColor1 px-3 uppercase">
                                <a class="hover:text-customColor1  <?php if (isset($_GET['page']) && $_GET['page'] == "distillerie") echo "text-customColor1"; ?>"
                                   href="/?page=distillerie">La Distillerie Tessendier</a>
                            </li>
                            <li class="inline-block border-r-2 border-customColor1 px-3 uppercase">
                                <a class="hover:text-customColor1  <?php if (isset($_GET['page']) && $_GET['page'] == "cocktail") echo "text-customColor1"; ?>"
                                   href="/?page=cocktail">Cocktails</a>
                            </li>
                            <li class="inline-block border-r-2 border-customColor1 px-3 uppercase">
                                <a class="hover:text-customColor1 <?php if (isset($_GET['page']) && $_GET['page'] == "contact") echo "text-customColor1"; ?>"
                                   href="/?page=contact">Contact</a>
                            </li>
                            <li class="inline-block px-3 uppercase">
                                <a class="hover:text-customColor1 " target="_blank"
                                   href="https://www.vinatis.com/maisons/arlett-whisky"><i
                                        class="fa-solid fa-bag-shopping"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mx-auto max-w-[230px]">
        <div class="w-full ">
            <img class="mx-auto" src="/img/Calque%201%20(1).png" alt="">
        </div>

    </div>
    <!--    div video -->
    <div class="container mx-auto relative z-10">
        <img class="mx-auto lg:w-2/3" src="/img/background/COMPO-ARLETT-BARBADE-72dpi-scaled.jpg" alt="">
    </div>


</header>

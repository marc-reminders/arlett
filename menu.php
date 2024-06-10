
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

<!--    div video -->
<header class="w-full  top-0 bg-center  decor__header__barbade__background lg:h-[1000px] 2xl:h-[1800px]">
    <div class="w-full decor__header__cocktail lg:pb-8">

        <!--  nav -->
        <?php include __DIR__ . '/../menu.php'; ?>

        <div class="hidden lg:block">
            <div class="container mx-auto flex flex-row justify-evenly mt-8 lg:mt-32 gap-6">

                <div class="flex flex-col justify-center gap-4 basis-1/2 lg:ml-60">
                    <div class="basis-1/2 line uppercase px-8 lg:px-0" data-aos="fade-down">
                        <h1 class="text-6xl font-league">SINGLE MALT
                            <br>FINITION
                            <br>FÛT DE RHUM
                            <br>
                            <span class="text-8xl">BARBADE</span>
                        </h1>
                    </div>
                    <div class="basis-1/2 pt-16" data-aos="fade-down">
                        <p class="max-w-[340px] text-justify font-avenir text-xl px-8 lg:px-0">Place à l'exotisme et à
                            la gourmandise avec ce whisky français affiné en fûts de rhum provenant de la Barbade !
                        </p>
                    </div>
                </div>

                <div class="basis-1/2">
                    <img class="w-1/2" src="../img/bottle/big-barbade.png" alt="">
                </div>

            </div>
        </div>


    </div>

    <!--    div background -->

</header>

<main class="lg:mt-40">
    <div class="block lg:hidden mb-14">
        <div class="décor__header__bg__prod__mobile py-8">
            <img class="mx-auto w-1/2" src="../img/bottle/big-barbade.png" alt="">
        </div>
        <div class="container mx-auto flex flex-col justify-evenly mt-8 lg:mt-32 gap-6">
            <div class="flex flex-col justify-center gap-4  lg:ml-60">
                <div class="basis-1/2 line uppercase px-8 lg:px-0" data-aos="fade-down">
                    <h1 class="text-6xl font-league">SINGLE MALT
                        <br>FINITION
                        <br>FÛT DE RHUM
                        <br>
                        <span class="text-8xl">BARBADE</span>
                    </h1>
                </div>
                <div class="basis-1/2 pt-16" data-aos="fade-down">
                    <p class="max-w-[500px] text-justify font-avenir text-xl px-8 lg:px-0">Place à l'exotisme et à la
                        gourmandise avec ce whisky français affiné en fûts de rhum provenant de la Barbade !
                    </p>
                </div>
            </div>

        </div>
    </div>

    <article class="flex flex-col lg:flex-row justify-evenly font-avenir max-lg:gap-10 max-lg:items-center">

        <div class="basis-1/2" data-aos="fade-down">
            <img  class="mx-auto" src="../img/ARLETT%20BARBADE-PRISE%20BOUTEILLE%20(1).jpg" alt="" data-aos="fade-down">
        </div>

        <div class="flex flex-col justify-around text-justify px-10 gap-10 text-xl basis-1/2 ">
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="basis-1/5" data-aos="fade-down">
                    <img src="../img/picto/tonneau.svg" alt="">
                </div>
                <div class="self-center basis-4/5" data-aos="fade-down">
                    <p>
                        3 ans de vieillissement en fûts de chêne américain neufs et en fûts de bourbon first fill.
                        Affinage en fûts de rhum provenant de la Barbade pendant 6 mois.</p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="basis-1/5" data-aos="fade-down">
                    <img src="../img/picto/nez.svg" alt="">
                </div>
                <div class="self-center basis-4/5" data-aos="fade-down">
                    <p>
                        Au nez, on retrouve des notes de banane mûre, de vanille et d'épices.
                    </p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="basis-1/5" data-aos="fade-down">
                    <img src="../img/picto/bouche.svg" alt="">
                </div>
                <div class="self-center basis-4/5" data-aos="fade-down">
                    <p>
                        La bouche est ample, intense et épicée avec des notes de tabac blond et de réglisse.
                    </p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="basis-1/5" data-aos="fade-down">
                    <img src="../img/picto/verre.svg" alt="">
                </div>
                <div class="self-center basis-4/5" data-aos="fade-down">
                    <p>
                        Idéal sur glace mais également dans de délicieux cocktails fruités.
                    </p>
                </div>
            </div>
        </div>
    </article>

    <article class="w-full flex flex-col lg:flex-row my-32">

        <div class="w-full lg:basis-2/3 self-center line_decor" data-aos="fade-down">
            <img class="mx-auto relative z-10"
                 src="../img/background/MACARON_LOGO_2_SANS_BORDURE_Plan_de_travail_1%201.svg" alt="">
        </div>

        <div class="lg:basis-1/3 self-center mt-8 lg:mt-0 " data-aos="fade-down">
            <h2 class="text-white text-7xl text-justify font-league uppercase">
                Nos whiskys<br> <span class="text-10xl ">single</span><span
                    class="text-black text-10xl stroke-effect">malt</span>
            </h2>
        </div>

    </article>


    <?php include __DIR__ ."/__inc_bouteilles.php"; ?>
</main>



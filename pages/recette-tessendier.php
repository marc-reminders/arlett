

<!--    div video -->
<header class="w-full  top-0 bg-center ">
    <div class="w-full decor__header__cocktail ">


        <!--  nav -->
        <?php include __DIR__ . '/../menu.php'; ?>
        <div class="container mx-auto flex flex-col justify-center mt-32 text-center">

            <h1 class="text-9xl font-league uppercase"><br><span class="text-black stroke-effect">Le </span>Tessendier</h1>
        </div>
    </div>

    <!--    div background -->

</header>
<main class="mt-36">


    <article class="container mx-auto flex flex-col lg:flex-row justify-evenly font-avenir gap-10 max-lg:items-center">

        <div class="basis-1/2 px-12 gap-6">
            <div>
                <img src="/img/card-cocktail/LE%20TESSENDIER%2003%20(1).jpg" alt="">
            </div>
            <div class="text-center mt-8">
                <p class="text-2xl">Partagez vos cocktails sur instagram avec </p>
                <p class="font-semibold text-4xl mt-3">#ArlettWhisky</p>
            </div>

        </div>

        <div class="basis-1/2 flex flex-col gap-20 px-12 font-avenir">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col sm:flex-row items-center gap-6 text-xl">
                    <div><img class="" src="/img/picto/GRAPPE%20RAISINS%20LOGO%20(5).svg" alt="">
                    </div>
                    <p class="font-semibold">Amer</p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-6 text-xl">
                    <p class="font-semibold">Difficulté :</p>
                    <div>Facile</div>

                </div>
            </div>
            <div>
                <h3 class="mb-8 text-xl font-semibold">Ingrédients</h3>
                <ul class="list-disc space-y-6 pl-8 text-xl font-light">
                    <li>60ml de Arlett Tourbé</li>
                    <li>15ml de liqueur d'orange</li>
                    <li>15ml de vermouth rouge</li>
                    <li>2 trais de bitters orange</li>
                </ul>
            </div>
            <div>
                <h3 class="mb-8 text-xl font-semibold">Recette</h3>
                <ul class="space-y-6 pl-8 text-xl font-light">
                    <li>Dans un verre à mélange rempli de glace, verser le whisky Arlett et les autres ingrédients.</li>
                    <li>Mélanger délicatement et filtrer dans un verre coupette.</li>
                    <li>Décorer d'un zeste d'orange. </li>
                </ul>
            </div>
        </div>


    </article>
    <br><br>
    <?php include __DIR__ ."/__inc_cocktails.php"; ?>

</main>

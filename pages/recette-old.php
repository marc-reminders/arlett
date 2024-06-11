
<!--    div video -->
<header class="w-full  top-0 bg-center ">
    <div class="w-full decor__header__cocktail ">
        <!--  nav -->
        <?php include __DIR__ . '/../menu.php'; ?>

        <div class="container mx-auto flex flex-col justify-center mt-32 text-center">

            <h1 class="text-9xl font-league uppercase"><br><span class="text-black stroke-effect">Arlett </span>Old<br>Fashioned</h1>
        </div>
    </div>

    <!--    div background -->

</header>
<main class="mt-36">


    <article class="container mx-auto flex flex-col lg:flex-row justify-evenly font-avenir gap-10 max-lg:items-center">

        <div class="basis-1/2 px-12 gap-6">
            <div>
                <img src="../../img/card-cocktail/OLD%20FASHIONNED%20SALON.jpg" alt="">
            </div>
            <div class="text-center mt-8">
                <p class="text-2xl">Partagez vos cocktails sur instagram avec </p>
                <p class="font-semibold text-4xl mt-3">#ArlettWhisky</p>
            </div>

        </div>

        <div class="basis-1/2 flex flex-col gap-20 px-12 font-avenir">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col sm:flex-row items-center gap-6 text-xl">
                    <div><img class="" src="../../img/picto/GRAPPE%20RAISINS%20LOGO%20(5).svg" alt="">
                    </div>
                    <p class="font-semibold">Épicé / Amer</p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-6 text-xl">
                    <p class="font-semibold">Difficulté :</p>
                    <div>Facile</div>

                </div>
            </div>
            <div>
                <h3 class="mb-8 text-xl font-semibold">Ingrédients</h3>
                <ul class="list-disc space-y-6 pl-8 text-xl font-light">
                    <li>40ml de Arlett finition Fût de rhum Barbade</li>
                    <li>1 trait de bitter orange</li>
                    <li>1 sucre en morceaux</li>
                    <li>Eau gazeuse</li>
                </ul>
            </div>
            <div>
                <h3 class="mb-8 text-xl font-semibold">Recette</h3>
                <ul class="space-y-6 pl-8 text-xl font-light">
                    <li>Au fond d’un verre Old Fashioned, déposer le morceau de sucre préalablement imbibé d’un trait de bitter à l'orange.</li>
                    <li>Ajoutez un trait d’eau gazeuse et écraser le sucre jusqu’à sa dissolution complète. Ajouter des glaçons et verser le whisky Arlett.</li>
                    <li>Remuer puis garnir d'un zeste d'orange.</li>
                </ul>
            </div>
        </div>


    </article>
    <br><br>
    <?php include __DIR__ ."/__inc_cocktails.php"; ?>


</main>

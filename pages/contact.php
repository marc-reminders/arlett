
<!--    div video -->
<header class="w-full lg:h top-0 bg-center decor__disti__header mb-32">




    <!--  nav -->
    <?php include __DIR__ . '/../menu.php'; ?>

    <div class=" mt-32 lg:mt-96 w-full container mx-auto lg:mb-14 flex flex-row justify-start items-center self-center">

        <div class="basis-1/3">
            <img class=""  data-aos="fade-down"
                 src="/img/background/Group%2028.svg" alt="">
        </div>

        <div class=" basis-2/3 " data-aos="fade-down">
            <h2 class=" line_decor__contact pt-24 text-black stroke-effect text-9xl text-justify font-league uppercase">
                contact
            </h2>
        </div>

    </div>

</header>
<main class="">

    <section class="container mx-auto mb-32 ">
        <form action="" class="grid grid-cols-4 gap-16 px-16"  data-aos="fade-down">
            <div class="mb-5 col-span-4 lg:col-span-2">
                <label for="nom" class="mb-3 block text-2xl uppercase font-avenir text-white "></label>
                <input type="text" name="name" id="nom" placeholder="Nom"
                       class="w-full rounded-md border border-customColor1 bg-transparent py-3 px-6 text-2xl  text-white outline-none focus:shadow-md"/>
            </div>
            <div class="mb-5 col-span-4 lg:col-span-2">
                <label for="email" class="mb-3 block text-2xl uppercase font-avenir text-white "></label>
                <input type="email" name="email" id="email" placeholder="email"
                       class="w-full rounded-md border border-customColor1 bg-transparent py-3 px-6 text-2xl  text-white outline-none focus:shadow-md"/>
            </div>
            <div class="mb-5 col-span-4 lg:col-span-2">
                <label for="tel" class="mb-3 block text-2xl uppercase font-avenir text-white "></label>
                <input type="tel" name="telephone" id="tel" placeholder="Numéro de téléphone"
                       class="w-full rounded-md border border-customColor1 bg-transparent py-3 px-6 text-2xl  text-white outline-none focus:shadow-md"/>
            </div>
            <div class="mb-5 col-span-4 lg:col-span-2">
                <label for="obj" class="mb-3 block text-2xl uppercase font-avenir text-white "></label>
                <input type="text" name="objet" id="obj" placeholder="Objet"
                       class="w-full rounded-md border border-customColor1 bg-transparent py-3 px-6 text-2xl  text-white outline-none focus:shadow-md"/>
            </div>
            <div class="mb-5 col-span-4 lg:col-span-2">
                <label for="message" class="mb-3 block text-2xl text-white"></label>
                <textarea rows="4" name="message" id="message" placeholder="Votre message"
                          class="w-full resize-none rounded-md border border-customColor1 bg-transparent py-3 px-6 text-2xl text-white outline-none focus:shadow-md"
                ></textarea>
            </div>

            <div class="mb-5 col-span-4 lg:col-span-2 items-center self-center mx-auto">
                <input id="remember" type="checkbox" value="" class="py-3 px-6  text-base text-white outline-none"
                       required/>
                <label for="remember" class=" ms-2 mb-3 text-base uppercase font-avenir text-white ">En envoyant ce
                    formulaire de contact, vous acceptez notre politique de confidentialité</label>
            </div>


            <span id="err" class="berthBold" style="color:red; display:none">Veuillez cochez la case suivante</span>

            <div class="g-recaptcha" data-sitekey="6LcGWPUpAAAAACj5ohSIc3DF5YTfdG04J9WD73h2"></div>

            <div class="col-span-4 items-center self-center mx-auto">
                <button type="submit" class="hover:shadow-form py-2 border border-customColor1 rounded-full text-customColor1 px-8 text-xl font-semibold outline-none ">Envoyer
                </button>
            </div>

        </form>
    </section>


</main>

AOS.init();

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

function menu() {
    document.getElementsByClassName('dropMenu').classList.toggle("show");
}

$('.dropMenu').click(function () {
    $(this).toggleClass('active').find('ul').toggleClass('dnone')
})
/*
const me = document.getElementsByClassName( 'dropMenu' );
const list = document.getElementsByClassName( 'dropList' );

menu.addEventListener( 'click', () => {
    list.classList.toggle( "dnone" );
    if (list.classList.contains( "dnone" )) {
        document.body.style.overflow = "auto"
    } else {

        document.body.style.overflow = "hidden"
    }
} );
*/


document.addEventListener("scroll", (event) => {
    const poseY = window.scrollY

    if (poseY > 0){
        document.querySelector("#position").classList.add ("fixed")
        document.querySelector("#position").classList.add ("bg-black")
    } else{
        document.querySelector("#position").classList.remove ("fixed")
        document.querySelector("#position").classList.remove ("bg-black")
    }
})

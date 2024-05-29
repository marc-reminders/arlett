
/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

function menu(){
    document.getElementsByClassName( 'dropMenu' ).classList.toggle("show");
}


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

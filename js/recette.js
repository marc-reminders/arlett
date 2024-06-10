$(function(){
    if (!$('#recettes').length) return;

    $('#filter-recette li').click(function(){

        $('#recettes > a').show();
        AOS.refresh()
        if ($(this).data('ref') == "all") {
            $('#filter-recette .text-customColor1').removeClass('text-customColor1')
            $(this).toggleClass("text-customColor1");

            return;
        }

        $('#filter-recette li').removeClass('text-customColor1')
        $(this).toggleClass("text-customColor1")

        $('#filter-recette .text-customColor1').each(function(){
            tag = $(this)
            $('#recettes > a:visible').filter(function(){
                return $(this).data('tags').indexOf(tag.data('ref') + ',') == -1
            }).hide()
        })

        AOS.refresh()
    })
})
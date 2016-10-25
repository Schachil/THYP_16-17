//ajouter les icons profil-user par default par default dans le trombinoscope
$(".casetr").addClass("prof_bckgrnd");

$(document).ready(function(){
    $("#hide").mouseover(function(){
        $("p").show();
    });
});

// cacher et faire apparaitre le graphe D3
$(document).ready(function(){
    $(".voirg").click(function(){
        $(".ifram1").addClass("show");
    });
    $(".cachg").click(function(){
        $(".ifram1").removeClass("show");
    });
});
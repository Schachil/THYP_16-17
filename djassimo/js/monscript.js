//ajouter les icons profil-user par default par default dans le trombinoscope




// cacher et faire apparaitre le graphe D3
$(document).ready(function(){
    $(".voirg").click(function(){
        $(".ifram1").addClass("show");
    });
    $(".cachg").click(function(){
        $(".ifram1").removeClass("show");
    });
});

//ajout effet zoom sur les images
$(document).ready( ".imgtrom" ).mouseover(function() {
    $(".imgtrom").addClass("imgtrom1")
});

$(document).ready("#etu").mouseenter(function() {
    $(".seduit").removeClass('hide');
    console.log("hfjdshgkjdhfkdsjhfkdsjhfk");
});
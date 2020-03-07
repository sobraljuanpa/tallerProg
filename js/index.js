var categoria = 1;
var pagina = 1;

function cargar() {
    $.ajax({
        url: "movie_pages.php",
        data: {
            pag: pagina
        },
        dataType: "html"
    }).done(function (resp) {
        $("#movies").html(resp);

        $("#anterior").click(function () {
            pagina--;
            cargar();
        });

        $("#siguiente").click(function () {
            pagina++;
            cargar();
        });

    }).fail(function () {
        alert("error al cargar la pagina");
    });
}

$(document).ready(function () {

    $(".categoria").click(function () {
        categoria = $(this).attr("catId");
        pagina = 1;
        cargar();
    });
    cargar();
});

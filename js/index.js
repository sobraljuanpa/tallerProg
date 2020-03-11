var categoria = 1;
var pagina = 1;
var texto= "";
var category="";

function cargar() {

    texto = $("#texto").val();
    category = $('#category option:selected').val();
    amount = $('#amount option:selected').val();
    console.log(texto);
    $.ajax({
        url: "movie_pages.php",
        data: {
            pag: pagina,
            busqueda: texto,
            category: category,
            amount: amount
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
        alert("Error al cargar la pagina");
    });
}

$(document).ready(function () {

    $(".categoria").click(function () {
        categoria = $(this).attr("catId");
        pagina = 1;
        cargar();
    });

    $("#buscar").click(function() {
        pagina=1;
        cargar();
    });

    cargar();
});

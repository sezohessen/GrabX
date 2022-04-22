// Loader
$(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
});
//end loader
$(function () {
    new TomSelect("#select-beast",{
        create: false,
        sortField: {
            field: "text",
            direction: "asc"
        }
    });
});
// toggle icon dashboard
// $('#aside-toggle').on('click' , function() {
//     $('#dashboard-logo').toggleClass('hide');
// });

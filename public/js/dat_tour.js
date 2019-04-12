$('.btnDatTour').click(function(){
    var href = $(this).attr('href');
    $('.btnDatTourNext').attr('href', href);
});
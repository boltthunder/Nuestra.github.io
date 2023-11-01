$(document).ready(function() {
    $("#generate").on("change", function() {
        // console.log(this.value);
        $('.hide').hide();
        $('#' + $(this).val()).fadeIn(100);
    }).change();
    $('#genRep').on('change', function() {
        $('#hide').hide();
        $('#' + $(this).val()).fadeIn(100);
    })
});

$(document).ready(function() {
    $("#Attendance").on("change", function() {
        // console.log(this.value);
        $('.hide').hide();
        $('#' + $(this).val()).fadeIn(100);
    }).change();
    $('#genRep').on('change', function() {
        $('#hide').hide();
        $('#' + $(this).val()).fadeIn(100);
    })
});
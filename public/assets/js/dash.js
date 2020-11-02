$(document).ready(function ($) {
    $("#yes").click(function() {
        $("#question1").hide();
        $("#form1").show();
    });

    $("#no").click(function() {
        $("#question1").hide();
        $("#form2").show();
    });

});



function getSelectValue() {
    var selectedValue = document.getElementById("inlineFormCustomSelectPref").value;
    var uploadRegistration = '';
    if (selectedValue == "yes") {
        document.getElementById("uploadRegistration").style.display = "block";
        console.log(document.getElementById("uploadRegistration"));
    } else {
        document.getElementById("uploadRegistration").style.display = "none";
    }
}
// $(document).ready(function ($) {
//     $("#yes").click(function() {
//         $("#question1").hide();
//         $("#form1").show();
//     });

//     $("#no").click(function() {
//         $("#question1").hide();
//         $("#form2").show();
//     });

// });

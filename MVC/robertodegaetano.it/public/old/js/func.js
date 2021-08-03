function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
  
function checkValidate() {
    const $email = $("#email").val();
    if (validateEmail($email)) {
        $('#checkValue').val('1');
        $("#contactForm").submit();
    } else {
        alert("Indirizzo email NON VALIDO, prego ripetere l'inserimento");
    }
    return false;
}
  
$("#contactForm").on("submit", checkValidate);

$('#sentMagConf').on('click',function(){document.location="";});


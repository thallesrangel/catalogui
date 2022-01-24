
$(document).ready(function(){
    $(document).on('keydown', '.cpfOuCnpj', function (e) {

        var digit = e.key.replace(/\D/g, '');
    
        var value = $(this).val().replace(/\D/g, '');
    
        var size = value.concat(digit).length;
    
        $(this).mask((size <= 11) ? '000.000.000-00' : '00.000.000/0000-00');
    });

    $(".div-login").submit(function() {
        $(".cpfOuCnpj").unmask();
      });
});


// Block Paste
$(document).ready(function(){
    var description = document.querySelector(".cpfOuCnpj");
        
    description.addEventListener("paste", function(e) {
        e.preventDefault();
    });
});




$(function(){
    $(".cpf").mask("999.999.999-99");
    $(".cnpj").mask("99.999.999/9999-99");
}); 
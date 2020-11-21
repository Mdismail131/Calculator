$(document).ready(function(){
    var input = "";
    var operator = ['+'];
    var operand2 = 0;  
    $('.operand').on('click', function(){
        input += $(this).val();
        $('#display_screen').html(input);
    });
    $('.operator').on('click', function(){
        operator.unshift($(this).val());
        if (input != "") {
            $.ajax({
                url: 'calc.php',
                method: 'POST',
                dataType: 'Text',
                data: {
                    operator: operator[1],
                    operand2: input,
                    operand1: operand2
                },
                success: function(response){
                    $('#display_screen').html(response);
                    operand2 = response;
                    input = "";
                    if(operator.length==3){
                        operator.pop(operator[2]);
                    }
                },
            });
        }
    });
    $('.clear').on('click', function(){
        input = "";
        operator = ['+'];
        operand2 = 0;
        $('#display_screen').html("");
    });
});
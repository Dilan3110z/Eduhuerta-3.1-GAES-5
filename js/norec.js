$(document).ready(function(){
    $('#boton').click(function(){
        var datos=$('#formReg1').serialize();

        $.ajax({
           type: "POST",
           url: ".../regHer.php",
           data:datos,
           success:function(r){
            if(r==1){
                alert("Agregado con exito");
            }else{
                alert("Fallo")
            }
           }
        });
        return false;
    });
});
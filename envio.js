
$(document).ready(function(){
    $('#registrarCompra').click(function(){

        if($('#Cantidad').val()==""){
            alertify.alert("Agregue cantidad a comprar.");
            return false;
        }

        cadena="dolar=" + dolar + "&euro=" + euro;

                $.ajax({
                    type:"POST",
                    url:"php/transaccion.php",
                    data:cadena,
                    success:function(r){

                        if(r==1){
                            alertify.success("Compra realizada con exito.");
                        }
                    }
                });
    });
});
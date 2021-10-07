$.validator.setDefaults( {


} );

$.validator.addMethod(
    "regex",
    function(value, element, regexp) {
        if (regexp.constructor != RegExp)
            regexp = new RegExp(regexp);
        else if (regexp.global)
            regexp.lastIndex = 0;
        return this.optional(element) || regexp.test(value);
    },
    "Please check your input."
);


$( document ).ready(function() {

    $( "#formRegistroNuevoDispositivo" ).validate( {
        rules: {
            s_marca :{
                required: true,

            },
            s_modelo :{
                required: true,

            },
            s_version_sistema_operativo :{
                required: true,

            },
            s_numero_serie :{
                required: true,

            },
            s_mac_address :{
                required: true,

            },
            s_observaciones :{
                required:true,

            },
            b_activo :{
                required: true,

            },
        },

        messages:{
            s_marca :{
                required: 'Favor de completar el campo',

            },
            s_modelo :{
                required: 'Favor de completar el campo',

            },
            s_version_sistema_operativo :{
                required: 'Favor de completar el campo',

            },
            s_numero_serie :{
                required: 'Favor de completar el campo',

            },
            s_mac_address :{
                required: 'Favor de completar el campo',

            },
            s_observaciones :{
                required: 'Favor de completar el campo',

            },
            b_activo :{
                required: 'Favor de completar el campo',

            },

        },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( "classerror" ).addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).parents( "classerror" ).addClass( "has-success" ).removeClass( "has-error" );
            },
            submitHandler: function () {
            
                $.ajax({
                    url: "api/crear-dispositivo",
                    type: "POST",
                data: $("#formRegistroNuevoDispositivo").serialize(),
                dataType: "json",
                success : function(response) {

                    if(response.status == "Success"){

                        swal({
                            title: "Dispositivo registrado correctamente",
                            type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#a08300",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Aceptar",
                        allowOutsideClick: false
                        }).then(function () {
                            location.href = 'vista-nuevo-dispositivo';
                        });
                    

                        


                    }else{

                        swal({
                            title: "El dispositivo no se ha podido registrar",
                            type: "error",
                        showCancelButton: false,
                        confirmButtonColor: "#a08300",
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Aceptar",
                        allowOutsideClick: false
                        })

                    }

                  

                }

            });
        }

    });

});

$(".botonRegresar").click(function(e){
    location.href = 'vista-mostar-dispositivos';
});
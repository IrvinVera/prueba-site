$(document).ready(function(){

    $.ajax({
        url : 'api/obtener-dispositivos',
        type : 'GET',
        dataType : 'json',
        async: false,  
        success : function(response) {

            if(response.status == "success"){

                response.data.forEach(element => {

                    let activo = "";

                    activo = element.b_activo ==  1 ? 'Si' : 'No';

                    $('#tablaDispositivos').append('<tr ><td' 
                    +  element.s_marca
                    + '</td><td class="pagado">' + element.s_marca
                    + '</td><td class="pagado">' + element.s_modelo
                    + '</td><td class="pagado">' + element.s_version_sistema_operativo
                    + '</td><td class="pagado">' + element.s_numero_serie
                    + '</td><td class="pagado">' + element.s_mac_address
                    + '</td><td class="pagado">' + element.s_observaciones
                    + '</td><td class="pagado">' + activo
                    + '</td><td class="pagado">' + ' <button type="button" name="'+element.id_dispositivo+'"class="editarDispositivo btn btn-primary">Editar'
                    + '</td></tr>');
                    
                });

            }

        }
    });

    $(".editarDispositivo").click(function(e){
        let id = this.name
        console.log(id);

        location.href = 'vista-editar-dispositivo/'+id;
        
    });

});

$(".agregarDispositivo").click(function(e){
    location.href = 'vista-nuevo-dispositivo';
});


document.addEventListener('DOMContentLoaded', function (){

    var contenedorDataList = document.getElementById("contenedorDataList");

    $.ajax({
        url: '/getAllClients',
        type: 'GET',
        success: function (response) {
            console.log(response);
        },
        error: function(){
            console.log('error al cargar los clientes');
        }
    });
})


document.addEventListener('DOMContentLoaded', function (){
    var btnAnyadirServicio = document.getElementById("anyadirServicio");
    var contenedorDataList = document.getElementById("contenedorDataList");
    var numServicesToAssociate = 0;


    $.ajax({
        url: '/getAllServices',
        type: 'GET',
        success: function (response) {
            console.log(response)

            //crea el primer datalist
            crearElementos(response)

            //si añadimos un servicio mas al registro se genera otro datalist
            btnAnyadirServicio.addEventListener('click', function (){
                crearElementos(response);
            });
        },
        error: function(){
            console.log('error al cargar los servicios');
        }
    })

    function crearElementos(response){
        numServicesToAssociate++;

        //creamos el input y asignamos los atributos
        let inputServicio = document.createElement('input');

        inputServicio.type = "text";
        inputServicio.name = "servicio"+numServicesToAssociate;
        inputServicio.setAttribute('list', "servicioAsociado"+numServicesToAssociate)

        //creamos el datalist y lo relacionamos con el input
        let dataListServices = document.createElement("datalist");
        dataListServices.id = "servicioAsociado"+numServicesToAssociate;

        //recorremos la respuesta y creamos una opcion por cada servicio encontrado
        for (var i in response){
            //creamos el elemento option
            let option = document.createElement('option');

            //asignamos el id al valor del option y la descripcion al html
            option.innerHTML = response[i].description;
            option.value = response[i].id;

            //lo añadimos al elemento que recoge los servicios
            dataListServices.appendChild(option);
        }

        //añadimos el input y el datalist al contenedor de datalists del dom
        contenedorDataList.appendChild(inputServicio);
        contenedorDataList.appendChild(dataListServices);
    }
})


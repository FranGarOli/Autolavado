document.addEventListener('DOMContentLoaded', function (){

    //elementos html sobre servicios
    var btnAnyadirServicio = document.getElementById("anyadirServicio");
    var btnBorrarServicios = document.getElementById("borrarServicios");

    var contenedorDataList = document.getElementById("contenedorDataList");
    var numServicesToAssociate = 0;

    var inputServicio = document.getElementById("inputServicio")
    var inputHiddenServicios = document.getElementById("servicios");


    //elementos html sobre un cliente
    var datalistNombres = document.getElementById('nameList');
    var nameClient = document.getElementById('nameClient');
    var dni = document.getElementById('dni');
    var email = document.getElementById('email');
    var phone = document.getElementById('phone');


    //campo hidden que recoge el la posicion en el array del cliente para rellenar el resto de campos
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

        //creamos el input que se mostrara y asignamos los atributos
        let inputServicio = document.createElement('input');
        inputServicio.type = "text";
        inputServicio.setAttribute('list', "servicioAsociado"+numServicesToAssociate);
        inputServicio.id = "inputServicio";

        //creamos el datalist y lo relacionamos con el input
        let dataListServices = document.createElement("datalist");
        dataListServices.id = "servicioAsociado"+numServicesToAssociate;

        //recorremos la respuesta y creamos una opcion por cada servicio encontrado
        for (var i in response){

            //creamos el elemento option
            let option = document.createElement('option');

            //asignamos el id al valor del option y la descripcion al html
            option.innerHTML = response[i].title;


            //lo añadimos al elemento que recoge los servicios
            dataListServices.appendChild(option);
        }

        //añadimos el input y el datalist al contenedor de datalists del dom
        contenedorDataList.appendChild(inputServicio);
        contenedorDataList.appendChild(dataListServices);

        //cuando seleccionamos un servicio y cambia el input
        inputServicio.addEventListener('input', function (){

            console.log('Entra al listener input')
            inputHiddenServicios.value += inputServicio.value+ ',';
        });

        //evento de borrar los servicios
        btnBorrarServicios.addEventListener('click', function(){
            inputServicio.value = '';
            inputHiddenServicios.value = '';
            //TODO - borrar inputs generados al dar en añadir servicio
            
        });
    }

    $.ajax({
        url: '/getAllClients',
        type: 'GET',
        success: function (response) {
            console.log(response)
            crearNombres(response)

            function rellenarInputsClientConNombre(response, nameSelected) {
                const indiceArrayRegistro = response.find(response => response.name === nameSelected);

                console.log(indiceArrayRegistro);
                dni.value = indiceArrayRegistro.dni;
                email.value = indiceArrayRegistro.email;
                phone.value = indiceArrayRegistro.phone;
            }

            //cuando seleccionamos un nombre y cambia el input
            nameClient.addEventListener('change', function (){
                const nameSelected = nameClient.value;

                rellenarInputsClientConNombre(response, nameSelected);
            });
        },
        error: function(){
            console.log('error al cargar los clientes');
        }
    })

    function crearNombres(response){

        //recorremos la respuesta y creamos una opcion por cada nombre encontrado
        for (var i in response){

            //creamos el elemento option
            let nameOption = document.createElement('option');

            nameOption.innerHTML = response[i].name;

            //lo añadimos al elemento que recoge los servicios
            datalistNombres.appendChild(nameOption);
        }
    }
})


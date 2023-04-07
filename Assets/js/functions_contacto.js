let tableContacto;

document.addEventListener('DOMContentLoaded', function(){

  //*** MOSTRAR DATOS EN DATATABLE Y TRADUCCIÓN ***//
	tableContacto = $('#table-contacto').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
          "url": " " + base_url + "/Contacto/getContacto",
            "dataSrc":""
        },
        "columns":[
          {"data": "descripcion"},
          {"data": "es_telefono"},
          {"data": "es_correo"},
          {"data": "es_url"},
          {"data": "activo"},
          {"data": "options"}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]  
    });

});

  //*** GUARDAR NUEVO CONTACTO ***//
  let formContacto = document.querySelector('#formContacto');
  
  formContacto.addEventListener('submit', function(e){
     e.preventDefault();

      let intIdContacto = document.querySelector('#idContacto').value; //Lo obtengo a la hora que voy a Editar
      let descripcion = document.querySelector('#descripcion').value;
      let telefono = document.querySelector('#telefono').value;
      let correo = document.querySelector('#correo').value;
      let listStatus = document.querySelector('#lStatus').value;

      if(descripcion == '' || telefono == '' || correo == '' || listStatus == '' )
      {
        //Modal error Toast aviso parte superior
            Swal.fire({
              position: 'top-end',
              toast:'true',
              icon: 'warning',
              title: 'Error!',
              text: 'Los campos teléfono, correo y estado no pueden estar vacios',
              icon: 'warning',
              confirmButtonText: 'Aceptar',
              showConfirmButton: false,
              timer: 5000,
              timerProgressBar:true
            }); 
        
            return false;
      }
     
      let request = new XMLHttpRequest();
      let ajaxUrl = base_url + "/Contacto/setContacto";
      let formDta = new FormData(formContacto);
      request.open("POST", ajaxUrl,true)
      request.send(formDta);
 
     request.onload = function (){
          if(request.status == 200){
                  let objData = JSON.parse(request.responseText); 

                  if(objData.status)
                  {
                      $('#modalContacto').modal('hide');
                      $('#table-contacto').DataTable().ajax.reload();                  
                    
                      //Modal exito Toast aviso parte superior

                      Swal.fire({
                        position: 'top-end',
                        toast:'true',
                        icon: 'success',
                        title: 'Correcto!',
                        text: objData.msg,
                        icon: 'success',
                        confirmButtonText: 'Aceptar',
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar:true
                  });
                    
                  }else{
                    //Modal error Toast aviso parte superior
                    
                      Swal.fire({
                        position: 'top-end',
                        toast:'true',
                        icon: 'warning',
                        title: 'Error!',
                        text: objData.msg,
                        icon: 'warning',
                        confirmButtonText: 'Aceptar',
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar:true
                  });                    
                }
             }       
          }
    })

    //*** ELIMINAR CONTACTO ***//
    function fntDelCont(idcontacto){
                
      Swal.fire({
        title: 'Eliminar Contacto',
        text: "¿Realmente quiere eliminar el contacto?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar'
      }).then((result) => {
        if (result.isConfirmed) {
            let request =  new XMLHttpRequest();
            let ajaxUrl = base_url+'/Contacto/delContacto';
            let strData = "cod_contacto="+idcontacto;
          
            request.open("POST",ajaxUrl,true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
    
            request.onload = function (){
              
              if(request.status == 200){
                let objData = JSON.parse(request.responseText);
                
                //objData.status: Valido si es verdadero. 
                //Va a mostrar el mensaje 
                if(objData.status)                {
                  
                    $('#table-contacto').DataTable().ajax.reload();
      
                    Swal.fire({
                      position: 'top-end',
                      toast:'true',
                      icon: 'success',
                      title: 'Eliminar!',
                      text: objData.msg,
                      icon: 'success',
                      confirmButtonText: 'Aceptar',
                      showConfirmButton: false,
                      timer: 5000,
                      timerProgressBar:true
                  });
    
                }else{
                  Swal.fire({
                    position: 'top-end',
                    toast:'true',
                    icon: 'warning',
                    title: 'Error!',
                    text: objData.msg,
                    icon: 'warning',
                    confirmButtonText: 'Aceptar',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar:true
                  });                    
                }
    
              }
              
            }       
        }
    
      })
    }


    //*** EDITAR CONTACTO ***//  
    /**
     * 
     * 1.Cambio estilo del modal
     * 2.Traigo los datos
     * 3.Muestro los datos en el modal de acuerdo al ID
     */
   function fntEditCont(idcontacto){

      var idcontacto = idcontacto;

       //Cambio estilos al modal
      document.querySelector('.modal-header').classList.replace("bg-pattern", "bg-pattern-2");
      document.querySelector('#titleModal').innerHTML = "Actualizar Banco";
      document.querySelector('.modal-header').classList.replace("headerRegister", "headerEdit", "bg-pattern-2");
      document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
      document.querySelector('#btnText').innerHTML="Actualizar";
      document.querySelector('#formContacto').reset();
      
      var request = request =  new XMLHttpRequest();
      var ajaxUrl = base_url+'/Contacto/EditContact/'+idcontacto;
      request.open("GET",ajaxUrl,true);
      request.send();

      request.onload = function (){

        if(request.readyState == 4 && request.status == 200){
          var objData = JSON.parse(request.responseText);
           
           //Convierto a un objeto el formato .JSON que recibo desde Ajax
           var objData = JSON.parse(request.responseText);

           //status = true
           if(objData.status){

            //Muestro los datos en modal edit
            document.querySelector('#idContacto').value = objData.data.cod_contacto;
            document.querySelector('#descripcion').value = objData.data.descripcion;
            document.querySelector('#telefono').value = objData.data.es_telefono;
            document.querySelector('#correo').value = objData.data.es_correo;
            document.querySelector('#web').value = objData.data.es_url;
            document.querySelector('#lStatus').value = objData.data.activo;

            //Estado
            if(objData.data.activo == 1)
              {
                  var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
              }else{
                  var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
              }
              var htmlSelect = `${optionSelect}
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                              `;
              document.querySelector("#lStatus").innerHTML = htmlSelect;
              $('#modalContacto').modal('show');

           }else{
              Swal.fire({
                position: 'top-end',
                toast:'true',
                icon: 'warning',
                title: 'Error!',
                text: objData.msg,
                icon: 'warning',
                confirmButtonText: 'Aceptar',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar:true
              });       
           }
        } 
      }  
  
    }

  

  //*** HACER QUE EL DATATABLE FUNCIONES ***//
  $('#table-contacto').DataTable();


  //*** MANDAR A LLAMAR AL MODAL: Agregar una nuevo contacto ***//
  function openModal(){    
    
    document.querySelector('#idContacto').value = "";
    document.querySelector('.modal-header').classList.replace("bg-pattern-2", "bg-pattern");
    document.querySelector('#titleModal').innerHTML = "Nuevo contacto";
    document.querySelector('.modal-header').classList.replace("headerRegister", "bg-pattern-2", "headerEdit");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML="Guardar";
    document.querySelector('#formContacto').reset();

	  $('#modalContacto').modal('show'); 
  }



 <script>
     //system url
     const base_url = "<?= base_url(); ?>";
 </script>

<script>
    


let parameters = []
function removeElement(event, position) {
    event.target.parentElement.remove()
    delete parameters[position]
}

const addJsonElement = json => {
    parameters.push(json)
    return parameters.length - 1
}

(function load(){

  
    const $form = document.getElementById("frmUsers") //Formulario

    const $divElements = document.getElementById("divElements") //Div
    const $btnSave = document.getElementById("btnSave") //Boton guardar
    const $btnAdd = document.getElementById("btnAdd") //Boton Agregar

    const templateElement = (data, position) => {
        return (`
        <button class="delete" onclick="removeElement(event, ${position})"></button>
            <button class="delete" onclick="removeElement(event, ${position})"></button>
            <strong>Tipo:</strong> ${data}
        `)
    }

    //addEventListener: Escuchador que indica al navegador que este atento a la interacción del usuario. Cuando hace clic
    $btnAdd.addEventListener("click", (event) => {
        let index = addJsonElement({
            Descripcion: $form.Descripcion.value,
            Extension: $form.Extension.value,
            comboxContact: $form.comboxContact.value
        })
        const $div = document.createElement("div")

        //document.querySelector('#divElements').classList.add('alert-success', 'notification'); 
        //$div.classList.add("is-link", "is-light", "py-2", "my-1") //Le agrego Clases

        //Elemento notification dentro divElement(div)
        $div.classList.add('alert-success', 'notification')

        $div.innerHTML = templateElement(`${$form.comboxContact.value}  - <strong>Descripción:</strong>${$form.Descripcion.value} - <strong>Extensión:</strong>${$form.Extension.value}`, index) //Agrego o Uso el 'templateElement', Le envio el Nombre y Apellido

        $divElements.insertBefore($div, $divElements.firstChild)

        $form.reset()
    

        //Contacto
   
        
    })

    $btnSave.addEventListener("click", (event) =>{
        parameters = parameters.filter(el => el != null)
        const $jsonDiv = document.getElementById("jsonDiv")
        $jsonDiv.innerHTML = `JSON: ${JSON.stringify(parameters)}`
        $divElements.innerHTML = ""
        parameters = []
    })
})()
 </script>

 <script src="<?= base_url(); ?>public/lib/bootstrap/js/bootstrap.bundle.min.js"></scrip>
 <script src="<?= base_url(); ?>public/lib/simplebar/simplebar.min.js"></script>
 <script src="<?= base_url(); ?>public/lib/node-waves/waves.min.js"></script>
 <script src="<?= base_url(); ?>public/lib/feather-icons/feather.min.js"></script>
 <script src="<?= base_url(); ?>public/js/pages/plugins/lord-icon-2.1.0.js"></script>


 <!-- apexcharts -->
 <script src="<?= base_url(); ?>public/lib/apexcharts/apexcharts.min.js"></script>

 <!-- Vector map -->
 <script src="<?= base_url(); ?>public/lib/jsvectormap/js/jsvectormap.min.js"></script>
 <script src="<?= base_url(); ?>public/lib/jsvectormap/maps/world-merc.js"></script>

 <!-- choices.min.js -->
 <script src="<?= base_url(); ?>public/lib/choices.js/public/assets/scripts/choices.min.js"></script>

 <!--Swiper slider js-->
 <script src="<?= base_url(); ?>public/lib/swiper/swiper-bundle.min.js"></script>

 <!-- Dashboard init -->
 <script src="<?= base_url(); ?>public/js/pages/dashboard-ecommerce.init.js"></script>

 <script src="<?= base_url(); ?>public/lib/select2/js/select2.min.js"></script>

 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
   

 <!-- validation init -->
 <script src="<?= base_url(); ?>public/js/pages/form-validation.init.js"></script>
 <!-- password create init -->
 <script src="<?= base_url(); ?>public/js/pages/passowrd-create.init.js"></script>

 <!-- flatpickr  -->
 <script src="<?= base_url(); ?>public/lib/flatpickr/flatpickr.min.js"></script>

 <!-- choices.js  -->
 <script src="<?= base_url(); ?>public/lib/choices/public/assets/scripts/choices.min.js"></script>

  <!--Invoice create init js-->
  <script src="<?= base_url(); ?>public/js/pages/invoicecreate.init.js"></script>

 <!-- App js -->
 <script src="<?= base_url(); ?>public/js/app.js"></script>



 <!-- Cargar DataTable, etc-->
 <!--jQuery-->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 <!--datatable js-->
 <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>

 <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

 <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
<?php
### CLASE PROVEEDORES  ###
class Proveedores extends Controllers
{

    public function __construct()
    {
        session_start(); #Inicio sesion
        if (empty($_SESSION['login'])) {
            header('Location: ' . base_url() . '/login');
        }
        parent::__construct();
    }

    ### CONTROLADOR ###
    public function Proveedores()
    {
        $data['page_title'] = "Jipsafety | Proveedores";
        $data['page_name'] = "Proveedores";
        $data['description'] = "";
        $data['breadcrumb-item'] = "Usuarios";
        $data['breadcrumb-activo'] = "Usuario";
        $data['data-sidebar-size'] = "sm";
        $data['page_functions_js'] = "functions_proveedores.js";

        #Data modal
        $data['page_title_modal'] = "Nuevo banco";
        $data['page_title_bold'] = "Estimado usuario";
        $data['descrption_modal1'] = "Los campos remarcados con";
        $data['descrption_modal2'] = "son necesarios.";


        #Cargo la vista(tipos). La vista esta en View - Tipos
        $this->views->getView($this, "proveedores", $data);
    }


    ### CONTROLADOR: MOSTRAR TODOS LOS BANCOS ###
    public function getProveedores()
    {
        #Cargo el modelo(selectBancos) 
        $arrData = $this->model->selectProveedores();

        for ($i = 0; $i < count($arrData); $i++) {

            #Estado
            if ($arrData[$i]['activo'] == 1) {
                $arrData[$i]['activo'] = '<span class="badge rounded-pill bg-success">Activo</span>';
            } else {
                $arrData[$i]['activo'] = '<span class="badge rounded-pill bg-danger">Inactivo</span>';
            }

            #Botones de accion
            $arrData[$i]['options'] = '<div class="text-center">
				<button type="button" class="btn btn-warning btn-sm btnEditBanco" onClick="fntEditProv(' . $arrData[$i]['cod_proveedor'] . ')" title="Editar"><i class="ri-edit-2-line"></i></button>
				<button type="button" class="btn btn-danger btn-sm btnDelBanco" onClick="fntDelProv(' . $arrData[$i]['cod_proveedor'] . ')" title="Eliminar"><i class="ri-delete-bin-5-line"></i></button>
				</div>';
        }


        #JSON
        echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
        exit();
    }

    ### CONTROLADOR: GUARDAR NUEVO PROVEEDOR ###
    public function setProveedor()
    {
        if ($_POST) {

            /*dep($_POST);
            exit();*/

            #Capturo los datos
            $intIdProveedor = intval($_POST['idProveedor']);

            $nombre_proveedor  = strClean($_POST['nombre']);
            $nombre_impreso    = strClean($_POST['nprint']);
            $numero_ruc        = strClean($_POST['ruc']);
            $cod_pais          = intval($_POST['comboxpais']);
            $persona_contacto  = strClean($_POST['ncontacto']);
            $cod_forma_pago    = intval($_POST['comboxpago']);        
            $activo            = intval($_POST['lStatus']);          

    
            #Si no viene ningun ID - Estoy creando 1 nuevo
            if ($intIdProveedor == 0) {

                #Crear
                $request_Proveedor = $this->model->insertProveedor($nombre_proveedor, $nombre_impreso, 
                                                   $numero_ruc, $cod_pais, $persona_contacto, $cod_forma_pago,
                                                   $activo );

                /* dep($request_Tipo);
                  exit();*/

                $option = 1;
            } else {
                #Actualizar
                //$request_Proveedor = $this->model->updateBanco($intIdBanco, $name, $nota, $listLocal, $status);
                $option = 2;
            }

            #Verificar
            if ($request_Proveedor > 0) {
                if ($option == 1) {
                    $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                } else {
                    $arrResponse = array('status' => true, 'msg' => 'Datos actualizados correctamente.');
                }
            } else if ($request_Proveedor === 'existe') {
                $arrResponse = array('status' => false, 'msg' => '¡Atención! El proveedor ya existe.');
            } else {
                $arrResponse = array('status' => true, 'msg' => 'No es posible almacenar los datos');
            }

            #Convierto .json
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    ### CONTROLADOR: ELIMINAR BANCO ###
    public function delBanco()
    {

        if ($_POST) {

            $intIdBanco = intval($_POST['cod_bancos']);

            $requestDelete = $this->model->deleteBanco($intIdBanco);

            if ($requestDelete) {
                $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el nombre del banco');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error al eliminar el nombre del banco.');
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

            die();
        }
    }

    ### CONTROLADOR: EDITAR BANCOS ###    
    public function getBanco(int $idBanco)
    {

        #id
        $intIdBanco = intval($idBanco);

        if ($intIdBanco  > 0) {
            $arrData = $this->model->editBanco($intIdBanco);
            if (empty($arrData)) {
                $arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
            } else {
                $arrResponse = array('status' => true, 'data' => $arrData);
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }
}

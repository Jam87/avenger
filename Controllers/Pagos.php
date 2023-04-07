<?php
### CLASE FORMA DE PAGO  ###
class Pagos extends Controllers
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
    public function Pagos()
    {
        $data['page_title'] = "Jipsafety | Forma de pago";
        $data['page_name'] = "Forma de pago";
        $data['description'] = "";
        $data['breadcrumb-item'] = "Usuarios";
        $data['breadcrumb-activo'] = "Usuario";

        $data['page_functions_js'] = "functions_pago.js";

        #Data modal
        $data['page_title_modal'] = "Nuevo banco";
        $data['page_title_bold'] = "Estimado usuario";
        $data['descrption_modal1'] = "Los campos remarcados con";
        $data['descrption_modal2'] = "son necesarios.";
        $data['data-sidebar-size'] = 'sm';

        #Cargo la vista(tipos). La vista esta en View - Tipos
        $this->views->getView($this, "pagos", $data);
    }

    ### CONTROLADOR: MOSTRAR TODAS LAS FORMAS DE PAGOS ###
    public function getForma()
    {
        #Cargo el modelo(selectBancos) 
        $arrData = $this->model->selectPagos();

        for ($i = 0; $i < count($arrData); $i++) {

            #Localidad
            if ($arrData[$i]['es_aplicado_ventas'] == 1) {
                $arrData[$i]['es_aplicado_ventas'] = '<span> Aplica</span>';
            } else {
                $arrData[$i]['es_aplicado_ventas'] = '<span> No aplica</span>';
            }

            #Estado
            if ($arrData[$i]['activo'] == 1) {
                $arrData[$i]['activo'] = '<span class="badge rounded-pill bg-success">Activo</span>';
            } else {
                $arrData[$i]['activo'] = '<span class="badge rounded-pill bg-danger">Inactivo</span>';
            }

            #Botones de accion
            $arrData[$i]['options'] = '<div class="text-center">
				<button type="button" class="btn btn-warning btn-sm btnEditBanco" onClick="fntEditPago(' . $arrData[$i]['cod_forma_pago'] . ')" title="Editar"><i class="ri-edit-2-line"></i></button>
				<button type="button" class="btn btn-danger btn-sm btnDelBanco" onClick="fntDelPago(' . $arrData[$i]['cod_forma_pago'] . ')" title="Eliminar"><i class="ri-delete-bin-5-line"></i></button>
				</div>';
        }


        #JSON
        echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
        exit();
    }

    ### CONTROLADOR: GUARDAR NUEVA FORMA DE PAGO ###
    public function setPago()
    {

        if ($_POST) {

            /*dep($_POST);
            exit();*/

            #Capturo los datos
            $intIdPago = intval($_POST['idPago']);

            $descripcion = strClean($_POST['txtName']);
            $nota        = strClean($_POST['txtDescription']);
            $listVenta   = intval($_POST['listVenta']);
            $status      = intval($_POST['listStatus']);

            #Si no viene ningun ID - Estoy creando 1 nuevo
            if ($intIdPago == 0) {

                #Crear
                $request_Pago = $this->model->insertPago($descripcion, $nota, $listVenta, $status);

                /* dep($request_Tipo);
                  exit();*/

                $option = 1;
            } else {
                #Actualizar
                $request_Pago = $this->model->updatePago($intIdPago, $descripcion, $nota, $listVenta, $status);
                $option = 2;
            }

            #Verificar
            if ($request_Pago > 0) {
                if ($option == 1) {
                    $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                } else {
                    $arrResponse = array('status' => true, 'msg' => 'Datos actualizados correctamente.');
                }
            } else if ($request_Pago === 'existe') {
                $arrResponse = array('status' => false, 'msg' => '¡Atención! El tipo de usuario ya existe.');
            } else {
                $arrResponse = array('status' => true, 'msg' => 'No es posible almacenar los datos');
            }

            #Convierto .json
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    ### CONTROLADOR: ELIMINAR FORMA DE PAGO ###
    public function delPago()
    {

        if ($_POST) {

            $intIdPago = intval($_POST['cod_pago']);

            $requestDelete = $this->model->deletePago($intIdPago);

            if ($requestDelete) {
                $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado la forma de pago');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error al eliminar la forma de pago.');
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

            die();
        }
    }

    ### CONTROLADOR: EDITAR FORMA DE PAGO ###    
    public function getPago(int $idPago)
    {

        #id
        $intIdPago = intval($idPago);

        if ($intIdPago  > 0) {
            $arrData = $this->model->editPago($intIdPago);
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

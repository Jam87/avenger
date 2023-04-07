<?php
 ### CLASE: Forma de pago Model ###
class PagosModel extends Mysql
{
    private $cod_forma_pago;
    private $descripcion;
    private $nota_forma_pago;
    private $es_aplicado_ventas;
    private $date_registro;
    private $activo;

    public function __construct()
    {
        parent::__construct();
    }

    ### MODELO: MOSTRAR TODAS LAS FORMAS DE PAGO ###
    public function selectPagos()
    {
        #Sentencia
        $sql = "SELECT * FROM  cat_forma_pago WHERE activo != 0";

        #Mando a llamar la función(select_all)
        $request = $this->select_all($sql);
        return $request;
    }

    ### MODELO: GUARDAR UN NUEVA NUEVA FORMA DE PAGO ###
    public function insertPago(string $descripcion, string $nota, int $listVenta, int $status)
    {
        $return = "";
        $this->descripcion        = $descripcion;
        $this->nota_forma_pago    = $nota;
        $this->es_aplicado_ventas = $listVenta;
        $this->date_registro      = gmdate('Y-m-d H');
        $this->activo             = $status;

        #Sentencia
        $sql = "SELECT * FROM cat_forma_pago WHERE descripcion = '{$this->descripcion}' ";
        
        #Mando a llamar la función(select_all)
        $request = $this->select_all($sql);        

        /*var_dump($request);
          exit();*/

        if (empty($request)) {

            $sql = "INSERT INTO cat_forma_pago(descripcion, nota_forma_pago, es_aplicado_ventas, date_registro, activo) VALUE (?,?,?,?,?)";

            #arrData: array de información
            $arrData = array($this->descripcion, $this->nota_forma_pago, $this->es_aplicado_ventas, $this->date_registro, $this->activo);

            #Envio a la funcion insert(sentencia y data)
            $requestInsert = $this->insert($sql, $arrData);

            return $requestInsert;
        } else {
            $return = "existe";
        }
        return $return;
    }


    ### MODELO: ELIMINAR FORMA DE PAGO ###
    public function deletePago(int $intIdPago)
    {

        #id
        $this->cod_forma_pago = $intIdPago;

        $sql = "UPDATE cat_forma_pago SET activo = ? WHERE cod_forma_pago =  {$this->cod_forma_pago}";

        $arrData = array(0);
        $request = $this->update($sql, $arrData);

        if ($request) {
            $request = 'ok';
        } else {
            $request = 'error';
        }
        return $request;
    }
 

    ### MODELO: EDITAR FORMA DE PAGO ###
    public function editPago(int $idPago){
        
        //Buscar forma de pago
        $this->cod_forma_pago = $idPago;
        $sql = "SELECT * FROM cat_forma_pago WHERE cod_forma_pago = {$this->cod_forma_pago}";
        $request = $this->select($sql);
        return $request;
    }

   
    ### MODELO: ACTUALIZAR FORMA DE PAGO ###
    public function updatePago(int $intIdPago, string $descripcion, string $nota, int $listVenta, int $status){

        $this->cod_forma_pago     = $intIdPago;
        $this->descripcion        = $descripcion;
        $this->nota_forma_pago    = $nota;
        $this->es_aplicado_ventas = $listVenta;
        $this->date_registro      = gmdate('Y-m-d H');;
        $this->activo             = $status;


        $sql = "SELECT * FROM cat_forma_pago WHERE descripcion = '$this->descripcion' AND cod_forma_pago != $this->cod_forma_pago";
        $request = $this->select_all($sql);

        if(empty($request))
        {
            $sql = "UPDATE cat_forma_pago SET descripcion = ?, 	nota_forma_pago = ?, es_aplicado_ventas = ?, date_registro = ?, activo = ? WHERE cod_forma_pago  = {$this->cod_forma_pago}";
            $arrData = array($this->descripcion, $this->nota_forma_pago, $this->es_aplicado_ventas, $this->date_registro, $this->activo);
            $request = $this->update($sql,$arrData);
        }else{
            $request = "exist";
        }
        return $request;			
    }
   
}

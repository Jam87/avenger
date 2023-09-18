<?php
### CLASE: LoginModel  ###
#Heredo Mysql(funciones y conexion)
class LoginModel extends Mysql
{

    private $intIdUsuario;
    private $email;
    private $password;
    //private $token;

    public function __construct()
    {
        parent::__construct();
    }

    ### MODELO: LOGIN ###
    public function loginUser(string $email, string $password)
    {
        #Data
        $this->email     = $email;
        $this->password  = $password;

        #Sentencia
        $sql = "SELECT cod_usuario, activo
                FROM secure_user                
                WHERE correo = '$this->email' AND contrasenia = '$this->password' and activo!= 0";


        #Mando a llamar a la funcion(select) 
        $request = $this->select($sql);

        return $request;
    }

    ### MODEL: LOGIN USER DATA ### 
    public function dataUser(int $iduser)
    {

        $this->intIdUsuario = $iduser;

        /* $sql = "SELECT *
        FROM secure_user u
        INNER JOIN secure_user_type s 
        ON u.cod_tipo_usuario = s.cod_tipo_usuario
        INNER JOIN perfil_modulo pm
        ON pm.id_perfil = u.cod_tipo_usuario
        INNER JOIN modulos m 
        ON m.id = pm.id_modulo
        WHERE u.correo = '$this->email'
        AND u.contrasenia = '$this->password'
        AND vista_inicio = 1";*/

        /*$sql = "SELECT *
        FROM secure_user u
        INNER JOIN secure_user_type s 
        ON u.cod_tipo_usuario = s.cod_tipo_usuario
        INNER JOIN perfil_modulo pm
        ON pm.id_perfil = u.cod_tipo_usuario
        INNER JOIN modulos m 
        ON m.id = pm.id_modulo
        WHERE cod_usuario  = $this->intIdUsuario      
        AND vista_inicio = 1";*/

        $sql = "SELECT 
        u.cod_usuario,
        u.nombre,
        u.apellido, 
        u.cod_tipo_usuario, 
        u.contrasenia, 
        u.correo, 
        u.colapsar,
        s.cod_tipo_usuario, 
        s.usertype, 
        pm.idperfil_modulo, 
        pm.id_perfil, 
        pm.id_modulo, 
        pm.vista_inicio, 
        m.id, 
        m.modulo as nombre_modulo,
        m.padre_id, 
        m.vista
       FROM secure_user u
       INNER JOIN secure_user_type s 
       ON u.cod_tipo_usuario = s.cod_tipo_usuario
       INNER JOIN perfil_modulo pm
       ON pm.id_perfil = u.cod_tipo_usuario
       INNER JOIN modulos m 
       ON m.id = pm.id_modulo
       WHERE cod_usuario  = $this->intIdUsuario     
       AND vista_inicio = 1;";

        $request = $this->select_all($sql);
        $_SESSION['usuario'] = $request;
        return $request;
    }

    public function insertSesion($cod_usuario, $Fecha_inicio, $Ip_conexion, $Navegador)
    {

        $sql = "INSERT INTO secure_control_sesion(cod_usuario, Fecha_Inicio_Sesion, /*Fecha_Fin_Sesion,*/ IPConexion, Navegador) VALUE (?,?,?,?,?)";

        $arrData = array($cod_usuario, $Fecha_inicio, $Ip_conexion, $Navegador);

        $requestInsert = $this->insert($sql, $arrData);
        return $requestInsert;
    }
}

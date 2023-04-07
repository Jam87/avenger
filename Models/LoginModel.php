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
    public function loginUser(string $email, string $password){
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

}
<?php
### CLASE LOGIN ###
class Login extends Controllers
{
	public function __construct()
	{
		session_start();#Inicio sesion
		if(isset($_SESSION['login']))
		{
				header('Location: '.base_url().'dashboard');	
		}
		parent::__construct();
	}

	### CONTROLADOR:LOGIN ###
	public function Login()
	{
		#Data extra 
		$data['page_id'] = 1;
		$data['page_tag'] = "Login";
		$data['page_title'] = "Productos de seguridad";
		$data['page_empresa'] = "JIPSAFETY";
		$data['page_name'] = "login";
		$data['page_functions_js'] = "functions_login.js"; #Carga en MainJs functions_login 
		$data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis.";
		#Cargo la vista(login). A traves del metodo(getView)
		$this->views->getView($this, "login", $data);
	}

	### CONTROLADOR: loginUser Y SESIONES ###
	public function loginUser()
	{
		/*dep($_POST);
		die();*/

		if($_POST){
			if(empty($_POST['useremail']) || empty($_POST['userpassword'])){
				$arrResponse = array('status' => false, 'msg' => 'Error de datos');
			}else{
				$correo = strtolower(strClean($_POST['useremail']));
				$password = hash("SHA256", $_POST['userpassword']);
				
				#Mando a llamar al modelo(loginUser)
				$requestUser = $this->model->loginUser($correo, $password);

				if(empty($requestUser)){
					$arrResponse = array('status' => false, 'msg' => 'El usuario o la contraseña es incorrecto.');
				}else{
					$arrData = $requestUser; #arrData: Guarda los datos del usuario
					
					if($arrData['activo'] == 1){
						#Variables sesion
						$_SESSION['idUser'] = $arrData['cod_usuario'];
						$_SESSION['login'] = true;
						$arrResponse = array('status' => true, 'msg' => 'ok');

					}else{
						$arrResponse = array('status' => 'Usuario inactivo');
					}
				}
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

		}
		die();
	}
}

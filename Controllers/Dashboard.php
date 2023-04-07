<?php
#Inicio sesion
class Dashboard extends Controllers
{
	public function __construct()
	{
		session_start(); #Crear sesión
		#Verificar si existe sesión
		if (empty($_SESSION['login'])) {
			header('Location: ' . base_url() . '/login');
		}
		parent::__construct();
	}

	### CONTROLADOR ###
	public function dashboard()
	{
		$data['page_id'] = 2;
		$data['page_tag'] = "";
		$data['page_title'] = "Dashboard - jipsafety";
		$data['page_name'] = "Dashboard";
		$data['data-sidebar-size'] = "sm";
		#lg

		#Cargo la vista(dashboard). A traves del metodo(getView)
		$this->views->getView($this, "dashboard", $data);
	}
}

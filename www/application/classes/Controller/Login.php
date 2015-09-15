<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер для работы с корзиной
	 *
	 * @name        Controller_Login
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Login extends Controller_Layout_SiteGRUD {
	
		/**
		 * Основная модель
		 * @access protected
		 * @property string
		 */
		protected $model;
		
		/**
		 * Имя контроллера в единственном числе
		 * @property string
		 * @access protected
		 */
		protected $cName = 'login';
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			//$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Вход
		 */
		public function action_login() {
			
			$data = array();
		
			$this -> setParam('pagetitle', 'Вход');
			$this -> showPage($this -> cName . '/login', $data);	
		}
		
		/**
		 * Регистрация
		 */
		public function action_registration() {
			
			$data = array();
		
			$this -> setParam('pagetitle', 'Регистрация');
			$this -> showPage($this -> cName . '/registration', $data);	
		}
		
		/**
		 * Выход
		 */
		public function action_logout() {
			
			Auth::instance() -> logout();
			HTTP::redirect('/login/');
		}
	} 

    /* End of file Login.php */
    /* Location: ./application/classes/Controller/Login.php */

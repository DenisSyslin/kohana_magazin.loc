<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер для личного кабинета пользователя 
	 *
	 * @name        Controller_Account
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Account extends Controller_Layout_SiteGRUD {
	
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
		protected $cName = 'account';
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			//$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Профиль
		 */
		public function action_index() {
			
			$data = array();
		
			$this -> setParam('pagetitle', 'Профиль');
			$this -> showPage($this -> cName . '/profile', $data);	
		}
		
		/**
		 * Заказы
		 */
		public function action_orders() {
			
			$data = array();
		
			$this -> setParam('pagetitle', 'Заказы');
			$this -> showPage($this -> cName . '/orders', $data);	
		}
	} 

    /* End of file Account.php */
    /* Location: ./application/classes/Controller/Account.php */

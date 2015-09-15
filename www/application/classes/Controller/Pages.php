<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер для работы со страницами сайта
	 *
	 * @name        Controller_Pages
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Pages extends Controller_Layout_SiteGRUD {
	
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
		protected $cName = 'page';
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Главная страница
		 */
		public function action_index() {
		
			$this -> products = Model::factory('Products');

			$data = array();
			$data[ 'notShowNews' ] = false;
			$data[ 'topProducts' ] = $this -> products -> topProducts(9);
		
			$this -> setParam('pagetitle', Kohana::$config -> load('config') -> get('main_page_title'));
			$this -> showPage($this -> cName . 's/main', $data);	
		}
		
		/**
		 * Каталог
		 */
		public function action_catalog() {
		
			$this -> products = Model::factory('Products');
		
			$data = array();
			$data[ 'products' ] = $this -> products -> getCatalog(8);
		
			$this -> setParam('pagetitle', 'Каталог');
			$this -> showPage($this -> cName . 's/catalog', $data);	
		}
		
		/**
		 * Способы оплаты
		 */
		public function action_payment() {
				
			$data = array();
		
			$this -> setParam('pagetitle', 'Способы оплаты');
			$this -> showPage($this -> cName . 's/payment', $data);	
		}
		
		/**
		 * Доставка
		 */
		public function action_delivery() {
		
			$data = array();
		
			$this -> setParam('pagetitle', 'Доставка');
			$this -> showPage($this -> cName . 's/delivery', $data);	
		}
		
		/**
		 * Контакты
		 */
		public function action_contacts() {
		
			$data = array();
		
			$this -> setParam('pagetitle', 'Контакты');
			$this -> showPage($this -> cName . 's/contacts', $data);	
		}
	} 

    /* End of file Pages.php */
    /* Location: ./application/classes/Controller/Pages.php */

<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер по умолчанию
	 *
	 * @name        Controller_Indexs
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Indexs extends Controller_Layout_SiteGRUD {
	
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
		protected $cName = 'index';
		
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
		
			$data = array();
			$data[ 'current_page' ] = 'main';
		
			$this -> setParam('pagetitle', 'Главная');
			$this -> showPage($this -> cName . 's/main', $data);	
		}
		
		/**
		 * Каталог
		 */
		public function action_catalog() {
		
			$this -> products = Model::factory('Products');
		
			$data = array();
			$data[ 'current_page' ] = 'catalog';
			$data[ 'products' ] = $this -> products -> getCatalog(8);
		
			$this -> setParam('pagetitle', 'Каталог');
			$this -> showPage($this -> cName . 's/catalog', $data);	
		}
	} 

    /* End of file Indexs.php */
    /* Location: ./application/classes/Controller/Indexs.php */

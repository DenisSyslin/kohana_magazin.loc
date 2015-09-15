<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер для работы с корзиной
	 *
	 * @name        Controller_Basket
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Basket extends Controller_Layout_SiteGRUD {
	
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
		protected $cName = 'basket';
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			//$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Страница по умолчанию
		 */
		public function action_index() {
			
			$data = array();
		
			$this -> setParam('pagetitle', 'Корзина');
			$this -> showPage($this -> cName . '/main', $data);	
		}
	} 

    /* End of file Basket.php */
    /* Location: ./application/classes/Controller/Basket.php */

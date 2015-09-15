<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер для поиска
	 *
	 * @name        Controller_Search
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Search extends Controller_Layout_SiteGRUD {
	
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
		protected $cName = 'search';
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			//$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Поиск по сайту
		 */
		public function action_index() {
			
			$data = array();
		
			$this -> setParam('pagetitle', 'Поиск по сайту');
			$this -> showPage($this -> cName . '/main', $data);	
		}
	} 

    /* End of file Search.php */
    /* Location: ./application/classes/Controller/Search.php */

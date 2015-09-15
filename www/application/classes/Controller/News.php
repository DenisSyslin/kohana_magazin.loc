<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Контроллер для вывода новостей
	 *
	 * @name        Controller_News
	 * @category    Classes
	 * @subcategory Controller
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_News extends Controller_Layout_SiteGRUD {
	
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
		protected $cName = 'news';
		
		/**
		 * Конструктор
		 */	
		public function __construct(Request $request, Response $response) {
		
			parent::__construct($request, $response);
		
			//$this -> model = Model::factory(UTF8::ucfirst($this -> cName));
		}
		
		/**
		 * Список новостей
		 */
		public function action_index() {
			
			$data = array();
		
			$this -> setParam('pagetitle', 'Список новостей');
			$this -> showPage($this -> cName . '/list', $data);	
		}
		
		/**
		 * Новость
		 */
		public function action_show() {
			
			$data = array();
		
			$this -> setParam('pagetitle', 'Новость');
			$this -> showPage($this -> cName . '/item', $data);	
		}
	} 

    /* End of file News.php */
    /* Location: ./application/classes/Controller/News.php */

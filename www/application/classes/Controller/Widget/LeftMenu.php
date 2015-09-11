<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Виджет левого меню 
	 *
	 * @name        Controller_Widget_LeftMenu
	 * @category    Controller
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Widget_LeftMenu extends Controller_Template {
		
		public $template = 'default/widget/LeftMenu';

		/**
		 * Отобразить виджет
		 */
		public function action_show() {
			
			$this -> products = Model::factory('Products');
			
			$this -> template -> categories = $this -> products -> getCategories();
		}
	} 

    /* End of file LeftMenu.php */
    /* Location: ./application/classes/Controller/Widget/LeftMenu.php */
	
	
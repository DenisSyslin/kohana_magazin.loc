<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Виджет левого меню 
	 *
	 * @name        Controller_Widget_Login
	 * @category    Controller
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Widget_Login extends Controller_Template {
		
		public $template = 'default/widget/Login';

		/**
		 * Отобразить виджет
		 */
		public function action_show() {
			
			$this -> products = Model::factory('Products');
			
			$this -> template -> categories = $this -> products -> getCategories();
		}
	} 

    /* End of file Login.php */
    /* Location: ./application/classes/Controller/Widget/Login.php */

	
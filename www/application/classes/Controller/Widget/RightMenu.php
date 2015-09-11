<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Виджет правого меню 
	 *
	 * @name        Controller_Widget_RightMenu
	 * @category    Controller
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Widget_RightMenu extends Controller_Template {
		
		public $template = 'default/widget/RightMenu';

		/**
		 * Отобразить виджет
		 */
		public function action_show() {
			
			$this -> products = Model::factory('Products');
			
			$this -> template -> topProducts = $this -> products -> topProducts();
		}
	} 

    /* End of file RightMenu.php */
    /* Location: ./application/classes/Controller/Widget/RightMenu.php */
	
	
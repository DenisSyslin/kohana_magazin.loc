<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Виджет левого меню 
	 *
	 * @name        Controller_Widget_TopMenu
	 * @category    Controller
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Controller_Widget_TopMenu extends Controller_Template {
		
		public $template = 'default/widget/TopMenu';

		/**
		 * Отобразить виджет
		 */
		public function action_show() {

			$this -> template -> current = $this -> request -> param('current');
		}
	} 

    /* End of file TopMenu.php */
    /* Location: ./application/classes/Controller/Widget/TopMenu.php */
	
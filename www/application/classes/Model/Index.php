<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель по умолчанию
	 *
	 * @name        Model_Index
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Index extends Model_Layout_CRUD {
	
		/**
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = 'pages';

		/**
		 * Получить список топовых продуктов
		 *
		 * @param int $count количество 
		 * @return array
		 */
		public function getTopProducts($count = 10) {
			
			return array(
				array('name' => 'Товар 1', 'price' => 100),
				array('name' => 'Товар 2', 'price' => 200),
				array('name' => 'Товар 3', 'price' => 300),
				array('name' => 'Товар 4', 'price' => 400),
				array('name' => 'Товар 5', 'price' => 500),
				array('name' => 'Товар 6', 'price' => 600),
				array('name' => 'Товар 7', 'price' => 700),
				array('name' => 'Товар 8', 'price' => 800),
			);
		}
	} 

    /* End of file Index.php */
    /* Location: ./application/classes/Model/Index.php */
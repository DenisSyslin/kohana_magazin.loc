<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Модель продуктов
	 *
	 * @name        Model_Products
	 * @category    Classes
	 * @subcategory Model
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	class Model_Products extends Model_Layout_CRUD {
		
		/**
		 * Получить категории товаров
		 */
		public function getCategories() {
			
			return array(
                'IT-менеджмент',
                'Дизайн, графика, мультимедиа',
                'Интернет',
                'Компьютерная безопасность',
                'Операционные системы и сети',
                'Программирование',
                'Железо',
			);
		}
		
		/**
		 * Список лучших товаров
		 * 
		 * @param int $count
		 */
		public function topProducts($count = 10) {
			
			return array(
                'PHP. Сборник рецептов',
                'Язык программирования Java',
                'Web-сервер глазами хакера',
			);
		}
		
		/**
		 * Каталог товаров
		 * 
		 * @param int $count
		 */
		public function getCatalog($count = 10) {
			
			return array(
				array('name' => 'PHP. Сборник рецептов',      'price' => 100),
				array('name' => 'Язык программирования Java', 'price' => 200),
				array('name' => 'Совершенный код',            'price' => 300),
				array('name' => 'Web-сервер глазами хакера',  'price' => 400),
			);
		}
	} 

    /* End of file Products.php */
    /* Location: ./application/classes/Model/Products.php */
	
	
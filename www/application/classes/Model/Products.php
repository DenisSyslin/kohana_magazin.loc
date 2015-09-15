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
		 * Table name
		 * @property string
		 * @access protected
		 */
		protected $_table_name = 'products';
		
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
				array (
					'img'    => '0672319217.jpg',
					'author' => 'Luke Welling and Laura Thomson',
					'name'   => 'PHP and MySQL Web Development',
					'count'  => '34',
					'price'  => '986.30',
					'Description' => 'В книге "PHP & MySQL Web Development" рассказывается, как создавать динамические и защищенные веб-сайты электронной коммерции. Вы научитесь интегрировать и реализовывать эти технологии, выполняя действующие примеры и разрабатывая целые проекты.',
					'year'   => '2008',
					'ganre'  => 'Протраммирование',
				),
				array (
					'img'    => '0672319218.jpg',
					'author' => 'Matt Zandstra',
					'name'   => 'Sams Teach Yourself PHP4 in 24 Hours',
					'count'  => '56',
					'price'  => '1190.74',
					'Description' => 'Книга состоит из 24 уроков, каждый по одному часу, и поделена на пять разделов, которые ознакомят вас с языком - от основ до сложных функций.',
					'year'   => '2006',
					'ganre'  => 'Протраммирование',
				),
				array (
					'img'    => '0672319219.jpg',
					'author' => 'Sterling Hughes and Andrei Zmi',
					'name'   => 'PHP Developer\'s Cookbook	',
					'count'  => '111',
					'price'  => '1012.50',
					'Description' => 'Полное, ориентированное на решения руководство по решению задач, которые наиболее часто встречаются разработчикам на PHP\r\n.Предназначено в первую очередь для опытных веб-разработчиков и содержит реальные решения реальных задач.',
					'year'  => '2006',
					'ganre' => 'Протраммирование',
				),
			);
		}
		
		/**
		 * Каталог товаров
		 * 
		 * @param int $count
		 */
		public function getCatalog($count = 10) {
			
			$this -> columns = array('isbn', 'author', 'title', 'catid', 'price', 'desc', 'year');
			
			$query = DB::select_array($this -> columns)
				-> from($this -> _table_name)
				-> limit($count)
				-> order_by('title', 'DESC')
				-> execute();
			
			if (count($query)) {
			
				return $query -> as_array();
			}
			
			return FALSE;
		}
	} 

    /* End of file Products.php */
    /* Location: ./application/classes/Model/Products.php */
	
	
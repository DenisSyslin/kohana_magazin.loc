<?php defined('SYSPATH') or die('No direct script access.');

	/**
	 * Базовый контроллер 
	 *
	 * @name        Controller_Layout_Default
	 * @category    Controller
	 * @subcategory Layout
	 * @author      Суслин Денис 2015г. <programist1985@gmail.com>
	 */
	 
	abstract class Controller_Layout_Default extends Controller_Template {
	 
		/**
		 * Default layout template path
		 * @const string
		 * @access public
		 */
		const TMP_PATH = 'default';
	 
		/**
		 * Default layout template
		 * @property string
		 * @access public
		 */
		public $template = 'default/base/layout';
	 
		/**
		 * Default widget path
		 * @property string
		 * @access public
		 */
		public $widgetPath = 'widget';
		
		/**
		 * Массив стилевых таблиц для базового шаблона
		 * @property array
		 * @access protected
		 */
		protected $styles = array();
		
		/**
		 * Массив скриптов для базового шаблона
		 * @property array
		 * @access protected
		 */
		protected $scripts = array();
	 
		/**
		 * Auto loading configs groups
		 * @property array
		 * @access public
		 */
		public $config_groups = array(
			'config',
		);
	 
		/**
		 * Auto loaded configs
		 * @property array (group => params)
		 * @access public
		 */
		public $config = array();
	 
		/**
		 * Global variables
		 * @property array
		 * @access private
		 */
		private $globals = array();
	 
		/**
		 * Before execute action
		 */
		public function before() { 
		
			parent::before();
	 
			// Load configs
			foreach ($this -> config_groups as $group) {
			
				$this -> config[ $group ] = Kohana::$config -> load($group) -> as_array();
			}
	 
			// Config for all templates
			View::set_global('config', $this -> config);
	 
			// Session message if exists
			View::set_global('message', Session::instance() -> get_once('message'));

			// Default template path
			View::set_global('TMP_PATH', self::TMP_PATH);
				
			// Current page		
			$current = Request::initial() -> action();
			
			// Widgets section
			$this -> template -> set('topMenu',  $this -> widgetLoad('topmenu/show/'  . $current));
			$this -> template -> set('leftMenu', $this -> widgetLoad('leftmenu/show/' . $current));
			
			$this -> template -> set('login', $this -> widgetLoad('login'));
			$this -> template -> set('news',  $this -> widgetLoad('news'));
		}
		
		/**
		 * Метод загрузки виджета
		 *
		 * @param string $path имя виджета или путь с параметрами 
		 */
		protected function widgetLoad($path) {
			
			return Request::factory($this -> widgetPath . '/' . $path) -> execute();
		}
				
		/**
		 * Установить параметр для базового шаблона
		 *
		 * @param string $key
		 * @param string $value
		 */
		protected function setParam($key, $value) {
		
			$this -> template -> set($key, $value);
		}
				
		/**
		 * Установить глобальный параметр для базового шаблона
		 *
		 * @param string $key
		 * @param string $value
		 */
		protected function setGlobalParam($key, $value) {
		
			$this -> globals[ $key ] = $value;
		}
		
		/**
		 * Добавление стилевых таблиц в шаблон
		 *
		 * @param string $file название стилевой таблицы
		 * @param bool $isUrl если стиль находится в интернете
		 * @param string $media строка тип CSS (all, print, screen, media)
		 */
		public function addStylesheet($file, $isUrl = FALSE, $media = 'all') {
		
			if ($isUrl !== FALSE) {
				$isUrl = TRUE;
			}
		
			$this -> styles[] = array(
				'file'  => $file,
				'isUrl' => ($isUrl),
				'media' => $media
			);
		}

		/**
		 * Добавление скриптов в шаблон
		 *
		 * @param string $file название скрипта
		 * @param bool $isUrl если скрипт находится в интернете
		 */
		public function addScript($file, $isUrl = FALSE) {
			
			if ($isUrl !== FALSE) {
				$isUrl = TRUE;
			}
		
			$this -> scripts[] = array(
				'file'  => $file,
				'isUrl' => ($isUrl)
			);
		}
		
		/**
		 * Установить параметры страницы 
		 *
		 * @param array  $data пераметры страницы
		 * @param string $path путь к шаблону 
		 */
		protected function setPageParams($data = array()) {
		
			if (!empty($data[ 'keywords' ])) {
			
				$this -> template -> set('keywords', $data[ 'keywords' ]);
			}		
			
			if (!empty($data[ 'description' ])) {
			
				$this -> template -> set('description', $data[ 'description' ]);
			}
		
			if (!empty($data[ 'title' ])) {
			
				$this -> template -> set('pagetitle', $data[ 'title' ]);
			}
		}
		
		/**
		 * Отобразить пользовательскую страницу 
		 *
		 * @param string $path путь к шаблону 
		 * @param array  $data данные для шаблона
		 */
		protected function showPage($path, $data = array()) {
			
			$this -> template -> set('content', View::factory(self::TMP_PATH . '/' . $path, $data));
			
			$this -> template -> set('scripts', $this -> scripts);
			$this -> template -> set('styles',  $this -> styles);
			
			$this -> template -> set('notShowNews', ((isset($data[ 'notShowNews' ])) ? $data[ 'notShowNews' ]  : true));
		}
	} 

    /* End of file Default.php */
    /* Location: ./application/classes/Controller/Layout/Default.php */
	
	
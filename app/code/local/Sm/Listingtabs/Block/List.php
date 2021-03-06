<?php
/*------------------------------------------------------------------------
# SM Listing Tabs - Version 2.0.1
# Copyright (c) 2014 YouTech Company. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: YouTech Company
# Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Listingtabs_Block_List extends Mage_Catalog_Block_Product_Abstract
{
	protected $_config = null;
	protected $_storeId = null;

	public function __construct($attr)
	{
		parent::__construct($attr);
		if ($this->_isAjax()) {
			$_cfg = Mage::app()->getRequest()->getParam('config');
			$this->_config = (array)json_decode(base64_decode(strtr($_cfg, '-_', '+/')));
		} else {
			$this->_config = $this->_getCfg($attr);
		}
		if (!$this->_getConfig('active', 1)) return;
		$this->_storeId = Mage::app()->getStore()->getId();
	}

	public function _getCfg($attr = null)
	{
		// get default config.xml
		$defaults = array();
		$def_cfgs = Mage::getConfig()->loadModulesConfiguration('config.xml')->getNode('default/listingtabs_cfg')->asArray();
		if (empty($def_cfgs)) return;
		$groups = array();
		foreach ($def_cfgs as $def_key => $def_cfg) {
			$groups[] = $def_key;
			foreach ($def_cfg as $_def_key => $cfg) {
				$defaults[$_def_key] = $cfg;
			}
		}
		// get configs after change
		$_configs = (array)Mage::getStoreConfig("listingtabs_cfg");
		if (empty($_configs)) return;
		$cfgs = array();
		foreach ($groups as $group) {
			$_cfgs = Mage::getStoreConfig('listingtabs_cfg/' . $group . '');
			foreach ($_cfgs as $_key => $_cfg) {
				$cfgs[$_key] = $_cfg;
			}
		}
		// get output config
		$configs = array();
		foreach ($defaults as $key => $def) {
			if (isset($defaults[$key])) {
				$configs[$key] = $cfgs[$key];
			} else {
				unset($cfgs[$key]);
			}
		}
		$this->_config = ($attr != null) ? array_merge($configs, $attr) : $configs;
		return $this->_config;
	}

	public function _getConfig($name = null, $value_def = null)
	{
		if (is_null($this->_config)) $this->_getCfg();
		if (!is_null($name)) {
			$value_def = isset($this->_config[$name]) ? $this->_config[$name] : $value_def;
			return $value_def;
		}
		return $this->_config;
	}

	public function _setConfig($name, $value = null)
	{
		if (is_null($this->_config)) $this->_getCfg();
		if (is_array($name)) {
			$this->_config = array_merge($this->_config, $name);
			return;
		}
		if (!empty($name) && isset($this->_config[$name])) {
			$this->_config[$name] = $value;
		}
		return true;
	}

	public function _moduleID()
	{
		return md5(serialize(array('sm_listingtabs', $this->_config)));
	}

	protected function _toHtml()
	{
		if (!$this->_getConfig('active', 1)) return;
		
		if ($this->_isAjax()) {
			$template_file = 'sm/listingtabs/default_items.php';
			$this->setTemplate($template_file);
		}elseif($this->_isAjax_v2()){
			$template_file = 'sm/listingtabs/default_itemsv2_2.php';
			$this->setTemplate($template_file);
		}else{
			
		}
		//else {
			//$template_file = "sm/listingtabs/default.phtml";
		//}
		//$this->setTemplate($template_file);
		return parent::_toHtml();
	}

	public function _isAjax()
	{
		$isAjax = Mage::app()->getRequest()->isAjax();
		$is_ajax_listing_tabs = $this->getRequest()->getPost('is_ajax_listing_tabs');
		if ($isAjax && $is_ajax_listing_tabs == 1) {
			return true;
		} else {
			return false;
		}
	}
	
	public function _isAjax_v2()
	{
		$isAjax = Mage::app()->getRequest()->isAjax();
		$is_ajax_listing_tabs_v2 = $this->getRequest()->getPost('is_ajax_listing_tabs_v2');
		if ($isAjax && $is_ajax_listing_tabs_v2 == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function _getCatIds()
	{
		$catids = $this->_getConfig('product_category');

		if ($catids == null) return;
		$_catids = $this->_getCatActive($catids);
		if (empty($_catids)) return;

		return $_catids;
	}

	public function _getList()
	{
		$type_filter = $this->_getConfig('filter_type');
		$catids = $this->_getCatIds();
		$list = array();
		switch ($type_filter) {
			case 'categories':
				if ($catids == '*') {
					$catids = $this->_getCatIds();
				}
				!is_array($catids) && settype($catids, 'array');

				if (empty($catids)) return;
				$cats = $this->_getCatinfor($catids, true);
				if (empty($cats)) return;

				if ($this->_getConfig('tab_all_display', 1)) {
					$all = new stdClass();
					$all->id = '*';
					$all->count = self::_countProducts($catids);
					$all->title = 'ALL';
					array_unshift($cats, $all);
				}

				$catidpreload = $this->_getConfig('category_preload');
				$selected = false;

				foreach ($cats as $cat) {
					if (isset($cat->sel)) {
						unset($cat->sel);
					}
					if ($cat->count > 0) {
						if ($cat->id == $catidpreload) {
							$cat->sel = 'sel';
							$cat->child = $this->_getProductInfor($catidpreload);
							$selected = true;
						}
						$list[$cat->id] = $cat;
					}
				}
				// first tab is active
				if (!$selected) {
					foreach ($cats as $cat) {
						if ($cat->count > 0) {
							$cat->sel = 'sel';
							$cat->child = $this->_getProductInfor($cat->id);
							$list[$cat->id] = $cat;
							break;
						}
					}
				}
				break;

			case 'fieldproducts':
				$filters = explode(',', $this->_getConfig('filter_order_by'));
				$products = array();
				$filter_preload = $this->_getConfig('field_preload');
				if (empty($filters)) return;
				if (!in_array($filter_preload, $filters)) {
					$filter_preload = array_shift($filters);
				}

				foreach ($filters as $filter) {
					$product = new stdClass();
					$product->count = self::_countProducts($catids, $filter);
					$product->id = $filter;
					$product->title = $filter;
					array_unshift($products, $product);
				}
				foreach ($products as $product) {
					if ($product->count > 0) {
						if ($product->id == $filter_preload) {
							$product->sel = 'sel';
							$product->child = self::_getProductInfor($catids, $filter_preload);
						}
						$list[$product->id] = $product;
					}
				}
				break;

		}
		if (empty($list)) return;
		return $list;

	}

	public function getLabel($filter)
	{
		switch ($filter) {
			case 'name':
				return $this->__('Name');
			case 'entity_id':
				return $this->__('Id');
			case 'created_at':
				return $this->__('Date Created');
			case 'price':
				return $this->__('Price');
			case 'lastest_product':
				return $this->__('Lastest Product');
			case 'top_rating':
				return $this->__('Top Rating');
			case 'most_reviewed':
				return $this->__('Most Reviews');
			case 'most_viewed':
				return $this->__('Most Viewed');
			case 'best_sales':
				return $this->__('Most Selling');
		}
	}

	public function _getProductInfor($_catids, $field_order = null)
	{
		$small_image_config = array(
			'width' => (int)$this->_getConfig('imgcfg_width', 200),
			'height' => $this->_getConfig('imgcfg_height', null),
			'constrainOnly' => (bool)$this->_getConfig('imgcfg_constrainOnly'),
			'keepAspectRatio' => (bool)$this->_getConfig('imgcfg_keepAspectRatio'),
			'keepFrame' => (bool)$this->_getConfig('imgcfg_keepFrame'),
			'keepTransparency' => (bool)$this->_getConfig('imgcfg_keepTransparency'),
			'background' => (string)$this->_getConfig('imgcfg_background'),
			'function' => (int)$this->_getConfig('imgcfg_function')
		);
		if ($_catids == '*') {
			$_catids = $this->_getCatIds();
		}
		!is_array($_catids) && settype($_catids, 'array');
		if (!empty($_catids)) {
			$products = $this->_getProductsBasic($_catids, $field_order);
			if ($products != null) {
				$_products = $products->getItems();
				if (!empty($_products)) {
					$helper = Mage::helper('listingtabs/data');
					foreach ($_products as $_product) {
						$_product->setStoreId($this->_storeId);
						$_product->id = $_product->getId();
						$_product->title = $_product->getName();
						$image = $helper->getProductImage($_product, $this->_getConfig());
						$_image = $helper->_resizeImage($image, $small_image_config);
						$_product->_image = $_image;

                        $_product->description =  Mage::getModel('catalog/product')->load($_product->getId())->getDescription();
                        $_product->_description = $helper->_cleanText($_product->description);
                        $_product->_description = $helper->_trimEncode($_product->_description != '') ? $_product->_description : $helper->_cleanText($_product->getShortDescription());
                        $_product->_description = $helper->_trimEncode($_product->_description != '') ? $helper->truncate($_product->_description, $this->_getConfig('product_description_maxlength')) : '';
						$_product->link = $_product->getProductUrl();
					}
					$_product->num_view_counts = ($_product->num_view_counts == null) ? 0 : $_product->num_view_counts;

					return $_products;
				}
			}
		}
		return null;
	}

	/*
	* Check Categories is Active ?
	*/
	private function _getCatActive($catids = null, $orderby = true)
	{
		if (is_null($catids)) {
			$catids = $this->_getConfig('product_category');
		}
		!is_array($catids) && $catids = preg_split('/[\s|,|;]/', $catids, -1, PREG_SPLIT_NO_EMPTY);
		if (empty($catids)) return;
		$catidsall = array();
		$categoryIds = array(
			'in' => $catids
		);
		$categories = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*')->setStoreId($this->_storeId)->addAttributeToFilter('entity_id', $categoryIds)->addIsActiveFilter();
		if ($orderby) {
			$attribute = $this->_getConfig('category_order_by', 'name'); // name | position | entry_id | random
			$dir = $this->_getConfig('category_order_dir', 'ASC');
			switch ($attribute) {
				case 'name':
				case 'position':
				case 'entry_id':
					$categories->addAttributeToSort($attribute, $dir);
					break;

				case 'random':
					$categories->getSelect()->order(new Zend_Db_Expr('RAND()'));
					break;

				default:
			}
		}
		$_catids = array();
		if (empty($categories)) return;
		foreach ($categories as $category) {
			$_catids[] = $category->getId();
		}
		return $_catids;
	}

	/*
	* array $catids
	* bool $allcat = true return with parentid else return only childId
	* int $limitCat = 0 return unlimit else return limit
	* int $levels =  1
	* return $catids
	*/
	private function _childCategory($catids, $allcat = true, $limitCat = 0, $levels = 0)
	{
		!is_array($catids) && settype($catids, 'array');
		$additional_catids = array();
		if (!empty($catids)) {
			foreach ($catids as $catid) {
				$category_model = Mage::getModel('catalog/category');
				$_category = $category_model->load($catid);
				$levelCat = $_category->getLevel();
				$subcategories = $category_model->getCollection()->addAttributeToSelect('*')->addFieldToFilter('parent_id', $catid)->addIsActiveFilter()->addAttributeToSort('position', 'ASC')->setPageSize($limitCat)->load();
				foreach ($subcategories as $each_subcat) {
					$condition = ($each_subcat->getLevel() - $levelCat <= $levels);
					if ($condition) {
						$additional_catids[] = $each_subcat->getId();
					}
				}
			}
			$catids = $allcat ? array_unique(array_merge($catids, $additional_catids)) : array_unique($additional_catids);
		}
		return $catids;
	}

	public function _getCatinfor($catids, $orderby = null)
	{
		!is_array($catids) && settype($catids, 'array');
		$list = array();
		if (!empty($catids)) {
			$helper = Mage::helper('listingtabs/data');
			foreach ($catids as $catid) {
				$category_model = Mage::getModel('catalog/category');
				$category = $category_model->load($catid);
				$category->title = $category->getName();
				$category->id = $category->entity_id;
				$category->count = $this->_countProducts($category->id);
				$category->link = $category->getUrl();
				$category->_description = $helper->_cleanText($category->getDescription());
				$category->_description = $helper->_trimEncode($category->description != '') ? $helper->truncate($category->_description, $this->_getConfig('category_title_maxlength', 5)) : '';
				$list[$category->id] = (object)$category->getData();
			}
		}
		return $list;
	}

	/*
	* return countProduct;
	*/
	protected function _countProducts($catids, $field_order = null)
	{
		!is_array($catids) && settype($catids, 'array');
		$countProduct = $this->_getProductsBasic($catids, $field_order, true);
		return $countProduct;
	}

	public function _getProductsBasic($catids, $field_order = null, $countProduct = false)
	{
		$collection = array();
		$productIds = array();
		!is_array($catids) && settype($catids, 'array');
		$_include = (int)$this->_getConfig('child_category_products', 1);
		$level = (int)$this->_getConfig('max_depth', 1);
		$catids = ($_include && $level > 0) ? $this->_childCategory($catids, true, 0, $level) : $catids;
		if (!empty($catids)) {
			$attributes = Mage::getSingleton('catalog/config')->getProductAttributes();
			$categoryIds = array(
				'in' => $catids
			);
			$collection = Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect($attributes)->addAttributeToSelect('featured')->addAttributeToSelect('*')->addMinimalPrice()->addFinalPrice()->addTaxPercents()->addTierPriceData()->addUrlRewrite()->setStoreId($this->_storeId)->joinField('category_id', 'catalog/category_product', 'category_id', 'product_id = entity_id', null, 'left')->addAttributeToFilter(array(array('attribute' => 'category_id','in' => array($catids))));
			if ($this->_getFeaturedProduct($collection) == false) return null;
			$this->_getFeaturedProduct($collection);
			Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($collection);
			Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($collection);
			Mage::getSingleton('cataloginventory/stock')->addInStockFilterToCollection($collection);
			$this->_addViewsCount($collection);
			$this->_addOrderedCount($collection);
			$this->_addReviewsCount($collection);
			$collection->getSelect()->group('entity_id')->distinct(true);
			$this->_getOrder($collection, $field_order);
			$collection->clear();
			if ($countProduct) return $collection->count();
			$_limit = (int)$this->_getConfig('product_limitation', 5);
			$_limit = $_limit <= 0 ? 0 : $_limit;
			$start = (int)$this->getRequest()->getPost('ajax_listingtags_start');
			if (!$start) $start = 0;
			if ($_limit >= 0) {
				$collection->getSelect()->limit($_limit, $start);
			}
		}

		return $collection;
	}

	/*
	 *	Get Featured Product
	 */
	private function _getFeaturedProduct(& $collection)
	{
		$filter = (int)$this->_getConfig('product_featured', 0);
		$attributeModel = Mage::getSingleton('eav/config')->getAttribute('catalog_product', 'featured');
		switch ($filter) {
			// Show All
			case 0:
				break;
			// None Featured
			case 1:
				if ($attributeModel->usesSource())
				{
					$collection->addAttributeToFilter(array(array('attribute' => 'featured', 'null' => 1)),null,'left');
				}
				break;
			// Only Featured
			case 2:
				if ($attributeModel->usesSource())
				{
					$collection->addAttributeToFilter(array(array('attribute' => 'featured', 'eq' => 1)));
				} else {
					return ;
				}
				break;
		}
		return $collection;
	}

	/*
	 *	Get Lastest Product
	 */
	private function _getLastestProduct(& $collection)
	{
		$todayStartOfDayDate = Mage::app()->getLocale()->date()
			->setTime('00:00:00')
			->toString(Varien_Date::DATETIME_INTERNAL_FORMAT);

		$todayEndOfDayDate = Mage::app()->getLocale()->date()
			->setTime('23:59:59')
			->toString(Varien_Date::DATETIME_INTERNAL_FORMAT);

		$collection = $this->_addProductAttributesAndPrices($collection)
			->addStoreFilter()
			->addAttributeToFilter('news_from_date',
				array('or' => array(
					0 => array('date' => true, 'to' => $todayEndOfDayDate),
					1 => array('is' => new Zend_Db_Expr('null'))
				)), 'left')
			->addAttributeToFilter('news_to_date',
				array('or' => array(
					0 => array('date' => true, 'from' => $todayStartOfDayDate),
					1 => array('is' => new Zend_Db_Expr('null'))
				)), 'left')
			->addAttributeToSort('news_from_date', 'DESC');
		return $collection;
	}

	/*
	 *	Get Order
	 */
	private function _getOrder($collection, $fileld_order = null)
	{
		$attribute = ($fileld_order == null) ? (string)$this->_getConfig('product_order_by', 'name') : $fileld_order;
		$dir = (string)$this->_getConfig('product_order_dir', 'ASC');
		switch ($attribute) {
			case 'entity_id':
			case 'name':
			case 'created_at':
				$collection->setOrder($attribute, $dir);
				break;
			case 'price':
				$collection->getSelect()->order('final_price ' . $dir . '');
				break;
			case 'lastest_product':
				$this->_getLastestProduct($collection);
				break;
			case 'top_rating':
				$collection->getSelect()->order('num_rating_summary DESC');
				break;
			case 'most_reviewed':
				$collection->getSelect()->order('num_reviews_count DESC');
				break;
			case 'most_viewed':
				$collection->getSelect()->order('num_view_counts DESC');
				break;
			case 'best_sellers':
				$collection->getSelect()->order('ordered_qty DESC ');
				break;
			default:
		}
		return $collection;
	}


	private function _addOrderedCount(& $collection)
	{
		$order_item_table = Mage::getSingleton('core/resource')->getTableName('sales/order_item');
		$select = Mage::getSingleton('core/resource')->getConnection('core_read')
			->select()
			->from($order_item_table, array('product_id', 'ordered_qty' => 'SUM(`qty_ordered`)'))
			->group('product_id');

		$collection->getSelect()
			->joinLeft(array('bs' => $select),
				'bs.product_id = e.entity_id');
		return $collection;
	}

	// add views_count
	private function _addViewsCount(& $collection)
	{
		$reports_event_table = Mage::getSingleton('core/resource')->getTableName('reports/event');
		$select = Mage::getSingleton('core/resource')->getConnection('core_read')
			->select()
			->from($reports_event_table, array('*', 'num_view_counts' => 'COUNT(`event_id`)'))
			->where('event_type_id = 1')
			->group('object_id');
		$collection->getSelect()
			->joinLeft(array('mv' => $select),
				'mv.object_id = e.entity_id');
		return $collection;

	}

	// add reviews_count and rating_summary
	private function _addReviewsCount(& $collection)
	{
		$review_summary_table = Mage::getSingleton('core/resource')->getTableName('review/review_aggregate');
		$collection->getSelect()
			->joinLeft(
				array("ra" => $review_summary_table),
				"e.entity_id = ra.entity_pk_value AND ra.store_id=" . $this->_storeId,
				array(
					'num_reviews_count' => "ra.reviews_count",
					'num_rating_summary' => "ra.rating_summary"
				)
			);
		return $collection;
	}

}

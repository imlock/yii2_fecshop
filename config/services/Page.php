<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'page' => [
		'class' => 'fecshop\services\Page',
		//'terry' => 'xxxx',
		
		# 子服务
		'childService' => [
			'breadcrumbs' => [
				'class' 		=> 'fecshop\services\page\Breadcrumbs',
				'homeName' 		=> 'Home',  # if homeName => '', Home will not show in breadcrums.
				'ifAddHomeUrl'	=> true,  	# default true, if set false, home will not add url (a).
				//'intervalSymbol'=> ' >> '	# default value:' > '
			],
			
			'cms' => [
				'class' 		=> 'fecshop\services\page\Cms',
			],
			'theme' => [
				'class' 		=> 'fecshop\services\page\Theme',
			],
			'widget' => [
				'class' 		=> 'fecshop\services\page\Widget',
				# 定义默认方法，也就是widgetConfig 里面各个部件里面的method如果没有填写
				# 则使用该配置。
				# 'defaultObMethod' => 'getLastData',
				
				'widgetConfig' => [
					'menu' =>[
						# 必填
						'class' => 'fec\block\TestMenu',
						# view 的绝对路径配置方式
						'view'  => '@fec/views/testmenu/index.php',
						# 下面为选填
						'method'=> 'getLastData',
						'terry1'=> 'My1',
						'terry2'=> 'My2',
					],
					'love' => [
						'class' => 'fecshop\app\appfront\modules\Cms\block\widget\Test',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'cms/home/test.php',
						'terry' => 'II',
					]
				]
				
			],
			'currency' => [
				'class' => 'fecshop\services\page\Currency',
				'currencys' => [
					'USD' => [
						'rate' 		=> 1,
						'symbol' 	=> '$',
					],
					'RMB' => [
						'rate' 		=> 6.3,
						'symbol' 	=> '￥',
					],
				],
				//'defaultCurrency' => 'USD',
			],
			
			'footer' => [
				'class' 		=> 'fecshop\services\page\Footer',
				/*
				'textTerms'		=> [
					[
						'text' 		=> 'Company Info',
						'urlPath'	=> 'company-info.html',
						'child'		=> [
							[
								'text' 		=> 'About US',
								'urlPath'	=> 'about-us.html',
							],
							[
								'text' 		=> 'Site Map',
								'urlPath'	=> 'site-map.html',
							],
							
						]
					],
					
					[
						'text' 		=> 'Payment Shipping',
						'urlPath'	=> 'payment-shipping.html',
						'child'		=> [
							[
								'text' 		=> 'Payment Guide',
								'urlPath'	=> 'payment-guide.html',
							],
							[
								'text' 		=> 'Shipping Guide',
								'urlPath'	=> 'shipping-guide.html',
							],
							[
								'text' 		=> 'Locations We Ship To',
								'urlPath'	=> 'locations-we-ship-to.html',
							],
						]
					],
					
					
					[
						'text' 		=> 'Policies & Service',
						'urlPath'	=> 'policies-service.html',
						'child'		=> [
							[
								'text' 		=> 'Terms of Use',
								'urlPath'	=> 'terms-of-use.html',
							],
							[
								'text' 		=> 'Help For Order',
								'urlPath'	=> 'help-for-order.html',
							],
							[
								'text' 		=> 'Privacy Policy',
								'urlPath'	=> 'privacy-policy.html',
							],
							
						]
					],
					
					[
						'text' 		=> 'Partner Program',
						'urlPath'	=> 'company-info.html',
						'child'		=> [
							[
								'text' 		=> 'Affiliate Program',
								'urlPath'	=> 'about-us.html',
							],
							[
								'text' 		=> 'Wholesale',
								'urlPath'	=> 'site-map.html',
							],
							[
								'text' 		=> 'See All',
								'urlPath'	=> 'see-all.html',
							],
							[
								'text' 		=> '',
								'urlPath'	=> '',
							],
						]
					],
				],
				*/
			],
			
			
			'newsletter' => [
				'class' 		=> 'fecshop\services\page\Newsletter',
			],
			
			'staticblock' => [
				'class' 		=> 'fecshop\services\page\StaticBlock',
			],
			
			'menu' => [
				'class' => 'fecshop\services\page\Menu',
				'displayHome' => [
					'enable' => true,
					'display'=> 'Home',
				],
				/**
				 *	custom menu  in the front menu section.
				 */
				'frontCustomMenu' => [
					[
						'name' 		=> 'my custom menu',
						'urlPath'	=> '/my-custom-menu.html',
						'childMenu' => [
							[
								'name' 		=> 'my custom menu 2',
								'urlPath'	=> '/my-custom-menu-2.html',
							],
							[
								'name' 		=> 'my custom menu 2',
								'urlPath'	=> '/my-custom-menu-2.html',
								'childMenu' => [
									[
										'name' 		=> 'my custom menu 2',
										'urlPath'	=> '/my-custom-menu-2.html',
									],
									[
										'name' 		=> 'my custom menu 2',
										'urlPath'	=> '/my-custom-menu-2.html',
									],
								],	
							],
						],	
					],
					[
						'name' 		=> 'my custom menu 2',
						'urlPath'	=> '/my-custom-menu-2.html',
					],
				],
				/**
				 *	custom menu  behind the menu section.
				 */
				'behindCustomMenu' => [
					[
						'name' 		=> 'my behind custom menu',
						'urlPath'	=> '/my-behind-custom-menu.html',
					],
					[
						'name' 		=> 'my behindcustom menu 2',
						'urlPath'	=> '/my-behind-custom-menu-2.html',
					],
				],
			],
			
		],
	],
];
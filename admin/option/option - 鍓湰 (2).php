<?php
return array(
	'title' => __('下载中心插件', 'vp_textdomain'),
	'logo' => '/img/vp-logo.png',
	'menus' => array(
	array(
			'title' => __('常规', 'vp_textdomain'),
			'name' => 'menu_2',
			'icon' => 'font-awesome:fa-gift',
			'controls' => array(
				array(
					'type' => 'section',
					'title' => __('常规设置', 'vp_textdomain'),
					'fields' => array(
						array(
							'type' => 'wpeditor',
							'name' => 'we_s1',
							'label' => __('版权说明', 'vp_textdomain'),
							'description' => __('版权说明在下载页面底部显示.', 'vp_textdomain'),
							'default' =>'下载页面版权说明！',
							'use_external_plugins' => '1',
							'disabled_externals_plugins' => '',
							'disabled_internals_plugins' => '',
						),
						array(
							'type' => 'upload',
							'name' => 'up_logo',
							'label' => __('页面标志', 'vp_textdomain'),
							'description' => __('下载页面标志300x75px', 'vp_textdomain'),
							'default' => VP_PLUGIN_URL.'tp/cool/images/logo.png',
						),
						
						array(
							'type' => 'upload',
							'name' => 'up_1s',
							'label' => __('下载页图片', 'vp_textdomain'),
							'description' => __('下载页面右侧图片440x415px', 'vp_textdomain'),
							'default' => VP_PLUGIN_URL.'tp/cool/images/main_image.png',
						),
						
						array(
							'type' => 'codeeditor',
							'name' => 'ce_1',
							'label' => __('下载页面广告代码', 'vp_textdomain'),
							'default' =>'广告位置',
							'description' => __('请在在广告联盟获取悬浮广告代码样式.注意：如果不是悬停样式广告，页面将出现错误', 'vp_textdomain'),
							'theme' => 'github',
							'mode' => 'text',
						),
						array(
							'type' => 'codeeditor',
							'name' => 'ce_2',
							'label' => __('下载页弹出页面广告', 'vp_textdomain'),
							'default' =>'广告位置',
							'description' => __('下载页弹出页面广告.静态广告最多宽度460px', 'vp_textdomain'),
							'theme' => 'github',
							'mode' => 'text',
						),
					),
              ),
   ),
)
);
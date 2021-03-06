<?php
/**
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

if (!class_exists('LeoSlideshowHelper')) {

    class LeoSlideshowHelper
    {
        const MODULE_NAME = 'leoslideshow';

        public static function l($string, $specific = false, $name = '')
        {
            if (empty($name)) {
                $name = self::MODULE_NAME;
            }
            return Translate::getModuleTranslation($name, $string, ($specific) ? $specific : $name);
        }

        /**
         * Copy js, css to theme folder
         */
        public static function copyToTheme()
        {
            include_once(_PS_MODULE_DIR_.'leoslideshow/libs/phpcopy.php');

            $theme_dir = _PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/';
            $module_dir = _PS_MODULE_DIR_.self::MODULE_NAME.'/';

            $theme_js_dir = $theme_dir.'js/modules/leoslideshow/views/js';
            $theme_css_dir = $theme_dir.'css/modules/leoslideshow/views/css';

            // Create js folder
            mkdir($theme_js_dir, 0755, true);
            PhpCopy::safeCopy($module_dir.'views/js/', $theme_js_dir);

            // Create css folder
            mkdir($theme_css_dir, 0755, true);
            PhpCopy::safeCopy($module_dir.'views/css/', $theme_css_dir);

            $url = 'index.php?controller=adminmodules&configure=leoslideshow&token='.Tools::getAdminTokenLite('AdminModules')
                    .'&tab_module=front_office_features&module_name=leoslideshow';
            Tools::redirectAdmin($url);
        }
        
        public static function getImgThemeUrl()
        {
            # LeoSlideshowHelper::getImgThemeUrl()
            static $img_theme_url;
            if (!$img_theme_url)
            {
                // Not exit image or icon
                $img_theme_url = _THEME_IMG_DIR_.'modules/leoslideshow/';
            }

            return $img_theme_url;
        }
    
        public static function getImgThemeDir()
        {
            static $img_theme_dir;
            if (!$img_theme_dir)
            {
                $img_theme_dir = _PS_ALL_THEMES_DIR_._THEME_NAME_.'/assets/img/modules/leoslideshow/';
            }
            return $img_theme_dir;
        }
        
        public static function genKey()
        {
            return md5(time().rand());
        }
        
        public static function freeTextWhensubmit()
        {
            return 'We are sorry that you are using free version, hence, you cannot use this function. Please update to professional version.';
        }
        
        public static function freeText()
        {
            return '<div class="alert alert-warning ap-free-warning"><marquee direction="right" behavior="alternate">You are using free version of LeoBootstrapMenu. '
            . '<a target="_blank" href="http://apollotheme.com" title="professional version">Please click here to find out about professional version and how to update to this version</a></marquee></div>';
        }
        
        const FREE_LIMIT_GROUP = 2;
        public static function freeGroup()
        {
            return 'We are sorry that you are using free version module. You cannot add more Group. Limit is ' . self::FREE_LIMIT_GROUP;
        }
        
        const FREE_LIMIT_SLIDE = 4;
        public static function freeMenu()
        {
            return 'We are sorry that you are using free version module. You cannot add more Slide. Limit is ' . self::FREE_LIMIT_SLIDE;
        }
    }
}

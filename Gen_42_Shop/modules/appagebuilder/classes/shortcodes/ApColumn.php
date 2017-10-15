<?php
/**
 * 2007-2015 Apollotheme
 *
 * NOTICE OF LICENSE
 *
 * ApPageBuilder is module help you can build content for your shop
 *
 * DISCLAIMER
 *
 *  @Module Name: AP Page Builder
 *  @author    Apollotheme <apollotheme@gmail.com>
 *  @copyright 2007-2015 Apollotheme
 *  @license   http://apollotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

class ApColumn extends ApShortCodeBase
{
    public $name = 'ApColumn';
    public $for_module = 'manage';

    public function getInfo()
    {
        return array('label' => $this->l('Column'), 'position' => 2, 'desc' => $this->l('A column can have one or more widget'),
            'tag' => 'content structure');
    }

    public function getAdditionConfig()
    {
        return array(
            array(
                'type' => '',
                'name' => 'xl',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'lg',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'md',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'sm',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'xs',
                'default' => '12'
            ),
            array(
                'type' => '',
                'name' => 'sp',
                'default' => '12'
            )
        );
    }

    public function getConfigList()
    {
        $input = array(
            array(
                'type' => 'tabConfig',
                'name' => 'title',
                'values' => array(
                    'aprow_general' => $this->l('General'),
                    'aprow_style' => $this->l('Width'),
                    'aprow_animation' => $this->l('Animation'),
                    'aprow_exceptions' => $this->l('Exceptions'))
            ),
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'desc' => $this->l('Auto hide if leave it blank'),
                'lang' => 'true',
                'form_group_class' => 'aprow_general',
                'default' => ''
            ),
            array(
                'type' => 'textarea',
                'name' => 'sub_title',
                'label' => $this->l('Sub Title'),
                'lang' => true,
                'values' => '',
                'autoload_rte' => false,
                'form_group_class' => 'aprow_general',
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'id',
                'label' => $this->l('ID'),
                'form_group_class' => 'aprow_general',
                'desc' => $this->l('Use for css and javascript'),
                'default' => ''
            ),
            array(
                'type' => 'ApColumnclass',
                'name' => 'class',
                'leolabel' => $this->l('CSS Class'),
                'values' => '',
                'default' => '',
                'form_group_class' => 'aprow_general',
            ),
            array(
                'type' => 'column_width',
                'name' => 'width',
                'values' => '',
                'columnGrids' => ApPageSetting::getColumnGrid(),
                'form_group_class' => 'aprow_style',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Animations'),
                'name' => 'animation',
                'class' => 'animation-select limit-free',
                'options' => array(
                    'optiongroup' => array(
                        'label' => 'name',
                        'query' => ApPageSetting::getAnimations(),
                    ),
                    'options' => array(
                        'id' => 'id',
                        'name' => 'name',
                        'query' => 'query',
                    ),
                ),
                'form_group_class' => 'aprow_animation',
                'disabled' => 'disabled',
                'desc' => ApPageSetting::freeTextDes(),
            ),
            array(
                'type' => 'html',
                'name' => 'default_html',
                'html_content' => '<div id="animationSandbox">Prestashop.com</div>',
                'form_group_class' => 'aprow_animation animate_sub',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Delay'),
                'name' => 'animation_delay',
                'default' => '2',
                'suffix' => 's',
                'class' => 'fixed-width-xs',
                'form_group_class' => 'aprow_animation animate_sub',
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Specific Controller'),
                'name' => 'specific_type',
                'class' => 'form-action limit-free',
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'all',
                            'name' => $this->l('Show on all Page Controller'),
                        ),
                        # FREE MODULE
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'form_group_class' => 'aprow_exceptions',
                'default' => 'all',
                'disabled' => 'disabled',
                'desc' => ApPageSetting::freeTextDes(),
            ),
            array(
                'type' => 'reloadControler',
                'label' => $this->l('AJAX Reload Controller'),
                'name' => 'reloadControler',
                'default' => '',
                'form_group_class' => 'aprow_exceptions specific_type_sub specific_type-all',
                'hint' => 'If website have new a Controller, click to generate Controller again.',
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Controller ID'),
                'name' => 'controller_id',
                'desc' => $this->l('Example: 1,2,3'),
                'default' => '',
                'form_group_class' => 'aprow_exceptions specific_type_sub specific_type-category specific_type-product specific_type-cms',
            ),
            array(
                'type' => 'apExceptions',
                'name' => 'controller_pages',
                'form_group_class' => 'aprow_exceptions specific_type_sub specific_type-all',
            ),
        );
        return $input;
    }
    
    public function endRenderForm()
    {
        $display_module_exception = '';
        
        if(Tools::getValue('reloadControllerException')){
            # ReLoad : write to config
            $display_module_exception = $this->displayModuleExceptionList();

            $ap_cache_controller_exception = apPageHelper::correctEnCodeData($display_module_exception);
            Configuration::updateValue('AP_CACHE_CONTROLLER_EXCEPTION', $ap_cache_controller_exception);
            
            apPageHelper::log('reload');
        }else{

            $display_module_exception = Configuration::get('AP_CACHE_CONTROLLER_EXCEPTION');
            if($display_module_exception === false)
            {
                # First Time : write to config
                $display_module_exception = $this->displayModuleExceptionList();

                $ap_cache_controller_exception = apPageHelper::correctEnCodeData($display_module_exception);
                Configuration::updateValue('AP_CACHE_CONTROLLER_EXCEPTION', $ap_cache_controller_exception);
            }else{
                # Second Time : read from config
                $display_module_exception = apPageHelper::correctDeCodeData($display_module_exception);
            }
        }
        $this->helper->module = new $this->module_name();
        $this->helper->tpl_vars['exception_list'] = $display_module_exception;
    }
    
    public function displayModuleExceptionList()
    {
        $controller = Tools::getValue('controller_pages');
        $file_list = array();
        $content = '<p><input type="text" name="controller_pages" value="'.$controller.'" class="em_text"/></p>';
        $content .= '<p>
                        <select size="25" name="controller_pages_select" class="em_list" multiple="multiple">
                        <option disabled="disabled">'.$this->l('___________ CUSTOM ___________').'</option>';
        // @OOP do something better with controllers
        $controllers = Dispatcher::getControllers(_PS_FRONT_CONTROLLER_DIR_);
        $controllers['module'] = $this->l('Module Page');
        ksort($controllers);
        foreach ($file_list as $k => $v) {
            if (!array_key_exists($v, $controllers)) {
                $content .= '<option value="'.$v.'">'.$v.'</option>';
            }
        }

        $content .= '<option disabled="disabled">'.$this->l('____________ CORE ____________').'</option>';
        foreach ($controllers as $k => $v) {
            $content .= '<option value="'.$k.'">'.$k.'</option>';
        }
        $modules_controllers_type = array('admin' => $this->l('Admin modules controller'), 'front' => $this->l('Front modules controller'));
        foreach ($modules_controllers_type as $type => $label) {
            $content .= '<option disabled="disabled">____________ '.$label.' ____________</option>';
            $all_modules_controllers = Dispatcher::getModuleControllers($type);
            foreach ($all_modules_controllers as $module => $modules_controllers) {
                foreach ($modules_controllers as $cont) {
                    $content .= '<option value="module-'.$module.'-'.$cont.'">module-'.$module.'-'.$cont.'</option>';
                }
            }
        }
        $content .= '</select></p>';
        return $content;
    }
    
    public function prepareFontContent($assign, $module = null)
    {
        // validate module
        unset($module);
        if (!isset($assign['formAtts']['animation']) || $assign['formAtts']['animation'] == 'none') {
            $assign['formAtts']['animation'] = 'none';
            $assign['formAtts']['animation_delay'] = '';
        } elseif ($assign['formAtts']['animation'] != 'none' && (int)$assign['formAtts']['animation_delay'] > 0) {
            // validate module
            $assign['formAtts']['animation_delay'] .= 's';
        } elseif ($assign['formAtts']['animation'] != 'none' && (int)$assign['formAtts']['animation_delay'] <= 0) {
            // Default delay
            $assign['formAtts']['animation_delay'] = '1s';
        }
        $assign['formAtts']['class'] = str_replace('.', '-', $assign['formAtts']['class']);
        return $assign;
    }
}

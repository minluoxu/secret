<?php
/**
 * User: JiangTao
 * Date: 16/7/16
 */
class AdminController extends CController{

    public $layout='/layouts/main';

    public $pageTitle;

    private $_menu;

    public $breadcrumbs=array();

    public function getMenu(){
        if($this->_menu === null){
            $this->_menu = array(
                array('label'=>'工作台','icon'=>'icon-home','url'=>array('/admin/default/index')),
                array('label'=>'管理','icon'=>'icon-wrench','url'=>'javascript:;','items'=>array(
                    array('label'=>'用户','icon'=>'icon-users','url'=>array('/admin/user/index')),
                    array('label'=>'角色','icon'=>'icon-briefcase','url'=>array('admin/role/list')),
                ))
            );
        }
        return $this->_menu;
    }

    public function filters(){
        return array(
            'accessControl - admin/sign/login'
        );
    }

    public function accessRules(){
        return array(
            array('allow','users'=>array('@')),
            array('deny','users'=>array('*')),
        );
    }
    


}

<?php 
class Tinkerlust_CouponChecker_Model_Observer extends Varien_Event_Observer
{
	public function __construct()
    {

    }	

    public function check(Varien_Event_Observer $observer){
    	$coupon_code = $observer->getControllerAction()->getRequest()->getParam('coupon_code');
    	$is_remove = $observer->getControllerAction()->getRequest()->getParam('remove');
    	//Debug::this($coupon_code);
    	if ($coupon_code && $is_remove != 1){
    		$coupon_code = strtoupper($coupon_code);
    		Mage::getSingleton('core/session')->setData('coupon',$coupon_code);
    	}
    }
	    

}
?>
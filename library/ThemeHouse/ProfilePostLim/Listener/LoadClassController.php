<?php

class ThemeHouse_ProfilePostLim_Listener_LoadClassController extends ThemeHouse_Listener_LoadClass
{

    /**
     * Gets the classes that are extended for this add-on.
     * See parent for explanation.
     *
     * @return array
     */
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_ProfilePostLim' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Member'
                ), /* END 'controller' */
            ), /* END 'ThemeHouse_ProfilePostLim' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_ProfilePostLim_Listener_LoadClassController($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */
}
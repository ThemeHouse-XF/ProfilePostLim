<?php

/**
 *
 * @see XenForo_ControllerPublic_Member
 */
class ThemeHouse_ProfilePostLim_Extend_XenForo_ControllerPublic_Member extends XFCP_ThemeHouse_ProfilePostLim_Extend_XenForo_ControllerPublic_Member
{

    /**
     *
     * @see XenForo_ControllerPublic_Member::actionMember()
     */
    public function actionMember()
    {
        XenForo_Application::getOptions()->set('messagesPerPage', 
            XenForo_Application::get('options')->th_profilePostLimit_profilePostsPerPage);
        return parent::actionMember();
    } /* END actionMember */
}
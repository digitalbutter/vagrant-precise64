<?php
namespace Craft;

class Field_PermissionsPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Field Permissions');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Digital Butter';
    }

    function getDeveloperUrl()
    {
        return 'http://butter.com.hk';
    }

    public function hasCpSection()
    {
        return true;
    }

    function registerUserPermissions()
    {
        return array(
            'noteEditor' => array('label' => Craft::t('Note Editor')),
            'noteAuthor' => array('label' => Craft::t('Note Author')),
        );
    }

}
<?php
namespace Craft;

/**
 * Blueprint controller
 */
class BlueprintController extends BaseController
{

    public function actionBlueprintIndex()
    {
        $variables['bp'] = Array('sections');
        $variables['bp']['sections'] = $this->_getSectionsAndRelatedFields();

        $this->renderTemplate('blueprint/_index', $variables);
    }

    private function _getSectionsAndRelatedFields()
    {
      $sections = craft()->db->createCommand()
            ->select('s.handle, s.name, s.id, s.type, s.template, et.name etName, et.handle etHandle, et.id etId, f.id fId, f.name fName, f.handle fHandle, f.type fType')
            ->from('sections s')
            ->join('entrytypes et', 'et.sectionId=s.id')
            ->join('fieldlayouts fl', 'et.fieldLayoutId=fl.id')
            ->join('fieldlayoutfields flf', 'fl.id=flf.layoutId')
            ->join('fields f', 'flf.fieldId=f.id')
            ->order('s.name, etName, fName')
            ->queryAll();

      return $sections;
    }

    
}

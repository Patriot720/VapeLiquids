<?php

defined('JPATH_BASE') or die;
jimport('joomla.form.formfield');

class JFormFieldBTLAbout extends JFormField{

	public function getTemplateName(){
		$templateName 	= end(explode( DIRECTORY_SEPARATOR, str_replace( array( '\elements', '/elements' ), '', dirname(__FILE__) )) );
		//$templateName 	= $templateName [ count( $templateName ) - 1 ];
		return $templateName;
	}

	protected function getInput(){
		$doc = JFactory::getDocument();

		$templateName = $this->getTemplateName();

 		$doc->addStyleSheet(JURI::root().'templates/'.$templateName.'/admin/css/btl_admin.css');
		if(version_compare(JVERSION,"3.0.0","lt")){
		    $doc->addScript(JURI::root().'templates/'.$templateName.'/admin/js/btl_slider.js');
		    $doc->addScript(JURI::root().'templates/'.$templateName.'/admin/js/btl_admin.js');
		}
	}
}

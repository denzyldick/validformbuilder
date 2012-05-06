<?php
/***************************
 * ValidForm Builder - build valid and secure web forms quickly
 * 
 * Copyright (c) 2009-2012, Felix Langfeldt <flangfeldt@felix-it.com>.
 * All rights reserved.
 * 
 * This software is released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
 * 
 * @package    ValidForm
 * @author     Felix Langfeldt <flangfeldt@felix-it.com>
 * @copyright  2009-2012 Felix Langfeldt <flangfeldt@felix-it.com>
 * @license    http://www.opensource.org/licenses/mit-license.php
 * @link       http://code.google.com/p/validformbuilder/
 ***************************/
  
require_once('class.vf_element.php');

/**
 * 
 * Text Class
 * 
 * @package ValidForm
 * @author Felix Langfeldt
 * @version Release: 0.2.1
 *
 */
class VF_Text extends VF_Element {

	public function toHtml($submitted = FALSE, $blnSimpleLayout = FALSE) {
		$strOutput = "";
		
		if (!$blnSimpleLayout) {
			$blnError = ($submitted && !$this->__validator->validate()) ? TRUE : FALSE;
			
			$strClass = ($this->__validator->getRequired()) ? "vf__required" : "vf__optional";
			$strClass = ($blnError) ? $strClass . " vf__error" : $strClass;
			$strOutput = "<div class=\"{$strClass}\">\n";
			
			if ($blnError) $strOutput .= "<p class=\"vf__error\">{$this->__validator->getError()}</p>";
			
			$strLabel = (!empty($this->__requiredstyle) && $this->__validator->getRequired()) ? sprintf($this->__requiredstyle, $this->__label) : $this->__label;
			$strOutput .= "<label for=\"{$this->__id}\">{$strLabel}</label>\n";
		} else {
			$strOutput = "<div class=\"vf__multifielditem\">\n";
		}
				
		$strOutput .= "<input type=\"text\" value=\"{$this->__getValue($submitted)}\" name=\"{$this->__name}\" id=\"{$this->__id}\" {$this->__getMetaString()} />\n";
		
		if (!empty($this->__tip)) $strOutput .= "<small class=\"vf__tip\">{$this->__tip}</small>\n";
							
		$strOutput .= "</div>\n";
		
		if (!$blnSimpleLayout && $this->__dynamic && !empty($this->__dynamicLabel)) {
			$strOutput .= "<div class=\"vf__dynamic\"><a href=\"#\" data-target-id=\"{$this->__id}\" data-target-name=\"{$this->__name}\">{$this->__dynamicLabel}</a><input type=\"hidden\" id=\"{$this->__id}_dynamic\" name=\"{$this->__name}_dynamic\" value=\"0\" /></div>\n";
		}
		
		return $strOutput;
	}
	
	public function toJS() {
		$strCheck = $this->__validator->getCheck();
		$strCheck = (empty($strCheck)) ? "''" : str_replace("'", "\\'", $strCheck);
		$strRequired = ($this->__validator->getRequired()) ? "true" : "false";
		$intMaxLength = ($this->__validator->getMaxLength() > 0) ? $this->__validator->getMaxLength() : "null";
		$intMinLength = ($this->__validator->getMinLength() > 0) ? $this->__validator->getMinLength() : "null";
		$strMaxLengthError = sprintf($this->__validator->getMaxLengthError(), $intMaxLength);
		$strMinLengthError = sprintf($this->__validator->getMinLengthError(), $intMinLength);
		
		return "objForm.addElement('{$this->__id}', '{$this->__name}', {$strCheck}, {$strRequired}, {$intMaxLength}, {$intMinLength}, '" . addslashes($this->__validator->getFieldHint()) . "', '" . addslashes($this->__validator->getTypeError()) . "', '" . addslashes($this->__validator->getRequiredError()) . "', '" . addslashes($this->__validator->getHintError()) . "', '{$strMinLengthError}', '{$strMaxLengthError}');\n";
	}
	
}

?>
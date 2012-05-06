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
  
require_once('class.classdynamic.php');

/**
 * 
 * Paragraph Class
 * 
 * @package ValidForm
 * @author Felix Langfeldt
 * @version Release: 0.2.1
 *
 */
class VF_Paragraph extends ClassDynamic {
	protected $__header;
	protected $__body;
	protected $__id;
	
	public function __construct($header = NULL, $body = NULL) {
		$this->__header = $header;
		$this->__body = $body;
	}
	
	public function toHtml($submitted = FALSE) {
		$strOutput = "<div>\n";
		
		if (!empty($this->__header)) $strOutput .= "<h3>{$this->__header}</h3>\n";
		if (!empty($this->__body)) {
			if (preg_match("/<p.*?>/", $this->__body) > 0) {
				$strOutput .= "{$this->__body}\n";
			} else {
				$strOutput .= "<p>{$this->__body}</p>\n";
			}
		}
		$strOutput .= "</div>\n";
		
		return $strOutput;
	}
	
	public function toJS() {
		return NULL;
	}
	
	public function isValid() {
		return TRUE;
	}
	
	public function isDynamic() {
		return FALSE;
	}
	
	public function getValue() {
		return NULL;
	}
	
	public function hasFields() {
		return FALSE;
	}
	
	public function getFields() {
		return array();
	}
	
}

?>
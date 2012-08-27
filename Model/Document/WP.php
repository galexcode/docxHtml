<?php
namespace DocxHtml\Model\Document;

use DocxHtml\Model\Document\Base;
require_once realpath(dirname(__FILE__) .'/Model.php' ) ;

class WP extends Model  {
	
	public function draw(){
		$html = '<p>';
		$html .= $this->drawChildren();
		$html .= '</p>';
		
	 	return $html;
	}

}
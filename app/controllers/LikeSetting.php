<?php
	
	class LikeSetting extends BaseController {
	
	public function getSettingDivHTML()
	{
		$strHtml = "";
		
		$strHtml .= "<form class='form-horizontal'>";
		$strHtml .= "	<div class='control-group'>";
		$strHtml .= "		<label class='control-label' for='inputURL'>Fan Page URL</label>";
		$strHtml .= "		<div class='controls'>";
		$strHtml .= "   		<input type='text' id='inputURL' placeholder='URL...'>";
		$strHtml .= "		</div>";
		$strHtml .= "	</div>";
		$strHtml .= "</form>";
		$strHtml .= "<button class='btn btn-large btn-primary' type='button'>Large button</button>";
		return $strHtml;
	}
	
	
	
	
	
	
	
	public function showWelcome($id)
	{
		$mids = DB::table('template')
								->join('module', 'template.m_id', '=', 'module.m_id')
								->select('module.m_id', 'module.path')
								->where('template.t_id', $id)
								->where('module.type_id', 1)
								->get();
		
		//return $mids;
		return View::make('hello', array('mids' => $mids,
										'tid' => $id));
	}
	
	public function testA(){
		$str = "<h3>ABCABC</h3>";
		return $str;
	}
	
	public function testB(){
		$str = "<h4>CDECDE</h4>";
		return $str;
	}
	
	public function testJS(){
		$str = "jQuery(document).ready(function() {  ";
		$str .= "$.post('../TestA', function(data){";
		$str .= "document.getElementById('testA').innerHTML=data;";
		$str .= "});});";
		return $str;
	}
	
	public function getLike($type){
		if($type == 0){
			$str = "jQuery(document).ready(function() {  ";
			$str .= "$.post('../TestA', function(data){";
			$str .= "document.getElementById('testA').innerHTML=data;";
			$str .= "});});";
			return $str;
		}else{
			$str = "Like 22222";
		}
	}
	
	public function getWebDIV($id){
		$div = DB::table('template')->where('t_id', $id)->count();
		$str = '';
		for($i = 0;$i < $div; $i++){
			$str .= '<div id="div_'.$i.'"></div>';
		}
		return $str;
	}

}
	
?>
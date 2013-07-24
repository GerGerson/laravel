<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

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
			$str = "var page;var url;var uID;var uName;";
			$str .= "window.fbAsyncInit = function() {";
			$str .= "FB.init({ ";
			$str .= "appId      : '625779757441110',";
			$str .= "channelUrl : '//www.carkeyli.com/jasonpro',";
			$str .= "status     : true, ";
			$str .= "cookie     : true,";
			$str .= "xfbml      : true});";
			
			$str .= "function login(val) {";
			$str .= "FB.login(function(response) {";
			$str .= "if (response.authResponse) {";
			$str .= "uID = response.authResponse.userID;";
			$str .= "var url = '/me/likes/'+ val + '?access_token=' + response.authResponse.accessToken;";
			$str .= "FB.api(url,function(response){";
			$str .= "if (response.data.length == 0){ ";
			$str .= "FB.XFBML.parse();";
			$str .= "}else{";
			$str .= "FB.api('/me', function(response) {";
			$str .= "uName = response.name;";
			$str .= "});}});} else {}}, {scope: 'user_likes'});} ";
			
			
			return $str;
		}else{
			$str = '<div id="fb-root"></div>';
			$str .= '<div class="fb-like" data-href="https://www.facebook.com/megawillwine" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>';
			return $str;
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
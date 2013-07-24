<?php

	class General extends BaseController {
	
		private function getModuleInfo($t_id, $type)
		{
			$strSQL = "SELECT t.t_id, m.m_id, m.type_id, m.path FROM module m LEFT JOIN template t ";
			$strSQL .= "on m.m_id = t.m_id WHERE m.type_id = ? AND t.t_id = ?";
			$mInfo = DB::select($strSQL, array($type, $t_id));
			
			return $mInfo; 
		}
		
		private function getModuleCode(){
			
		}
		
		public function getSettingToDiv($t_id, $type)
		{
			$strHtml = "";
			
			//No. of Module
			$mInfo = $this->getModuleInfo($t_id, $type);

			if (count($mInfo) == 0) return "";
			
			//Get the module code
			for ($i = 0; $i < count($mInfo); $i++){
				$strHtml .= $mInfo[$i]->path . "\n";
			}
			return $strHtml;
		}
	
	}

?>
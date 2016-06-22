<?php
class TantraClass
{
	var $h_db;
	var $result;
	var $update;
	var $db_host;
	var $db_user;
	var $db_pass;
	var $db_tantra;
	var $db_login;
	var $db_bill;
	
	function TantraClass()
	{
include 'tp-includes/config.php';
		$this->db_host = $db_host;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_tantra = $db_tantra;
		$this->db_login = $db_login;
		$this->db_bill = $db_bill;
	}
	
	function init_db($db)
	{
		$this->h_db = mssql_pconnect($this->db_host,$this->db_user,$this->db_pass) or die('Can\' connect to mssql server..');
		switch ($db)
		{
			case 'tantra':
				@mssql_select_db($this->db_tantra,$this->h_db) or die('Can\'t choose database tantra..');
			break;
			case 'login':
				@mssql_select_db($this->db_login,$this->h_db) or die('Can\'t choose database userlogin..');
			break;
			case 'bill':
				@mssql_select_db($this->db_bill,$this->h_db) or die('Can\'t choose database bill..');
			break;
		}
	}
	
	function Exec($sql)
	{
		$this->result = mssql_query($sql,$this->h_db);
	}
	
	function Update($sql)
	{
		$this->update = mssql_query($sql,$this->h_db);
	}
	
	function is_result()
	{
		return mssql_num_rows($this->result);
	}
	
	function gArray()
	{
		return mssql_fetch_array($this->result);
	}
	
	function close()
	{
		@mssql_close($this->h_db) or die('Can\'t close connection..');
	}
	
}
?>
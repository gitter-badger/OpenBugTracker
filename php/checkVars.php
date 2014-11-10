<?php

class checkVars {

	//Check if the mandatory variables are set
	public function mandatoryVars()
	{
		//Load the variables
		include_once 'configuration.php';

		//Used to detect if an error was found
		$erroFound = false;

		if(!isset($config_name) || $config_name == null)//Plataform name
			$erroFound = true;
		else if (!isset($config_charset) || $config_charset == null)//Page charset
			$erroFound = true;
		else if (!isset($config_description) || $config_description == null)//Page description
			$erroFound = true;
		else if (!isset($config_defaultTheme) || $config_defaultTheme == null)//Default theme
			$erroFound = true;
		else if (!isset($config_baseUrl) || $config_baseUrl == null)//Plataform base URL
			$erroFound = true;
		else if (!isset($config_showFooterHome) || $config_showFooterHome == true && $config_footerHome == null)//Show home in footer
			$erroFound = true;
		else if (!isset($config_showFooterStatus) || $config_showFooterStatus == true && $config_footerStatus == null)//Show Status in footer
			$erroFound = true;
		else if (!isset($config_dev) || $config_dev == null)//Nightly
			$erroFound = true;

		return $erroFound;
	}

}

?>
<?php
class kIO
{
	public static function inc($file)
	{
		if(is_file(realpath($file)))
		{
			include $file;
			return true;
		}
		return false;
	}

	public static function loadJson($file,$returnString = false)
	{
		if(is_file(realpath($file)))
		{
			$contents = file_get_contents($file);
			return $returnString ? $contents : json_decode($contents);
		}

		return false;
	}

	public static function isValidPath($path)
	{
		$pathParts = explode(' ','/ ./ ../ ~/ C: C:\\ \\\\');

		foreach($pathParts as $p)
		{
			if(0 === strpos($path,$p))
			{
				return true;
			}
		}
		return false;
	}
}
?>
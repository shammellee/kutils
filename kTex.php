<?php
class kTex
{
	public static function sanitizeString($ops,&$str)
	{
		if(is_string($ops) && !empty($ops))
		{
			foreach(explode(" ",strtolower($ops)) as $op)
			{
				switch($op)
				{
					case 'trim':
						$str = trim($str);
						break;
					case 'escape':
						# code...
					default:
						break;
				}
			}
		}
		return $str;
	}
}
?>
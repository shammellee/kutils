<?php
class kTerm
{
	# TERMINAL COLORS
	const BLACK              = "\033[30m";
	const RED                = "\033[31m";
	const GREEN              = "\033[32m";
	const BROWN              = "\033[33m";
	const BLUE               = "\033[34m";
	const PURPLE             = "\033[35m";
	const CYAN               = "\033[36m";
	const LIGHT_GREY         = "\033[37m";
	const DARK_GREY          = "\033[1;30m";
	const LIGHT_RED          = "\033[1;31m";
	const LIGHT_GREEN        = "\033[1;32m";
	const YELLOW             = "\033[1;33m";
	const LIGHT_BLUE         = "\033[1;34m";
	const LIGHT_PURPLE       = "\033[1;35m";
	const LIGHT_CYAN         = "\033[1;36m";
	const WHITE              = "\033[1;37m";
	const BLACK_BACKGROUND   = "\033[40";
	const RED_BACKGROUND     = "\033[41";
	const GREEN_BACKGROUND   = "\033[42";
	const YELLOW_BACKGROUND  = "\033[43";
	const BLUE_BACKGROUND    = "\033[44";
	const MAGENTA_BACKGROUND = "\033[45";
	const CYAN_BACKGROUND    = "\033[46";
	const WHITE_BACKGROUND   = "\033[47";
	const COLOR_OFF          = "\033[0m";

	public static function failureMsg($str)
	{
		return colorString($str,'red');
	}

	public static function errorMsg($str)
	{
		return self::failueMsg($str);
	}

	public static function successMsg(&$str)
	{
		return colorString($str,'green');
	}

	public static function colorString($str,$color)
	{
		$color = strtoupper($color);
		$color = defined("self::{$color}") ? constant("self::{$color}") : self::COLOR_OFF;
		return sprintf("%s{$str}%s",$color,self::COLOR_OFF);
	}

}
?>
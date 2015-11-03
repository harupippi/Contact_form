<?php 
function e($str, $charset = 'UTF-8'){
	return htmlspecialchars($str, ENT_QUOTES, $charset);
}
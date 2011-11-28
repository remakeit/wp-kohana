<?php

function kwp_get_params()
{
	$path = parse_url(get_option('home'), PHP_URL_PATH);
	$uri = $_SERVER['REQUEST_URI'];
	$params = trim(str_replace($path, '', $uri), '/');
	return explode('/', $params);
}
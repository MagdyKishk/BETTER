<?php

	class page_route
	{
		/* Routing list */
		protected $routes = [
			'GET' => [
				'/'       => 'login.php',
				'/home'   => 'home.php',
				'/login'  => 'login.php',
				'/signup' => 'signup.php',
			],
			'POST' => [
				'/login'  => 'login.php',
				'/signup' => 'signup.php',
			],
		];

		/**
		 * route_to_page - redirect the user to the corresponding page to
		 * the URL path and method
		 * Return: void;
		 */
		public function route_to_page() : void {
			/* Gets the path from the current url */
			$current_url = parse_url($_SERVER["REQUEST_URI"])['path'];
			/* Gets the request method */
			$method = $_SERVER["REQUEST_METHOD"];

			if (isset($this->routes[$method][$current_url])) {
				require_once 'pages/' . $this->routes[$method][$current_url];
			} else {
				require_once 'pages/error_pages/404.php';
				http_response_code(404);
			}
		}
	};
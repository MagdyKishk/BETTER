	<?php

		
		class database
		{

			private $database_settings;

			public function __construct()
			{
				$this->database_settings = parse_ini_file('config.ini', true)["database"];
			}

			public function browse_user_data(string $username) : array|null
			{
				$connection = new mysqli($this->database_settings['hostname'],
										$this->database_settings['username'],
										$this->database_settings['password'],
										$this->database_settings['database'],
										$this->database_settings['port']);

				if ($connection->connect_error) {
					die("Connection failed: " . $connection->connect_error);
				}

				$query = "SELECT f_name, l_name, email FROM users WHERE username = ?";
				$stmt = $connection->prepare($query);
				$stmt->bind_param("s", $username);
				$stmt->execute();

				$result = $stmt->get_result();

				if ($result->num_rows > 0) {
					$result =  $result->fetch_all(MYSQLI_ASSOC)[0];
				} else {
					$result = NULL;
				}

				return $result;
			}

		}
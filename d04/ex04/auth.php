<?PHP
	function auth($login, $passwd)
	{
		$serialized_file = "../private/passwd";
		$serialized_contents = @file_get_contents($serialized_file);
		if (!$serialized_contents)
			return FALSE;
		$authentication = unserialize($serialized_contents);
		$hashed_password = hash("whirlpool", $passwd);
		foreach ($authentication as $element)
		{
			if ($element['login'] === $login && $element['passwd'] === $hashed_password)
				return TRUE;
		}
		return FALSE;
	}
?>
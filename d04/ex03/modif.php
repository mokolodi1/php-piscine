<?PHP
	function error()
	{
		echo "ERROR\n";
		exit;
	}

	if ($_POST['submit'] !== "OK")
		error();
	if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"])
		error();

	$serialized_file = "../private/passwd";
	$serialized_contents = @file_get_contents($serialized_file);
	if (!$serialized_contents)
		error();
	$authentication = unserialize($serialized_contents);
	foreach ($authentication as $key => $element)
	{
		if ($element["login"] === $_POST["login"])
		{
			$found_key = $key;
			break;
		}
	}
	if (!isset($found_key) || $authentication[$found_key]['passwd'] !== hash("whirlpool", $_POST['oldpw']))
		error();

	$authentication[$found_key]["passwd"] = hash("whirlpool", $_POST["newpw"]);
	file_put_contents($serialized_file, serialize($authentication));
	echo "OK\n";
?>
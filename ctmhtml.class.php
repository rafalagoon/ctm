<?php
namespace ctm;

class CTMHTML
{
	function openHTML ($title="", $id="", $css="ctm.css")
	{

		echo <<<EOD
<!DOCTYPE html>
<html>
	<head>
		<title>{$title}</title>
		<link rel="stylesheet" href="{$css}" />
	</head>
	<body id="{$id}">
EOD;

	}


	function getNavigation ()
	{
		
		return <<<EOD
			<nav>
				<ul>
					<li id="nav-tasks"><a href="/tasks">Tasks</a></li>
					<li id="nav-projects"><a href="/projects">Projects</a></li>
					<li id="nav-login"><a href="/signin">Sign in</a></li>
				</ul>

			</nav>
EOD;

	}

	function printHeader($title = "")
	{
	
		echo <<<EOD
		<header>
			<h1>{$title}</h1>

			{$this->getNavigation()}
		</header>
EOD;

	}

	function printMain ($content = "")
	{
		echo <<<EOD
		
		<main>{$content}</main>
EOD;
	}

	function closeHTML ($content = "")
	{
		echo <<<EOD
		<footer>
			<section>
				<h2>Navigation</h2>
				{$this->getNavigation()}
			</section>

			<section>
				<h2>Networks</h2>
				<ul>
					<li><a href="https://github.com/rafalagoon/ctm">Github</a></li>
					<li><a href="https://twitch.tv/rafalagoon">Twitch</a></li>
					<li><a href="https://youtube.com/@rafalagoon">Youtube</a></li>
					<li><a href="https://tiktok.com/@rafalagoon">Tiktok</a></li>
				</ul>
			</section>
		</footer>
	</body>
</html>
EOD;
	}
}
?>

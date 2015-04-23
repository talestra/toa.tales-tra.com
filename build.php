<?php

ini_set ('default_charset', 'iso-8859-1');

class Spider {
	private $queue = [];
	private $handled = [];

	public function queue($path) {
		if (!isset($this->handled[$path])) {
			$this->queue[] = $path;
		}
	}

	public function handleAll() {
		while (count($this->queue) > 0) {
			$this->handle(array_shift($this->queue));
		}
	}

	public function handle($path) {
		if (isset($this->handled[$path])) return;
		$htmlname = $this->renameUrl($path);
		//echo $this->renameUrl($path) . "\n";
		//echo "$path\n";
		$this->handled[$path] = true;
		$_GET = [];
		parse_str(ltrim($path, '?'), $_GET);
		ob_start();
		include __DIR__ . '/index2.php';
		$content = ob_get_clean();
		$content = $this->replaceUrls($content);
		$content = str_replace('charset=iso-8859-1', 'charset=utf-8', $content);
		$content = mb_convert_encoding($content, 'utf-8', 'iso-8859-1');
		file_put_contents($htmlname, $content);
	}

	private $urlRegex = '@\\?s=(\\w+)(&p=(\\w+))?@';

	private function renameUrl($url) {
		preg_match($this->urlRegex, $url, $parts);
		//print_r($parts);
		$out = '';
		$out .= $parts[1];
		if (isset($parts[3])) $out .= '_' . $parts[3];
		$out .= '.html';
		return $out;
	}
	private function renameUrl2($parts) {
		$url = $parts[0];
		if ($url == '?s=personajes') $url = '?s=personajes&p=luke';
		//if ($url == '?s=main') $url = '?s=main';
		$this->queue($url);
		return $this->renameUrl($url);
	}

	private function replaceUrls($content) {
		return preg_replace_callback($this->urlRegex, array($this, 'renameUrl2'), $content);
	}
}

$spider = new Spider();
$spider->queue('?s=main');
$spider->handleAll();
copy('main.html', 'index.html');

<?php

	if (!defined('__IN_SYMPHONY__')) die('<h2>Symphony Error</h2><p>You cannot directly access this file</p>');


	class serviceViddler extends ServiceDriver {

		public function __construct() {
			parent::__construct('Viddler', 'viddler.com');
		}

		public function about() {
			return array(
				'name'			=> $this->getName(),
				'version'		=> '1.1',
				'release-date'	=> '2011-11-17',
				'author'		=> array(
					'name'			=> 'Andrew Minton',
					'website'		=> 'http://andrewminton.co.uk/',
					'email'			=> 'moonoo dot am (at) gmail.com'
				)
	 		);
		}

		public function getOEmbedApiUrl($params) {
			$url = trim($params['url']);
			$query_params = $params['query_params'];

			return 'http://lab.viddler.com/services/oembed/?type=simple&format=xml&url=' . $url . $query_params;
		}

	}
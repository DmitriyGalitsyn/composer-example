<?php

namespace dmitriygalitsyn\parser;

/**
 *@author Dmitry Galitsyn <Simba16list@mail.ru>
 */

class Parser Implements ParserInterface
{
  /**
  *@param string $url
  *@param string $tag
  *@return array
  */
    
    public function process(string $tag, string $url): array{
		$htmlPage = file_get_contents($url);
			
		if($htmlPage === false){
			return ['Invalid URL'];
	}
        
	
	preg_match_all('/<' . $tag . '.*?>(.*?)\/' . $tag . '>/s', $htmlPage, $strings);
	
	if (empty($strings[1])){
		return ['There are no sucs tags on the page'];
	}
		return $strings[1];
    }

}
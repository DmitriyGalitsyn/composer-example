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
    
    public function process(string $url, string $tag): array{
		$htmlPage = file_get_contents($url);
			
		if($htmlPage === false){
			return ['Invalid URL'];
	}
        
        //Regular expression
	
	preg_match_all('/<' . $tag . '.*?>(.*?)\/' . $tag . '>/&', $htmlPage, $strings);
	
	if (empty($strings[1])){
		return ['There are no sucs tags on the page'];
	}
		return $strings[1];
    }
    
    public function test(){
        //feature
    }
}
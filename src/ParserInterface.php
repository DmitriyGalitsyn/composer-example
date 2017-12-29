<?php

namespace dmitriygalitsyn\parser; 

/**
 *@author Dmitry Galitsyn <Simba16list@mail.ru>
 */

interface ParserInterface
{
  /**
  *@param string $url
  *@param string $tag
  *@return array
  */
    
    public function process(string $url, string $tag): array;
}
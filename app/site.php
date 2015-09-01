<?php

$kirby = kirby();

// $kirby->urls->index = 'http://www.trabuc.co/projects/s2t/pos';

switch(url::host()) {
  case 'http://www.trabuc.co/new':

     $kirby->urls->index = 'http://www.trabuc.co/new';

     break;
  case 'http://trabuc.co/new':

     $kirby->urls->index = 'http://trabuc.co/new';

     break;
}

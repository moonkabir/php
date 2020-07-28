<?php
$str = <<<STRING
quick   Brown 
fox jumps   over the 
Lazy dog a
STRING;
// $matches = preg_match_all('/\b[Brown|Lazy]+\b/',$str,$matches);
$matches = preg_match_all('/\b[\w]\b/',$str,$matches);
print_r($matches);
// \d->digit,\w->word,\W->not word,\S->not whitespace,\s->whitespace,+->group select
// ?->select one charecter,(a-zA-Z0-9) or w->character set,^->not
// {3}->math only 3 character
// /\b(88)?0[\d]{10}\b/->bd phone number check 40.7
// /\b(88)?01[3-9]?[\d]{8}\b/->bd phone number check 40.8
// /[\w-+]+@[\w-]+\.[\w]+/->mail check 40.11
// other site theke data fetch kore niye asaa 40.13
<?php
/** 
 * This time, you'll need to figure out exactly how often each number from the left array appears in the right array.
 * Calculate a total similarity score by adding up each number in the left array after multiplying it by the number of times
 *  that number appears in the right array.
 * 
 * Read & parse data:
 *  left array remains the same.
 *  right array is turned into a frequency map.
 */
  $dataInput = __DIR__ . '/../../inputs/data.txt';
  $fh = fopen($dataInput,'r');
  $leftArr = $rightArr = [];

  while($line = fgets($fh)) {
    $line = trim($line);
    list($leftArr[],$rightKey) = preg_split("/\h+/",$line);
    $rightVal = 0;
    if(array_key_exists($rightKey,$rightArr)) {
      $rightVal=$rightArr[$rightKey];
    }
    $rightArr[$rightKey] = ++$rightVal;
  }

  sort($leftArr);

  $sum = 0;
  for ($i=0; $i < count($leftArr); $i++) { 
    $lval = $leftArr[$i];
    $rval = $rightArr[$leftArr[$i]];

    $sum += ($leftArr[$i] * $rightArr[$leftArr[$i]]);
  }

  print_r("Sum: ${sum}\n");
?>
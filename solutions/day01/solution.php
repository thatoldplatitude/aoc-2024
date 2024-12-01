<?php
/** 
 * Pair up the numbers and measure how far apart they are.
 * Pair up the smallest number in the left list with the smallest number in the right list,
 * then the second-smallest left number with the second-smallest right number, and so on.
 * 
 * Data set contains 2columns of numbers (unordered).
 * Read & parse data to 2 lists.
 * Order lists.
 * Sum the differences of each idx.
 */
  $dataInput = __DIR__ . '/../../inputs/data.txt';
  $fh = fopen($dataInput,'r');
  $leftArr = $rightArr = [];

  while($line = fgets($fh)) {
    list($leftArr[],$rightArr[]) = explode("   ",$line);
  }

  sort($leftArr);
  sort($rightArr);

  $sum = 0;
  for ($i=0; $i < count($leftArr); $i++) { 
    $sum += abs($leftArr[$i] - $rightArr[$i]);
  }

  print_r("Sum: ${sum}");
?>
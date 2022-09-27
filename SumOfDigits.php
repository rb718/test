<?php
// Simple PHP program to find the lowest 10 positive integers where the sum of the digits of each integer equals 10 and contains the number 7 as one of the digits.

function findNth($n)
{
	$count = 0;
	$res_ = array();

	for ($curr = 1; ; $curr++)
	{
		// Find sum of digits in
		// current no.
		$sum = 0;
		for ($x = $curr;
			$x > 0; $x = $x / 10)
			$sum = $sum + $x % 10;

		// If sum is 10 & contains 7, we increment
		// count
		if ($sum == 10) {
		    $str = (string)$curr;
            $pattern = "/7/i";
		    $y = preg_match($pattern, $str);
		    
		    if ($y=="1") {
		        array_push($res_,$curr);
			    $count++;
		    }
		}
		// If count becomes n, we return
		// current number.
		if ($count == $n) {
		    return $res_;
		}
	}
	return -1;
}

// Driver Code
print_r(findNth(10));

// This code is contributed by rb718.
?>
<?php 
/*下楼梯的算法*/
function walk (int $num) {

	if ($num < 1) return "fack";
	$even = 0;
	$end = floor($num / 2);
	$total = 0;
	for ($even = 0 ;$even <= $end; $even++) {
		$odd = $num - $even * 2;
		$can_select = $odd + $even;
		$total += calcul($odd,$can_select);
	}

	return $total;
}

/**
 * 组合计算
 * @param  [type] $m [description]
 * @param  [type] $n [description]
 * @return [type]    [description]
 */
function calcul ($m , $n) {
	if ($n < $m) return false;
	$n_factorial = factorial($n);
	$m_factorial = factorial($m);
	$n_m_factorial = factorial($n - $m);
	return $n_factorial /($m_factorial * $n_m_factorial);
}

/**
 * 阶乘算法
 * @param  int    $num [description]
 * @return [type]      [description]
 */
function factorial (int $num) {
	if ($num == 0) return 1;
	$m_total = 1;
	for ($i = 1; $i <= $num; $i++)	$m_total *= $i;
	return $m_total;
}

echo walk(4);
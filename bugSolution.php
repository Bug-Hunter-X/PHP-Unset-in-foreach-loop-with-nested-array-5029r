function foo_nested_solution(array $arr) {
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if (is_array($arr[$i])) {
            $arr[$i] = foo_nested_solution($arr[$i]);
        } elseif ($arr[$i] === 'a') {
            unset($arr[$i]);
        }
    }
    return $arr;
}

$arr_nested = ['a', 'b', ['a', 'c'], 'a', 'd'];
$result_nested = foo_nested_solution($arr_nested);
print_r($result_nested); //Output: Array ( [1] => b [2] => Array ( [1] => c ) [4] => d ) 
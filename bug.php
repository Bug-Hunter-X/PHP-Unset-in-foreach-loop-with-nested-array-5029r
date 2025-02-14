function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )

//The above code will work perfectly fine, however if we use a nested array, it will cause some issue
function foo_nested(array $arr) {
  foreach ($arr as $key => $value) {
    if (is_array($value)){
        foo_nested($value);
    }elseif ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr_nested = ['a', 'b', ['a', 'c'], 'a', 'd'];
$result_nested = foo_nested($arr_nested);
print_r($result_nested); //Output: Array ( [1] => b [3] => d )
//The element at index 2 is missing. Because when we unset element ,the index is changed and the foreach loop won't traverse all the elements. 
# PHP Unset in foreach loop with nested array
This repository demonstrates an uncommon bug in PHP related to using `unset()` within a `foreach` loop when dealing with nested arrays.  The issue arises because modifying the array's structure during iteration using `unset()` can lead to unexpected skipping of elements, particularly within nested structures.

The `bug.php` file shows the problem, while `bugSolution.php` provides a corrected approach using a different iteration technique to safely remove elements.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.  The nested array element is not handled as expected because of the index shift caused by `unset()`.

## Solution
The solution avoids the problem by iterating in reverse, which prevents index shifts from affecting subsequent iterations.

# PHP empty() function unexpected behavior with arrays

This repository demonstrates a subtle bug in PHP related to the `empty()` function and its interaction with arrays containing a zero-valued element.  The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version.

The issue arises because `empty()` considers an array with only a numeric key having a zero value as empty. This is often unexpected and can lead to logic errors in applications.

**Bug:** The original code incorrectly interprets an array with only a key with value 0 as empty. 

**Solution:** The solution demonstrates using `count()` or checking for the existence of keys using `isset()` to reliably determine if the array is empty or not.
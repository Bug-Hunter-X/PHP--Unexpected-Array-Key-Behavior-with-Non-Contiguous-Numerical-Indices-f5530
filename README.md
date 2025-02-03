# PHP Array Key Handling: Non-Contiguous Numerical Indices

This repository demonstrates a common yet subtle error in PHP related to array key handling. Specifically, it highlights the potential issues arising from non-contiguous numerical keys in arrays.

The `bug.php` file showcases the problem, where an array is populated with non-sequential numerical keys, leading to unexpected behavior during iteration and when using functions like `array_keys()` and `array_values()`. 

The `bugSolution.php` file provides a solution, suggesting approaches to either maintain key order explicitly or use alternative data structures (such as objects) if numerical indexing is not a strict requirement.
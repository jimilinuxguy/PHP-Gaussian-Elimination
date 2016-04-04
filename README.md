# PHP-Gaussian-Elimination

Gaussian elimination is a method for solving matrix equations/solving systems of linear equations of the form Ax=b.

Solves a system of equations by composing an augmented matrix equation: See [Gaussian Elimination - Wikipedia](https://en.wikipedia.org/wiki/Gaussian_elimination) and [Gaussian Elimination - Wolfram Alpha](http://mathworld.wolfram.com/GaussianElimination.html) for more information on implementing.

# Usage

Edit math.php, and modify the sample matrix values below:

$A = array(array(2, 4), array(1, 1));

$x = array(8, 2);

$gaus = new Gaussian();

$answer = $gaus->solve($A, $x); // returns [0, 2]



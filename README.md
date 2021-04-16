# bhut
Using SOLID principles, prints all the numbers from 1 to 100.
However, for multiples of 3, instead of the number, print "BHUT".
For multiples of 5 print "IT".
For numbers which are multiples of both 3 and 5, print "BHUT TI".

> by Vlamir Carbonari

### Install & Run
```
composer install
php src/Main.php
```
> Tested with PHP 7.4

### Unit Tests
```
phpunit tests/NumbersTest
```

### Possible Improvements
- New class `Divider` to specialize `Dividers`
- New class `Number` to specialize `Numbers`

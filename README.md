# maschifemmine

The code is in Italian! Sorry to anybody English looking at this ^^  
 - These are the inputs that they user is allowed to fill
![](./imgs/input.png)
### The Code  
 - In this code after you input Italy's total male and female population numbers then you have to put the male and female population specific to each of the regions on the left (Piemonte, Valle d-Aosta, Liguria, Lombardia, Alessandria)
 -  Calculates the region's totals individually and outputs it to their right in 'Totali'
 -  Sums the region's totals together and output it in 'Tot. Nord-ovest'
 -  Calculates the region's % compared to the Italian population overall
 -  Compares the Alessandria's total population as a % compared to the Nord-ovest population.

### Finished Code should look like this  
Forgive the no spacing between the large numbers like the previous picture, that was the preview made in excel 😅
To add a cap when outputting a float type variable you do so with the number format property of PHP:
```php
$number = 12.3456789;
$limitedNumber = number_format($number, 2); // Limit to 2 decimal places

echo $limitedNumber; // Output: 12.35
```
![](./imgs/total.png)  

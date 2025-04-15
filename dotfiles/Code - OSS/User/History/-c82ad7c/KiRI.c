#include <stdio.h>

int main(){

    //arithmetic operators

    //  + (addition)
    //  - (substraction)
    //  * (multiplication)
    //  / (division)
    //  % (modulus)
    //  ++ (increment)
    //  -- (decrement)

    int x = 5;
    int y = 2;

    int a = x + y;
    int b = x - y;
    int c = x * y;
    int d = x / y;
    float e = x / y;//event if we using float here the ouput will not be a float because the deviser is an int
    float f = x / (float) y;//here we will have a float in output using float or double
    int g = x % y;//will have a remender of 1
    
    int increment = 10;
    int decrement = 10;
    increment++;
    decrement--;



    printf("%d\n", a);
    printf("%d\n", b);
    printf("%d\n", c);
    printf("%d\n", d);
    printf("%f\n", e);
    printf("%.2f\n", f);
    printf("%d\n", g);
    printf("%d\n", increment);
    printf("%d\n", decrement);

    return 0;
}
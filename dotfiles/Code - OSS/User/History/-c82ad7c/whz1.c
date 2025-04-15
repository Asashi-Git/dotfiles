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
    float f = x / (float)y;//here we will have a float in output using float or double



    printf("%d\n", a);
    //here the 8 is for allocating 8 space for the ouput

    return 0;
}
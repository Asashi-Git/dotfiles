#include <stdio.h>
#include <math.h>//we need to include math to have some math function

int main(){

    double A = sqrt(9);
    double B = pow(2, 4);
    int C = round(3.14);
    int D = ceil(3.14);//to round UP
    int E = floor(3.99);//to round DOWN
    double F = fabs(-100);//the absolute value, to tranform an negative to a positive

    printf("\n%lf\n", A);
    printf("\n%lf\n", B);
    printf("\n%d\n", C);
    printf("\n%d\n", D);
    printf("\n%d\n", E);

    return 0;
}
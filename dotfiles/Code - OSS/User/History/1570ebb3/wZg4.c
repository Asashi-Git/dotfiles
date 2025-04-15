#include <stdio.h>
#include <math.h>//we need to include math to have some math function

int main(){

    double A = sqrt(9);
    double B = pow(2, 4);
    int C = round(3.14);
    int D = ciel(3.14);

    printf("\n%lf\n", A);
    printf("\n%lf\n", B);
    printf("\n%d\n", C);
    printf("\n%d\n", D);

    return 0;
}
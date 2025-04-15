#include <stdio.h>

    //In this exercide we will calculate the circonference and the are of a circle

int main(){

    const double PI = 3.14159;
    double radius;
    double circonference;
    double area;

    printf("Enter the radius of the circle : ");
    scanf("%lf", &radius);

    circonference = 2 * PI * radius;
    area = PI * radius * radius;

    printf("\n")

    return 0;
}
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){

    //pseudo random number = a set of value or elements that are statistically random

    srand(time(0));

    int number1 = (rand() % 6) + 1;
    int number2 = (rand() % 6) + 1;
    int number3 = (rand() % 6) + 1;

    printf("%d\n", number1);
    printf("%d\n", number2);
    printf("%d\n", number3);

    return 0;
}
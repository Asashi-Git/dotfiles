#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){

    //pseudo random number = a set of value or elements that are statistically random

    srand(time(0));

    int number1 = (rand() % 6) + 1;

    

    return 0;
}
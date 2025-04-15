#include <stdio.h>
#include <stdbool.h>

int main(){

    //Format specifier % = define and format a type of a data to be displayed

    //  %c = charactere
    //  %s = spring (array of charactere)
    //  %f = float
    //  %lf = double
    //  %d = integer

    //  %.1 = decimal precision
    //  $1 = minimum field width
    //  %- = left align

    float item1 = 5,75;
    float item2 = 10.00;
    float item3 = 100.99;

    printf("Item 1 : $%f", item1);

    return 0;
}
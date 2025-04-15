#include <stdio.h>

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

    float item1 = 5.75;
    float item2 = 10.00;
    float item3 = 100.99;

    printf("The price of the item 1 is : $%-8.2f \n", item1);//here the .2 is for the number of digit for a float
    printf("The price of the item 2 is : $%8.2f \n", item2);//here the 8 is for allocating 8 space for the ouput
    printf("The price of the item 3 is : $%.2f \n", item3);

    return 0;
}
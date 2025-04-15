#include <stdio.h>

int main(){

    //BITWISE OPERATOR =    special operator used in a bit level programming
    //                      (knowing binary is important for this topic)

    //  & = AND
    //  | = OR
    //  ^ = XOR
    //  << LEFT SHIFT
    //  >> RIGHT SHIFT

    //      !!! AND !!!
    int x = 6;  //  6   = 0000 0110
    int y = 12; //  12  = 0000 1100
    int z = 0;  //  0   = 0000 0000

    z = x & y;
    //so here what's going on ?
    //the binary will compare temself and if there is two 1, z will append it, if there was 1 and 0, z will not append it (it will stay 0)
    //  0000 0110
    //  0000 1100
    //  0000 0100 //here the result is 0000 0100 witch is 4
    printf("AND = %d\n", z);


    //      !!! OR !!!
    z = x | y;//with OR only one of the bit nust be 1 to be append by z
    //  0000 0110
    //  0000 1100
    //  0000 1110 //here the result is 0000 1110 witch is 14
    printf("OR = %d\n", z);


    //      !!! XOR !!!
    z = x ^ y;//With XOR only one of the compared bit can be one
    //  0000 0110
    //  0000 1100
    //  0000 1010 //here the result is 0000 1010 witch is 10
    printf("XOR = %d\n", z);


    //      !!! << !!!
    z = x << 1;//With left shift we are switching all of the bit, once to the left
    //  0000 0110
    //  0000 1100
    //  0000 1100 //here the result is 0000 1100 witch is 12
    printf("LEFT SHIFT = %d\n", z);


    //      !!! >> !!!
    z = x << 1;//With right shift we are switching all of the bit, once to the right
    //  0000 0110
    //  0000 1100
    //  0000 0011 //here the result is 0000 0011 witch is 3
    printf("RIGHT SHIFT = %d\n", z);

    return 0;
}
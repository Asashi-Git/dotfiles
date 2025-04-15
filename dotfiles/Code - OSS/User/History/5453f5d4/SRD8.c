#include <stdio.h>

int main(){

    //BITWISE OPERATOR =    special operator used in a bit level programming
    //                      (knowing binary is important for this topic)

    //  & = AND
    //  | = OR
    //  ^ = XOR
    //  << LEFT SHIFT
    //  >> RIGHT SHIFT

    int x = 6;  //  6   = 0000 0110
    int y = 12; //  12  = 0000 1100
    int z = 0;  //  0   = 0000 0000

    z = x & y;
    //so here what's going on ?
    //the binary will compare temself and if there is two 1, z will append it, if there was 1 and 0, z will not append it (it will stay 0)
    //  

    return 0;
}
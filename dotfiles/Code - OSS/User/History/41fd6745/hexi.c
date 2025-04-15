#include <stdio.h>

int main(){

    //augmented assignment operator =   used to replacea statement where an operator
    //                                  take variable as one of its arguments
    //                                  and then assign the result back to the same variable
    //                                  x = x + 1
    //                                  x += 1  //this is an 

    int x = 10;

    x = x + 2;
    printf("%d\n", x);//must be 12

    x += 2;
    printf("%d\n", x);//then must be 14

    return 0;
}
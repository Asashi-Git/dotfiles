#include <stdio.h>

int main(){

    //pointer = a "variable-like" refence that hold a memory address to another variable, array, etc.
    //          some task are performed more easily with pointers
    //          * = indirection operator (value at address)

    int age = 25;
    int *pAge = &age;//the pointer of age is equal of the address of age
    

    printf("Address of age : %p\n", &age);
    printf("Value of pAge : %p\n", pAge);
    printf("\n");
    printf("Size of age : %d\n", sizeof(age));
    printf("Size of pAge : %d\n", sizeof(pAge));//pointer will always have 8 bytes of size
    printf("\n");
    printf("Value of age : %d\n", age);
    printf("Value at stored address : %d\n", *pAge);

    return 0;
}
#include <stdio.h>

int main(){

    //pointer = a "variable-like" refence that hold a memory address to another variable, array, etc.
    //          some task are performed more easily with pointers
    //          * = indirection operator (value at address)

    int age = 25;

    printf("Address of age : %p\n", &age);
    printf("Value of age : %d\n", age);

    return 0;
}
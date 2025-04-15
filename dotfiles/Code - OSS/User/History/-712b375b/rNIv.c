#include <stdio.h>

int main(){

    //memory = an array of bytes within RAM (street)
    //memory block = a single unit (byte) within the merory, used to hold some value (person)
    //memory address = the address whe the memory block is located (house address)

    char a = 'X';
    char b = 'Y';
    char c = 'Z';

    printf("%d bytes\n", sizeof(a));
    printf("%d bytes\n", sizeof(b));
    printf("%d bytes\n", sizeof(c));

    printf("Adress = %p\n", &a);
    printf("Adress = %p\n", &b);
    printf("Adress = %p\n", &c);

    return 0;
}
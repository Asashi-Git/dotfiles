#include <stdio.h>
#include <string.h>

int main(){

    char x = 'X';
    char y = 'Y';
    char temp1;

    temp1 = x;
    x = y;
    y = temp1;

    printf("x = %c\n", x);
    printf("y = %c\n", y);

    //this is different for char[]

    char a[] = "Water";
    char b[] = "Lemonade";
    char temp2[15];

    strcpy(temp2, a);
    strcpy()

    printf("a = %s\n", a);
    printf("b = %s\n", b);

    return 0;
}
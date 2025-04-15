#include <stdio.h>
#include <string.h>

int main(){

    char x = 'X';
    char y = 'Y';
    char temp1;

    temp1 = x;
    x = y;
    y = temp1;

    printf("Temp1 :\n");
    printf("x = %c\n", x);
    printf("y = %c\n", y);

    //this is different for char[]

    char a[20] = "Water";
    char b[20] = "Lemonade";
    char temp2[20];

    strcpy(temp2, a);
    strcpy(a, b);
    strcpy(b, temp2);

    printf("Temp2 :\n");
    printf("a = %s\n", a);
    printf("b = %s\n", b);
    printf("temp2 = %s\n", temp2);

    return 0;
}
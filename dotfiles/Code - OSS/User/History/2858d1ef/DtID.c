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

    int x = 10;
    int y = 20;
    int temp1;

    temp1 = x;
    x = y;
    y = temp1;

    printf("Temp1 :\n");
    printf("x = %d\n", x);
    printf("y = %d\n", y);

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

    return 0;
}
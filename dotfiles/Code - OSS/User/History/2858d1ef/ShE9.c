#include <stdio.h>
#include <string.h>

int main(){

    char x = 'X';
    char y = 'Y';
    char temp[15];

    temp = x;
    x = y;
    y = temp;

    printf("x = %c\n", x);
    printf("y = %c\n", y);

    // char x[] = "Water";
    // char y[] = "Lemonade";
    // char temp;

    // printf("x = %s\n", x);
    // printf("y = %s\n", y);

    return 0;
}
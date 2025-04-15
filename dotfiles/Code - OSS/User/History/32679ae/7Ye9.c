#include <stdio.h>

int main(){

    int age;

    printf("How old are you ?");
    scanf("%d", &age);//we need to precede the variable name with an and (&)
    
    printf("You are %d years old", age);

    return 0;
}
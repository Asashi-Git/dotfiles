#include <stdio.h>

int main(){

    int age;
    char first_name[25];//25 bite maximum
    char last_name[25];//25 bite maximum

    printf("How old are you ?\n");
    scanf("%d", &age);//we need to precede the variable name with an and (&)

    printf("You are %d years old\n", age);


    printf("What's your name ?\n");
    scanf("%s", &name);

    printf("Your name is %s !", name);

    return 0;
}
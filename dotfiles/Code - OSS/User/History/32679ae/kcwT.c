#include <stdio.h>

int main(){

    int age;
    char first_name[25];//25 bite maximum
    char last_name[25];//25 bite maximum


char commentary[50];// to work we need to declare the commetary variable before the fgets

    printf("You can make any commentary that take 50 bites maximum :\n");
    fgets(commentary, 50, stdin);//     !!!     to use an fgets, it need to be the first user input     !!!


    printf("How old are you ?\n");
    scanf("%d", &age);//we need to precede the variable name with an and (&)

    printf("You are %d years old\n", age);


    printf("What's your first name ?\n");
    scanf("%s", &first_name);

    printf("Your first name is %s !\n", first_name);


    printf("What's your last name ?\n");
    scanf("%s", &last_name);

    printf("Your last name is %s !\n", last_name);

    printf("\n");
    printf("So your name is %s %s and you have %d years old ! Welcome %s !\n", first_name, last_name, age, first_name);
    printf("and your commentary is :\n");
    printf("%s", commentary);
    printf("\n");

    return 0;
}
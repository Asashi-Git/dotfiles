#include <stdio.h>

int main(){

    int age;
    char first_name[25];//25 bite maximum
    char last_name[25];//25 bite maximum
    char commentary[25];

    printf("How old are you ?\n");
    scanf("%d", &age);//we need to precede the variable name with an and (&)

    printf("You are %d years old\n", age);


    printf("What's your first name ?\n");
    scanf("%s", &first_name);

    printf("Your first name is %s !\n", first_name);


    printf("What's your last name ?\n");
    scanf("%s", &last_name);

    printf("Your last name is %s !\n", last_name);
    printf("So your name is %s %s and you have %d years old ! Welcome %s !", first_name, last_name, age, first_name);


    printf("Do you want to make any commentary ?")

    return 0;
}
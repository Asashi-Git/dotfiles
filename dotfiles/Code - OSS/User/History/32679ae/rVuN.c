#include <stdio.h>

int main(){

    int age;
    char first_name[25];//25 bite maximum
    char last_name[25];//25 bite maximum


    char commentary[50];// to work we need to declare the commetary variable before the fgets

    printf("You can make any commentary that take 50 bites maximum :\n");
    fgets(commentary, sizeof(commentary), stdin);//     !!!     to use an fgets, it need to be the first user input     !!!
    // Safely read commentary (sizeof ensures no overflow)

    printf("\n");
    printf("How old are you ?\n");
    scanf("%d", &age);//we need to precede the variable name with an and (&)

    printf("\n");
    printf("You are %d years old\n", age);

    // Clear the input buffer after scanf to prevent leftover '\n' from affecting the next input
    getchar();

    printf("\n");
    printf("What's your first name ?\n");
    scanf("%[^\n]s", first_name);//     !!! HERE [^\n] LET THE USER ENTRER SPACES IN THE STRING !!!

    printf("\n");
    printf("Your first name is %s !\n", first_name);


    printf("\n");
    printf("What's your last name ?\n");
    scanf("%s", last_name);

    printf("\n");
    printf("Your last name is %s !\n", last_name);

    printf("\n");
    printf("So your name is %s %s and you have %d years old ! Welcome %s !\n", first_name, last_name, age, first_name);
    printf("And your commentary was :\n");
    printf("\n");
    printf("%s", commentary);
    printf("\n");

    return 0;
}
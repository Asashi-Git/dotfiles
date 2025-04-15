#include <stdio.h>

int main() {
    int age;
    char first_name[25]; // 25 bytes maximum
    char last_name[25];  // 25 bytes maximum
    char commentary[50]; // To work, we need to declare the commentary variable before the fgets

    printf("You can make any commentary that takes 50 bytes maximum:\n");
    fgets(commentary, sizeof(commentary), stdin); // Safely read commentary (sizeof ensures no overflow)

    printf("How old are you?\n");
    scanf("%d", &age); // We need to precede the variable name with an '&'

    printf("You are %d years old.\n", age);

    // Clear the input buffer after scanf to prevent leftover '\n' from affecting the next input
    getchar();

    printf("What's your first name?\n");
    scanf("%s", first_name); // Correct usage (no '&' needed)

    printf("Your first name is %s!\n", first_name);

    printf("What's your last name?\n");
    scanf("%s", last_name); // Correct usage (no '&' needed)

    printf("Your last name is %s!\n", last_name);

    printf("\n");
    printf("So your name is %s %s and you are %d years old! Welcome, %s!\n", first_name, last_name, age, first_name);
    printf("Your commentary was:\n");
    printf("%s", commentary);
    printf("\n");

    return 0;
}

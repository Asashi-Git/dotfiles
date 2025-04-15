#include <stdio.h>
#include <ctype.h>

int main() {
    char operator;
    double num1, num2, result;
    char continue;

    while (1) {
        // Ask the user if they want to continue
        printf("Do you want to make any operation? (Y/N): ");
        scanf(" %c", &continue);  // Space before %c to consume newline
        continue = toupper(continue); // Convert input to uppercase for consistency

        if (continue == 'N') {
            printf("Exiting the calculator. Goodbye!\n");
            break; // Exit the loop
        } else if (continue == 'Y') {
            // Ask for the operator
            printf("What's the operator? (+, -, *, /): ");
            scanf(" %c", &operator); // Space before %c to consume leftover newline

            // Perform the calculation based on the operator
            if (operator == '+') {
                printf("What's the first number?: ");
                scanf("%lf", &num1);

                printf("What's the second number?: ");
                scanf("%lf", &num2);

                result = num1 + num2;
                printf("The result of %.2lf + %.2lf is: %.2lf\n\n", num1, num2, result);
            } else if (operator == '-') {
                printf("What's the first number?: ");
                scanf("%lf", &num1);

                printf("What's the second number?: ");
                scanf("%lf", &num2);

                result = num1 - num2;
                printf("The result of %.2lf - %.2lf is: %.2lf\n\n", num1, num2, result);
            } else if (operator == '*') {
                printf("What's the first number?: ");
                scanf("%lf", &num1);

                printf("What's the second number?: ");
                scanf("%lf", &num2);

                result = num1 * num2;
                printf("The result of %.2lf * %.2lf is: %.2lf\n\n", num1, num2, result);
            } else if (operator == '/') {
                printf("What's the first number?: ");
                scanf("%lf", &num1);

                printf("What's the second number?: ");
                scanf("%lf", &num2);

                if (num2 == 0) { // Check for division by zero
                    printf("Error: Division by zero is not allowed.\n\n");
                } else {
                    result = num1 / num2;
                    printf("The result of %.2lf / %.2lf is: %.2lf\n\n", num1, num2, result);
                }
            } else {
                printf("Invalid operator. Please try again.\n\n");
            }
        } else {
            printf("Invalid input. Please enter 'Y' or 'N'.\n\n");
        }
    }

    return 0;
}

#include <stdio.h>
#include <ctype.h>

int main() {
    char operator;
    double num1, num2, result;
    char stop;

    while (1) {
        // Ask the user if they want to continue
        printf("Do you want to make any operation? (Y/N): ");
        scanf(" %c", &stop);  // Note the space before %c to consume newline
        stop = toupper(stop); // Convert the input to uppercase

        if (stop == 'N') {
            printf("Exiting the calculator. Goodbye!\n");
            break; // Exit the loop
        } else if (stop == 'Y') {
            // Ask for the operator
            printf("What's the operator? (+, -, *, /): ");
            scanf(" %c", &operator); // Space before %c to consume newline

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

                // Check for division by zero
                if (num2 == 0) {
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

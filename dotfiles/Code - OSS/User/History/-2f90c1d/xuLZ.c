#include <stdio.h>

int main(){

    char operator;
    double num1;
    double num2;
    double result;
    char stop[];

    while (1){
        if (strcmp(operator, "exit") == 0) {
            printf("Exiting the calculator. Goodbye!\n");
            break;  // Exit the loop
        }

        printf("What's the operator ? (+, -, *, /) : ");
        scanf("%c", operator);

        if(operator == '+'){
            printf("What's the first number ? :");
            scanf("%lf", &num1);

            printf("\nWhat's the second number ? :");
            scanf("%lf", &num2);

            result = num1 + num2;
            printf("\nThe result of %.2lf + %.2lf is : %.2lf\n", num1, num2, result);
        }

        else if(operator == '-'){
            printf("What's the first number ? :");
            scanf("%lf", &num1);

            printf("\nWhat's the second number ? :");
            scanf("%lf", &num2);

            result = num1 - num2;
            printf("\nThe result of %.2lf - %.2lf is : %.2lf\n", num1, num2, result);
        }

        else if(operator == '*'){
            printf("What's the first number ? :");
            scanf("%lf", &num1);

            printf("\nWhat's the second number ? :");
            scanf("%lf", &num2);

            result = num1 * num2;
            printf("\nThe result of %.2lf * %.2lf is : %.2lf\n", num1, num2, result);
        }

        else if(operator == '/'){
            printf("What's the first number ? :");
            scanf("%lf", &num1);

            printf("\nWhat's the second number ? :");
            scanf("%lf", &num2);

            result = num1 / num2;
            printf("\nThe result of %.2lf / %.2lf is : %.2lf\n", num1, num2, result);
        }
    }

    return 0;
}
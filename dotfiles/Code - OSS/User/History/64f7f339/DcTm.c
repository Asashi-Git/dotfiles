#include <stdio.h>
#include <ctype.h>

int main(){

    char unit;
    float temp;

    printf("Is the temperature in (F) or (C) ?");
    scanf("%c", &unit);

    unit = toupper(unit);

    if(unit == 'C'){
        printf("Enter the temp in C : ");
        scanf("%f", &temp);
        temp = (temp * 9 / 5) + 32;
        printf("The temperature in F is : %.1f F", temp);
    }
    else if(unit == 'F'){
        printf("Enter the temp in F : ");
        scanf("%f", &temp);
        temp = ((temp - 32) * 5) / 9;
        printf("The temperature in C is : %.1f C", temp);
    }
    else{
        printf("\n Wrong unit (%c).", unit);
    }

    return 0;
}
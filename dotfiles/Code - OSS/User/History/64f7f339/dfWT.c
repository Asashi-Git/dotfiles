#include <stdio.h>
#include <ctype.h>

int main(){

    char unit;
    float temp;

    printf("Is the temperature in (F) or (C) ?");
    scanf("%c", &unit);

    unit = toupper(unit);

    if(unit == C){

    }
    else if(unit == F){

    }
    else{
        printf("\n Wrong unit (%c).", unit);
    }

    return 0;
}
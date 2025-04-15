#include <stdio.h>

void birthday(char name[], int age){//argument declaration
    printf("\nHappy birthday %s", name);
    printf("\nHappy birthday, you have %d", age);
    printf("\nHappy birthday %s", name);
    printf("\nHappy birthday to you !\n");
}

int main(){

    char name[] = "Sam";//argument initialisation
    int age = 25;//argument initialisation

    //function
    birthday(name, age);
    birthday(name, age);


    return 0;
}
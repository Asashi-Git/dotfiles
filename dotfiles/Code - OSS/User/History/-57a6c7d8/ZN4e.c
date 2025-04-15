#include <stdio.h>

void birthday(char name[], int age){//argument declaration
    printf("\nHappy birthday %s", name);
    printf("\nHappy birthday, you have %d", age);
    printf("\nHappy birthday %s", name);
    printf("\nHappy birthday to you !\n");
}

//These function can't talk to each other so you can declare any name and it will still work

int main(){

    char name[] = "Sam";//argument initialisation
    int age = 25;//argument initialisation

    //function
    birthday(name, age);
    birthday(name, age);


    return 0;
}
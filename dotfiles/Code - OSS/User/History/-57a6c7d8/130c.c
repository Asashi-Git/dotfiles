#include <stdio.h>

void birthday(){
    printf("\nHappy birthday %s", name);
    printf("\nHappy birthday, you have %d", age);
    printf("\nHappy birthday %s", name);
    printf("\nHappy birthday to you !\n");
}

int main(){

    char name[] = "Sam";
    int age = 25;

    birthday(name, age);
    birthday(name, age);


    return 0;
}
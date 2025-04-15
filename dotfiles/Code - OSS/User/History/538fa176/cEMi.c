#include <stdio.h>
#include <string.h>


int main(){

    //while loop = return a section of code possibly unilimited time
    //while some condition remain true
    //a while loop might not execute at all

    char name[25];

    printf("what's you name ?\n");
    fgets(name, 25, stdin);
    name[strlen(name) - 1] = '\0';

    while(strlen(name) == 0){

        printf("\nYou must enter a name !\n");

        printf("what's you name ?\n");
        fgets(name, 25, stdin);
        name[strlen(name) - 1] = '\0';

    }

    printf("Hello %s", name);

    return 0;
}
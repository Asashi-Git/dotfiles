#include <stdio.h>
#include <string.h>


int main(){

    //while loop = return a section of code possibly unilimited time
    //while some condition remain true
    //a while loop might not execute at all

    char name[25];

    while(1){
        printf("what's you name ?\n");
        fgets("%s\n", name, stdin);
        name[strlen(name) - 1] = '\0';

        printf("Hello %s\n" name);

    return 0;
}
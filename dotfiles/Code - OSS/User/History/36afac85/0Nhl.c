#include <stdio.h>

int main(){

    FILE *pF = fopen("test.txt", "r");//r for read

    char buffer;

    if(pF == NULL){

        printf("Unnable to open file !\n");

    }else{

        while(fgets(buffer, , pF) != NULL){

            printf("%s\n", buffer);

        }
    }

    fclose(pF);

    return 0;
}
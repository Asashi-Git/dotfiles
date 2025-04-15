#include <stdio.h>

int main(){

    FILE *pF = fopen("test.txt", "r");//r for read

    char buffer[255];

    if(pF == NULL){

        printf("Unnable to open file !\n");

    }else{

        while(fgets(buffer, 255, pF) != NULL){

        printf("%s\n", buffer);

        }
    }

    fclose(pF);

    return 0;
}
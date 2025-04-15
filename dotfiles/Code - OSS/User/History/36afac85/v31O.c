#include <stdio.h>

int main(){

    FILE *pF = fopen("test.txt", "r");//r for read

    char buffer[255];

    while(fgets(buffer, 255, pF)){

        printf("%s\n", buffer);

    }

    fclose(pF);

    return 0;
}
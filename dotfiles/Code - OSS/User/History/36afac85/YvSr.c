#include <stdio.h>

int main(){

    FILE *pF = fopen("test.txt", "r");//r for read

    char buffer[255];

    fgets(buffer, 255, pF);
    printf("%s\n", buffer);

    while(){

        

    }

    fclose(pF);

    return 0;
}
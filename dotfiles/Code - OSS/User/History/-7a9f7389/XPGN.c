#include <stdio.h>

int main(){

    FILE *pF = fopen("test.txt", "w");//w to write

    fprintf(pF, "Spongebob Squarepants");

    fclose(pF);

    return 0;
}
#include <stdio.h>

int main(){

    FILE *pF = fopen("test.txt", "w");  //w to write
                                        //a to appends
                                        //r to read

    fprintf(pF, "Spongebob Squarepants");

    fclose(pF);

    return 0;
}
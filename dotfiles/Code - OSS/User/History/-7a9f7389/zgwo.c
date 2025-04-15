#include <stdio.h>

int main(){

    FILE *pF = fopen("test.txt", "a");  //w to write
                                        //a to appends
                                        //r to read

    fprintf(pF, "Spongebob Squarepant\n");
    fprintf(pF, "Patrick The Star\n");
    fprintf(pF, "Spiderman\n");
    fprintf(pF, "Batman\n");
    fprintf(pF, "Superman\n");

    fclose(pF);

    return 0;
}
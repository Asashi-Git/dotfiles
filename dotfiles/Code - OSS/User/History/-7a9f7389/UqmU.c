#include <stdio.h>

int main(){

    // FILE *pF = fopen("test.txt", "a");  //w to write
    //                                     //a to appends
    //                                     //r to read

    // fprintf(pF, "Patrick The Star\n");

    // fclose(pF);

    if(remove("test.txt") == 0){

        printf("That file was deledet succesfully !");

    }else{

        printf("That file was not deleted !");

    }

    return 0;
}
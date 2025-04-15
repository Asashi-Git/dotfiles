#include <stdio.h>

int main(){

    if(remove("test.txt") == 0){

        printf("\nThat file was deledet succesfully !\n");

    }else{

        printf("\nThat file was not deleted !\n");

    }

    return 0;
}
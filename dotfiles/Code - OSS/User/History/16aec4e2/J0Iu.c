#include <stdio.h>

int main(){

    if(remove("test.txt") == 0){

        printf("That file was deledet succesfully !");

    }else{

        printf("That file was not deleted !");

    }

    return 0;
}
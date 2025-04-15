#include <stdio.h>

int main(){

    //continue = skip the next of the code and force the next iteration of the loop
    //break = exit a loop/switch

    for(int i = 0; i <= 20; i++){

        if(i == 13){
            continue;
        }
        
        printf("%d\n", i);
    }

    return 0;
}
#include <stdio.h>

/*void*/double square(double x){//here we need to change de void by the value we returning

    return x * x;

}

int main(){

    double x = square(3.14);
    printf("%lf\n", x);

    return 0;
}
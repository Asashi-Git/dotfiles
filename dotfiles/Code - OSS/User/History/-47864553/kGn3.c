#include <stdio.h>
#include <stdbool.h>//to work with boolean

int main(){

    char a = 'C';                                       //single character                              %c
    char b[] = "Samuel";                                //array of characters                           %s

    float c = 3.141592;                                 //4 bytes (32 bits of precision) 6-7 digits     %f
    double d = 3.141592653589793;                       //8 bytes (64 bits of precision) 15-16 digits   %lf

    bool e = true;                                      //1 byte (true or false)                        %d

    char f = 100;                                       //1 byte (-128 +127)                            %d or %c
    unsigned char g = 255;                              //1 byte (0 to 255)                             %d of %c

    short int h = 32767;                                //2 bytes (-32,768 to 32.767)                   %d
    unsigned short int i = 65535;                       //2 bytes (0 to +65,535)                        %d

    int j = 2147483647;                                 //4 bytes (-2,147,483,648 to +2,147,483,647)    %d
    unsigned int k = 4294967295;                        //4 bytes (0 to +4,294,967,295)                 %u

    long long int l = 9223372036854775807;              //8 bytes (-9 quitillion to +9 quitillion)      %lld
    unsigned long long int m = 18446744073709551615U;   //8 bytes (0 to +18 quitillion)                 %llu
                                                    //Here the U si for very long integer

    //now we need to print them :

    printf("\n");

    printf("This is a Char : %c\n", a);//                                   char
    printf("This is a Characters Array : %s\n", b);//                       characters array

    printf("This is a Float : %f\n", c);//                                  foat
    printf("This is a Doucle : %lf\n", d);//                                double

    printf("This is a Boolean : %d\n", e);//                                bool

    printf("This is a Char as Nemeric Value : %d\n", f);//                  char as numeric value
    printf("This is an Unsigned Char as Nemeric Value : %d\n", g);//        unsigned char as numeric value

    printf("This is a Short : %d\n", h);//                                  short
    printf("This is an Unsigned Short : %d\n", i);//                        unsigned short

    printf("This is an Integer : %d\n", j);//                               int
    printf("This is an Unsigned Integer : %u\n", k);//                      unsigned int

    printf("This is a Long Long Integer : %lld\n", l);//                    long long int
    printf("This is an Unsigned Long Long Integer : %llu\n", m);//          unsigned long long int

    printf("\n");

    return 0;
}
// grayscale_image.c
#include "image.h"

void grayscale_image(t_image image) {
    for (unsigned int i = 0; i < image.width * image.height; i++) {
        unsigned char gray = (image.pixels[i].r + image.pixels[i].g + image.pixels[i].b) / 3;
        image.pixels[i].r = gray;
        image.pixels[i].g = gray;
        image.pixels[i].b = gray;
    }
    printf
}
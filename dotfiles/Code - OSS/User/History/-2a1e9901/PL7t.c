// grayscale_image.c
#include "image.h"

void grayscale_image(t_image image) {
    for (unsigned int i = 0; i < image.width * image.height; i++) {
        unsigned char gray = (image.pixels[i].r + image.pixels[i].g + image.pixels[i].b) / 3;
        image.pixels[i].r = gray;
        image.pixels[i].g = gray;
        image.pixels[i].b = gray;
    }
}

// flip_lr_image.c
#include "image.h"
#include <stdlib.h>

void swap_pixels(t_pixel *a, t_pixel *b) {
    t_pixel temp = *a;
    *a = *b;
    *b = temp;
}

void flip_lr_image(t_image image) {
    for (unsigned int i = 0; i < image.height; i++) {
        for (unsigned int j = 0; j < image.width / 2; j++) {
            swap_pixels(&image.pixels[i * image.width + j], &image.pixels[i * image.width + (image.width - j - 1)]);
        }
    }
}

// crop_image.c
#include "image.h"
#include <stdlib.h>

void crop_image(t_image *destination, t_rect rect) {
    destination->width = rect.width;
    destination->height = rect.height;
    destination->pixels = malloc(rect.width * rect.height * sizeof(t_pixel));
    
    if (!destination->pixels) return;
    
    for (unsigned int i = 0; i < rect.height; i++) {
        for (unsigned int j = 0; j < rect.width; j++) {
            destination->pixels[i * rect.width + j] = image.pixels[(i + rect.up) * image.width + (j + rect.left)];
        }
    }
}

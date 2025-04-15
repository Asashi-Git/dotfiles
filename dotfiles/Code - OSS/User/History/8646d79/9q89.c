// flip_lr_image.c
#include "image.h"
#include <stdlib.h>

void swap_pixels(t_pixel *a, t_pixel *b) {
    t_pixel temp = *a;
    *a = *b;
    *b = temp;
}
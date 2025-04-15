// // flip_lr_image.c
// #include "image.h"
// #include <stdlib.h>

// void swap_pixels(t_pixel *a, t_pixel *b) {
//     t_pixel temp = *a;
//     *a = *b;
//     *b = temp;
// }

// void flip_lr_image(t_image image) {
//     for (unsigned int i = 0; i < image.height; i++) {
//         for (unsigned int j = 0; j < image.width / 2; j++) {
//             swap_pixels(&image.pixels[i * image.width + j], &image.pixels[i * image.width + (image.width - j - 1)]);
//         }
//     }
// }
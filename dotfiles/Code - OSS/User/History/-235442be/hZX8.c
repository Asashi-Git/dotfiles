// // crop_image.c
// #include "image.h"
// #include <stdlib.h>

// void crop_image(t_image *destination, t_rect rect) {
//     destination->width = rect.width;
//     destination->height = rect.height;
//     destination->pixels = malloc(rect.width * rect.height * sizeof(t_pixel));
    
//     if (!destination->pixels) return;
    
//     for (unsigned int i = 0; i < rect.height; i++) {
//         for (unsigned int j = 0; j < rect.width; j++) {
//             destination->pixels[i * rect.width + j] = image.pixels[(i + rect.up) * image.width + (j + rect.left)];
//         }
//     }
// }

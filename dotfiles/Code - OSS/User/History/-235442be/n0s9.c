// crop_image.c
#include "image.h"
#include <stdlib.h>

// Function to crop an image to a specified rectangular area
// Parameters:
//   - destination: Pointer to the new cropped image
//   - rect: The rectangle defining the crop area
void crop_image(t_image *destination, t_rect rect) {
    // Set the dimensions of the destination image to match the crop rectangle
    destination->width = rect.width;
    destination->height = rect.height;
    
    // Allocate memory for the new pixel data
    destination->pixels = malloc(rect.width * rect.height * sizeof(t_pixel));
    
    // Copy the pixel data from the original image to the cropped image
    for (unsigned int i = 0; i < rect.height; i++) {
        for (unsigned int j = 0; j < rect.width; j++) {
            // Calculate the source index and copy pixel data
            destination->pixels[i * rect.width + j] = image.pixels[(i + rect.up) * image.width + (j + rect.left)];
        }
    }
}

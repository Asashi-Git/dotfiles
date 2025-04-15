#include <stdio.h>
#include <stdlib.h>
#include "image.h"

int main(void) {
	t_image image;
	if (!load_ppm("pikachu.ppm", &image)) {
		printf("PPM loading failed\n");
		return EXIT_FAILURE;
	}
	printf("Width: %d, height: %d\n", image.width, image.height);

	grayscale_image(image);
	save_ppm("test.ppm", image);

	flip_lr_image(image);
	save_ppm("test2.ppm", image);

	// crop_image(image);
	// save_ppm("test3.ppm", image);

	if (!save_ppm("pikachu2.ppm", image)) {
		printf("PPM saving failed\n");
		return EXIT_FAILURE;
	}
	destroy_image(image);
}
#include <stdio.h>

void selectionSort(int arr[], int n) {
    int i,j;
    for (i = 0; i < n - 1; i++) {
            int minIndex = i;
        // Find the index of the minimum element in the unsorted part of the array
        for ( j = i + 1; j < n; j++) {
            if (arr[j] < arr[minIndex]) {
                      minIndex = j;
            }
        }

        // Swap the found minimum element with the element at index i
        int temp = arr[i];
        arr[i] = arr[minIndex];
        arr[minIndex] = temp;
    }
}

int main() {
    int n;
    printf("Enter the number of elements in the array: ");
    scanf("%d", &n);

    int arr[n];

    printf("Enter the elements of the array:\n");
    for (int i = 0; i < n; i++) {
        scanf("%d", &arr[i]);
    }

    // Call selectionSort function to sort the array
    selectionSort(arr, n);

    printf("Sorted array in ascending order:\n");
    for (int i = 0; i < n; i++) {
        printf("%d ", arr[i]);
    }
    printf("\n");

    return 0;
}

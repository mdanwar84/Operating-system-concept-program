#include <stdio.h>

void calculateFCFS(int n, int AT[], int BT[], int CT[], int TAT[], int WT[], float *ATAT, float *AWT) {
    int currentTime = 0;

    for (int i = 0; i < n; i++) {
        // Process arrives late, wait for it
        if (currentTime < AT[i]) {
            currentTime = AT[i];
        }

        // Calculate completion time
        CT[i] = currentTime + BT[i];

        // Calculate turnaround time
        TAT[i] = CT[i] - AT[i];

        // Calculate waiting time
        WT[i] = TAT[i] - BT[i];

        // Update current time
        currentTime = CT[i];
    }

    // Calculate average turnaround time and average waiting time
    float totalTAT = 0, totalWT = 0;
    for (int i = 0; i < n; i++) {
        totalTAT += TAT[i];
        totalWT += WT[i];
    }

    *ATAT = totalTAT / n;
    *AWT = totalWT / n;
}

int main() {
    int n;

    printf("Enter the number of processes: ");
    scanf("%d", &n);

    int AT[n], BT[n], CT[n], TAT[n], WT[n];
    float ATAT, AWT;

    printf("Enter arrival time and burst time for each process:\n");
    for (int i = 0; i < n; i++) {
        printf("Process %d (AT BT): ", i + 1);
        scanf("%d %d", &AT[i], &BT[i]);
    }

    calculateFCFS(n, AT, BT, CT, TAT, WT, &ATAT, &AWT);

    printf("\nProcess\tAT\tBT\tCT\tTAT\tWT\n");
    for (int i = 0; i < n; i++) {
        printf("P%d\t%d\t%d\t%d\t%d\t%d\n", i + 1, AT[i], BT[i], CT[i], TAT[i], WT[i]);
    }

    printf("\nAverage Turnaround Time: %.2f\n", ATAT);
    printf("Average Waiting Time: %.2f\n", AWT);

    return 0;
}

#include <stdio.h>

int main() {
    int n;

    printf("Enter the number of processes: ");
    scanf("%d", &n);

    int at[n];
    int bt[n];
    int ct[n];
    int tat[n];
    int wt[n];
    int rt[n];

    for (int i = 0; i < n; i++) {
        printf("Enter arrival time for process %d: ", i + 1);
        scanf("%d", &at[i]);
        printf("Enter burst time for process %d: ", i + 1);
        scanf("%d", &bt[i]);
        rt[i] = bt[i];
    }

    int currentTime = 0;
    int completed = 0;
    int totalTurnaroundTime = 0;
    int totalWaitingTime = 0;

    while (completed < n) {
        int shortest = -1;
        int minTime = 999999;

        for (int i = 0; i < n; i++) {
            if (at[i] <= currentTime && rt[i] < minTime && rt[i] > 0) {
                shortest = i;
                minTime = rt[i];
            }
        }

        if (shortest == -1) {
            currentTime++;
        } else {
            rt[shortest]--;
            if (rt[shortest] == 0) {
                ct[shortest] = currentTime + 1;
                tat[shortest] = ct[shortest] - at[shortest];
                wt[shortest] = tat[shortest] - bt[shortest];
                totalTurnaroundTime += tat[shortest];
                totalWaitingTime += wt[shortest];
                completed++;
            }
            currentTime++;
        }
    }

    float averageTurnaroundTime= totalTurnaroundTime / n;
    float averageWaitingTime = totalWaitingTime / n;

    printf("\nProcess\tAT\tBT\tCT\tTAT\tWT\n");
    for (int i = 0; i < n; i++) {
        printf("P%d\t%d\t%d\t%d\t%d\t%d\n", i + 1, at[i], bt[i], ct[i], tat[i], wt[i]);
    }

    printf("Average Turnaround Time: %.2f\n", averageTurnaroundTime);
    printf("Average Waiting Time: %.2f\n", averageWaitingTime);

    return 0;
}

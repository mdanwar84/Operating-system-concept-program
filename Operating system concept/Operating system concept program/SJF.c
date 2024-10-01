#include <stdio.h>

void sjf(int n, int at[], int bt[], int ct[], int tat[], int wt[]) {
    int completed[n];
    int remaining_time[n];

    for (int i = 0; i < n; i++) {
        completed[i] = 0;
        remaining_time[i] = bt[i];
    }

    int time = 0;
    int min_bt, min_process;

    while (1) {
        min_bt = 9999;
        min_process = -1;

        for (int i = 0; i < n; i++) {
            if (at[i] <= time && !completed[i] && bt[i] < min_bt) {
                min_bt = bt[i];
                min_process = i;
            }
        }

        if (min_process == -1)
            break;

        ct[min_process] = time + bt[min_process];
        tat[min_process] = ct[min_process] - at[min_process];
        wt[min_process] = tat[min_process] - bt[min_process];

        completed[min_process] = 1;
        time = ct[min_process];
    }
}

int main() {
    int n;

    printf("Enter the number of processes: ");
    scanf("%d", &n);

    int at[n];
    int bt[n];
    int ct[n];
    int tat[n];
    int wt[n];

    printf("Enter Arrival Time and Burst Time for each process:\n");
    for (int i = 0; i < n; i++) {
        printf("Process %d:\n", i + 1);
        printf("Arrival Time: ");
        scanf("%d", &at[i]);
        printf("Burst Time: ");
        scanf("%d", &bt[i]);
    }

    sjf(n, at, bt, ct, tat, wt);

    float total_tat = 0, total_wt = 0;

    printf("\nProcess\tAT\tBT\tCT\tTAT\tWT\n");
    for (int i = 0; i < n; i++) {
        printf("P%d\t%d\t%d\t%d\t%d\t%d\n", i + 1, at[i], bt[i], ct[i], tat[i], wt[i]);
        total_tat += tat[i];
        total_wt += wt[i];
    }

    float avg_tat = total_tat / n;
    float avg_wt = total_wt / n;

    printf("\nAverage Turnaround Time (ATAT): %.2f\n", avg_tat);
    printf("Average Waiting Time (AWT): %.2f\n", avg_wt);

    return 0;
}

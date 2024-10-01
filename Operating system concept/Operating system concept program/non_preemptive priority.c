#include <stdio.h>

// Structure to represent a process
struct Process {
    int id;
    int priority;
    int burst_time;
    int completion_time;
    int turnaround_time;
    int waiting_time;
};

// Function to calculate CT, TAT, and WT for each process
void calculateTimes(struct Process processes[], int n) {
    // Calculate completion time for the first process
    processes[0].completion_time = processes[0].burst_time;

    // Calculate completion time and turnaround time for the rest of the processes
    for (int i = 1; i < n; i++) {
        processes[i].completion_time = processes[i - 1].completion_time + processes[i].burst_time;
    }

    // Calculate turnaround time and waiting time for each process
    for (int i = 0; i < n; i++) {
        processes[i].turnaround_time = processes[i].completion_time;
        processes[i].waiting_time = processes[i].turnaround_time - processes[i].burst_time;
    }
}

int main() {
    int n;

    printf("Enter the number of processes: ");
    scanf("%d", &n);

    struct Process processes[n];

    // Input process details
    for (int i = 0; i < n; i++) {
        processes[i].id = i + 1;
        printf("Enter priority and burst time for Process %d: ", i + 1);
        scanf("%d%d", &processes[i].priority, &processes[i].burst_time);
    }

    // Sort processes by priority (non-preemptive)
    for (int i = 0; i < n - 1; i++) {
        for (int j = 0; j < n - i - 1; j++) {
            if (processes[j].priority > processes[j + 1].priority) {
                // Swap the processes
                struct Process temp = processes[j];
                processes[j] = processes[j + 1];
                processes[j + 1] = temp;
            }
        }
    }

    // Calculate completion time, turnaround time, and waiting time
    calculateTimes(processes, n);

    // Calculate Average Turnaround Time (ATAT) and Average Waiting Time (AWT)
    float sumTAT = 0, sumWT = 0;
    for (int i = 0; i < n; i++) {
        sumTAT += processes[i].turnaround_time;
        sumWT += processes[i].waiting_time;
    }
    float ATAT = sumTAT / n;
    float AWT = sumWT / n;

    // Print the schedule and times
    printf("Process Schedule:\n");
    printf("Process ID\tPriority\tBurst Time\tCT\tTAT\tWT\n");
    for (int i = 0; i < n; i++) {
        printf("%d\t\t%d\t\t%d\t\t%d\t%d\t%d\n", processes[i].id, processes[i].priority, processes[i].burst_time,
               processes[i].completion_time, processes[i].turnaround_time, processes[i].waiting_time);
    }

    printf("Average Turnaround Time (ATAT): %.2f\n", ATAT);
    printf("Average Waiting Time (AWT): %.2f\n", AWT);

    return 0;
}

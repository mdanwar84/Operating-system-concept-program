 .MODEL SMALL
 .STACK 10H
 .DATA
 A DB 8
 
 .CODE
 MAIN PROC
    MOV AX,@DATA ;Initialization of data Segment
    MOV DS,AX
    
    ADD A,48  ;A=A+48=54
    MOV AH,2
    MOV DL,A
    INT 21H
    
    MOV AH,4CH
    INT 21H
    MAIN ENDP
 END MAIN


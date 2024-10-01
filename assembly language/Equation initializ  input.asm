;A-B+C
.MODEL SMALL
.STACK 100H

.DATA
A DB 6
B DB 1
C DB 1

.CODE
MAIN PROC
    MOV AX,@DATA
    MOV DS,AX
   
    
    MOV AL,B     ; The content of B will be store in AL
    MOV AH,C     ; The content of B will be store in AL  
    
    
    SUB A,AL     ;A=A-B     ;6-1=5
    ADD A,AH     ;A=A+C     ;5+1=6
    ADD A,48
    
    
    MOV AH,2
    MOV DL,A
    INT 21H
    
    MOV AH,4CH
    INT 21H
    MAIN ENDP
END MAIN

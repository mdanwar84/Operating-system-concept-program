;A-B+C
.MODEL SMALL
.STACK 100H

.DATA
A DB ?
B DB ?
C DB ?

.CODE
MAIN PROC
    MOV AX,@DATA
    MOV DS,AX
    
    MOV AH,1
    INT 21H
    MOV A,AL
    INT 21H
    MOV B,AL
    INT 21H
    MOV C,AL
    
    MOV AL,B     ; The content of B will be store in AL
    MOV AH,C     ; The content of B will be store in AL  
    
    
    SUB A,AL     ;A=A-B     ;6-1=5
    ADD A,AH     ;A=A+C     ;5+1=6
    ;ADD A,48
    
    
    MOV AH,2
    MOV DL,A
    INT 21H
    
    MOV AH,4CH
    INT 21H
    MAIN ENDP
END MAIN

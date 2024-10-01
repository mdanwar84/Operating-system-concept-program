.MODEL SMALL
.STACK 100H

.CODE
MAIN PROC
    MOV AH,1
    INT 21H
    SUB AL,48
    MOV BL,AL  ;BL=2
    INT 21H
    SUB AL,48  ;AL=3
    
    MUL BL     ;AL=AL*BL=3*2=6
    
    
    MOV AH,2
    ADD AL,48
    MOV DL,AL
    INT 21H
    
    
    MOV AH,4CH
    INT 21H
    MAIN ENDP
END MAIN

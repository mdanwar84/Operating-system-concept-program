.MODEL SMALL
.STACK 100H

.CODE
MAIN PROC
    MOV AH,1
    INT 21H 
    MOV BL,AL   ;BL will store the value
    INT 21H
    MOV BH,AL   ;BH will store the value
    
    
    CMP BL,BH
    JG L1 
    
    MOV AH,2
    MOV DL,0AH
    INT 21H
    MOV DL,0DH
    INT 21H
    
    
    L2: 
    MOV AH,2
    MOV DL,BH
    INT 21H
    JMP EXIT
    
    
    
    L1: 
    MOV AH,2
    MOV DL,BL
    INT 21H
    JMP EXIT
   
    
    EXIT:
    MOV AH,4CH
    INT 21H
    MAIN ENDP
END MAIN
.model small
.stack 100h

.code 
main proc
    mov ah,1  ;input
    int 21h
    mov bl,al
    
    sub bl,32  ;upper to lower
    
    mov ah,2
    mov dl,bl
    int 21h
    
    
    mov ah,4ch
    int 21h
    main endp
end main

.model small
.stack 100h
.code 

main proc
    mov bl,5
    add bl,48
    
    dec bl
    dec bl
    inc bl
    
    mov ah,2
    mov dl,bl
    int 21h
    
    mov ah,2
    int 21h
    main endp
end main
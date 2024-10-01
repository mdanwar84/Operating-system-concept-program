 .model small
 .stack 100h
 .code
 main proc
    mov bl,2
    mov bh,4
    
    
    add bl,48
    add bh,48
    
    xchag bl,bh 
    
     ;bl=4
     ;bh=2
           
    mov ah,2
    mov dl,bl
    int 21h
    mov dl,bh
    int 21h
 
 
    mov ah,4ch
    int 21h
    main endp  
 end main
 
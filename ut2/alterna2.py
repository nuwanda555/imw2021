#Crear la función alterna(frase) a las que se le pasa una frase y devuelve la misma frase pero con las posiciones pares en mayúscula y las impares en minúscula, sin tener en cuenta los espacios. P.e. alterna(“mi mama me mima”) devolvería: Mi MaMa Me MiMa.


def alterna(frase):
    pos=0
    fraseNueva=""
    for letra in frase:
        if letra!=" ": #si la letra actual no es un espacio
            if pos % 2 ==0:  #si pos es par  
                letra=letra.upper()
            else:
                letra=letra.lower()
            pos=pos+1
        fraseNueva=fraseNueva+letra #está fuera del if porque el espacio tambien se concatena
    return fraseNueva

frase=input("Dime una frase: ") #Mi mama me mima
print(alterna(frase))
        

#Crear la función alterna(frase) a las que se le pasa una frase y devuelve la misma frase pero con las posiciones pares en mayúscula y las impares en minúscula, sin tener en cuenta los espacios. P.e. alterna(“mi mama me mima”) devolvería: Mi MaMa Me MiMa.


def alterna(frase):
    par=True

    fraseNueva=""
    for letra in frase:
        if letra!=" ": #si la letra actual no es un espacio
            if par:  #esto es como par==True , si es par pongo en mayúsculas
                letra=letra.upper()
            else:
                letra=letra.lower()
            par=not par #par sólo se cambia si no es un espacio
        fraseNueva=fraseNueva+letra
    return fraseNueva

frase=input("Dime una frase: ") #Mi mama me mima
print(alterna(frase))
        

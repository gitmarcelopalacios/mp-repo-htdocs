print ("***************************************************************")
print (" Programa creado por TruzzBlogg - Par o Impar - Versión Básica")
print ("***************************************************************")



#Inicializo la variable number para eliminar cualquier valor previo que pudiera tener

number = 0

number=int(input("Introduzca un número!"))   #Solicitamos un dato al usuario


if number%2 == 0:   #Usamos la propiedad numérica Módulo (%2) para saber si el número es par o impar
    print("El numero: %d es par" %number)    #Si el resultado del Módulo de un número es 0, significa que es par
else:
    print("Uyyy, el número: %d no es par! Entonces, es impar!" %number) #Si el resultado del Módulo no es igual a 0, significa que es impar

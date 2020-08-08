# PIDO EL PRIMER NOMBRE
nombre1=input("Ingresa tu nombre: ")
# PIDO LA PRIMER EDAD
edad1=input("Ingresa tu edad: ")
# PIDO EL SEGUNDO NOMBRE
nombre2=input("Ingresa tu nombre: ")
# PIDO LA SEGUNDA EDAD
edad2=input("Ingresa tu edad: ")
# CONVIERTO LAS EDADES PEDIDAS EN NUMEROS ENTEROS
# ASI PUEDO SABER CUAL EL EL MAYOR
edad1=int(edad1)
edad2=int(edad2)
# COMPARO SI ES MAYOR LA EDAD1
if edad1>edad2:
  # IMPRIMO QUE EL NOMBRE1 ES MAYOR QUE EL NOMBRE2
  print(nombre1, "es mayor a", nombre2)
# COMPARO SI LAS EDADES SON IGUALES
elif edad1==edad2:
  # IMPRIMO QUE EL NOMBRE1 Y NOMBRE2 TIENEN LA MISMA EDAD
  print(nombre1," y ",nombre2," tienen la misma edad")
# SINO ES MENOR
else:
  # IMPRIMO NOMBRE2 ES MAYOR QUE NOMBRE 1
  print(nombre2, "es mayor a", nombre1)

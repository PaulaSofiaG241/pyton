#Determinar si un aprendiz aprobo la materia dadas 3 notas las materias 
#se aprueban con 3.5, el sistema debera mostrar un mensaje de aprobo, 
#reprobo y el promedio de la materia 

nota1 = float(input("Ingrese la nota 1: "))
nota2 = float(input("Ingrese la nota 2: "))
nota3 = float(input("Ingrese la nota 3: "))
prom =(nota1 + nota2 + nota3)/3

if prom >= 3.5 :
    print(f"Aprobado con un promedio de {prom} ")
elif prom < 3.5:
    print(f"Reprobado con un promedio de {prom} ")
else:
    print(f"Valores invalidos")
#Hallar el valor de la hipotenusa dados dos catetos
import math

cat1 = float(input("Ingrese el valor del primer cateto: "))
cat2 = float(input("Ingrese el valor del segundo cateto: "))

hipo = math.sqrt((cat1*cat1)+(cat2*cat2))


print(f"La hipotenusa de los catetos ingresados es:{hipo}" )
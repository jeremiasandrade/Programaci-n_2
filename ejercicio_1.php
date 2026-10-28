nombre = "Carlos"
edad = 20

if edad < 0:
    print("Error: La edad ingresada es inválida (no puede ser negativa).")
elif edad >= 18:
    print(f"¡Bienvenido/a al evento, {nombre}!")
else:
    print("Acceso denegado. Eres menor de edad.")
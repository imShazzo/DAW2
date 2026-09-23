import random
import time
import sys

# Colores ANSI para que se vea súper chulo en la terminal
RESET = "\033[0m"
NEGRITA = "\033[1m"
ROJO = "\033[31m"
VERDE = "\033[32m"
AMARILLO = "\033[33m"
AZUL = "\033[34m"
MAGENTA = "\033[35m"
CIAN = "\033[36m"

def escribir_lento(texto, velocidad=0.02):
    """Escribe texto en la terminal simulando que se teclea en vivo."""
    for char in texto:
        sys.stdout.write(char)
        sys.stdout.flush()
        time.sleep(velocidad)
    print()

def mostrar_titulo():
    print(AMARILLO + NEGRITA + """
    ===================================================
          🏰  EL LABERINTO DEL DESTINO: MINI RPG 🏰
    ===================================================
    """ + RESET)

def elegir_clase():
    print(NEGRITA + "\nSelecciona tu clase de héroe:" + RESET)
    print(f"1. {ROJO}Guerrero{RESET} (Fuerte y resistente. Vida: 120, Ataque: 15)")
    print(f"2. {AZUL}Mago{RESET} (Frágil pero hace un daño devastador. Vida: 80, Ataque: 25)")
    print(f"3. {VERDE}Pícaro{RESET} (Ágil y equilibrado. Vida: 100, Ataque: 18)")
    
    while True:
        opcion = input("\nIntroduce el número de tu elección (1-3): ").strip()
        if opcion == "1":
            return {"clase": f"{ROJO}Guerrero{RESET}", "vida": 120, "vida_max": 120, "ataque": 15, "pociones": 2}
        elif opcion == "2":
            return {"clase": f"{AZUL}Mago{RESET}", "vida": 80, "vida_max": 80, "ataque": 25, "pociones": 3}
        elif opcion == "3":
            return {"clase": f"{VERDE}Pícaro{RESET}", "vida": 100, "vida_max": 100, "ataque": 18, "pociones": 2}
        else:
            print(ROJO + "Opción no válida. Por favor, elige 1, 2 o 3." + RESET)

def combate(jugador, enemigo):
    print(MAGENTA + NEGRITA + f"\n¡¡¡Un {enemigo['nombre']} salvaje ha aparecido!!! 👾" + RESET)
    
    while enemigo["vida"] > 0 and jugador["vida"] > 0:
        print("\n" + "="*40)
        print(f"👤 Tu Vida: {VERDE}{jugador['vida']}/{jugador['vida_max']}{RESET} | Pociones: {AMARILLO}{jugador['pociones']}{RESET}")
        print(f"👾 Vida del {enemigo['nombre']}: {ROJO}{enemigo['vida']}/{enemigo['vida_max']}{RESET}")
        print("="*40)
        print("¿Qué quieres hacer?")
        print("1. Atacar ⚔️")
        print("2. Beber Poción Curativa (Recupera 40 PV) 🧪")
        print("3. Intentar huir 🏃💨")
        
        accion = input("Elige una acción (1-3): ").strip()
        
        if accion == "1":
            # Turno del jugador
            daño_jugador = random.randint(jugador["ataque"] - 3, jugador["ataque"] + 3)
            # Golpe crítico
            if random.random() < 0.15:
                daño_jugador = int(daño_jugador * 1.5)
                escribir_lento(AMARILLO + NEGRITA + f"¡GOLPE CRÍTICO! 💥 Haces {daño_jugador} de daño." + RESET)
            else:
                escribir_lento(f"Atacas y causas {daño_jugador} de daño.")
            enemigo["vida"] -= daño_jugador
            
            if enemigo["vida"] <= 0:
                escribir_lento(VERDE + NEGRITA + f"¡Has derrotado al {enemigo['nombre']}! 🎉" + RESET)
                return True
                
        elif accion == "2":
            if jugador["pociones"] > 0:
                jugador["pociones"] -= 1
                recuperado = min(40, jugador["vida_max"] - jugador["vida"])
                jugador["vida"] += recuperado
                escribir_lento(VERDE + f"Te bebes una poción deliciosa y recuperas {recuperado} PV.🔋" + RESET)
            else:
                escribir_lento(ROJO + "¡No te quedan pociones!" + RESET)
                continue # No pierde el turno si no tenía pociones
                
        elif accion == "3":
            if random.random() < 0.4:
                escribir_lento(AMARILLO + "¡Lograste escapar del combate hábilmente! 🏃💨" + RESET)
                return "escapado"
            else:
                escribir_lento(ROJO + "¡No pudiste escapar! El enemigo te corta el paso." + RESET)
        else:
            print(ROJO + "Acción inválida." + RESET)
            continue
            
        # Turno del enemigo (si sigue vivo)
        if enemigo["vida"] > 0:
            daño_enemigo = random.randint(enemigo["ataque"] - 2, enemigo["ataque"] + 2)
            escribir_lento(ROJO + f"El {enemigo['nombre']} te ataca y te hace {daño_enemigo} de daño. 🩸" + RESET)
            jugador["vida"] -= daño_enemigo
            
            if jugador["vida"] <= 0:
                escribir_lento(ROJO + NEGRITA + "Has caído en combate... Fin de la partida. 💀" + RESET)
                return False

def tienda(jugador):
    print(AMARILLO + NEGRITA + "\n✨ Te encuentras con una misteriosa Estatua del Mercader ✨" + RESET)
    print("La estatua te ofrece regalos gratis para tu viaje. Elige sabiamente:")
    print("1. Una Poción Curativa extra 🧪")
    print("2. Mejorar tu arma (+3 al Ataque) ⚔️")
    print("3. Bendición de Salud (+20 de Vida Máxima y curación total) 💖")
    
    while True:
        eleccion = input("Elige tu regalo (1-3): ").strip()
        if eleccion == "1":
            jugador["pociones"] += 1
            print(VERDE + "¡Has recibido una poción! Ahora tienes " + str(jugador["pociones"]) + "." + RESET)
            break
        elif eleccion == "2":
            jugador["ataque"] += 3
            print(VERDE + f"¡Tu ataque ha aumentado! Ahora tu ataque base es {jugador['ataque']}." + RESET)
            break
        elif eleccion == "3":
            jugador["vida_max"] += 20
            jugador["vida"] = jugador["vida_max"]
            print(VERDE + f"¡Tu salud máxima ha aumentado! Ahora tienes {jugador['vida_max']} PV." + RESET)
            break
        else:
            print(ROJO + "Por favor, elige una opción válida (1-3)." + RESET)

def jugar():
    mostrar_titulo()
    escribir_lento("¡Bienvenido aventurero! Te adentras en las profundidades del laberinto en busca del cofre legendario.")
    
    jugador = elegir_clase()
    escribir_lento(f"\nHas elegido ser {jugador['clase']}. ¡Que la fortuna te acompañe!")
    
    # Lista de monstruos normales
    monstruos = [
        {"nombre": "Slime Viscoso", "vida": 30, "vida_max": 30, "ataque": 8},
        {"nombre": "Goblin Ladrón", "vida": 45, "vida_max": 45, "ataque": 11},
        {"nombre": "Esqueleto Guerrero", "vida": 55, "vida_max": 55, "ataque": 14}
    ]
    
    # Evento 1: Combate inicial
    enemigo = random.choice(monstruos).copy()
    escribir_lento("\nCaminas con cautela por un pasillo oscuro iluminado por antorchas parpadeantes...")
    resultado = combate(jugador, enemigo)
    if not resultado:
        return
        
    # Evento 2: Bifurcación / Decisión
    print("\n" + CIAN + "===================================================" + RESET)
    escribir_lento("Llegas a una bifurcación de caminos. Se escuchan sonidos extraños...")
    print("1. Ir por el pasillo de la izquierda, donde huele a azufre. 🔥")
    print("2. Ir por el pasillo de la derecha, silencioso y cubierto de telarañas. 🕸️")
    
    camino = ""
    while camino not in ["1", "2"]:
        camino = input("Elige camino (1 o 2): ").strip()
    
    if camino == "1":
        escribir_lento("\n¡Huele a peligro! Te topas de frente con una trampa de fuego, pero logras esquivarla en el último segundo.")
        tienda(jugador)
    else:
        escribir_lento("\nLas telarañas se pegan a tu rostro. De repente, ¡una Araña Gigante desciende del techo!")
        arana = {"nombre": "Araña Tejedora", "vida": 50, "vida_max": 50, "ataque": 12}
        resultado = combate(jugador, arana)
        if resultado == False:
            return
        elif resultado == "escapado":
            escribir_lento("Te alejas corriendo asustado, pero consigues llegar a una zona segura.")
        else:
            escribir_lento("Al registrar el nido de la araña, encuentras una poción olvidada.")
            jugador["pociones"] += 1
            
    # Evento 3: El Jefe Final
    print("\n" + CIAN + "===================================================" + RESET)
    escribir_lento("Llegas a una sala gigantesca con un gran cofre dorado en el centro.")
    escribir_lento("¡Pero antes de poder tocarlo, un rugido ensordecedor sacude todo el lugar!")
    
    jefe = {"nombre": f"{ROJO}{NEGRITA}Dragón de Obsidiana{RESET}", "vida": 110, "vida_max": 110, "ataque": 18}
    
    escribir_lento("\n¡Debes derrotar al jefe para reclamar tu tesoro!")
    resultado_final = combate(jugador, jefe)
    
    if resultado_final == True:
        print("\n" + AMARILLO + NEGRITA + "🏆 ¡FELICIDADES! 🏆" + RESET)
        escribir_lento("Has derrotado al Dragón de Obsidiana y has abierto el cofre legendario.")
        escribir_lento(AMARILLO + "¡Está lleno de oro, joyas y conocimiento infinito de Python!" + RESET)
        print(VERDE + "¡Gracias por jugar! Has completado el juego con éxito. 🎮✨" + RESET)
    elif resultado_final == "escapado":
        escribir_lento("\nIntentaste escapar del jefe final... pero no hay salida en esta sala. El dragón te alcanza fácilmente.")
        escribir_lento(ROJO + "Has perecido intentando huir del jefe final. Juego terminado. 💀" + RESET)

if __name__ == "__main__":
    jugar()
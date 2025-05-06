larg = float(input("Digite o valor da largura (m): "))
alt = float(input("Digite o valor da altura (m): "))

area = larg * alt
tinta = area / 2

print("Será necessário {:.1f} litros de tinta.".format(tinta))
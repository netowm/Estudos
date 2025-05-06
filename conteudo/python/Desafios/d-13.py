sal = float(input("Digite seu salário atual: R$"))
aum = sal * 0.15
salAtual = sal + aum

print("Seu novo salário com 15% de aumento será de R${:.2f}".format(salAtual))
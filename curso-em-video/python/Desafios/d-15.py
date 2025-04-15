dia = int(input("Digite quantos dias alugado: "))
km = int(input("Digite quantos km percorridos: "))
preco = (60 * dia) + (0.15 * km)
print("O total a pagar é de R${:.2f}".format(preco))
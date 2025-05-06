preco = float(input("Digite o preço atual: R$"))
desc = preco * 0.05
precoAtual = preco - desc

print("O preço com 5% de desconto será de R${:.2f}".format(precoAtual))
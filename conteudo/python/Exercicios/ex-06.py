num1 = int(input("Digite o 1° número: "))
num2 = int(input("Digite o 2° número: "))
soma = num1 + num2
mult = num1 * num2
div = num1 / num2
divi = num1 // num2
e = num1 ** num2
print("A soma é {}, \no produto {} e \na divisão é {:.2f}".format(soma, mult, div), end=" ")
print("Divisão Inteira {} e potência {}".format(divi, e))

# {:.2f}    =   2 casas decimais flutuantes
# \n        =   nova linha
# end       =   escreve tudo na mesma linha

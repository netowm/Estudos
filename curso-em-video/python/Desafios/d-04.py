algo = input("Digite: ")
print(type(algo))

print("{} é númerico: ".format(algo), algo.isnumeric())
print("{} é alfabético: ".format(algo), algo.isalpha())
print("{} é alfanumerico: ".format(algo), algo.isalnum())
print("{} está em maiúscula: ".format(algo), algo.isupper())
print("{} está em minúscula: ".format(algo), algo.islower())
print("{} está em capitalizada: ".format(algo), algo.istitle())

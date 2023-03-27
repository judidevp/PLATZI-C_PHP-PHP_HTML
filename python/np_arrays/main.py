import numpy as np

list=[0,1,2,3,4,5,6,7,8,9]
print (list)

print(type(list))

arr=np.array(list)
print(type(arr))
print(f"array {arr}")


matriz=[[1,2,3],[4,5,6],[7,8,9]]
matriznp=np.array(matriz)
print(f"matriz{matriznp}")
print(type(matriznp))

print(type(matriz))

print (arr[0]+arr[5])

print(f"posicion 0:{matriznp[0]}")
print(f"posicion 0, 2:{matriznp[0][2]}")
print(f"posicion 0, 1:{matriznp[0,1]}")
print(f"posicion desde 0:{matriznp[0:]}")
print(f"posicion desde 1:{matriznp[1:]}")
print(f"posicion desde 0 hasta 2 de uno en uno:{matriznp[::2]}")



number_list=[]
for element in range(0,10):
    number_list.append(element)

print(number_list)      


number_list_2=[element * 2 for element in range(0,10)]

print(number_list_2)

print('numeros pares\n')

number_list_pares=[]

for element in range(0,10):
    if element%2==0:
        number_list_pares.append(element)

print(number_list_pares)


number_list_pares_2=[element for element in range(0,10) if element%2==0]

print(number_list_pares_2)



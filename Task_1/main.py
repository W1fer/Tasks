n = input()
summa = 0
for i in range(len(n)):
    if n[i] == '(':
        summa += 1
    elif n[i] == ')':
        summa -= 1
    if summa == -1:
        print('неверная последовательность скобок ')
        break


if summa < 0:
    print('Имеется не открытая скобка ')
elif summa > 0:
    print('Имеется не закрытая скобка')
else:
    print('Все ок')

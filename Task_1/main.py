n = input()

if n.find(')') < n.find('('):
    print('неверная последовательность скобок ')
elif n.count('(') > n.count(')'):
    print(f'Имеется не закрытая скобка ')
elif n.count('(') < n.count(')'):
    print('Лишняя закрывающая скобка ')
else:
    print('Все Ок')


n = input()

if n.count('(') > n.count(')'):
    print('Имеется не закрытая скобка ')
elif n.count('(') < n.count(')'):
    print('Лишняя закрывающая скобка ')
else:
    print('Все Ок')

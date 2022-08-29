import pandas as pd
import pyautogui as pt
from time import sleep

pt.PAUSE=0.5
n=0
#s = pt.KEYBOARD_KEYS
#for l in s:
#    print(l)

"""sleep(3)
x, y = pt.position()
print(x, y)
"""
pt.click(503, 765)
pt.click(535, 697)


a = open('cchs/sal/templates/cartas/cp.txt')
for l in a:
    pt.click(1180, 220)
    c = l.split(';')
    pt.click(1170, 260)
    pt.click(601, 280)
    pt.write(c[0])
    pt.click(535, 322)
    pt.write(str(n))
    n+=1
    pt.click(545, 375)
    pt.write(str(c[1]))
    pt.click(1278, 469)

'''while n != 403:
    pt.click(623, 746)
    pt.hotkey('shift', 'up')
    pt.hotkey('ctrl', 'c')
    pt.press('left')
    pt.click(503, 765)
    pt.click(535, 697)
    pt.click(1180, 220)
    pt.click(1170, 260)
    pt.click(601, 280)
    pt.hotkey('ctrl', 'v')
    pt.press('backspace')
    pt.click(535, 322)
    pt.write(str(n))
    n+=1

    pt.click(1293, 422)'''
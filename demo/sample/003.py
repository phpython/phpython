
#! python

# input and operator if

x = int(raw_input("Please enter an integer: "))

if x < 0:
      x = 0
      print 'Negative changed to zero'
elif x == 0:
      print 'Zero'
elif x == 1:
      print 'Single'
else:
      print 'More'



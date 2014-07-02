
def armyAdd(user):
  file = open("codes.txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/codes.txt'))
  startData = open("/home/ubuntu/twill-0.9/startfile.txt", "r")
  startpoint = startData.read()
  startpoint = startpoint.rstrip('\n')
  print "startpoint = ", startpoint
  file.seek(int(startpoint), 0)
  user = str(user)
  codecount = open("/home/ubuntu/twill-0.9/users/" + user, "w")
  for line in range(1, (num_lines + 1)):
    code = file.readline()
    code = code.rstrip('\n')
    armyCheck()
    check = open("/home/ubuntu/twill-0.9/armyadd.txt", "r+")
    print code, "  ---  ", startpoint 
    checkZero = check.readline()
    if int(checkZero) != 0:
      startpoint = int(startpoint) + 1
      go(cA + 'army.php?action=invite_army_code&army_code=' + str(code))
      codecount.write(str(startpoint))
    else: 
      lastCode = open("/home/ubuntu/twill-0.9/lastcode.txt", "w")
      lastCode.write(str(line))
      break
  lastCode.close()
  check.close()
  startData.close()
  file.close()

def cycleArmyAdd():
  then = datetime.datetime.now()
  for x in range(1, (len(codeList) + 1)):
    login(str(codeList[int(x-1)]))
    user = str(codeList[int(x-1)])
    startPoint = open("/home/ubuntu/twill-0.9/users/" + user + ".txt", "r") # Opens individual code file to start where we left off
    startfile = open("/home/ubuntu/twill-0.9/startfile.txt", "w") # Opens temporary start file to hold users progress
    startdata = startPoint.readline()  				# writes users progress to temporary start file
    print "from cycle->", startdata
    startfile.write(startdata)
    startfile.close()
    startPoint.close()
    armyAdd(user)
    lastcode = open("/home/ubuntu/twill-0.9/lastcode.txt", "r")
    codecount = open("/home/ubuntu/twill-0.9/codecount.txt", "r")
    LastCode = lastcode.readline()
    CodeCount = codecount.readline()
    userid = (str(codeList[int(x-1)]))
    userprogress = open("/home/ubuntu/twill-0.9/users/" + userid + ".txt", "w")
    userprogress.write(CodeCount)
    lastcode.close()
    codecount.close()
    userprogress.close()
  now = datetime.datetime.now()
  log(now, then, "armyadd")

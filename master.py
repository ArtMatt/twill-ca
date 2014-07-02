from twill.commands import *
import random
from random import randint
import datetime

#def cycle():

grandList = ['matthewgcasey@gmail.com', 'Aphillistienio@gmail.com', 'Bphillistienio@gmail.com', 'phillistienio3@gmail.com', 'phillistienio4@gmail.com', '5phillistienio@gmail.com', '6phillistienio@gmail.com', '7phillistienio@gmail.com', 'guruphillistienio@gmail.com', 'mattsliferocks@gmail.com', 'phillistienioa@gmail.com', 'phillistienio2@gmail.com', 'wandphillistienio@gmail.com', 'exphillistienio@gmail.com', 'vizphillistienio@gmail.com', 'bombphillistienio@gmail.com', '0phillistienio@gmail.com', "1jew@grr.la","2jew@grr.la","3jew@grr.la","4jew@grr.la","5jew@grr.la","6jew@grr.la","7jew@grr.la","8jew@grr.la","9jew@grr.la","10jew@grr.la","11jew@grr.la","12jew@grr.la","13jew@grr.la","14jew@grr.la","15jew@grr.la","16jew@grr.la","17jew@grr.la"]

codeList = ['Bphillistienio@gmail.com', 'phillistienio3@gmail.com', 'phillistienio4@gmail.com', '5phillistienio@gmail.com', '6phillistienio@gmail.com', '7phillistienio@gmail.com', 'guruphillistienio@gmail.com', 'mattsliferocks@gmail.com', 'phillistienioa@gmail.com', 'phillistienio2@gmail.com', 'wandphillistienio@gmail.com', 'exphillistienio@gmail.com', 'vizphillistienio@gmail.com', 'bombphillistienio@gmail.com', '0phillistienio@gmail.com', '1jew@grr.la', '2jew@grr.la', '3jew@grr.la']

monsterList = ['Aphillistienio@gmail.com', 'Bphillistienio@gmail.com', 'phillistienio3@gmail.com', 'phillistienio4@gmail.com', '5phillistienio@gmail.com', '6phillistienio@gmail.com', '7phillistienio@gmail.com', 'guruphillistienio@gmail.com', 'mattsliferocks@gmail.com', 'phillistienioa@gmail.com', 'phillistienio2@gmail.com', 'wandphillistienio@gmail.com', 'exphillistienio@gmail.com', '1jew@grr.la']

conqDuelList = ['matthewgcasey@gmail.com', 'Aphillistienio@gmail.com', 'Bphillistienio@gmail.com', 'phillistienio3@gmail.com', 'phillistienio4@gmail.com', '5phillistienio@gmail.com', '6phillistienio@gmail.com', '7phillistienio@gmail.com', 'guruphillistienio@gmail.com', 'mattsliferocks@gmail.com', 'phillistienioa@gmail.com', 'phillistienio2@gmail.com', 'wandphillistienio@gmail.com', 'exphillistienio@gmail.com', 'vizphillistienio@gmail.com', 'bombphillistienio@gmail.com', "1jew@grr.la","2jew@grr.la","3jew@grr.la","4jew@grr.la","5jew@grr.la","6jew@grr.la","7jew@grr.la","8jew@grr.la","9jew@grr.la","10jew@grr.la","11jew@grr.la","12jew@grr.la","13jew@grr.la","14jew@grr.la","15jew@grr.la","16jew@grr.la","17jew@grr.la"]

healList = [ 'vizphillistienio@gmail.com', 'bombphillistienio@gmail.com']

polyList = ['matthewgcasey@gmail.com', 'Aphillistienio@gmail.com', 'Bphillistienio@gmail.com', 'phillistienio3@gmail.com', 'phillistienio4@gmail.com', '5phillistienio@gmail.com', '6phillistienio@gmail.com', '7phillistienio@gmail.com', 'guruphillistienio@gmail.com', 'mattsliferocks@gmail.com', 'phillistienioa@gmail.com', 'phillistienio2@gmail.com', 'wandphillistienio@gmail.com', 'exphillistienio@gmail.com', 'vizphillistienio@gmail.com', 'bombphillistienio@gmail.com']

newList = ["1jew@grr.la","2jew@grr.la","3jew@grr.la","4jew@grr.la","5jew@grr.la","6jew@grr.la","7jew@grr.la","8jew@grr.la","9jew@grr.la","10jew@grr.la","11jew@grr.la","12jew@grr.la","13jew@grr.la","14jew@grr.la","15jew@grr.la","16jew@grr.la","17jew@grr.la"]

pw = "Stew"
cA = 'http://web3.castleagegame.com/castle_ws/'
guildId = '&guild_id=100003851490194_1340565613'

def log(now, then, filename):
  file = open("/home/ubuntu/twill-0.9/time" + filename + ".txt", "w")
  file.write(str(then))
  file.write('\n')
  file.write(str(now))
  file.write('\n')
  file.write(str(now - then))
  file.write('\n')
  

def login(name):
  go(cA + "connect_login.php?platform_action=CA_web3_logout")
  go(cA + 'connect_login.php')
  fv(1, "player_email", str(name))
  fv(1, "player_password", pw)
  print name
  submit()

def cycleArmyAdd():
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    user = str(grandList[int(x-1)])
    login(user)
    armyAdd(user)
  now = datetime.datetime.now()
  log(now, then, "armyadd")

def cycleBackwardsArmyAdd():
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    user = str(grandList[-(int(x))])
    login(user)
    armyAdd(user)
  now = datetime.datetime.now()
  log(now, then, "backwardsarmyadd")

def armyAccept():
  go(cA + "index.php?feed=allies&news_feed_accept=2")

def cycleArmyAccept():
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    armyAccept()

def prayer():
  go(cA + 'symbols.php?action=tribute&symbol=1&ajax=1')
 
def archive():
  go(cA + 'item_archive_bonus.php?action=enable')

def resource():
  go (cA + "guildv2_conquest_command.php?" + guildId + "&collect=true")

def crystal():
  go (cA + 'guildv2_conquest_command.php?' + guildId + "&demi_collect=true")

def top4():
  archive()
  prayer()
  resource()
  crystal()

def stamina():
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  z = file.readline()
  z = z.rstrip('\n')
  if z == "cron":
    m = 4
  else:
    m = 9
  if z == "serp":
    go(cA + 'battle_expansion_monster.php?action=attackDragon20&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y))
  else:
    go(cA + 'battle_expansion_monster.php?action=attackDragonSpecific&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y) + '&attack_key=' + str(m))

def staminaNew():
  increaseStat("stamina")
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  z = file.readline()
  z = z.rstrip('\n')
  if z == "cron":
    m = 2
  else:
    m = 3
  if z == "serp":
    go(cA + 'battle_expansion_monster.php?action=attackDragon10&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y))
  else:
    go(cA + 'battle_expansion_monster.php?action=attackDragonSpecific&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y) + '&attack_key=' + str(m))
  increaseStat("stamina")

def energy():
  increaseStat("energy")
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  z = file.readline()
  z = z.rstrip('\n')
  e = file.readline()
  e = e.rstrip('\n')
  if z == "gene":
    go(cA + 'battle_expansion_monster.php?action=attackDragonSpecific&guild_creator_id=100003851490194&attack_key=8&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y))
  else:
    if e == "fort":
      print e
      fortify("2")
    else:
      go(cA + 'quests.php?do_quest=10008&excavation=1000' + str(e))

def energyNew():
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  z = file.readline()
  z = z.rstrip('\n')
  e = file.readline()
  e = e.rstrip('\n')
  if z == "gene":
    go(cA + 'battle_expansion_monster.php?action=attackDragonSpecific&guild_creator_id=100003851490194&attack_key=2&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y))
  elif z == "serp":
    go(cA + 'battle_expansion_monster.php?action=defendDragon&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y))
  else:
    fortify("1")

def seige():
  file = open("/home/ubuntu/twill-0.9/SCHEDULE.txt", "r")
  x = file.readline()
  x = x.rstrip('\n')
  y = file.readline()
  y = y.rstrip('\n')
  go (cA + 'guildv2_battle_monster.php?action=manualAssist&type=expansion_monster&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y))

def cycleMonster():
  then = datetime.datetime.now()
  for x in range(1, (len(monsterList) + 1)):
    login(monsterList[int(x - 1)])
    for x in range(1,6): 
      energy()
    for x in range(1,6): 
      stamina()
    for x in range(1,6): 
      energy()
    for x in range(1,6): 
      stamina()
    seige()
  now = datetime.datetime.now()
  log(now, then, "monster")

def cycleMonsterNew():
  then = datetime.datetime.now()
  for x in range(1, (len(newList) + 1)):
    login(newList[int(x - 1)])
    for x in range(1,3): 
      energyNew()
    for x in range(1,3): 
      staminaNew()
    for x in range(1,3): 
      energyNew()
    for x in range(1,3): 
      staminaNew()
    seige()
  now = datetime.datetime.now()
  log(now, then, "monsternew")

def cycleTop4():
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    top4()

def top2():
  crystal()
  resource()

def cycleTop2():
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    top2()
  now = datetime.datetime.now()
  log(now, then, "resource")

def collectAll():
  for y in range (1, 3):
    for x in range(1, 6):
      go (cA + 'battle_expansion_monster.php?action=attackDragonSpecific&guild_creator_id=100003851490194&guild_created_at=1340565613&slot=' + str(x) + '&monster_slot=' + str(y) + '&action=collectReward')

def cycleCollectAll():
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    collectAll()
  now = datetime.datetime.now()
  log(now, then, "collectall")

def daily():
  archive()
  prayer()

def cycleDaily():
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    daily()
  now = datetime.datetime.now()
  log(now, then, "daily")

def cycleSeige():
  then = datetime.datetime.now()
  for x in range(1, (len(monsterList) + 1)):
    login(monsterList[int(x - 1)])
    seige()
  for x in range(1, (len(newList) + 1)):
    login(newList[int(x - 1)])
    seige()
  now = datetime.datetime.now()
  log(now, then, "seige")

def exca3():
    go(cA + 'quests.php?do_collect=10008&excavation=10008')

def exca4():
    go(cA + 'quests.php?do_collect=10008&excavation=10004')

def bqh():
  save_html('/home/ubuntu/twill-0.9/logintime.txt')
  file = open("/home/ubuntu/twill-0.9/logintime.txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/index.php'))
  for line in range(1, (num_lines + 1)):
    line = file.readline()
    for x in range(1, len(line)):
      if line[x] == 'b' and line[(x + 1)] == 'q':
        bqhLine = open("/home/ubuntu/twill-0.9/bqhLine.txt", "w")
        bqhLine.write(line)
        for x in range(1, len(line)):
          if line[x] == 'v' and line[(x + 1)] == 'a':
            bqh = open("/home/ubuntu/twill-0.9/bqh.txt", "w")
            for y in range(1,33):
              bqh.write(line[6 + x + y])

def guildID():
  go(cA + 'festival_battle_home.php')
  save_html('/home/ubuntu/twill-0.9/guildID.txt')
  file = open("/home/ubuntu/twill-0.9/guildID.txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/guildID.txt'))
  for line in range(1, (num_lines + 1)):
    line = file.readline()
    for x in range(1, len(line)):
      if len(line) > 26:
        if line[x] == '?' and line[(x - 5)] == 'e' and line[(x - 12)] == "d":
          Line = open("/home/ubuntu/twill-0.9/guildLine.txt", "w")
          Line.write(line)
          LINE = open("/home/ubuntu/twill-0.9/enemyGID.txt", "w")
          for y in range(1,17):
            LINE.write(line[54 + y])

def enemyID():
  guildID()
  for x in range(1,5):
    guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
    enemyGuildID = guild.readline()
    go(cA + 'festival_guild_battle.php?action=enter_battle&id=' + enemyGuildID + "&attacking_position=" + str(x))
    save_html('/home/ubuntu/twill-0.9/latestGuildBattle.txt')
    guildBattle = open('/home/ubuntu/twill-0.9/latestGuildBattle.txt', "r")
    num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/latestGuildBattle.txt'))
    Line = open("/home/ubuntu/twill-0.9/enemyTargets" + str(x) + ".txt", "a")
    clear = open("/home/ubuntu/twill-0.9/enemyTargets" + str(x) + ".txt", "w")
    clear.close()
    for line in range(1, (num_lines + 1)):
      line = guildBattle.readline()
      for x in range(1, len(line)):
        if len(line) > 79:
          if line[x] == 'i' and line[(x - 2)] == 't' and line[(x - 11)] == "m":
            Line.write(line)
            

def conqDuel():
  array = []
  X = open("/home/ubuntu/twill-0.9/victims.txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/victims.txt'))
  for x in range(1, (num_lines + 1)):
    line = X.readline()
    array.append(str(line))
  random.shuffle(array)
  x = str(array[1])
  x = x.rstrip('\n')
  Y = open("/home/ubuntu/twill-0.9/bqh.txt", "r") 
  y = Y.readline()
  y = y.rstrip('\n')
  go(cA + 'conquest_duel.php?action=battle&duel=false&target_id=' + x + '&bqh=' + y)

def cycleConqDuel():
  then = datetime.datetime.now()
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    bqh()
    for x in range(0,5):
      conqDuel() 
  now = datetime.datetime.now()
  log(now, then, "conqduel") 

def cycleExca3():
  then = datetime.datetime.now()
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    exca3()
  now = datetime.datetime.now()
  log(now, then, "exca3")

def cycleExca4():
  then = datetime.datetime.now()
  for x in range(1, (len(conqDuelList) + 1)):
    login(str(conqDuelList[(x - 1)]))
    exca4()
  now = datetime.datetime.now()
  log(now, then, "exca4")

def festJoin():
  guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
  guildID = guild.readline()
  go(cA + 'festival_guild_battle.php?action=enter_battle&id=' + guildID)
  enemyID()

def cycleFestJoin():
  then = datetime.datetime.now()
  for x in range(1, (len(healList) + 1)):
    login(str(healList[(x - 1)]))
    guildID() 
    enemyID()
    festJoin()
  for x in range(1, (len(polyList) + 1)):
    login(str(polyList[(x - 1)]))
    enemyID()
    festJoin()
  for x in range(1, (len(newList) + 1)):
    login(str(newList[(x - 1)]))
    enemyID()
    festJoin()
  now = datetime.datetime.now()
  log(now, then, "festjoin")

def cycleFestJoinNew():
  for x in range(1, (len(newList) + 1)):
    login(str(newList[(x - 1)]))
    guildID() 
    enemyID() 
    festJoin()

def fest():
  guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
  guildID = guild.readline()
  bqh = open("/home/ubuntu/twill-0.9/bqh.txt", "r")
  BQH = bqh.readline()
  go(cA + "festival_guild_battle.php?action=guild_attack&attacking_position=2&target_id=100003851490194&bqh=" + BQH + "&id=" + guildID + "&view_allies=true&attack_type=special&attack_key=1")

def festAttack():
  guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
  guildID = guild.readline()
  bqh = open("/home/ubuntu/twill-0.9/bqh.txt", "r")
  BQH = bqh.readline()
  randomArray = [1,2,3,4]
  random.shuffle(randomArray)
  rand = randomArray[0]
  #rand = 1 
  targets = open("/home/ubuntu/twill-0.9/enemyTargets" + str(rand) + ".txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/enemyTargets' + str(rand) + '.txt'))
  enemies = []
  for line in range(1, (num_lines + 1)):
    line = targets.readline()
    line = line.rstrip('\t')
    for x in range(1, len(line)):
      if line[x] == "4" and line[x - 1] == '"':
        enemy = ""
        for y in range(0,15):
          enemy = enemy + line[(y + x)]
        enemies.append(enemy)
  print enemies
  print enemies[1]
  random.shuffle(enemies)
  go(cA + "festival_guild_battle.php?action=guild_attack&attacking_position=" + str(rand) + "&target_id=" + str(enemies[1]) + "&bqh=" + BQH + "&id=" + guildID + "&view_allies=false&attack_type=normal&attack_key=1")
  

def cycleFest():
  then = datetime.datetime.now()
  for x in range(1, (len(healList) + 1)):
    login(str(healList[(x - 1)]))
    guildID()
    bqh()
    for x in range(0,10):
      fest()
  now = datetime.datetime.now()
  log(now, then, "fest")

def cycleFestAttack():
  then = datetime.datetime.now()
  for x in range(1, (len(newList) + 1)):
    login(str(newList[(x - 1)]))
    guildID() 
    bqh()
    for x in range(0,10):
      festAttack()
  now = datetime.datetime.now()
  log(now, then, "festattack")

def festPoly():
  guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
  guildID = guild.readline()
  bqh = open("/home/ubuntu/twill-0.9/bqh.txt", "r")
  BQH = bqh.readline()
  randomArray = [1,2,3,4]
  random.shuffle(randomArray)
  rand = randomArray[0]
  #rand = 1 
  targets = open("/home/ubuntu/twill-0.9/enemyTargets" + str(rand) + ".txt", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/enemyTargets' + str(rand) + '.txt'))
  enemies = []
  for line in range(1, (num_lines + 1)):
    line = targets.readline()
    line = line.rstrip('\t')
    for x in range(1, len(line)):
      if line[x] == "4" and line[x - 1] == '"':
        enemy = ""
        for y in range(0,15):
          enemy = enemy + line[(y + x)]
        enemies.append(enemy)
  random.shuffle(enemies)
  go(cA + "festival_guild_battle.php?action=guild_attack&attacking_position=" + str(rand) + "&target_id=" + str(enemies[1]) + "&bqh=" + BQH + "&id=" + guildID + "&view_allies=false&attack_type=special&attack_key=1")

def cycleFestPoly():
  then = datetime.datetime.now()
  for x in range(1, (len(polyList) + 1)):
    login(str(polyList[(x - 1)]))
    guildID() 
    enemyID()
    bqh()
    for x in range(0,10):
      festPoly()
  now = datetime.datetime.now()
  log(now, then, "festpoly")

def festCollect():
  guild = open("/home/ubuntu/twill-0.9/enemyGID.txt", "r")
  guildID = guild.readline()
  go(cA + "festival_guild_battle.php?action=collect_battle&id=" + guildID)

def cycleFestCollect():
  then = datetime.datetime.now()
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[(x - 1)]))
    guildID()
    festCollect()
  now = datetime.datetime.now()
  log(now, then, "festcollect")

def armyCheck():
  go(cA + 'army.php')
  save_html('/home/ubuntu/twill-0.9/army.php')
  file = open("/home/ubuntu/twill-0.9/army.php", "r")
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/army.php'))
  print num_lines
  for line in range(1, (num_lines + 1)):
    line = file.readline()
    for x in range(1, len(line)):
      if line[x] == '<' and line[(x + 1)] == 'b' and line[(x + 2)] == '>' and line[(x - 2)] == 'e':
        print "Successful Check?!"
        armyLine = open("/home/ubuntu/twill-0.9/armyadd.txt", "w")
        armyLine.write(line[(x + 3)])

def freeRolls():
  go (cA + "index.php?action=claim_june_2014_free_rolls_promo")

def cycleFreeRolls():
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    freeRolls()

def userMake():
  for x in range(1, (len(grandList) + 1)):
    login(str(grandList[int(x-1)]))
    userid = str(grandList[int(x-1)])
    userprogress = open("/home/ubuntu/twill-0.9/users/" + userid + ".txt", "w")
    userprogress.write("0")

def loadCreate(original, target):
  ORIGINAL = open("/home/ubuntu/twill-0.9/" + original, "r")
  Original = ORIGINAL.read()
  TARGET = open("/home/ubuntu/twill-0.9/" + target, "w")
  TARGET.write(Original)
  ORIGINAL.close()
  TARGET.close()

def showForms():
  login('matthewgcasey@gmail.com')
  go(cA + 'festival_guild_battle.php?id=10744_1403474393')
  showforms

def defend():
  file = open("/home/ubuntu/twill-0.9/defense.txt", "r")
  slot = file.readline()
  go(cA + "guildv2_conquest_expansion_fort.php?guild_id=100003851490194_1340565613&slot=2&action=register&slot=" + slot)

def cycleDefend():
  for x in range(1, (len(healList) + 1)):
    login(str(healList[int(x-1)]))
    defend()

def fortify(option):
  file = open("/home/ubuntu/twill-0.9/defense.txt", "r")
  slot = file.readline()
  slot = slot.rstrip('\n')
  go(cA + 'guildv2_conquest_expansion_fort_2.php?slot=' + slot + '&fort_id=2&option=' + option)


def makeUserCode(user):
  seedFile = open("/home/ubuntu/twill-0.9/codes.txt", "r")
  SEEDFILE = seedFile.read()
  newFile = open("/home/ubuntu/twill-0.9/users/codes/" + user + ".txt", "w") 
  newFile.write(SEEDFILE)

def cycleMakeUserCode():
  for x in range(1, (len(newList) + 1)):
    user = str(newList[-(int(x))])
    makeUserCode(user)


def armyAdd(user):
  tempFile = open("/home/ubuntu/twill-0.9/users/codes/" + user + ".txt", "r") 
  num_lines = sum(1 for line in open('/home/ubuntu/twill-0.9/users/codes/' + user + '.txt'))
  array = []
  for line in range(1, (num_lines + 1)):
    line = tempFile.readline()
    line = line.rstrip('\n')
    array.append(line)
  for line in range(1, (num_lines + 1)):
    armyCheck()
    check = open("/home/ubuntu/twill-0.9/armyadd.txt", "r+")
    checkZero = check.readline()
    print checkZero
    if int(checkZero) != 0:
      code = array.pop(0)
      print code, " ALA! ---> ", user
      go(cA + 'army.php?action=invite_army_code&army_code=' + str(code))
    else:
      tempFile.close()
      finalFile = open("/home/ubuntu/twill-0.9/users/codes/" + user + ".txt", "w") 
      print "this happened"
      print len(array)
      for x in range(0, len(array)):
        finalFile.write(array[x])
        finalFile.write("\n")
      break 

def joinClan():
  go(cA + 'guildv2_home.php?action=requestJoin&guild_id=100003851490194_1340565613')

def cycleJoinClan():
  for x in range(1, (len(newList) + 1)):
    user = str(newList[-(int(x))])
    login(user)
    joinClan()

def increaseStat(stat):
  go(cA + 'keep.php?upgrade=' + stat  + '_max')

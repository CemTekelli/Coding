nom = ""
scores = []
participants = []

while nom != "null" :

    nom = input("votre nom?")

    if nom == "null" :
        continue

    participants.append(nom)
    score = 0

    for i in range(5) :
        score += int(input("Avez-vous atteint ou raté la cible " + str(i+1) +  "?" +  "(1 pour atteint, 0 pour raté)"))
    scores.append(score)

for i in range(len(scores)) :
    print("le score de", participants[i], "est de", scores[i])



print("la moyenne est de : ", sum(scores)/len(scores))
print("le plus grand score est de : ",max(scores))
    



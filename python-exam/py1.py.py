#Mettez votre code ici

class Agence():
	def __init__(self, nom, adresse, numero, mail="") :

		self.nom = nom
		self.adresse = adresse
		self.numero = numero
		self.mail = mail
		self.biens = []

	def aVendre(self, maison):

		self.biens.append(maison)

	def offre(self, prix=0):

		if self.mail != "" :

			print("En vente Chez", self.nom, self.adresse )
			print(self.numero)

			for i in range(len(self.biens)) :
				print(self.biens[i].genre, " : ", self.biens[i].adresse)

		else :

			print("En vente Chez", self.nom, self.adresse )
			print(self.mail, self.numero)

			for i in range(len(self.biens)) :
				print(self.biens[i].genre, " : ", self.biens[i].adresse)

	def vendu(self, bien):
		print(self.nom, self.adresse)
		print("a vendu")
		print(bien.genre, ":", bien.adresse)
		self.biens.remove(bien)





class Maison():
	def __init__(self, adresse, genre="maison", superficie="sur demande", prix="sur demande") :

		self.adresse = adresse
		self.genre = genre
		self.superficie = superficie
		self.prix = prix


	def toString(self):

		if self.superficie != "sur demande" :
			return (self.genre, self.adresse, self.superficie)
		if self.prix != "sur demande" :
			return (self.genre, self.adresse, self.prix)
		else :
			return (self.genre, self.adresse, )



			
#ATTENTION: Vous ne pouvez pas modifier le code de la classe MonImmo!
#Mais pour tester votre code, vous pouvez mettre les lignes de cette classe en commentaire. 
class Immo:
	def main():
		#Construction d'une agence immobilière
		#1.1
		#Écrivez le code qui permet de créer une première agence immobilière. 

		monImmo =  Agence('Immo-Lou','Boulevard du Jardin Botanique 38, 1000 Bruxelles','02 211 78 11')
		#1.2
		#Écrivez le code qui permet de créer une deuxième agence immobilière.
		#La valeur du champ 'email' doit être facultative.
		autreImmo = Agence('LiberImmo','Boulevard Franklin Roosevelt 50, 1050 Bruxelles','02 650 21 11','info@liberimmo.be')
		#2
		#Écrivez le code qui permet de créer une maison.
		#Pour tout bien, il faut fournir l'adresse, elle est obligatoire
		maison1 = Maison('Sablon 1, 1000 Bruxelles')
		#3
		#3.1
		#Écrivez le code qui permet d'encoder le type de la maison
		#La valeur par défaut du champ 'type' est 'Maison'
		maison2 = Maison('Sablon 2, 1000 Bruxelles','Villa')
		maison3 = Maison('Sablon 3, 1000 Bruxelles','Bel-etage')
		maison4 = Maison('Sablon 4, 1000 Bruxelles','Château')
		maison5 = Maison('Sablon 5, 1000 Bruxelles','Bungalow')
		maison6 = Maison('Sablon 6, 1000 Bruxelles','Maison de campagne')
		maison7 = Maison('Sablon 7, 1000 Bruxelles','Chalet')
		#3.2
		#Écrivez le code qui permet d'encoder la superficie de la maison
		#La valeur par défaut du champ 'surface' est 'Sur demande'
		maison8 = Maison('Sablon 8, 1000 Bruxelles','Ferme',650)
		#3.3
		#Écrivez le code qui permet d'encoder le prix de la maison
		#La valeur par défaut du champ 'prix' est 'Sur demande'
		maison9 = Maison('Sablon 9, 1000 Bruxelles','Maison de maître',1800,15000000)
		maison10 = Maison('Sablon 10, 1000 Bruxelles','Manoir',1200,24000000)
		#4.
		#Écrivez le code qui permet de stocker la liste des biens en vente chez une agence particulière.
		#4.1 
		#Toutes les maisons ci-dessus son en vente chez autreImmo
		autreImmo.aVendre(maison1)
		autreImmo.aVendre(maison2)
		autreImmo.aVendre(maison3)
		autreImmo.aVendre(maison4)
		autreImmo.aVendre(maison5)
		autreImmo.aVendre(maison6)
		autreImmo.aVendre(maison7)
		#4.2
		#Toutes les maisons ci-dessus son en vente chez monImmo
		monImmo.aVendre(maison8)
		monImmo.aVendre(maison9)
		monImmo.aVendre(maison10)
		#5
		print()
		#Écrivez le code qui permet d'afficher toutes les propriétés d'un bien
		#5.1.
		#Affiche le type (i.e. 'Maison') et l'adresse d'une maison
		print(maison1.toString())
		#5.2.
		#Affiche également le prix et la superficie
		# Si le prix est sur demande, il affiche "Prix: Sur demande", sinon par example, "Prix: 2000 euro"
		# Si la superficie est sur demande, il affiche "Superficie: Sur demande", sinon par example, "Superficie: 2000 m2"
		print(maison10.toString())
		#6
		#Écrivez le code qui permet d'afficher toutes les propriétés en vente chez une agence
		#Il doit afficher: "En vente chez" et ensuite le nom et l'adresse d'une agence
		#Et sur une deuxième ligne le numéro de téléphone de l'agence
		#6.1
		print()
		#Affiche la liste des biens en vente chez monImmo
		monImmo.offre()
		#6.2
		print()
		#Si l'addresse courriel est connue aussi, elle doit être affichée avant le numéro de téléphone, sur la même ligne
		#Affiche la liste des biens en vente chez autreImmo
		autreImmo.offre()
		#7
		print()
		#Écrivez le code qui permet d'afficher toutes les propriétés en vente chez une agence, dont le prix est connu et inférieur à une valeur donnée
		monImmo.offre(20000000)
		#8
		print()
		#Écrivez le code qui supprime un bien vendu de la liste et affiche ses informations.
		autreImmo.vendu(maison2)
			
Immo.main()
#L'appel de main devra donner le résultat suivant:
"""
Maison : Sablon 1, 1000 Bruxelles
Manoir : Sablon 10, 1000 Bruxelles(24000000 euro 1200m2)

En vente chez:
Immo-Lou Boulevard du Jardin Botanique 38, 1000 Bruxelles
02 211 78 11
Ferme : Sablon 8, 1000 Bruxelles(650m2)
Maison de maître : Sablon 9, 1000 Bruxelles(15000000 euro 1800m2)
Manoir : Sablon 10, 1000 Bruxelles(24000000 euro 1200m2)

En vente chez:
LiberImmo Boulevard Franklin Roosevelt 50, 1050 Bruxelles
info@liberimmo.be 02 650 21 11
Maison : Sablon 1, 1000 Bruxelles
Villa : Sablon 2, 1000 Bruxelles
Bel-etage : Sablon 3, 1000 Bruxelles
Château : Sablon 4, 1000 Bruxelles
Bungalow : Sablon 5, 1000 Bruxelles
Maison de campagne : Sablon 6, 1000 Bruxelles
Chalet : Sablon 7, 1000 Bruxelles

En vente chez:
Immo-Lou Boulevard du Jardin Botanique 38, 1000 Bruxelles
02 211 78 11
Prix inférieur à  20000000
Maison de maître : Sablon 9, 1000 Bruxelles(15000000 euro 1800m2)

LiberImmo Boulevard Franklin Roosevelt 50, 1050 Bruxelles
a vendu:
Villa : Sablon 2, 1000 Bruxelles
"""
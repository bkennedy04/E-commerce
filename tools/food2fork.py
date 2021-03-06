# this script utilizes the food2fork api to pull recipes for website

import requests, json

key = mykey
search_url = 'http://food2fork.com/api/search'
recipe_url = 'http://food2fork.com/api/get'

# Gets json from f2f website
# Data passed in can include ingredients to search (e.g. 'q':'chicken')
r = requests.post(search_url, data={'key': key})
data = ''
#if r.status_code == 200:
data = json.loads(r.text)
#	print(data)
#else:
#	print('Request failed')

# Gets the recipe_info for recipe 0 from above dictionary
#id = data['recipes'][0]['recipe_id']
#r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
#recipe_info = json.loads(r2.text)['recipe']		

def f2furl(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('F2F URL: \n\t',recipe_info['f2f_url'])
	print('\n')

def sourceurl(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('Source URL: \n\t',recipe_info['source_url'])
	print('\n')

def publisher(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('Publisher: \n\t',recipe_info['publisher'])
	print('\n')
	
def recipeid(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('Recipe ID: \n\t',recipe_info['recipe_id'])
	print('\n')
	
def	title(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('Title: \n\t',recipe_info['title'])
	print('\n')
	
def socialrank(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('Social Rank: \n\t',recipe_info['social_rank'])
	print('\n')
	
def publisherurl(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('Publisher URL: \n\t',recipe_info['publisher_url'])
	print('\n')
	
def imageurl(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('Image URL: \n\t',recipe_info['image_url'])
	print('\n')
	
def ingredients(dish):
	id = data['recipes'][dish]['recipe_id']
	r2 = requests.post(recipe_url, data={'key': key, 'rId': id})
	recipe_info = json.loads(r2.text)['recipe']
	print('Ingredients: ')
	for ingr in recipe_info['ingredients']:
		print('\t',ingr)
	print('\n')
		
print('\n')


dishChoice = int(input('Choose dish:'))
		
#	Or you can hardcode it:
#dishChoice = 1

print('\n\n')

title(dishChoice)
recipeid(dishChoice)
imageurl(dishChoice)
ingredients(dishChoice)
#f2furl(dishChoice)
sourceurl(dishChoice)
#publisher(dishChoice)		
#socialrank(dishChoice)		
#publisherurl(dishChoice)

print('\n')

#print("Complete")

# recipe_info.keys()	 <- prints all the keys of recipe_info, which is a dictionary
#dict_keys(['f2f_url', 'source_url', 'publisher', 'recipe_id', 'title', 
#'social_rank', 'publisher_url', 'image_url', 'ingredients'])

# Prints all the recipe titles
#for recipe_info in data['recipes']:
#	print(recipe_info['title'])

# Prints all the ingredients of one recipe
#for ingr in recipe_info['ingredients']:
#	print(ingr)

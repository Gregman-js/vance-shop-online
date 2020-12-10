import requests
from bs4 import BeautifulSoup

url = 'https://www.nike.com/pl/w/kids-buty-v4dhzy7ok'
category = 'CategoryEnum::CHILD'

page = requests.get(url)
soup = BeautifulSoup(page.content, 'html.parser')
# grid = soup.find('div', {'class': 'product-grid__items'})
# products = grid.findChildren('div', )
products = soup.select('div.product-grid__items > div.product-card')
total = len(products)
config = ''
# product-card__link-overlay
for id, product in enumerate(products):
    print('scraping {} of total {}'.format(id+1, total))
    link = product.find('a', {'class': 'product-card__link-overlay'})['href']
    productPage = requests.get(link)
    productSoup = BeautifulSoup(productPage.content, 'html.parser')
    name = productSoup.find('h1', {'id': 'pdp_product_title'}).text.replace('\'', '\\\'')
    price = productSoup.find('div', {'class': 'product-price'}).text.replace(',', '.')[:-3]
    imgLink = productSoup.findAll('img', {'class': 'css-viwop1'})[1]['src']
    desc = productSoup.select('div.description-preview > p')[0].text.replace('\'', '\\\'')
    imgData = requests.get(imgLink)
    imgName = imgLink.split('/')[-1]
    file = open("./assets/products/" + imgName, "wb")
    file.write(imgData.content)
    file.close()
    config += """
    [
        'name' => '{name}',
        'category' => {category},
        'price' => {price},
        'img' => '{imgName}',
        'desc' => '{desc}',
    ],""".format(name=name, category=category, price=price, imgName=imgName, desc=desc)
print(config)

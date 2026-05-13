# 3Delicias - Projecte SMX

Web per a una pastisseria 3D amb formulari de registre i base de dades MySQL.

## 📁 Estructura

```
3Delicias/
├── docs/
│   └── Memoria tecnica 3delicias.pdf
├── web/
│   ├── index.html
│   ├── estils.css
│   ├── registre.php
│   └── config.php
├── app/
│   └── odoo.conf
├── srv/
│   └── compose.yml
├── sql/
│   └── database.sql
└── README.md
```

## 🚀 Instal·lació

### 1. Crear la base de dades

- Entra a phpMyAdmin
- Crea una base de dades anomenada `delicias`
- Executa el fitxer `sql/database.sql`

### 2. Configurar la connexió

Edita `web/config.php` i posa les teves dades:

```php
$host = 'localhost';
$dbname = 'delicias';
$user = 'el_teu_usuari';
$pass = 'la_teva_contrasenya';
```

### 3. Pujar al servidor

- Puja tots els fitxers al servidor
- Accedeix a la web

## 📝 Com funciona

1. L'usuari omple el formulari
2. JavaScript envia les dades a `web/registre.php`
3. El PHP guarda les dades a MySQL
4. Es mostra un missatge de confirmació

## 🔧 Veure els clients

A phpMyAdmin:

```sql
SELECT * FROM clients;
```

---

### Autors
**Enzo Marin** i **Juan Morillas Cordani**

---

## Context

L'empresa és una pastisseria especialitzada en la creació de postres i decoracions completament personalitzades mitjançant l'ús d'impressores 3D d'aliments. Aquest enfocament combina tècniques avançades de fabricació digital amb la tradició rebostera, permetent treballar amb ingredients comestibles per a donar forma a dissenys precisos, creatius i visualment impactants. El negoci integra art, innovació i gastronomia, oferint resultats que serien difícils d'aconseguir amb mètodes convencionals.

---

## Objectiu

El propòsit principal és desenvolupar postres úniques i altament personalitzables aprofitant les possibilitats que brinda la impressió 3D. L'empresa busca fusionar creativitat, sabor i tecnologia per a elevar l'experiència del client, aportant solucions dolces innovadores que transformin la forma en què es conceben i gaudeixen els productes de rebosteria. Amb aquest enfocament, es pretén oferir elaboracions exclusives, adaptades als gustos i necessitats específiques de cada persona o esdeveniment.

---

## Abast del projecte

| Aspecte | Descripció |
|---------|-----------|
| **Disseny i modelatge** | Figures, decoracions i estructures comestibles mitjançant software compatible amb impressió 3D |
| **Producció** | Postres personalitzats utilitzant impressores 3D d'aliments |
| **Ingredients** | Selecció d'ingredients aptes per a l'extrusió i la impressió d'alta precisió |
| **Prototips** | Creació de prototips, proves de textura i ajustos de qualitat |
| **Personalització** | Per a esdeveniments (aniversaris, casaments, celebracions corporatives, etc.) |
| **Producte final** | Presentació de productes finals llestos per a consum |

---

## Diagrama de Procés

![Diagrama de procés](proces.png)

---

Projecte creat per a l'assignatura de SMX.

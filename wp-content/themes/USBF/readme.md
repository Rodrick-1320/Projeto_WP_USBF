<p align="center" id="sobre">
<img  src="https://uploaddeimagens.com.br/images/003/855/901/full/catskillet.png" alt="Catskillet"  title="Catskillet" width="300">
</p>
<h1 align="center">Boilerplate Frontend with Jquery</h1>
<div align="center">
Dependencies and requirements used in this boilerplate:

[![Badge](https://img.shields.io/badge/NodeJS-16.13.2-lightblue?style=for-the-badge&logo=Node.js)](https://nodejs.org/en/)
[![Badge](https://img.shields.io/badge/Npm-8.1.2-lightblue?style=for-the-badge&logo=npm)](https://www.npmjs.com/)
[![Badge](https://img.shields.io/badge/jQuery-^3.6.0-lightblue?style=for-the-badge&logo=jquery)](https://api.jquery.com/)
[![Badge](https://img.shields.io/badge/Bootstrap-5.0.2-lightblue?style=for-the-badge&logo=bootstrap)](https://getbootstrap.com/docs/5.0/getting-started/introduction/)
[![Badge](https://img.shields.io/badge/Animate.css-^4.1.1-lightblue?style=for-the-badge&logo=css3)](https://animate.style/)
</div>
<div id="tabela-de-conteudo">

## 📑 Project structure

```
├── public (builded files)
│   ├── app.css
│   ├── app.js
│   └── index.html
├── src
│   ├── js
│       ├── main
│       └── app.js (main file js)
│   └── scss
│       ├── main
│       ├── fonts.scss
│       ├── theme.scss (general styles)
│       └── app.scss (main file scss)
├── static
│   ├── fonts
│   └── images
```

## 📑 Branches

```
├── develop (local)
├── homolog (valide)
└── master (production)
```

## 📑 Run project
### Install dependencies
```bash
yarn
```

### Build for development
Compile code
```bash
yarn dev
```
Compile code and watch modifications
```bash
yarn watch
```

### Build for production
```bash
yarn prod
```

## 📑 Good practices in development
Always update the project before any modification
```bash
git pull origin [branch]
```

Make sure the lint is ok
```bash
yarn lint --fix
```

Before commit, make sure again that lint is ok! Prevent colleagues from suffering by fixing your lint code.
```bash
yarn lint --fix
```

After the commit, update as many branches as needed.
```bash
git push origin [branch]
```

### 😁 Enjoy! 👍🏼

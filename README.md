# 🚀 Desafio Técnico 3E Soluçoes 2025 – Cadastro de Colaboradores

Este projeto é uma aplicação web feita com **Laravel 12** para gerenciar os colaboradores que participaram de um evento corporativo da 3E Soluções. Ele permite cadastrar, listar, editar e excluir participantes, com autenticação protegendo todas as rotas.

---

## ✅ Funcionalidades

- Login com autenticação (Laravel Breeze)
- Cadastro de colaboradores com:
  - Nome completo
  - Setor (Tecnologia, Administrativo, Projeto)
  - Cidade (capitais do Brasil)
  - Data de check-in
- Listagem de colaboradores
- Edição e exclusão
- Proteção por login (só acessa após autenticar)

---

## 🛠️ Tecnologias Utilizadas

- PHP 8.x
- Laravel 12
- Laravel Breeze
- MySQL
- Blade + Bootstrap
- Vite + npm

---

## ⚙️ Requisitos

- PHP >= 8.1
- Composer
- Node.js + npm
- MySQL (ou MariaDB)

---

## 🚀 Passos rápidos para executar o projeto localmente

```bash
# 1. Clone o projeto
git clone https://github.com/YannPascoa/colaboradores.git
cd colaboradores

# 2. Instale as dependências PHP
composer install

# 3. Copie o .env
cp .env.example .env

# 4. Configure o banco no .env
# (edite com DB_DATABASE, DB_USERNAME, etc.)

# 5. Gere a chave da aplicação
php artisan key:generate

# 6. Instale dependências do frontend
npm install

# 7. Compile os assets
npm run dev

# 8. Rode as migrations e seed
php artisan migrate:fresh --seed

# 9. Rode o servidor
php artisan serve

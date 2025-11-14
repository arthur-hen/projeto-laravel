# Trabalho Prático – Sistema de Venda de Veículos (Laravel)

# 📘 iCarros – Sistema de Catálogo e Painel Administrativo de Veículos

Projeto desenvolvido em **Laravel**, com duas áreas principais:


## 📦 **Como rodar o projeto**

### ✔️ 1. Clonar o repositório


git clone https://github.com/SEU_USUARIO/SEU_REPO.git
cd SEU_REPO


### ✔️ 2. Instalar dependências do Laravel


composer install


### ✔️ 3. Criar o arquivo `.env`


cp .env.example .env


### ✔️ 4. Gerar key da aplicação

php artisan key:generate


### ✔️ 5. Configurar o banco de dados no arquivo `.env`

Exemplo:

```
DB_DATABASE=icarros
DB_USERNAME=root
DB_PASSWORD=
```

### ✔️ 6. Rodar as migrations

```bash
php artisan migrate
```

### ✔️ 7. Iniciar o servidor local

```bash
php artisan serve
```

### ✔️ 8. Iniciar o XAMPP (MySQL e Apache)

O projeto utiliza **MySQL**, então inicie o MySQL pelo XAMPP.

---

## 👤 **Usuário Administrador (para acessar o painel)**

Após rodar o sistema pela primeira vez, crie um admin direto no banco:

### 🛠 Criar admin manualmente via SQL:

```sql
INSERT INTO users (name, email, password, is_admin, created_at, updated_at)
VALUES ('Admin', 'admin@admin.com', '$2y$10$wHkGf8uDmE9gl7IIQ10e2e7Y2u5IlY49OAGXo2xO.xo4/TpZkt86C', 1, NOW(), NOW());
```

⚠️ **Senha do administrador:**

```
admin123
```

---

## 📂 Estrutura do Projeto

```
/app
/resources/views
/routes/web.php
/public/images/readme  ← coloque aqui todas as imagens do README
```

---

## 🖼️ Prints das Telas do Projeto

Coloque as imagens na pasta:
`public/images/readme/`

E substitua os exemplos abaixo pelas imagens reais.

---

### 🏠 Página Inicial – Carrossel

![Home](public/images/readme/home1.png)

---

### 🚗 Página de listagem de veículos

![Lista](public/images/readme/veiculos-lista.png)

---

### 🔎 Página de detalhes do veículo

![Detalhes](public/images/readme/veiculo-detalhes.png)

---

### 📝 Tela de registro de usuário

![Registro](public/images/readme/register.png)

---

### 🔐 Tela de login

![Login](public/images/readme/login.png)

---

### 👤 Página de perfil

![Perfil](public/images/readme/perfil.png)

---

### 🛠 Painel Administrativo – listagem

![Admin Listagem](public/images/readme/admin-lista.png)

---

### ➕ Tela de cadastro de veículo

![Cadastro](public/images/readme/admin-cadastrar.png)

---

### ✏️ Tela de edição de veículo

![Editar](public/images/readme/admin-editar.png)

---

## 🚀 Tecnologias Utilizadas

* **Laravel 10**
* **PHP 8**
* **MySQL**
* **Laravel Breeze (autenticação)**
* **Bootstrap**
* **Owl Carousel**
* **Blade Templates**

---

## 📄 Licença

Projeto disponível sob a licença **MIT**.
Sinta-se livre para modificar e melhorar!

---

Se quiser, posso gerar o **README.md final com as imagens já embutidas**, basta me enviar **as imagens salvas ou os nomes dos arquivos**.

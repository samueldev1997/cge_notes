# cge.notes

cge.notes é um sistema simples para anotar pensamentos e criar histórias inspiradoras. 
Este projeto foi desenvolvido para um teste técnico.
<br/>

### 🔥 Funcionalidades Principais

- Registro e login de usuários
- Criação, edição e exclusão de notas
- Contagem total de notas
- Interface responsiva

### ⚙️ Tecnologias Utilizadas ⚙️

- PHP
- MySQL
- HTML
- CSS
- Font Awesome
- XAMPP


### 🔨 Instalação

1. **Baixe ou clone o repositório:**
   - Para baixar: Acesse o repositório no GitHub, clique em "Code" e depois em "Download ZIP". Extraia o conteúdo do arquivo ZIP.
   - Para clonar: Execute `git clone https://github.com/seu-usuario/cge_notes.git` no seu terminal.

2. **Navegue até o diretório do projeto:**
   - Se você baixou o arquivo ZIP, extraia o conteúdo em um diretório desejado.
   - Se você clonou o repositório, entre no diretório clonado.

3. **Mova os arquivos do projeto para a pasta `htdocs` do XAMPP:**
   - Mova a pasta `cge_notes` para a pasta `htdocs` do XAMPP.

4. **Crie o banco de dados:**
   - Abra o phpMyAdmin pelo navegador: `http://localhost/phpmyadmin`
   - Crie um banco de dados chamado `cge_notes`.
   - Execute os seguintes scripts SQL para criar a tabela notas e usuarios
     
  CREATE TABLE notas (

       id INT AUTO_INCREMENT PRIMARY KEY,
       conteudo TEXT NOT NULL,
       criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  );

  
  CREATE TABLE usuarios (
      
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

5. **Inicie o Apache e MySQL pelo painel do XAMPP.**

6. **Acesse o projeto pelo navegador:**
   - Navegue para `http://localhost/cge_notes/pages/index.php` para visualizar o projeto em funcionamento.

<br/> <br/> <br/>
  
## 🎥 Video Demonstrativo sobre o Projeto

https://github.com/user-attachments/assets/eff3ac17-00d0-4659-a86b-86ed215ad387


<br/> <br/> <br/>
<div align='center'>
<img src="https://github.com/user-attachments/assets/67747568-7828-426a-bd12-99912586a81a" width='900px' />
<img src="https://github.com/user-attachments/assets/a469ec25-0988-41d5-83a1-8f9c79715cd6" width='900px'/>
<img src="https://github.com/user-attachments/assets/3d64897a-0830-4a8f-b7f9-3401c894e536" width='900px'/>
</div>







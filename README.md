# Open Shelf: Sua Biblioteca Digital

O **Open Shelf** é um projeto simples de biblioteca digital desenvolvido para a disciplina de Web-Servidor com o objetivo de demonstrar funcionalidades básicas de *backend* em PHP, utilizando o recurso de Sessões para gerenciamento de dados (catálogo de livros e registro de usuários).

##  Funcionalidades do Sistema

O sistema é caracterizado por um conjunto de funcionalidades básicas para gerenciamento de livros e usuários.

| Funcionalidade | Descrição |
| :--- | :--- |
| **Home** | Direciona o usuário para a página inicial. |
| **Catalogue** | Permite a consulta ao acervo de livros cadastrados. |
| **Lending Book** | Direciona para a funcionalidade de empréstimo de livros do acervo. |
| **For Author** | Página dedicada para autores independentes publicarem seus livros no acervo. |
| **FAQs** | Página de atendimento ao cliente e perguntas frequentes. |
| **Sign In** | Página para o cadastro de novos usuários na biblioteca digital. |
| **Login** | Destinado a usuários já cadastrados acessarem suas contas e consultarem seus livros emprestados. |

-----

##  Pré-requisitos para Execução

Para rodar o projeto Open Shelf localmente, você precisará de:

1.  **PHP** (Versão 7.x ou superior recomendada).
2.  **Git** (Para clonar o repositório).

## Guia de Instalação e Execução (Windows)

Siga os passos abaixo para preparar seu ambiente e rodar o projeto.

### 1\. Instalação do PHP e Configuração de Variáveis de Ambiente

1.  Acesse o link oficial do PHP: **`https://windows.php.net/download`**.
2.  Baixe o primeiro arquivo **`.ZIP`** (versão Thread Safe recomendada).
3.  Descompacte a pasta ZIP em um local de sua preferência (ex: `C:\php`).
4.  Copie o diretório completo da pasta descompactada (ex: `C:\php`).
5.  No Windows, pesquise por **"variáveis de ambiente"** e abra o programa.
6.  Clique em **"Variáveis de Ambiente..."** novamente.
7.  Na seção **Variáveis de Usuário**, selecione a variável **"Path"**.
8.  Clique em **"Editar"**, depois em **"Novo"** e cole o diretório que você copiou do PHP.
9.  Clique em **"Ok"** e **"Ok"** novamente para fechar as janelas.

### 2\. Instalação do Git Bash

1.  Acesse o site oficial do Git em **`https://git-scm.com`**.
2.  Na página inicial, clique em **"Download"** e baixe o instalador correspondente para Windows (`.exe`).
3.  Execute o instalador. Durante o processo, você pode manter a maioria das opções padrão, exceto:
      * Recomenda-se selecionar a opção **"Git from the command line and also from 3rd-party software"** para adicionar o Git ao PATH do sistema.
4.  Continue avançando com **"Next"** até o final e clique em **"Install"**, e depois em **"Finish"**.

### 3\. Clonando o Repositório do Projeto

1.  Abra um diretório no Explorador de Arquivos onde você deseja salvar o projeto.
2.  Clique com o botão direito do mouse ou touchpad e selecione a opção **"Open Git Bash Here"**.
3.  No terminal Git Bash, digite o seguinte comando e pressione **`Enter`**:
    ```bash
    git clone https://github.com/amand4morais/OpenShelf
    ```
    Isso baixará todos os arquivos do projeto para a sua máquina.

### 4\. Executando o Sistema

1.  Abra o **Prompt de Comando do Windows** (`cmd`).
2.  Acesse o diretório do projeto clonado (onde está o arquivo `index.php`).
    ```bash
    cd <diretório escolhido para baixar o repositório do GitHub>/OpenShelf
    ```
    *(Substitua `<diretório escolhido...>` pelo caminho real.)*
3.  Execute o servidor web embutido do PHP:
    ```bash
    php -S localhost:8080
    ```
    Isso inicializará um servidor local na porta 8080.
4.  Abra um navegador de sua preferência (recomendamos o Brave ou Chrome) e acesse a seguinte URL:
    ```
    http://localhost:8080
    ```

O programa deverá estar funcionando normalmente, exibindo a tela inicial do Open Shelf.

## Open Shelf: Your Digital Library

**Open Shelf** is a simple digital library project developed for a Web Server university course. Its main goal is to demonstrate basic backend functionalities in PHP, utilizing PHP Sessions for data management (book catalog and user registration).

##  System Features

The system is characterized by a set of core features for managing books and users.

| Feature | Description |
| :--- | :--- |
| **Home** | Directs the user back to the initial homepage from any part of the system. |
| **Catalogue** | Allows browsing our collection of registered books. |
| **Lending Book** | Directs to the functionality for borrowing a book from our collection. |
| **For Author** | A dedicated page for independent authors to publish their books in our collection. |
| **FAQs** | This page is dedicated to customer support and frequently asked questions. |
| **Sign In** | Reserved for registering a new user in our digital library. |
| **Login** | Intended for already registered users to access their accounts and view their borrowed books. |

-----

##  Execution Prerequisites

To run the Open Shelf project locally, you will need:

1.  **PHP** (Version 7.x or later recommended).
2.  **Git** (For cloning the repository).

##  Installation and Execution Guide (Windows)

Follow the steps below to set up your environment and run the project.

### 1\. PHP Installation and Environment Variables Configuration

1.  Access the official PHP download link: **`https://windows.php.net/download`**.
2.  Download the first **`.ZIP`** file on the page.
3.  Unzip the folder to a location of your choice (e.g., `C:\php`).
4.  Copy the full directory path of the unzipped PHP folder (e.g., `C:\php`).
5.  On Windows, search for **"environment variables"** and open the program.
6.  Click on **"Environment Variables..."** again.
7.  In the **User variables** section, select the **"Path"** variable.
8.  Click **"Edit"**, then **"New"**, and finally paste the copied PHP directory path.
9.  Click **"Ok"** and **"Ok"** again to close the windows.

### 2\. Git Bash Installation

1.  Access the official Git website at **`https://git-scm.com`**.
2.  On the homepage, click **"Download"** and download the corresponding installer for Windows (`.exe`).
3.  Execute the installer. During the process, you can keep most of the default options, but note the following key settings:
      * It is recommended to select the option **"Git from the command line and also from 3rd-party software"** to add Git to the system's PATH.
4.  Continue clicking **"Next"** until you reach the end, then click **"Install"**, and finally **"Finish"**.

### 3\. Cloning the Repository

1.  Open an empty directory in File Explorer where you want to save the project.
2.  Right-click or use your touchpad and select the option **"Open Git Bash Here"**.
3.  In the Git Bash terminal, type the following command and press **`Enter`**:
    ```bash
    git clone https://github.com/amand4morais/OpenShelf
    ```
    This function will download all the files present in the repository directly to your personal machine, inside the chosen directory.

### 4\. Running the System

1.  Open the **Windows Command Prompt** (`cmd`).
2.  Navigate to the cloned project directory (where the `index.php` file is located).
    ```bash
    cd <directory chosen for GitHub repository download>/OpenShelf
    ```
    *(Replace `<directory chosen...>` with your actual path.)*
3.  Execute the PHP built-in web server command:
    ```bash
    php -S localhost:8080
    ```
    This will start a local server on port 8080.
4.  Open a browser of your choice (Brave is recommended) and navigate to the following URL:
    ```
    http://localhost:8080
    ```

Following these steps, the program should be running normally.

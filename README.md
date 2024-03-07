# Project-256 website

> Template de website e sistema de login desenvolvido pelo grupo project-256.

Este template é um sistema de login completo em PHP e com banco de dados SQL. 
O usuário pode fazer login ou se cadastrar na página inicial do site.
Também possui um sistema de atualização de foto de perfil e cadastro para que o usuário personalize a sua página.

## Quick Start

Este sistema utiliza um banco de dados MySQL para realizar o login. A forma mais fácil de iniciar este sistema criar um database chamado
'test123' no phpmyadmin e importar a tabela de usuários em 'assets/database\_backup/loginSiteDirack.sql' neste database.
As informações de conexão e a conexão estão no script 'assets/php/connect.php'. Para testar o login, utilize o seguinte usuário:

```
Usuário: Rodolfo
Senha: 12345
```

#### Integrantes do Project-256

- [GabrielAlves256](https://github.com/GabrielAlves256)
- [Rodolfo Dirack](https://github.com/Dirack)
- [Valcinei Jr](https://github.com/ValcineiJr)
- [Edmilton Vinícius](https://github.com/edmiltonVinicius)
- [Bruno Silva](https://github.com/BrunoSan123)
- [Nikolas dos Santos](https://github.com/Nikolassantos)

#### Sistema de login do site

Ao abrir a página _index.php_
o usuário é direcionado para o nosso sistema de login e cadastro. 
Este sistema possui comunicação com um banco de dados SQL de testes e é perfeitamente adaptável para servir
para um site de pequeno porte.

![Imagem sistema login](https://github.com/project-256-web/project-256/blob/master/assets/img/Logo/readme_login.png)

#### Página inicial do site

Após o login, o usuário é direcionado a página inicial do site, _Page.php_. 
E ao clicar nas opções do menu superior, o usuário pode
ir ao seu perfil com foto e informações de cadastro personalizadas.

![Imagem página inicial](https://github.com/project-256-web/project-256/blob/master/assets/img/Logo/readme_pagina_inicial.png)

#### Página de perfil do site com sistema de atualização de fotos

Ao clicar na sua foto de perfil, é aberto um painel iterativo que permite ao usuário atualizar a sua foto de perfil.

![Imagem sistema atualização fotos](https://github.com/project-256-web/project-256/blob/master/assets/img/Logo/readme_sistema_cadastro.png)

Este painel é interativo e permite ao usuário pré
visualizar a foto escolhida.

![Imagem sistema atualização de fotos - painel](https://github.com/project-256-web/project-256/blob/master/assets/img/Logo/readme_painel_cadastro.png)

#### Sistema de atualização de cadastro

Ao clicar em Configurações->Editar Perfil, no menu do canto superior direito da página, o usuário é redirecionado para 
o formulário de atualização de cadastro na página _editarPerfil.php_.

![Imagem sistema atualização cadastro](https://github.com/project-256-web/project-256/blob/master/assets/img/Logo/readme_formulario.png)

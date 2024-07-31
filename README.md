# CADECOMMERCE

CADECOMMERCE é um sistema de e-commerce simples desenvolvido em PHP. Este repositório contém todos os arquivos necessários para a criação de um carrinho de compras, cadastro de produtos, 
categorias e marcas, e a visualização de pedidos.

## Tecnologias Utilizadas
PHP
MySQL
HTML
CSS
JavaScript (jQuery)

## Estrutura do Projeto
O projeto está organizado da seguinte forma:

`Pasta controller`
Esta pasta contém os arquivos responsáveis pelo controle das operações do carrinho e dos produtos.

⊳ carrinho-add.php

⊳ carrinho-busca.php

⊳ carrinho-remover.php

⊳ conexao.php

⊳ produtos-busca.php

⊳ produtos-pedido.php

⊳ produtos-resumo.php

Pasta Geral `CADECOMMERCE`
Esta pasta contém os arquivos principais do sistema.

⊳ carrinho.php

⊳ categoria.php

⊳ index.php

⊳ insere-categoria.php

⊳ insere-marca.php

⊳ insere-produto.php

⊳ marca.php

⊳ pedido.php

⊳ produtos.php

## Métodos PHP Utilizados

`mysqli_connect`
Estabelece uma conexão com um servidor MySQL.

`mysqli_query`
Executa uma consulta no banco de dados.

`mysqli_fetch_assoc`
Retorna uma linha de resultado como uma matriz associativa.

`mysqli_close`
Fecha a conexão com o banco de dados.

## Exemplos Auxiliares

_Cadastro de Categoria_

`categoria.php:` Formulário para cadastro de categorias.

`insere-categoria.php:` Código PHP para inserção de uma nova categoria no banco de dados.

_Cadastro de Marca_

`marca.php:` Formulário para cadastro de marcas.

`insere-marca.php:` Código PHP para inserção de uma nova marca no banco de dados.

_Cadastro de Produto_

`produtos.php:` Formulário para cadastro de produtos.

`insere-produto.php:` Código PHP para inserção de um novo produto no banco de dados.

## Comentários no Código

Todos os arquivos PHP neste projeto contêm comentários explicando as funcionalidades implementadas. Esses comentários ajudam na compreensão do fluxo do código e na manutenção futura.

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

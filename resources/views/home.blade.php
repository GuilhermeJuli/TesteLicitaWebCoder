@extends('master')

@section('content')

<h2>Backend:

Criar uma api para realizar o gerenciamento de um produto.<br>

Campos:<br>
Cod Produto - integer<br>
Nome produto - string<br>
Valor Produto - float<br>
Marca Produto - (chave estrangeira) - int<br>
Estoque - float<br>
Cidade (Chave estrangeira) - int<br>

Cidade<br>
cod Cidade - integer pk<br>
nome Cidade - string<br>

Marca<br>
cod Marca - integer pk<br>
nome Marca - string<br>
Fabricante - string<br>

A partir desse cadastro um recurso REST para gerenciamento desse modelo com os seguintes métodos devem estar disponíveis:<br>

GET  - Lista todos os produtos<br>
GET  - Busca um produto por id<br>
POST  - Cria um novo produto<br>
PUT  - Edita um produto<br>
DELETE  - Deleta um produto<br>
GET - Lista todas as cidades<br>

Front-end:<br>

Agora que nossa api já está feita, precisamos fazer um front-end para conversar com essa api.<br>
O projeto do frontend, deverá ser feito com o framework que você está mais familiarizado. Caso utilize html, utilizar Jquery para as requisições<br>
Implementar no front um filtro dinâmico para esses produtos, como por exemplo, média dos valores dos produtos,<br>
soma de todos os produtos, filtrar do valor de x até y, produtos por cidade,<br>
Não permitir excluir produto que tenha estoque.<br>

Validações de campos obrigatórios no cadastro do produto: Nome, Valor, Cidade, e restrição de unicidade também, para permitir apenas um produto com o mesmo<br>


O projeto Backend devera ser feito em symfony, laravel ou slim com o banco de dados mysql.<br>

Implementar teste unitário.<br>

Utilizar as técnicas de clean code e orientação a objetos S.O.L.I.D<br>

Após o fim do projeto disponibilizar no github.<br>

A data limite de entrega do projeto será de 7 dias a partir do recebimento do teste.</h2><br>

@endsection
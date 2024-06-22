# AvFinal

AvFinal
1 - clone -configura chrome como navegador padrão
2 - git do VSCODE clonar github
3 - clonar do github
4 - instalar o composer.phar comando em https://getcomposer.org/download/
php composer.phar install
php artisan serv e

Vamos usar a tabela produto como exemplo
Criar BD
php artisan make:model -mrc Nome - Cria o Model, Controller, Migration

Configurar o Model
Na raiz do projeto encontre a pasta app/ model, e em seguida o arquivo Produto.php
Informar no Model quais campos podem ser preenchidos/editados por nosso código

protected $fillable = ['nome', 'fornecedor'];

Criar formulario Blade (resources/views )
criar.blade.php.

html 5.0

form action="{{route('cadastrar_produto')"
@crfs
label
input
button

app\Http\Controllers - ProdutosController.php
use model produto
*função create
return view ('layouts.criar')

*função store
dd($request->all()); testar dd -debug,die

Produto::create([ 'nome'-> $ request->nome, ...]); return "Produto criado";

Criar Rota
Route:: get('layouts/criar', [ProdutoController::class, 'criar']);
Route:: post('layouts/criar', [ProdutoController::class, 'store'])-> name('cadastrar_produto);

LEITURA DE UM REGISTRO
Criar Rota
Route:: get('layouts/ver/{id}', [ProdutoController::class, 'show']);

app\Http\Controllers - ProdutosController.php
*funcao show ($id)

$produto= Produto::findOrFail($id);
return view('layouts.show, ['produto =>$produto]);

#BLADE

mostrar.blade.php label
input type text name value="{{$produto->nome}}"

ATUALIZANDO os dados
#ROTA Route:: get('layouts/editar/{id}', [ProdutoController::class, 'edit']);
Route:: post('layouts/editar/{id}', [ProdutoController::class, 'update']) ->name(alterar_produto);

Controller
funcao edit ($id) $produto= Produto::findOrFail($id);

return view('layouts.editar',['produto'=>$produto]);

BLADE
editar.blade.php form {{route ('alterar_produto, ['id'=>$produto->id])}}

Controller
funcao update ($request, $id)

$produto= Produto::findOrFail($id);

Produto::update([ 'nome'-> $ request->nome, ...]);

return "Produto atualizado";

Deletar um registro
#ROTA Route:: get('layouts/excluir/{id}', [ProdutoController::class, 'delete']);
Route:: post('layouts/excluir/{id}', [ProdutoController::class, 'destroy'])->name('excluir_produto');

Controller
funcao delete($id) $produto= Produto::findOrFail($id);
return view('layouts.deletar',['produto'=>$produto]);

BLADE
deletar.blade.php

form {{route ('excluir_produto, ['id'=>$produto->id])}} @csrf label . tem certeza? input value="{{produto->nome}}" button sim


# comando para o commit
 git config --global user.email lara.alessandra@escola.pr.gov.br
 git config --global user.name "Alessandra"
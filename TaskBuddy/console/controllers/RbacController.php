<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        // PERMISSÕES

        // Utilizadores
        // Acessar utilizadores
        $verPerfilUtilizador = $auth->createPermission('verPerfilUtilizador');
        $verPerfilUtilizador->description = 'Ver todos os perfis de Utilizador';
        $auth->add($verPerfilUtilizador);

        // Criar um utilizador
        $criarPerfilUtilizador = $auth->createPermission('criarPerfilUtilizador');
        $criarPerfilUtilizador->description = 'Criar um novo perfil de utilizador';
        $auth->add($criarPerfilUtilizador);

        // Visualizar os dados de um utilizador
        $lerPerfilUtilizador = $auth->createPermission('lerPerfilUtilizador');
        $lerPerfilUtilizador->description = 'Visualizar detalhes de um perfil de utilizador';
        $auth->add($lerPerfilUtilizador);

        // Editar os dados de um utilizador
        $editarPerfilUtilizador = $auth->createPermission('editarPerfilUtilizador');
        $editarPerfilUtilizador->description = 'Atualizar detalhes de um perfil de utilizador';
        $auth->add($editarPerfilUtilizador);

        // Desativar um utilizador
        $desativarPerfilUtilizador = $auth->createPermission('desativarPerfilUtilizador');
        $desativarPerfilUtilizador->description = 'Desativar um perfil de utilizador';
        $auth->add($desativarPerfilUtilizador);

        // Ativar um utilizador
        $reativarPerfilUtilizador = $auth->createPermission('reativarPerfilUtilizador');
        $reativarPerfilUtilizador->description = 'Reativar um perfil de utilizador';
        $auth->add($reativarPerfilUtilizador);

        // Membros
        // Acessar Membros
        $verMembros = $auth->createPermission('verMembros');
        $verMembros->description = 'Visualizar todos os membros';
        $auth->add($verMembros);

        // Criar um cão
        $criarMembro = $auth->createPermission('criarMembro');
        $criarMembro->description = 'Criar um novo membro';
        $auth->add($criarMembro);

        // Visualizar os dados de um cão
        $lerMembro = $auth->createPermission('lerMembro');
        $lerMembro->description = 'Visualizar detalhes de um membro';
        $auth->add($lerMembro);

        // Editar os dados de um cão
        $updateMembro = $auth->createPermission('updateMembro');
        $updateMembro->description = 'Atualizar detalhes de um membro';
        $auth->add($updateMembro);

        // Eliminar um cão
        $eleminarMembro = $auth->createPermission('eleminarMembro');
        $eleminarMembro->description = 'Eliminar um perfil de cão';
        $auth->add($eleminarMembro);

        // Encomenda
        // Acessar encomendas
        $verEncomendas = $auth->createPermission('verEncomendas');
        $verEncomendas->description = 'Visualizar todos os pacotes';
        $auth->add($verEncomendas);

        // Criar uma encomenda
        $criarEncomenda = $auth->createPermission('criarEncomenda');
        $criarEncomenda->description = 'Criar uma nova encomenda';
        $auth->add($criarEncomenda);

        // Visualizar encomendas
        $lerEncomendas = $auth->createPermission('lerEncomendas');
        $lerEncomendas->description = 'Ver encomendas';
        $auth->add($lerEncomendas);

        // Editar dados de uma encomenda
        $updateEncomendas = $auth->createPermission('updateEncomendas');
        $updateEncomendas->description = 'Atualizar detalhes de uma encomenda';
        $auth->add($updateEncomendas);

        // Métodos de Expedição
        // Acessar expedições
        $verMetodosExpedicao = $auth->createPermission('verMetodosExpedicao');
        $verMetodosExpedicao->description = 'Visualizar todos os métodos de envio';
        $auth->add($verMetodosExpedicao);

        // Criar um método de expedição
        $criarMetodosExpedicao = $auth->createPermission('criarMetodosExpedicao');
        $criarMetodosExpedicao->description = 'Criar um novo método de envio';
        $auth->add($criarMetodosExpedicao);

        // Editar os dados de um método de expedição
        $updateMetodosExpedicao = $auth->createPermission('updateMetodosExpedicao');
        $updateMetodosExpedicao->description = 'Atualizar detalhes de um método de envio';
        $auth->add($updateMetodosExpedicao);

        // Desativar um método de expedição
        $desativarMetodosExpedicao = $auth->createPermission('desativarMetodosExpedicao');
        $desativarMetodosExpedicao->description = 'Desativar um método de envio';
        $auth->add($desativarMetodosExpedicao);

        // Ativar um método de expedição
        $reactivarMetodosExpedicao = $auth->createPermission('reactivarMetodosExpedicao');
        $reactivarMetodosExpedicao->description = 'Reativar um método de envio';
        $auth->add($reactivarMetodosExpedicao);

        // Métodos de Pagamento
        // Acessar métodos de pagamento
        $verMetodosPagamento = $auth->createPermission('verMetodosPagamento');
        $verMetodosPagamento->description = 'Visualizar todos os métodos de pagamento';
        $auth->add($verMetodosPagamento);

        // Criar um método de pagamento
        $criarMetodosPagamento = $auth->createPermission('criarMetodosPagamento');
        $criarMetodosPagamento->description = 'Criar um novo método de pagamento';
        $auth->add($criarMetodosPagamento);

        // Editar os dados de um método de pagamento
        $updateMetodosPagamento = $auth->createPermission('updateMetodosPagamento');
        $updateMetodosPagamento->description = 'Atualizar detalhes de um método de pagamento';
        $auth->add($updateMetodosPagamento);

        // Desativar um método de pagamento
       

 $desativarMetodosPagamento = $auth->createPermission('desativarMetodosPagamento');
        $desativarMetodosPagamento->description = 'Desativar um método de pagamento';
        $auth->add($desativarMetodosPagamento);

        // Ativar um método de pagamento
        $reativarMetodosPagamento = $auth->createPermission('reativarMetodosPagamento');
        $reativarMetodosPagamento->description = 'Reativar um método de pagamento';
        $auth->add($reativarMetodosPagamento);

        // Carrinho
        // Adicionar produtos a um carrinho
        $criarCarrinho = $auth->createPermission('criarCarrinho');
        $criarCarrinho->description = 'Adicionar um produto ao carrinho de compras';
        $auth->add($criarCarrinho);

        // Visualizar produtos no carrinho
        $lerCarrinho = $auth->createPermission('lerCarrinho');
        $lerCarrinho->description = 'Ver o carrinho de compras';
        $auth->add($lerCarrinho);

        // Editar dados de um produto no carrinho (ex. quantidade)
        $updateCarrinho = $auth->createPermission('updateCarrinho');
        $updateCarrinho->description = 'Atualizar detalhes de um produto no carrinho de compras';
        $auth->add($updateCarrinho);

        // Remover um produto do carrinho
        $eleminarCarrinho = $auth->createPermission('eleminarCarrinho');
        $eleminarCarrinho->description = 'Remover um produto do carrinho de compras';
        $auth->add($eleminarCarrinho);

        // Produtos
        // Acessar produtos
        $verProdutos = $auth->createPermission('verProdutos');
        $verProdutos->description = 'Visualizar todos os produtos';
        $auth->add($verProdutos);

        // Criar um produto
        $criarProduto = $auth->createPermission('criarProduto');
        $criarProduto->description = 'Criar um novo produto';
        $auth->add($criarProduto);

        // Visualizar os dados de um produto
        $lerProduto = $auth->createPermission('lerProduto');
        $lerProduto->description = 'Visualizar detalhes de um produto';
        $auth->add($lerProduto);

        // Editar os dados de um produto
        $updateProduto = $auth->createPermission('updateProduto');
        $updateProduto->description = 'Atualizar detalhes de um produto';
        $auth->add($updateProduto);

        // Eliminar um produto
        $eleminarProduto = $auth->createPermission('eleminarProduto');
        $eleminarProduto->description = 'Eliminar um produto';
        $auth->add($eleminarProduto);

        // Tipo de produtos
        // Acessar tipos de produtos
        $verTipoProduto = $auth->createPermission('verTipoProduto');
        $verTipoProduto->description = 'Visualizar todos os tipos de produtos';
        $auth->add($verTipoProduto);

        // Criar um tipo de produto
        $criarProdutoTipo = $auth->createPermission('criarProdutoTipo');
        $criarProdutoTipo->description = 'Criar um novo tipo de produto';
        $auth->add($criarProdutoTipo);

        // Editar os dados de um tipo de produto
        $updateProdutoTipo = $auth->createPermission('updateProdutoTipo');
        $updateProdutoTipo->description = 'Atualizar detalhes de um tipo de produto';
        $auth->add($updateProdutoTipo);

        // Desativar um tipo de produto
        $desativarProdutoTipo = $auth->createPermission('desativarProdutoTipo');
        $desativarProdutoTipo->description = 'Desativar um tipo de produto';
        $auth->add($desativarProdutoTipo);

        // Ativar um tipo de produto
        $reactivarProdutoTipo = $auth->createPermission('reactivarProdutoTipo');
        $reactivarProdutoTipo->description = 'Reativar um tipo de produto';
        $auth->add($reactivarProdutoTipo);

        // ROLES
        // Gestor
        $gestor = $auth->createRole('gestor');
        $auth->add($gestor);
        $auth->addChild($gestor, $lerPerfilUtilizador);
        $auth->addChild($gestor, $verEncomendas);
        $auth->addChild($gestor, $lerEncomendas);
        $auth->addChild($gestor, $verProdutos);
        $auth->addChild($gestor, $criarProduto);
        $auth->addChild($gestor, $lerProduto);
        $auth->addChild($gestor, $updateProduto);
        $auth->addChild($gestor, $eleminarProduto);
        $auth->addChild($gestor, $verTipoProduto);
        $auth->addChild($gestor, $criarProdutoTipo);
        $auth->addChild($gestor, $updateProdutoTipo);
        $auth->addChild($gestor, $desativarProdutoTipo);
        $auth->addChild($gestor, $reactivarProdutoTipo);

        // Veterinario
        $membro = $auth->createRole('membro');
        $auth->add($membro);
        $auth->addChild($membro, $lerPerfilUtilizador);
        $auth->addChild($membro, $lerMembro);

        // Cliente
        $client = $auth->createRole('client');
        $auth->add($client);
        $auth->addChild($client, $lerPerfilUtilizador);
        $auth->addChild($client, $editarPerfilUtilizador);
        $auth->addChild($client, $criarMembro);
        $auth->addChild($client, $lerMembro);
        $auth->addChild($client, $updateMembro);
        $auth->addChild($client, $eleminarMembro);
        $auth->addChild($client, $verEncomendas);
        $auth->addChild($client, $criarEncomenda);
        $auth->addChild($client, $lerEncomendas);
        $auth->addChild($client, $updateEncomendas);
        $auth->addChild($client, $criarCarrinho);
        $auth->addChild($client, $lerCarrinho);
        $auth->addChild($client, $updateCarrinho);
        $auth->addChild($client, $eleminarCarrinho);
        $auth->addChild($client, $verProdutos);
        $auth->addChild($client, $lerProduto);

       

        //Admin
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $verPerfilUtilizador);
        $auth->addChild($admin, $criarPerfilUtilizador);
        $auth->addChild($admin, $desativarPerfilUtilizador);
        $auth->addChild($admin, $reativarPerfilUtilizador);
        $auth->addChild($admin, $verMetodosExpedicao);
        $auth->addChild($admin, $criarMetodosExpedicao);
        $auth->addChild($admin, $updateMetodosExpedicao);
        $auth->addChild($admin, $desativarMetodosExpedicao);
        $auth->addChild($admin, $reactivarMetodosExpedicao);
        $auth->addChild($admin, $verMetodosPagamento);
        $auth->addChild($admin, $criarMetodosPagamento);
        $auth->addChild($admin, $updateMetodosPagamento);
        $auth->addChild($admin, $desativarMetodosPagamento);
        $auth->addChild($admin, $reativarMetodosPagamento);
        $auth->addChild($admin, $gestor);
        $auth->addChild($admin, $membro);
        $auth->addChild($admin, $client);


        // Atribuir roles a users
        $auth->assign($admin, 1);
        $auth->assign($gestor, 2);
        $auth->assign($membro, 3);
        $auth->assign($client, 4);
    }
}

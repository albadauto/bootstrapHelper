<?php 
/**
 * @author José Adauto
 * 
 */


 /**
  * @param $target -> Parametro para indicar o target do modal (id do modal)
  * @param $text -> Texto que irá aparecer no botão
  */

function botaoModal(string $target, string $text) : string {
   $botao = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'. $target .'">' 
   . $text .
    '</button>';
    return $botao;
}

/**
 * @param $id -> Colocar id no modal (O parametro $target da função botaoModal deve corresponder ao $id)
 * @param $titulo -> Titulo a ser colocado dentro do modal
 */

function modalInicio($id, $titulo = null) : string{
   $modal = '<div class="modal fade" id="'. $id .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">' . $titulo . '</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        ';

  return $modal;
}

/**
 * @param $botaoFechar -> Coloque 1 como parametro para criar botao fechar
 * @param $botaoSalvar -> Coloque 1 como parametro para criar botao salvar
 */

function modalFim(int $botaoFechar = null, int $botaoSalvar = null) : string{
    $botoes = array();
    if(!is_null($botaoFechar)){
        $botoes['fechar'] = '<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>';
     }

    if(!is_null($botaoSalvar)){
        $botoes['salvar'] = '<button type="button" class="btn btn-primary">Salvar</button>';
    }
    $fim = '</div>
    <div class="modal-footer">' .
      
        @$botoes['fechar'] . 
        @$botoes['salvar']
    .
      ' 
    </div>
  </div>
</div>
</div>';
    return $fim;
}
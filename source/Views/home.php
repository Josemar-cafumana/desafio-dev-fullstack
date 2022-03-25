<?php $v->layout('_theme')  ?>



        <section class="transacao">
        
    <table class="table">
        <thead>
            <tr>
            <th>Nome da loja</th>
            <th>Dono da loja</th>
            <th>Tipo</th>
            <th>Data</th>
            <th>Valor</th>
            <th>BI</th>
            <th>Cartão</th>
            <th>Hora</th>
      <th></th>
        </tr>
        </thead>
        <tbody>
         

            <?php
            if(count($transacaos) > 0):
            foreach($transacaos as $transacao):  ?> 
           <tr>

    <td><?=  $transacao->nomeLoja ?></td>
    <td><?=   $transacao->donoLoja ?></td>
    <td><?=   $transacao->descricao ?></td>
    <td><?=  $transacao->data  ?></td>
    <td class="<?= $transacao->natureza == 'Entrada' ? 'green' : 'red' ?>"><?=  $transacao->valor  ?></td>
    <td><?=   $transacao->bi   ?></td>
    <td><?=    $transacao->cartao   ?></td>
    <td><?=   $transacao->hora   ?></td>
    <td> <a href="<?= url("/$transacao->nomeLoja") ?>">hdd</a></td>
  
            </tr>
<?php endforeach;

            else:
                ?>
                <h3>Sem transações Cadastradas</h3>
                <?php
    endif;
?>
        </tbody>
    </table>
        
          
        </section>

     
    
 
  
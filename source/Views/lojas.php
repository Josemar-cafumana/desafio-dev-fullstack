<?php $v->layout('_theme')  ?>



        <section class="transacao">
        
    <table class="table">
        <thead>
            <tr>
            <th>Nome da loja</th>
            <th>Dono da loja</th>
            <th>Saldo da conta</th>
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
    <td class="green"><?=   $transacao->Saldo ?></td>
  
 
  
            </tr>
<?php endforeach;

            else:
                ?>
                <h3>Sem Lojas cadastradas</h3>
                <?php
    endif;
?>
        </tbody>
    </table>
        
          
        </section>

     
    
 
  
<?php $v->layout('_theme')  ?>


<div class="card card-transacao" style="display: block;">
    <h2 >Upload de arquivo</h2>
        <form id="form" action="<?= $router->route('web.store') ?>" method="POST" enctype="multipart/form-data">
            <div class="file">
                 <label for="arquivo"><i class='bx bx-cloud-upload'></i></label>
                 <input type="file" class="d-none" name="arquivo" id="arquivo">
            </div>

            <p id="message" >Sucesso</p>
            <button class="btn" type="submit">Enviar</button>
        </form>
    </div>


    <?php $v->start('scripts'); ?>
      
 
      const message = document.getElementById('message');
      const form = document.getElementById('form');
      
      form.addEventListener('submit', function(e){

          e.preventDefault()
          var url = form.getAttribute("action")

          fetch(url, {
                    body: new FormData(form),
                    method: "post",
   
        }).then(response => response.json())
        .then(data => {
            if(data.sucesso){
                message.style.display = "block"
                message.style.color = "green"
                message.innerText = 'Sucesso';
            }else{
                message.style.display = "block"
                message.innerText = 'Arquivo Inválido';
            }
        })
    .catch((error) => { console.error(error); });


      });
      
          <?php $v->end(); ?>
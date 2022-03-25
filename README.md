# Desafio programação - para vaga de programador ✨

<img src="https://raw.githubusercontent.com/Josemar-cafumana/desafio-dev-fullstack/main/public/assets/img/Interface%20Home.png"> 

<img src=https://raw.githubusercontent.com/Josemar-cafumana/desafio-dev-fullstack/main/public/assets/img/Interface%20Importar%20.png"> 

# Setup

1. Primeiro, faça a configuracao da conexão da base de dados e mudar as variaveis de ROOT.
2. Em seguida, Importar o arquivo sql para a criação e insercao de dados constantes.



# Rotas 

$router->get("/", "Web:home", "web.home");
$router->get("/importar", "Web:importar", "web.importar");
$router->post("/create", "Web:store", "web.store");





# Documentação do CNAB

| Descrição do campo  | Inicio | Fim | Tamanho | Comentário
| ------------- | ------------- | -----| ---- | ------
| Tipo  | 1  | 1 | 1 | Tipo da transação
| Data  | 2  | 9 | 8 | Data da ocorrência
| Valor | 10 | 19 | 10 | Valor da movimentação. *Obs.* O valor encontrado no arquivo precisa ser divido por cem(valor / 100.00) para normalizá-lo.
| BI | 20 | 33 | 14 | BI do beneficiário
| Cartão | 34 | 46 | 12 | Cartão utilizado na transação 
| Hora  | 47 | 53 | 6 | Hora da ocorrência
| Dono da loja | 54 | 78 | 14 | Nome do representante da loja
| Nome loja | 79 | 98 | 19 | Nome da loja

# Documentação sobre os tipos das transações

| Tipo | Descrição | Natureza | Sinal |
| ---- | -------- | --------- | ----- |
| 1 | Débito | Entrada | + |
| 2 | Boleto | Saída | - |
| 3 | Financiamento | Saída | - |
| 4 | Crédito | Entrada | + |
| 5 | Recebimento Empréstimo | Entrada | + |
| 6 | Vendas | Entrada | + |
| 7 | Recebimento TED | Entrada | + |
| 8 | Recebimento DOC | Entrada | + |
| 9 | Aluguel | Saída | - |




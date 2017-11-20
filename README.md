# Estagiando

## Instalação

Faça o download do projeto e rode utilizando um servidor HTTP. No meu caso, utilizei o wamp64, mas pode se utilizar Xaamp ou o próprio do php.

## Funcionalidade

O sistema trata-se de um sistema simples, onde o estagiário faz o seu registro e a partir desse momento acompanha e efetua suas marcações.

O sistema oferece quatro tipos de marcações comuns: entrada, saida para o almoço, volta do almoço e por fim, saída definitiva da empresa. De acordo com a marcação que o estagiário deve fazer, ele informará, com um click, o horário de tal marcação.

O sistema possui alguns controles, como: não permitir o registro duplicado de uma mesma marcação. Por exemplo: o estagiário não consegue marcar entrada na empresa duas vezes. Um outra "feature" que ainda não ficou pronta, é verificar se ao marcar qualquer outro registro que não seja entrada na empresa, se anterioemente a entrada na empresa foi registrada. Ou se ao bater para voltar do almoço, se o estário registrou sua saída para o almoço. 

Por fim, o estário consegue verificar suas marcações na aba: "verificar marcações". Nela ele consegue verificar todas as marcações dos dias que ele efetuou marcação. E uma feature a ser adicionada, é a oportunidade de filtrar mês a mês e imprimir relatórios de registros.


#### Maiores desafios

O maior desafio foi trabalhar com Codelgniter, nunca tinha utilizado esse Framework. Porém já trabalhei com frameworks como Laravel e Cakephp.

Utilizar Ajax com Codelgniter, abordando login com sessões foi mais complicado que eu imaginava. A maior dificuldade foi a troca de informações entre arquivos utilizando tokens.

Porém houve algumas facilidades, como o fato de eu já conhecer sobre o paradigma MVC. Não tive tanta difiduldade em trabalhar com views, controllers e models e transferir os dados entre essas camadas.


##### Tabelas e configurações
1. Abra /application/config/database.php e edite as configurações do banco.
2. Abra seu banco de dados, crie um banco chamado: estagiando_bd, e execute:

```sql
CREATE TABLE IF NOT EXISTS `estagiando_bd`.`users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `estagiando_bd`.`ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
  `data` blob NOT NULL,
  PRIMARY KEY (id),
  KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE `estagiando_bd`.`registros` (
  `id` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  `data` VARCHAR(45) NULL,
  `hora` VARCHAR(45) NULL,
  `tipo_marcacao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


```


****O arquivo dump está dentro da pasta raíz do projeto. O repositório de chama Dump_estagiando_bd . *****

###Conclusão e considerações finais

O exercício não foi difícil e tivemos tempo sufiente. O meu maior desafio foi o fato de o e-mail ter caído na minha ciaxa de spam, e somente na quarta feira quando a Débora da Gama ne chamou inbox, fui verificar e tinha recebido. Assim que recebi as instruções comecei a realizar a tarefa.

Umas das tarefas que mais gostaria de ter adicionado, seria o relatório de ponto. Onde no relatório imprimiria uma tabela, onde os titulos das linhas seriam: Data, Entrada, Saída para almoço, volta do almoço e saída. No corpo da tabela eu colocaria em cada linha essas informações. Para tanto, eu usaria a função arruy_push, onde a cada dia encontrado na tabela, eu adicionaria o horário da marcação e o tipo da marcação. Então seria assim: Filtro um determinado mês, pego as datas presentes no banco daquele mês que contém marcacação. Faço uma função que encontra as marcações presentes dia a dia desse mês e utilizo array push para adicionar a hora da marcação e o tipo dela. Na minha view, por fim, faco um laço que exibirá um dia por linha e os horário das marcações. Utilizaria alguma biblioteca para inserir esse html num PDF.


Dúvidas: dwillian.lopes@gmail.com
Tel: (31) 98303-8379.


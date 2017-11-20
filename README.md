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
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
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
CREATE TABLE IF NOT EXISTS `ci_sessions` (
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


###Registro de marcações

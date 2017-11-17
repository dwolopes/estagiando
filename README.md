# Estagiando

## Instalação

## Funcionalidade


## Login
1. Open /application/config/database.php and edit with your database settings
2. On your database, open a SQL terminal paste this and execute:

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
```


###Dados de uma sessão

    <?php if (isset($_SESSION)): ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php var_dump($_SESSION);?>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    <?php endif;?>

###Registro de marcações

CREATE TABLE `estagiando_bd`.`registros` (
  `id` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  `data` VARCHAR(45) NULL,
  `hora` VARCHAR(45) NULL,
  `tipo_marcacao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


####Principais dificuldades

1) Ajax com codelguiniter - Como essa foi a primeira vez que trabalhei com o framework, tive algumas dificuldades em entender o funcionamento do seu token na hora de enviar e receber informações via ajax. Minha intenção era enviar as marcações dos estagiários para o banco de dados usando Ajax, porém o frame voltava com o erro 403. Esse problema ocorre pelas validações de token que devem ocorrer entre controller e dados enviados pelo ajax. Por questão de tempo, tive que buscar outras alteranativas.
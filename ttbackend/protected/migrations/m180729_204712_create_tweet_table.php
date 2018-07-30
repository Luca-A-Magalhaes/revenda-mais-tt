<?php

class m180729_204712_create_tweet_table extends CDbMigration
{
	/*
	public function up()
	{
		$this->createTable('tbl_tweet', [
			'id' => 'pk',
			'user' => 'string',
			'name' => 'string',
			'text' => 'string',
			'thumbnail' => 'string'
		]);
	}
	
	public function down()
	{
		$this->dropTable('tbl_tweet');
	}
	*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('tbl_tweet', [
			'id' => 'pk',
			'user' => 'string',
			'name' => 'string',
			'text' => 'string',
			'thumbnail' => 'string'
		]);
		$this->insert('tbl_tweet', ['user' => 'BOTAlbert', 'name' => 'Albert', 'text' => 'I really cannot stand Neymar anymore', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/5.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAllen', 'name' => 'Allen', 'text' => 'a assessoria do Neymar é tipo Marcelo Olvieira no Grêmio', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/4.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBert', 'name' => 'Bert', 'text' => 'propaganda do neymar', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/6.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBob', 'name' => 'Bob', 'text' => 'Tem muita gente que está torcendo pelo Neymar e que logo logo o brilhante futebol dele irá está em alta de Novo!!!', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/2.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTCecil', 'name' => 'Cecil', 'text' => 'Neymar só vai ganhar respeito de volta,quando ele chegar no baile da gaiola armado, com a Bruna do lado,mandando passinho', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/1.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAlbert', 'name' => 'Albert', 'text' => 'hola broos, algune quiere ser mi amigue? soy piola ahre #armyseguindoarmy', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/5.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAllen', 'name' => 'Allen', 'text' => 'vou assistir filme e depois eu vou voltar pra interagir pq eu amo isso aqui #armyseguindoarmy', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/4.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBert', 'name' => 'Bert', 'text' => 'vou seguir todos de volta amanhã eh isto vou ter que ir dormir #armyseguindoarmy', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/6.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBob', 'name' => 'Bob', 'text' => 'Apesar de eu ser quietinha no meu canto, algumas armys já me ajudaram quando eu tava triste, mesmo não me conhecendo, queriam me ajuda a suporta o que eu tava passando, EU SOU MUITO GRATA A ESSE FANDOM É POR FAZER PARTE DELE <3 #armyseguindoarmy', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/2.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTCecil', 'name' => 'Cecil', 'text' => 'só de pensar que nesse mundo vcs existem eu acredito q o mundo pode ser melhor @BTS_twt #armyseguindoarmy', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/1.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAlbert', 'name' => 'Albert', 'text' => '"Ta gostando da minha comida?" TA ÓTIMAAA HAHAHAHAHAHAHAHAHAHA #ProgramaSilvioSantos', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/5.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAllen', 'name' => 'Allen', 'text' => 'Eu diria que tá boa, mas não por medo, e sim pq não gosto de magoar quem fez rs #ProgramaSilvioSantos', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/4.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBert', 'name' => 'Bert', 'text' => 'programasilviosantos Comida Salgada KKKKKKKKKKKKKKKKKKKK', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/6.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBob', 'name' => 'Bob', 'text' => 'a comida da mamãe kkkk #ProgramaSilvioSantos', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/2.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTCecil', 'name' => 'Cecil', 'text' => 'Essa é bo demais!! "PITOCOOOOOOOOO" hahahahahahahahah #CamerasEscondidas no @PgmSilvioSantos #ProgramaSilvioSantos', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/1.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAlbert', 'name' => 'Albert', 'text' => 'Música boa da porra essa que o Romero pediu! #Fantastico', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/5.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAllen', 'name' => 'Allen', 'text' => '"Mesmo sendo uma ativista e sabendo pelo que lutar, ela nunca conseguiu se convencer que é tão boa quanto os outros" tô sentindo essa frase até agora. #showdavida #Fantástico', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/4.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBert', 'name' => 'Bert', 'text' => '#Fantastico  deixa a Polyana acabar de falar... ficou o q?', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/6.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBob', 'name' => 'Bob', 'text' => 'Neymar foi #Fantastico no comercial da Gillete', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/2.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTCecil', 'name' => 'Cecil', 'text' => 'Christiane foi com o Fagundes no #Fantástico divulgar Velho Chico e agora com #OTempoNãoPara ela está com o Celulari <3', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/1.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAlbert', 'name' => 'Albert', 'text' => 'Sobre a propaganda da Gillete com Neymar', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/5.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTAllen', 'name' => 'Allen', 'text' => 'Nunca mais compro produto Gillete,que merda de campanha.', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/4.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBert', 'name' => 'Bert', 'text' => 'Não consegui ver até o final. Que grande porcaria. A Gillette usa o menino ney pra merchand e menino ney usa a marca pra fazer média. E tem faculdade que ensina isso? Ah VTNC !', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/6.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTBob', 'name' => 'Bob', 'text' => 'Nao recapitulando... a  Gillete ganhou uma cliente por conseguir me fazer rir com a propaganda do Neymar. Tentou limpar a barra dele e só piorou. Aposto que este "texto" foi escrito por algum estagiario.', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/2.jpg']);
		$this->insert('tbl_tweet', ['user' => 'BOTCecil', 'name' => 'Cecil', 'text' => 'Esse é o camisa 10 da seleção, que bota a cara a bater em comercial da Gillette', 'thumbnail' => 'https://randomuser.me/api/portraits/lego/1.jpg']);
	}

	public function safeDown()
	{
		$this->truncateTable('tbl_tweet');
		$this->dropTable('tbl_tweet');
	}
	
}
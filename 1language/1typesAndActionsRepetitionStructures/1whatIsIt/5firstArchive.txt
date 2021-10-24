Primeiro arquivo PHP

Vamos criar um arquivo para que o PHP interprete todas as instruções de uma só vez e execute o nosso programa. A primeira coisa que faremos, então, é sair do terminal interativo com o comando quit, sem o ponto e vírgula, já que isso não é uma instrução PHP.

Agora que saímos do terminal interativo, limparemos a tela com o comando cls. Em seguida, criaremos um arquivo PHP. Para isso, podemos utilizar qualquer editor de código/IDE com o qual tenhamos familiaridade. No meu caso, utilizarei uma IDE chamada PhpStorm, que traz várias funcionalidades que auxiliam no desenvolvimento. Mas, se você preferir, pode utilizar o VisualStudio Code, o Sublime, o Atom, o Eclipse, o NetBeans, ou qualquer outra ferramenta que permita editar código em PHP. Para o nosso desenvolvimento, a ferramenta utilizada não importa muito - você pode, inclusive, utilizar o bloco de notas. Porém, não recomendo essa alternativa, já que os editores de texto colorem alguns trechos do código e mostram quando alguma variável foi escrita errado ou temos algum outro tipo de erro.

No PhpStorm, clicaremos em "PHP Empty Project" e selecionaremos uma pasta destino para o projeto. Nesse destino, criaremos uma pasta "php-primeiros-passos" e clicaremos em "Create". Na inicialização, o PhpStorm exibe algumas dicas de como utilizar o programa, que podemos fechar.

Clicando com o botão direito na pasta do projeto e em "New > PHP File", criaremos um novo arquivo PHP chamado ola-mundo. O arquivo gerado virá automaticamente com um comentário, que é uma mensagem ou código feito para que o ser humano leia, e não para que o PHP o interprete. O comentário padrão do PhpStorm informa que aquele arquivo foi criado com esse programado, o usuário que o criou e a data e hora dessa criação. Podemos apagar esse comentário.

Caso você queira criar comentários na sua aplicação, basta utilizar // e seguir escrevendo na mesma linha. Para criar comentários com várias linhas, utilizamos /*. Se quisermos indicar o fim do comentário, escrevemos */.

Repare que no início do arquivo criado temos um <?php. Isso indica que a partir dessa instrução será executado um código PHP. Portanto, podemos escrever echo "Olá mundo". Fazendo dessa forma, o PhpStorm nos indicará, com um sublinhado vermelho, que um ; é esperado ao final do comando. Corrigindo esse erro, o sublinhado sumirá.

Com isso, já temos o nosso primeiro arquivo criado e pronto para ser executado. Voltando ao Terminal, navegadores até a pasta que acabamos de criar.

Em qualquer sistema operacional, o comando cd permite mudar de diretório no terminal. Além disso, a tecla "Tab" funciona como ferramenta de autocompletar.

Na pasta do nosso projeto, executaremos php ola-mundo.php, e a mensagem "Olá mundo" será exibida na tela. Como o PHP é uma linguagem interpretada e não precisamos recompilar o código para enxergarmos as alterações, se adicionarmos uma ! ao final de "Olá mundo" no nosso arquivo, bastará executarmos php ola-mundo.php novamente para que ela seja exibida na tela.

Além disso, não precisamos executar o código na mesma linha que <?php>, tendo, na verdade, toda a página disponível. O interpretador do PHP simplesmente ignorará todas as linhas em branco. É possível criar todo o código da aplicação em apenas uma linha, mas a leitura será bastante dificultada.

Já entendemos o que é o PHP, como executar comandos PHP no Terminal, qual a estrutura de um arquivo PHP e como executá-lo. Mas o que mais podemos fazer com essa linguagem? Como poderíamos, por exemplo, armazenar um dado antes de exibirmos uma informação? Será que toda vez que fizermos uma conta com um número teremos que salvá-lo em um arquivo para depois recuperarmos o resultado?

Como comentamos no último vídeo, queremos criar um arquivo para que o PHP interprete todas as instruções de uma só vez e execute o nosso programa. A primeira coisa que faremos, então, é sair do terminal interativo com o comando quit, sem o ponto e vírgula, já que isso não é uma instrução PHP.

Agora que saímos do terminal interativo, limparemos a tela com o comando cls. Em seguida, criaremos um arquivo PHP. Para isso, podemos utilizar qualquer editor de código/IDE com o qual tenhamos familiaridade. No meu caso, utilizarei uma IDE chamada PhpStorm, que traz várias funcionalidades que auxiliam no desenvolvimento. Mas, se você preferir, pode utilizar o VisualStudio Code, o Sublime, o Atom, o Eclipse, o NetBeans, ou qualquer outra ferramenta que permita editar código em PHP. Para o nosso desenvolvimento, a ferramenta utilizada não importa muito - você pode, inclusive, utilizar o bloco de notas. Porém, não recomendo essa alternativa, já que os editores de texto colorem alguns trechos do código e mostram quando alguma variável foi escrita errado ou temos algum outro tipo de erro.

No PhpStorm, clicaremos em "PHP Empty Project" e selecionaremos uma pasta destino para o projeto. Nesse destino, criaremos uma pasta "php-primeiros-passos" e clicaremos em "Create". Na inicialização, o PhpStorm exibe algumas dicas de como utilizar o programa, que podemos fechar.

Clicando com o botão direito na pasta do projeto e em "New > PHP File", criaremos um novo arquivo PHP chamado ola-mundo. O arquivo gerado virá automaticamente com um comentário, que é uma mensagem ou código feito para que o ser humano leia, e não para que o PHP o interprete. O comentário padrão do PhpStorm informa que aquele arquivo foi criado com esse programado, o usuário que o criou e a data e hora dessa criação. Podemos apagar esse comentário.

Caso você queira criar comentários na sua aplicação, basta utilizar // e seguir escrevendo na mesma linha. Para criar comentários com várias linhas, utilizamos /*. Se quisermos indicar o fim do comentário, escrevemos */.

Repare que no início do arquivo criado temos um <?php. Isso indica que a partir dessa instrução será executado um código PHP. Portanto, podemos escrever echo "Olá mundo". Fazendo dessa forma, o PhpStorm nos indicará, com um sublinhado vermelho, que um ; é esperado ao final do comando. Corrigindo esse erro, o sublinhado sumirá.

Com isso, já temos o nosso primeiro arquivo criado e pronto para ser executado. Voltando ao Terminal, navegadores até a pasta que acabamos de criar.

Em qualquer sistema operacional, o comando cd permite mudar de diretório no terminal. Além disso, a tecla "Tab" funciona como ferramenta de autocompletar.

Na pasta do nosso projeto, executaremos php ola-mundo.php, e a mensagem "Olá mundo" será exibida na tela. Como o PHP é uma linguagem interpretada e não precisamos recompilar o código para enxergarmos as alterações, se adicionarmos uma ! ao final de "Olá mundo" no nosso arquivo, bastará executarmos php ola-mundo.php novamente para que ela seja exibida na tela.

Além disso, não precisamos executar o código na mesma linha que <?php>, tendo, na verdade, toda a página disponível. O interpretador do PHP simplesmente ignorará todas as linhas em branco. É possível criar todo o código da aplicação em apenas uma linha, mas a leitura será bastante dificultada.

Já entendemos o que é o PHP, como executar comandos PHP no Terminal, qual a estrutura de um arquivo PHP e como executá-lo. Mas o que mais podemos fazer com essa linguagem? Como poderíamos, por exemplo, armazenar um dado antes de exibirmos uma informação? Será que toda vez que fizermos uma conta com um número teremos que salvá-lo em um arquivo para depois recuperarmos o resultado?

Conversaremos mais sobre isso na próxima aula.

> Objetivo

Construir em código PHP o diagrama abaixo cumprindo as seguintes exigências:

> Requisitos

a) Utilizar autoload (Nativo ou Composer) para carregamento das classes.

b) O código deve estar envolvido em um tratamento de exceções.

c) Método preencherDados() deve preencher os atributos da classe Usuario e utilizar o método setNivel para preencher o atributo “nivel” da classe Permissao.

d) Método cadastrar() deve ser executado apenas se nome, telefone e nivel estiverem preenchidos e quando executado deve cadastrar a data e hora de cadastro no atributo data_cadastro. Caso algum dos campos não estejam preenchidos, deve-se disparar uma exceção informando quais campos não estão preenchidos.

e) O arquivo que irá executar tudo deverá mostrar na tela o nome, telefone, nivel e data_cadastro após todo o procedimento de preencherDados() e cadastro() ser realizado.

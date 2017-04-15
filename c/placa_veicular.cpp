//Este algoritmo recebe os n�meros de uma placa veicular
//e informa qual � o correspondente � 
//unidade, dezena, centena e milhar

//Inclus�o das bibliotecas
#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(){
	
	//Configurando o idioma
	setlocale(LC_ALL, "Portuguese");
	
	//Declara��o das vari�veis
	int placa, unidade, dezena, centena, milhar;
	
	//Recebendo o valor do usu�rio
	printf("Por gentileza, informe os quatro n�meros da placa do ve�culo: ");
	scanf("%d", &placa);
	
	//Separa��o dos n�meros 
	unidade = placa % 10;
	dezena  = ((placa % 100) - unidade) / 10;
	centena = ((placa % 1000) - (placa % 100)) / 100;
	milhar	= ((placa % 10000) - (placa % 1000)) / 1000;
	
	//Exibi��o dos resultados
	printf("\n");
	printf("O n�mero correspondente � casa da unidade � %d.\n",unidade);
	printf("O n�mero correspondente � casa da dezena � %d.\n",dezena);
	printf("O n�mero correspondente � casa da centena � %d.\n",centena);
	printf("O n�mero correspondente � casa de milhar � %d.\n",milhar);
	printf("\n");	
	
	//Aguarda o pressionamento de qualquer tecla para finalizar
	system("pause");
	return 0;
}

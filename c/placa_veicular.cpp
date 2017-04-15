//Este algoritmo recebe os números de uma placa veicular
//e informa qual é o correspondente à 
//unidade, dezena, centena e milhar

//Inclusão das bibliotecas
#include <stdio.h>
#include <stdlib.h>
#include <locale.h>

int main(){
	
	//Configurando o idioma
	setlocale(LC_ALL, "Portuguese");
	
	//Declaração das variáveis
	int placa, unidade, dezena, centena, milhar;
	
	//Recebendo o valor do usuário
	printf("Por gentileza, informe os quatro números da placa do veículo: ");
	scanf("%d", &placa);
	
	//Separação dos números 
	unidade = placa % 10;
	dezena  = ((placa % 100) - unidade) / 10;
	centena = ((placa % 1000) - (placa % 100)) / 100;
	milhar	= ((placa % 10000) - (placa % 1000)) / 1000;
	
	//Exibição dos resultados
	printf("\n");
	printf("O número correspondente à casa da unidade é %d.\n",unidade);
	printf("O número correspondente à casa da dezena é %d.\n",dezena);
	printf("O número correspondente à casa da centena é %d.\n",centena);
	printf("O número correspondente à casa de milhar é %d.\n",milhar);
	printf("\n");	
	
	//Aguarda o pressionamento de qualquer tecla para finalizar
	system("pause");
	return 0;
}

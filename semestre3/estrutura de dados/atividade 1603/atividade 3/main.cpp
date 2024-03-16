#include <iostream>
#include <string>
 
using namespace std;
 
struct Funcionario
{
    string nome;
    string cargo;
    int idade;
    int numeroIdentificacao;
    float salario;
};
 
int main()
{
    Funcionario *funcionario = new Funcionario;
 
    cout << "Digite o nome completo do funcionario: ";
    getline(cin, funcionario->nome);
 
    cout << "Digite o cargo do funcionario: ";
    getline(cin, funcionario->cargo);
 
    cout << "Digite a idade do funcionario: ";
    cin >> funcionario->idade;
 
    cout << "Digite o numero de identificacao do funcionario: ";
    cin >> funcionario->numeroIdentificacao;
 
    cout << "Digite o salario do funcionario: ";
    cin >> funcionario->salario;
 
    cout << "\nDetalhes do funcionario:\n";
    cout << "Nome: " << funcionario->nome << endl;
    cout << "Cargo: " << funcionario->cargo << endl;
    cout << "Idade: " << funcionario->idade << " anos\n";
    cout << "Numero de identificacao: " << funcionario->numeroIdentificacao << endl;
    cout << "Salario: R$" << funcionario->salario << endl;
 
    delete funcionario;
 
    return 0;
}
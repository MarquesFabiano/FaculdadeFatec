#include <iostream>
#include <string>
 
using namespace std;
 
struct Estudante {
    string nomeCompleto;
    int idade;
    float mediaFinal;
};
 
bool validarIdade(int idade) {
    if (idade >= 0) {
        return true;
    } else {
        cout << "Opa, A idade nao pode ser menor que zero. insira um valor valido.\n";
        return false;
    }
}
 
bool validarMedia(float media) {
    if (media >= 0 && media <= 10) {
        return true;
    } else {
        cout << "A media deve estar entre 0 e 10. Insira um valor valido.\n";
        return false;
    }
}
 
int main() {
    Estudante estudante;
 
    cout << "Digite o nome completo do estudante: ";
    getline(cin, estudante.nomeCompleto);
 
    do {
        cout << "Digite a idade do estudante: ";
        cin >> estudante.idade;
    } while (!validarIdade(estudante.idade));
 
    do {
        cout << "Digite a media final do estudante: ";
        cin >> estudante.mediaFinal;
    } while (!validarMedia(estudante.mediaFinal));
 
    cout << "\nInformacoes do Estudante:\n";
    cout << "Nome completo: " << estudante.nomeCompleto << endl;
    cout << "Idade: " << estudante.idade << " anos\n";
    cout << "Media final: " << estudante.mediaFinal << endl;
 
    return 0;
}
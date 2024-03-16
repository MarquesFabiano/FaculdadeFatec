#include <iostream>
#include <string>
 
using namespace std;

struct Produto
    {
        string nomeProduto;
        float preco;
        int qtdEstoque;
    };
    
int main()
    {
        Produto *estoque = new Produto[10];
        
        for (int i = 0; i < 10; ++i )
            {
                cout << "Produto " << i + 1 << ":\n";
                
                cout << "Nome do Produto: ";
                cin >> estoque[i].nomeProduto;
                
                cout << "Preco: ";
                cin >> estoque[i].preco;
                
                cout << "Quantidade em estoque: ";
                cin >> estoque[i].qtdEstoque;
                
            }
        
        cout << "\nLista de produtos: \n";
        
        for (int i = 0; i < 10;  i++ ) 
            {
                cout << "Produto: " << i + 1 << ":\n";
                
                cout << "Nome do Produto: " << estoque[i].nomeProduto << endl;
                
                cout << "Proco: " << estoque[i].preco << endl;
                
                cout << "Quantidade em estoque: " << estoque[i].qtdEstoque << endl;
            }
            
            delete[] estoque;
            
            return 0;
    }
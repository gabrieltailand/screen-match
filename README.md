# ANOTAÇÕES DAS AULAS
## Polimofismo

Mesmo objeto podendo assumir formas diferentes, que é possível através da herança.

Quarto dos quatro pilares da Orientação a Objetos:

- Abstração
- Encapsulamento
- Herança
- Polimorfismo

O Polimorfismo se refere à capacidade de objetos de diferentes classes serem tratados de maneira uniforme através de uma interface comum. Isso permite que diferentes tipos de objetos respondam de maneira diferente a uma mesma mensagem ou método, de acordo com sua implementação específica.

No exemplo da aula, tanto objetos do tipo Serie quanto objetos do tipo Filme podem ser tratados de maneira uniforme como um Titulo, que provê uma interface comum como os métodos media() e duracaoEmMinutos(). Eles puderam responder de maneira diferente à mesma mensagem (a chamada do método duracaoEmMinutos) graças à sobrescrita do método.

## Métodos abstratos

- Podem ter métodos

## Traits

São um mecanismo para reutilizar código sem duplicação (Herança horizontal, porque não cria hierarquia )
Uma Trait não é um tipo (não pode ser utilizado como tipo).

[Documentação Traits](https://www.php.net/traits)

A palavra *use* importa uma *trait* quando ela está dentro de uma classe, fora de uma classe, ela serve para importar um nome em um arquivo.

## Namespaces

É muito útil e uma boa prática fazermos uso de namespaces para separar as nossas classes em nossa aplicação. Para fazer bom uso deste recurso, devemos entender alguns detalhes.

Quando definimos uma classe sem informar o seu namespace, ela é criada no namespace padrão do PHP. Este namespace tem um "nome vazio", ou seja, uma classe `Conta` sem namespace tem como seu "nome completo" `\Conta`.

Se em uma classe com namespace definido precisarmos acessar classes de outro namespace, precisamos adicionar o `use` ou informar seu nome completo (*namespace* + nome da classe).

Estando em uma classe chamada `Alura\Banco\Conta\Conta`, por exemplo, e querendo acessar a classe `Alura\Banco\CPF`, precisamos informar o nome completo da classe, ou utilizar `use Alura\Banco\CPF` no início do arquivo, o que permite que no restante do arquivo utilizemos apenas `CPF` como nome.

Outro detalhe interessante é que, se precisamos "importar" (com `use`) mais de uma classe do mesmo namespace, podemos fazer na mesma linha, envolvendo os nomes das classes em chaves. Por exemplo:

```php

namespace Alura\Banco\Conta;

use Alura\Banco\{CPF, Endereco};
use SplFileInfo;

class Conta
{
    public function umMetodoQualquer()
    {
        $cpf = new CPF();
        $cpf = new Endereco();
        $fileInfo = new SplFileInfo();
        $fileObject = new \SplFileObject();
    }
}
```

[Documentação Namespaces](https://www.php.net/manual/en/language.namespaces.php)
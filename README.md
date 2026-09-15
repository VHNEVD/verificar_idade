# verificar_idade
# Sistema de Verificação de Acesso em PHP

Este é um projeto simples em PHP desenvolvido em um único arquivo (`index.php`) que realiza a verificação de idade de um usuário através de um formulário e registra os acessos permitidos em um arquivo de log local.

## 🚀 Funcionalidades

- **Formulário de Entrada:** Solicita o nome e o ano de nascimento do usuário.
- **Cálculo Automático de Idade:** Calcula a idade com base no ano atual.
- **Validação de Maioridade:**
  - Se o usuário tiver **18 anos ou mais**: Exibe a mensagem `"Acesso permitido, [Nome]!"` e grava o registro no log.
  - Se for **menor de 18 anos**: Exibe a mensagem `"Acesso negado, [Nome]!"` e não registra o acesso.
- **Registro de Log:** Armazena o histórico dos acessos permitidos no arquivo `log_acessos.txt`, contendo data, hora, nome e idade.

---

## 🛠️ Tecnologias Utilizadas

- **PHP** (Back-end e processamento do formulário)
- **HTML5** (Estrutura do formulário)

---

## 📁 Estrutura do Projeto

```text
.
├── index.php           # Script principal (Formulário + Lógica PHP)
├── log_acessos.txt     # Arquivo gerado automaticamente para gravar os acessos
└── README.md           # Documentação do projeto

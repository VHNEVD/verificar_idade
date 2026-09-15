# 🔐 Sistema de Verificação de Acesso em PHP

Este projeto é uma aplicação web simples desenvolvida em **PHP** contida em uma única página. O objetivo da aplicação é capturar o nome e o ano de nascimento do usuário, calcular a sua idade e validar se o acesso deve ser permitido ou negado, registrando os acessos autorizados em um arquivo de texto local.

---

## 🎓 Informações do Estudante

* **Aluno:** Victor Hugo Franck Voltarelli
* **Curso:** Desenvolvimento de Sistemas
* **Instituição:** SENAI (Serviço Nacional de Aprendizagem Industrial)

---

## 🛠️ Funcionalidades

1. **Formulário de Entrada:** Recebe os campos `Nome` e `Ano de Nascimento`.
2. **Cálculo de Idade:** Calcula a idade do usuário com base no ano atual do servidor.
3. **Validação de Acesso:**
   * **Maior ou igual a 18 anos:** Exibe a mensagem *"Acesso permitido, [Nome]!"* e registra os dados no arquivo `log_acessos.txt`.
   * **Menor de 18 anos:** Exibe a mensagem *"Acesso negado, [Nome]!"* e não realiza o registro em arquivo.
4. **Registro de Log (`log_acessos.txt`):** Grava a data/hora do acesso, o nome e a idade calculada do usuário aprovado (utilizando `FILE_APPEND` para manter os registros antigos).

---

## 🚀 Tecnologias Utilizadas

* **PHP** (Lógica do servidor, cálculos e manipulação de arquivos)
* **HTML5** (Estrutura do formulário e exibição da interface)

---

## 📂 Estrutura do Projeto

```text
├── index.php          # Código principal com formulário e lógica PHP
├── log_acessos.txt    # Arquivo gerado automaticamente com os logs de acesso
└── README.md          # Documentação do projeto

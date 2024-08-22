

---

## Olá, pessoal! Muito obrigado pela oportunidade de participar deste processo seletivo com vocês! 🚀

Antes de rodar o build do PHP, configurei um **Dockerfile** com a imagem necessária e um script para criar o banco de dados automaticamente na sua máquina. Para começar, é só rodar o comando:

```bash
docker-compose up
```

### 🚨 Atenção!
Identifiquei um problema ocasional na conexão com o banco de dados. Se a conexão falhar, não se preocupe! Basta abrir um terminal e rodar o comando:

```bash
mysql -h 127.0.0.1 -P 3306 -u user -p
```

Isso deve destravar o banco de dados para que tudo funcione corretamente.

### 📊 Banco de Dados
Após o build do Docker, você encontrará **três tabelas** no banco de dados, criadas pelo script `setup.sql`. No entanto, não haverá dados iniciais nessas tabelas.

### 🛠️ Desafios
Infelizmente, não consegui implementar o DELETE de dados a tempo. Parece haver um mistério por trás do Laravel que não consegui desvendar a tempo. 😅 Peço desculpas por isso e agradeço pela compreensão!

---

Muito obrigado mais uma vez pela oportunidade! 😊

- ### Códigos Git

  

  - ls --> mostrar lista de pastas e/ou arquivos
  - ls -a --> mostrar pastas ocultas
  - cd  + nome da pasta ou arquivo --> abrir pasta ou arquivo
  - cd .. --> voltar um nível na pasta atual
  - ctrl + l --> limpar tela
  - git status --> saber se os arquivos da pasta já estão comitado
  - git add . / git add*/ git add -a --> adicionar pastas ou arquivos para fazer o commite
  - git push origin main ou master --> para commitar (mandar para  o git web) pastas e/ou arquivos para o repositório on line
  - git pull origin main ou master --> para baixar o arquivo do GitHub (on line) que está modificado on line e diferente do repositório local do pc.
  - mkdir + nome da pasta --> criar nova pasta
  - rmdir + nome da pasta --> remover pasta
  - echo > + nome do arquivo --> criar novo arquivo
  - echo "texto arquivo" >> nome do arquivo --> para criar texto dentro de determinado arquivo
  - ssh-keygen -t ed25519 -C (maiúsco) + e-mail (para cadastro de acordo com github net) --> para gerar a chave SSH pública e privada
  - cat id_ed25519.pub --> para mostrar a chave SSH pública caso queira copiar para o Git Hub net (Comando deve ser executado dentro da pasta que esta a chave)
  - pwd --> mostra o caminho completo das pastas acessadas até o momento
  -  eval $(ssh-agent -s) - Segunda etapa para executar a chave SSH
  - ssh-add id_ed25519 --> Adicionar a chave SSH privada
  - git clone --> para clonar um diretório do GitHub net para a máquina local (sempre pegar o endereço do SSH e não o HTTPS)
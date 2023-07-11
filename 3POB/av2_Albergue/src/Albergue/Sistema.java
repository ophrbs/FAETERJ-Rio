package Albergue;
import java.util.Scanner;
import java.util.ArrayList;

public class Sistema {
    Scanner sc = new Scanner(System.in);
    ArrayList<Cliente> listaClientes = new ArrayList<>();
    ArrayList<Quarto> listaQuartos = new ArrayList<>();
    ArrayList<Cama> listaCamas = new ArrayList<>();
    ArrayList<Reserva> listaReservas = new ArrayList<>();
    public void iniciar() {
        int opcao;
        do {
            System.out.println("Quais funcionalidades você deseja acsesar?");
            System.out.println("1 - Cliente");
            System.out.println("2 - Quarto");
            System.out.println("3 - Cama");
            System.out.println("4 - Reserva");
            System.out.println("99 - Finalizar programa");

            opcao = sc.nextInt();

            switch(opcao) {
                case 1:
                    do {
                        System.out.println("O que deseja fazer?");
                        System.out.println("1 - Incluir Cliente");
                        System.out.println("2 - Alterar Cliente");
                        System.out.println("3 - Excluir Ciente");
                        System.out.println("4 - Listar Clientes");
                        System.out.println("0 - Voltar");

                        opcao = sc.nextInt();

                        switch(opcao) {
                            case 1: this.incluirCliente();
                                break;

                            case 2: this.alterarCliente();
                                break;

                            case 3: this.excluirCliente();
                                break;

                            case 4: this.listarClientes();
                                break;

                            case 0: System.out.println("Programa Finalizado");
                                break;

                            default: System.out.println("Opcao invalida");
                                break;
                        }

                    } while (opcao != 0);
                    break;

                case 2:
                    do {
                        System.out.println("O que deseja fazer?");
                        System.out.println("1 - Incluir Quarto");
                        System.out.println("2 - Alterar Quarto");
                        System.out.println("3 - Excluir Quarto");
                        System.out.println("4 - Listar Quarto");
                        System.out.println("0 - Voltar");

                        opcao = sc.nextInt();

                        switch(opcao) {
                            case 1: this.incluirQuarto();
                                break;

                            case 2: this.alterarQuarto();
                                break;

                            case 3: this.excluirQuarto();
                                break;

                            case 4: this.listarQuartos();
                                break;

                            case 0: System.out.println("Programa Finalizado");
                                break;

                            default: System.out.println("Opcao invalida");
                                break;
                        }

                    } while (opcao != 0);
                    break;

                case 3:
                    do {
                        System.out.println("O que deseja fazer?");
                        System.out.println("1 - Incluir Cama");
                        System.out.println("2 - Alterar Cama");
                        System.out.println("3 - Excluir Cama");
                        System.out.println("4 - Listar Cama");
                        System.out.println("0 - Voltar");

                        opcao = sc.nextInt();

                        switch(opcao) {
                            case 1: this.incluirCama();
                                break;

                            case 2: this.alterarCama();
                                break;

                            case 3: this.excluirCama();
                                break;

                            case 4: this.listarCamas();
                                break;

                            case 0: System.out.println("Programa Finalizado");
                                break;

                            default: System.out.println("Opcao invalida");
                                break;
                        }
                    } while (opcao != 0);
                    break;

                case 4:
                    do {
                        System.out.println("O que deseja fazer?");
                        System.out.println("1 - Incluir Reserva");
                        System.out.println("2 - Alterar Reserva");
                        System.out.println("3 - Excluir Reserva");
                        System.out.println("4 - Listar Reservas");
                        System.out.println("0 - Voltar");

                        opcao = sc.nextInt();

                        switch(opcao) {
                            case 1: this.incluirReserva();
                                break;

                            case 2: this.alterarReserva();
                                break;

                            case 3: this.excluirReserva();
                                break;

                            case 4: this.listarReservas();
                                break;

                            case 0: System.out.println("Programa Finalizado");
                                break;

                            default: System.out.println("Opcao invalida");
                                break;
                        }
                    } while (opcao != 0);
                    break;

                case 99: System.out.println("Programa Finalizado");
                    break;

                default: System.out.println("Opcao invalida");
                    break;
            }

        } while (opcao != 99);
    }

    //CRUD CLIENTE
    public void incluirCliente() {
        int id;
        String nome, endereco, postalCode, pais, cpf, passaporte, email, dataNasc;

        System.out.println("Insira a ID do cliente:");
        id = sc.nextInt();
        sc.nextLine(); //limpar o buffer

        for (int i = 0; i < listaClientes.size(); i++) {
            if (listaClientes.get(i).getId() == id) {
                System.out.println("Cliente ja esta incluido!");
                return;
            }
        }

        System.out.println("Insira o nome:");
        nome = sc.nextLine();
        System.out.println("Insira o endereço:");
        endereco = sc.nextLine();
        System.out.println("Insira o código postal:");
        postalCode = sc.nextLine();
        System.out.println("Insira o pais:");
        pais = sc.nextLine();
        System.out.println("Insira o cpf:");
        cpf = sc.nextLine();
        System.out.println("Insira passaporte:");
        passaporte = sc.nextLine();
        System.out.println("Insira email:");
        email = sc.nextLine();
        System.out.println("Insira a data de nascimento:");
        dataNasc = sc.nextLine();

        Cliente c = new Cliente(id, nome, endereco, postalCode, pais, cpf, passaporte, email, dataNasc);

        listaClientes.add(c);
        System.out.println("Cliente incluido!");
    }

    public void alterarCliente() {
        int id, opc, achou = 0;
        String novo;

        System.out.println("Insira a ID do cliente a ser alterado:");
        id = sc.nextInt();
        sc.nextLine(); //limpar o buffer

        for (int i = 0; i < listaClientes.size(); i++) {
            if (listaClientes.get(i).getId() == id) {
                achou = 1;
            }
        }

        if (achou == 0) {
            System.out.println("ID nao encontrada!");
            return;
        } else {
            System.out.println("Insira a opção a ser alterada:");
            System.out.println("1-Nome\n2-Endereço\n3-Codigo Postal\n4-Pais\n5-CPF\n6-Passaporte\n7-Email\n8-Data de Nascimento");
            opc = sc.nextInt();
            sc.nextLine(); //limpar o buffer

            switch(opc) {
                case 1:
                    System.out.println("Insira o novo nome:");
                    novo = sc.nextLine();
                    for (int i = 0; i < listaClientes.size(); i++) {
                        if (listaClientes.get(i).getId() == id) {
                            listaClientes.get(i).setNome(novo);
                            return;
                        }
                    }
                    break;

                case 2:
                    System.out.println("Insira o novo endereco:");
                    novo = sc.nextLine();
                    for (int i = 0; i < listaClientes.size(); i++) {
                        if (listaClientes.get(i).getId() == id) {
                            listaClientes.get(i).setEndereco(novo);
                            return;
                        }
                    }
                    break;

                case 3:
                    System.out.println("Insira o novo Codigo Postal:");
                    novo = sc.nextLine();
                    for (int i = 0; i < listaClientes.size(); i++) {
                        if (listaClientes.get(i).getId() == id) {
                            listaClientes.get(i).setPostalCode(novo);
                            return;
                        }
                    }
                    break;

                case 4:
                    System.out.println("Insira o novo Pais:");
                    novo = sc.nextLine();
                    for (int i = 0; i < listaClientes.size(); i++) {
                        if (listaClientes.get(i).getId() == id) {
                            listaClientes.get(i).setPais(novo);
                            return;
                        }
                    }
                    break;

                case 5:
                    System.out.println("Insira o novo CPF:");
                    novo = sc.nextLine();
                    for (int i = 0; i < listaClientes.size(); i++) {
                        if (listaClientes.get(i).getId() == id) {
                            listaClientes.get(i).setCpf(novo);
                            return;
                        }
                    }
                    break;

                case 6:
                    System.out.println("Insira o novo Passaporte:");
                    novo = sc.nextLine();
                    for (int i = 0; i < listaClientes.size(); i++) {
                        if (listaClientes.get(i).getId() == id) {
                            listaClientes.get(i).setPassaporte(novo);
                            return;
                        }
                    }
                    break;

                case 7:
                    System.out.println("Insira o novo Email:");
                    novo = sc.nextLine();
                    for (int i = 0; i < listaClientes.size(); i++) {
                        if (listaClientes.get(i).getId() == id) {
                            listaClientes.get(i).setEmail(novo);
                            return;
                        }
                    }
                    break;

                case 8:
                    System.out.println("Insira a nova Data de Nascimento:");
                    novo = sc.nextLine();
                    for (int i = 0; i < listaClientes.size(); i++) {
                        if (listaClientes.get(i).getId() == id) {
                            listaClientes.get(i).setData(novo);
                            return;
                        }
                    }
                    break;
            }

            System.out.println("Alteração realizada!");
        }
    }

    public void excluirCliente() {
        int id;

        System.out.println("Digite o ID do cliente a ser excluido:");
        id = sc.nextInt();

        for (int i = 0; i < listaClientes.size(); i++) {
            if (listaClientes.get(i).getId() == id) {
                listaClientes.remove(listaClientes.get(i));
                System.out.println("Cliente removido com sucesso!");
                return;
            }
        }

        System.out.println("Cliente não encontrado na lista!");
    }

    public void listarClientes() {
        for (int i = 0; i < listaClientes.size(); i++) {
            System.out.println(listaClientes.get(i).toString());

        }
    }

    //CRUD QUARTO
    public void incluirQuarto() {
        int id, qtdeCamas, qtdeVagas;
        String nomeQuarto, descricao;

        System.out.println("Insira a ID do quarto:");
        id = sc.nextInt();
        sc.nextLine(); //limpar o buffer

        for (int i = 0; i < listaQuartos.size(); i++) {
            if (listaQuartos.get(i).getId() == id) {
                System.out.println("Quarto ja esta incluido!");
                return;
            }
        }

        System.out.println("Insira a quantidade de camas:");
        qtdeCamas = sc.nextInt();
        System.out.println("Insira a quantidade de vagas:");
        qtdeVagas = sc.nextInt();
        sc.nextLine(); //limpar o buffer
        System.out.println("Insira o nome do quarto:");
        nomeQuarto = sc.nextLine();
        System.out.println("Insira a descrição:");
        descricao = sc.nextLine();

        Quarto q = new Quarto(id, qtdeCamas, qtdeVagas, nomeQuarto, descricao);

        listaQuartos.add(q);
        System.out.println("Quarto incluido!");
    }

    public void alterarQuarto() {
        int id, opc, achou = 0, novoInt;
        String novaString;

        System.out.println("Insira a ID do quarto a ser alterado:");
        id = sc.nextInt();

        for (int i = 0; i < listaQuartos.size(); i++) {
            if (listaQuartos.get(i).getId() == id) {
                achou = 1;
            }
        }

        if (achou == 0) {
            System.out.println("ID nao encontrada!");
            return;
        } else {
            System.out.println("Insira a opção a ser alterada:");
            System.out.println("1-Quant. Camas\n2-Quant. Vagas\n3-Nome\n4-Descrição");
            opc = sc.nextInt();
            sc.nextLine(); //limpar o buffer

            switch(opc) {
                case 1:
                    System.out.println("Insira a nova Quantidade de Camas:");
                    novoInt = sc.nextInt();
                    for (int i = 0; i < listaQuartos.size(); i++) {
                        if (listaQuartos.get(i).getId() == id) {
                            listaQuartos.get(i).setQtdeCamas(novoInt);
                            return;
                        }
                    }
                    break;

                case 2:
                    System.out.println("Insira a nova Quantidade de Vagas:");
                    novoInt = sc.nextInt();
                    for (int i = 0; i < listaQuartos.size(); i++) {
                        if (listaQuartos.get(i).getId() == id) {
                            listaQuartos.get(i).setQtdeVagas(novoInt);
                            return;
                        }
                    }
                    break;

                case 3:
                    System.out.println("Insira o novo nome:");
                    novaString = sc.nextLine();
                    for (int i = 0; i < listaQuartos.size(); i++) {
                        if (listaQuartos.get(i).getId() == id) {
                            listaQuartos.get(i).setNomeQuarto(novaString);
                            return;
                        }
                    }
                    break;

                case 4:
                    System.out.println("Insira a nova Descrição:");
                    novaString = sc.nextLine();
                    for (int i = 0; i < listaQuartos.size(); i++) {
                        if (listaQuartos.get(i).getId() == id) {
                            listaQuartos.get(i).setDescricao(novaString);
                            return;
                        }
                    }
                    break;
            }

            System.out.println("Alteração realizada!");
        }
    }

    public void excluirQuarto() {
        int id;

        System.out.println("Digite o ID do quarto a ser excluido:");
        id = sc.nextInt();

        for (int i = 0; i < listaQuartos.size(); i++) {
            if (listaQuartos.get(i).getId() == id) {
                listaQuartos.remove(listaQuartos.get(i));
                System.out.println("Quarto removido com sucesso!");
                return;
            }
        }

        System.out.println("Quarto não encontrado na lista!");
    }

    public void listarQuartos() {
        for (int i = 0; i < listaQuartos.size(); i++) {
            System.out.println(listaQuartos.get(i).toString());
        }
    }

    //CRUD CAMA
    public void incluirCama() {
        int id, codigoCama;
        String posicao;
        Boolean ehBeliche;

        System.out.println("Insira a ID da cama:");
        id = sc.nextInt();

        for (int i = 0; i < listaCamas.size(); i++) {
            if (listaCamas.get(i).getId() == id) {
                System.out.println("Cama ja esta incluida!");
                return;
            }
        }

        System.out.println("Insira o codigo da cama");
        codigoCama = sc.nextInt();
        sc.nextLine(); //limpar o buffer
        System.out.println("Insira a posicao da cama (perto da janela, perto da porta, etc):");
        posicao = sc.nextLine();
        System.out.println("É beliche? (true/false):");
        ehBeliche = sc.nextBoolean();

        Cama c = new Cama(id, codigoCama, ehBeliche, posicao);

        listaCamas.add(c);
        System.out.println("Cama incluida!");
    }

    public void alterarCama() {
        int id, opc, achou = 0, codigoCama;
        String posicao;
        Boolean ehBeliche;

        System.out.println("Insira a ID da cama a ser alterada:");
        id = sc.nextInt();

        for (int i = 0; i < listaCamas.size(); i++) {
            if (listaCamas.get(i).getId() == id) {
                achou = 1;
            }
        }

        if (achou == 0) {
            System.out.println("ID nao encontrada!");
            return;
        } else {
            System.out.println("Insira a opção a ser alterada:");
            System.out.println("1-Código da Cama\n2-Posição\n3-Beliche");
            opc = sc.nextInt();
            sc.nextLine(); //limpar o buffer

            switch(opc) {
                case 1:
                    System.out.println("Insira o novo código da cama:");
                    codigoCama = sc.nextInt();
                    for (int i = 0; i < listaCamas.size(); i++) {
                        if (listaCamas.get(i).getId() == id) {
                            listaCamas.get(i).setCodigoCama(codigoCama);
                            return;
                        }
                    }
                    break;

                case 2:
                    System.out.println("Insira a nova posição da cama:");
                    posicao = sc.nextLine();
                    for (int i = 0; i < listaCamas.size(); i++) {
                        if (listaCamas.get(i).getId() == id) {
                            listaCamas.get(i).setPosicao(posicao);
                            return;
                        }
                    }
                    break;

                case 3:
                    System.out.println("Insira a alteração na beliche:");
                    ehBeliche = sc.nextBoolean();
                    for (int i = 0; i < listaCamas.size(); i++) {
                        if (listaCamas.get(i).getId() == id) {
                            listaCamas.get(i).setEhBeliche(ehBeliche);
                            return;
                        }
                    }
                    break;
            }

            System.out.println("Alteração realizada!");
        }
    }

    public void excluirCama() {
        int id;

        System.out.println("Digite o ID da cama a ser excluido:");
        id = sc.nextInt();

        for (int i = 0; i < listaCamas.size(); i++) {
            if (listaCamas.get(i).getId() == id) {
                listaCamas.remove(listaCamas.get(i));
                System.out.println("Cama removida com sucesso!");
                return;
            }
        }

        System.out.println("Cama não encontrada na lista!");
    }

    public void listarCamas() {
        for (int i = 0; i < listaCamas.size(); i++) {
            System.out.println(listaCamas.get(i).toString());
        }
    }

    //CRUD RESERVA
    public void incluirReserva() {
        int id, idQuarto, idCama, idCliente;
        String dataEntrada, dataSaida;

        System.out.println("Insira a ID da reserva:");
        id = sc.nextInt();

        for (int i = 0; i < listaReservas.size(); i++) {
            if (listaReservas.get(i).getId() == id) {
                System.out.println("Reserva ja esta incluida!");
                return;
            }
        }

        System.out.println("Insira o id do Quarto");
        idQuarto = sc.nextInt();
        System.out.println("Insira o id da Cama:");
        idCama = sc.nextInt();
        System.out.println("Insira o id do Cliente:");
        idCliente = sc.nextInt();
        sc.nextLine(); //limpar o buffer
        System.out.println("Insira a data de entrada (DD/MM/YYYY):");
        dataEntrada = sc.nextLine();
        System.out.println("Insira a data de saida (DD/MM/YYYY):");
        dataSaida = sc.nextLine();

        Reserva r = new Reserva(id, idQuarto, idCama, idCliente, dataEntrada, dataSaida);

        listaReservas.add(r);
        System.out.println("Reserva incluida!");
    }

    public void alterarReserva() {
        int id, opc, achou = 0, idQuarto, idCama, idCliente;
        String dataEntrada, dataSaida;

        System.out.println("Insira a ID da reserva a ser alterada:");
        id = sc.nextInt();

        for (int i = 0; i < listaReservas.size(); i++) {
            if (listaReservas.get(i).getId() == id) {
                achou = 1;
            }
        }

        if (achou == 0) {
            System.out.println("ID nao encontrada!");
            return;
        } else {
            System.out.println("Insira a opção a ser alterada:");
            System.out.println("1-ID do Quarto\n2-ID da Cama\n3-ID do Cliente\n4-Data de Entrada\n5-Data de Saida");
            opc = sc.nextInt();
            sc.nextLine(); //limpar o buffer

            switch(opc) {
                case 1:
                    System.out.println("Insira o novo ID do Quarto:");
                    idQuarto = sc.nextInt();
                    for (int i = 0; i < listaReservas.size(); i++) {
                        if (listaReservas.get(i).getId() == id) {
                            listaReservas.get(i).setIdQuarto(idQuarto);
                            return;
                        }
                    }
                    break;

                case 2:
                    System.out.println("Insira o novo ID da Cama:");
                    idCama = sc.nextInt();
                    for (int i = 0; i < listaReservas.size(); i++) {
                        if (listaReservas.get(i).getId() == id) {
                            listaReservas.get(i).setIdCama(idCama);
                            return;
                        }
                    }
                    break;

                case 3:
                    System.out.println("Insira o novo ID do Cliente:");
                    idCliente = sc.nextInt();
                    for (int i = 0; i < listaReservas.size(); i++) {
                        if (listaReservas.get(i).getId() == id) {
                            listaReservas.get(i).setIdCliente(idCliente);
                            return;
                        }
                    }
                    break;

                case 4:
                    System.out.println("Insira a nova Data de Entrada:");
                    dataEntrada = sc.nextLine();
                    for (int i = 0; i < listaReservas.size(); i++) {
                        if (listaReservas.get(i).getId() == id) {
                            listaReservas.get(i).setDataEntrada(dataEntrada);
                            return;
                        }
                    }
                    break;

                case 5:
                    System.out.println("Insira a nova Data de Saida:");
                    dataSaida = sc.nextLine();
                    for (int i = 0; i < listaReservas.size(); i++) {
                        if (listaReservas.get(i).getId() == id) {
                            listaReservas.get(i).setDataSaida(dataSaida);
                            return;
                        }
                    }
                    break;
            }

            System.out.println("Alteração realizada!");
        }
    }

    public void excluirReserva() {
        int id;

        System.out.println("Digite o ID da reserva a ser excluido:");
        id = sc.nextInt();

        for (int i = 0; i < listaReservas.size(); i++) {
            if (listaReservas.get(i).getId() == id) {
                listaReservas.remove(listaReservas.get(i));
                System.out.println("Reserva removida com sucesso!");
                return;
            }
        }

        System.out.println("Reserva não encontrada na lista!");
    }

    public void listarReservas() {
        for (int i = 0; i < listaReservas.size(); i++) {
            System.out.println(listaReservas.get(i).toString());
        }
    }
}

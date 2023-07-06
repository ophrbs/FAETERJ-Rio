package Albergue;

public class Quarto {
    int id, qtdeCamas, qtdeVagas;
    String nomeQuarto, descricao;
    Boolean temBanheiro;

    //CONSTRUCTOR
    public Quarto(int id, int qtdeCamas, int qtdeVagas, String nomeQuarto, String descricao, Boolean temBanheiro) {
        this.id = id;
        this.qtdeCamas = qtdeCamas;
        this.qtdeCamas = qtdeCamas;
        this.nomeQuarto = nomeQuarto;
        this.descricao = descricao;
        this.temBanheiro = temBanheiro;
    }

    //GETTER AND SETTER
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getQtdeCamas() {
        return qtdeCamas;
    }

    public void setQtdeCamas(int qtdeCamas) {
        if ((qtdeVagas) == 4 || (qtdeVagas) == 12) {
            this.setTemBanheiro(true);
            this.qtdeCamas = qtdeCamas;
        } else if(qtdeVagas == 8) {
            this.setTemBanheiro(false);
            this.qtdeCamas = qtdeCamas;
        }
    }

    public int getQtdeVagas() {
        return qtdeVagas;
    }

    public void setQtdeVagas(int qtdeCamas) {
        this.qtdeVagas = qtdeCamas;
    }

    public String getNomeQuarto() {
        return nomeQuarto;
    }

    public void setNomeQuarto(String nomeQuarto) {
        this.nomeQuarto = nomeQuarto;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public Boolean getTemBanheiro() {
        return temBanheiro;
    }

    public void setTemBanheiro(Boolean temBanheiro) {
        this.temBanheiro = temBanheiro;
    }
}

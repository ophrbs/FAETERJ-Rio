package Albergue;

public class Cama {
    int id, codigoCama;
    Boolean ehBeliche;
    String posicao, descricao;

    //CONSTRUCTOR
    public Cama(int id, int codigoCama, Boolean ehBeliche, String posicao) {
        this.id = id;
        this.codigoCama = codigoCama;
        this.ehBeliche = ehBeliche;
        this.posicao = posicao;

        if(posicao.equals("perto da janela")){
            this.setDescricao("O quarto pega sol de manhã!");
        } else if ((posicao.equals("perto da janela")) && ehBeliche){
            this.setDescricao("O quarto pega sol na cama de baixo!");
        } else {
            this.setDescricao("O quarto é protegido do sol!");
        }
    }

    //GETTER AND SETTER
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getCodigoCama() {
        return codigoCama;
    }

    public void setCodigoCama(int codigoCama) {
        this.codigoCama = codigoCama;
    }

    public Boolean getEhBeliche() {
        return ehBeliche;
    }

    public void setEhBeliche(Boolean ehBeliche) {
        this.ehBeliche = ehBeliche;
    }

    public String getPosicao() {
        return posicao;
    }

    public void setPosicao(String posicao) {
        this.posicao = posicao;

        if(posicao.equals("perto da janela")){
            this.setDescricao("O quarto pega sol de manhã!");
        } else if ((posicao.equals("perto da janela")) && ehBeliche){
            this.setDescricao("O quarto pega sol na cama de baixo!");
        } else {
            this.setDescricao("O quarto é protegido do sol!");
        }
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }
}

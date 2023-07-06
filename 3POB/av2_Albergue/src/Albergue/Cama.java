package Albergue;

public class Cama {
    int id, codigoCama;
    Boolean ehBeliche;
    String posicao, descricao;

    //CONSTRUCTOR
    public Cama(int id, int codigoCama, Boolean ehBeliche, String posicao, String descricao) {
        this.id = id;
        this.codigoCama = codigoCama;
        this.ehBeliche = ehBeliche;
        this.posicao = posicao;
        this.descricao = descricao;

        if(posicao.equals("perto da janela")){
            System.out.println("O quarto pega sol de manhã!");
        } else if ((posicao.equals("perto da janela")) && ehBeliche){
            System.out.println("O quarto pega sol na cama de baixo!");
        } else {
            System.out.println("O quarto é protegido do sol");
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
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }
}
